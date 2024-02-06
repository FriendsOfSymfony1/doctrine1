<?php
/*
 *  $Id$
 *
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 * "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR
 * A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT
 * OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL,
 * SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT
 * LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE,
 * DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY
 * THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
 * (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE
 * OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 *
 * This software consists of voluntary contributions made by many individuals
 * and is licensed under the LGPL. For more information, see
 * <http://www.doctrine-project.org>.
 */

/**
 * Doctrine_Search.
 *
 * @author      Konsta Vesterinen <kvesteri@cc.hut.fi>
 *
 * @see        www.doctrine-project.org
 */
class Doctrine_Search extends Doctrine_Record_Generator
{
    public const INDEX_FILES = 0;

    public const INDEX_TABLES = 1;

    protected $_options = ['generateFiles' => false,
        'analyzer' => 'Doctrine_Search_Analyzer_Standard',
        'analyzer_options' => [],
        'type' => self::INDEX_TABLES,
        'className' => '%CLASS%Index',
        'generatePath' => false,
        'table' => null,
        'batchUpdates' => false,
        'pluginTable' => false,
        'fields' => [],
        'connection' => null,
        'children' => [],
        'cascadeDelete' => true,
        'appLevelDelete' => false];

    /**
     * __construct.
     */
    public function __construct(array $options)
    {
        $this->_options = Doctrine_Lib::arrayDeepMerge($this->_options, $options);

        if (!isset($this->_options['analyzer'])) {
            $this->_options['analyzer'] = 'Doctrine_Search_Analyzer_Standard';
        }

        if (!isset($this->_options['analyzer_options'])) {
            $this->_options['analyzer_options'] = [];
        }

        $this->_options['analyzer'] = new $this->_options['analyzer']($this->_options['analyzer_options']);
    }

    public function buildTable()
    {
        $result = parent::buildTable();

        if (!isset($this->_options['connection'])) {
            $manager = Doctrine_Manager::getInstance();
            $this->_options['connection'] = $manager->getConnectionForComponent($this->_options['table']->getComponentName());
            $manager->bindComponent($this->_options['className'], $this->_options['connection']->getName());
        }

        return $result;
    }

    /**
     * Searchable keyword search.
     *
     * @param  string         $string Keyword string to search for
     * @param  Doctrine_Query $query  Query object to alter. Adds where condition to limit the results using the search index
     * @return array          ids and relevancy
     */
    public function search($string, $query = null)
    {
        $q = new Doctrine_Search_Query($this->_table);

        if ($query instanceof Doctrine_Query) {
            $q->query($string, false);

            $newQuery = $query->copy();
            $query->getSqlQuery();
            $key = (array) $this->getOption('table')->getIdentifier();
            $newQuery->addWhere($query->getRootAlias().'.'.current($key).' IN (SQL:'.$q->getSqlQuery().')', $q->getParams());

            return $newQuery;
        }
        if (!isset($this->_options['connection'])) {
            $this->_options['connection'] = $this->_table->getConnection();
        }
        $q->query($string);

        return $this->_options['connection']->fetchAll($q->getSqlQuery(), $q->getParams());
    }

    /**
     * analyze a text in the encoding format.
     *
     * @param string $text
     * @param string $encoding
     */
    public function analyze($text, $encoding = null)
    {
        return $this->_options['analyzer']->analyze($text, $encoding);
    }

    /**
     * updateIndex
     * updates the index.
     *
     * @param  mixed|null $encoding
     * @return int
     */
    public function updateIndex(array $data, $encoding = null)
    {
        $this->initialize($this->_options['table']);

        $fields = $this->getOption('fields');
        $class = $this->getOption('className');
        $name = $this->getOption('table')->getComponentName();
        $conn = $this->getOption('table')->getConnection();
        $identifier = $this->_options['table']->getIdentifier();

        $q = Doctrine_Core::getTable($class)
            ->createQuery()
            ->delete()
        ;
        foreach ((array) $identifier as $id) {
            $q->addWhere($id.' = ?', [$data[$id]]);
        }
        $q->execute();

        if (true === $this->_options['batchUpdates']) {
            $index = new $class();

            foreach ((array) $this->_options['table']->getIdentifier() as $id) {
                $index->{$id} = $data[$id];
            }

            $index->save();
        } else {
            foreach ($fields as $field) {
                $value = $data[$field] ?? null;

                $terms = $this->analyze($value, $encoding);

                foreach ($terms as $pos => $term) {
                    $index = new $class();

                    $index->keyword = $term;
                    $index->position = $pos;
                    $index->field = $field;
                    foreach ((array) $this->_options['table']->getIdentifier() as $id) {
                        $index->{$id} = $data[$id];
                    }

                    $index->save();
                    $index->free(true);
                }
            }
        }
    }

    /**
     * readTableData.
     *
     * @param  mixed|null          $limit
     * @param  mixed|null          $offset
     * @return Doctrine_Collection The collection of results
     */
    public function readTableData($limit = null, $offset = null)
    {
        $this->initialize($this->_options['table']);

        $conn = $this->_options['table']->getConnection();
        $tableName = $this->_options['table']->getTableName();
        $id = current($this->_options['table']->getIdentifierColumnNames());
        $tableId = current($this->_table->getIdentifierColumnNames());

        $query = 'SELECT * FROM '.$conn->quoteIdentifier($tableName)
               .' WHERE '.$conn->quoteIdentifier($id)
               .' IN (SELECT '.$conn->quoteIdentifier($tableId)
               .' FROM '.$conn->quoteIdentifier($this->_table->getTableName())
               .' WHERE keyword = \'\') OR '.$conn->quoteIdentifier($id)
               .' NOT IN (SELECT '.$conn->quoteIdentifier($tableId)
               .' FROM '.$conn->quoteIdentifier($this->_table->getTableName()).')';

        $query = $conn->modifyLimitQuery($query, $limit, $offset);

        return $conn->fetchAll($query);
    }

    /**
     * batchUpdateIndex.
     *
     * @param mixed|null $encoding
     * @param mixed|null $limit
     * @param mixed|null $offset
     */
    public function batchUpdateIndex($limit = null, $offset = null, $encoding = null)
    {
        $table = $this->_options['table'];

        $this->initialize($table);

        $id = $table->getIdentifierColumnNames();
        $class = $this->_options['className'];
        $fields = $this->_options['fields'];
        $conn = $this->_options['table']->getConnection();

        for ($i = 0; $i < count($fields); ++$i) {
            $fields[$i] = $table->getColumnName($fields[$i], $fields[$i]);
        }

        $rows = $this->readTableData($limit, $offset);

        $ids = [];
        foreach ($rows as $row) {
            foreach ($id as $idcol) {
                $ids[] = $row[$idcol];
            }
        }

        if (count($ids) > 0) {
            $sql = 'DELETE FROM '.$conn->quoteIdentifier($this->_table->getTableName());

            if (1 == count($id)) {
                $placeholders = str_repeat('?, ', count($ids));
                $placeholders = substr($placeholders, 0, strlen($placeholders) - 2);
                $sql .= ' WHERE '.$conn->quoteIdentifier($table->getIdentifier()).' IN ('.substr($placeholders, 0).')';
            } else {
                // composite primary key
                $placeholders = '';
                foreach ($table->getIdentifier() as $id) {
                    $placeholders .= $conn->quoteIdentifier($id).' = ? AND ';
                }
                $placeholders = '('.substr($placeholders, 0, strlen($placeholders) - 5).') OR ';
                $placeholders = str_repeat($placeholders, count($rows));
                $placeholders = substr($placeholders, 0, strlen($placeholders) - 4);
                $sql .= ' WHERE '.$placeholders;
            }

            $conn->exec($sql, $ids);
        }

        foreach ($rows as $row) {
            $conn->beginTransaction();
            try {
                foreach ($fields as $field) {
                    $data = $row[$field];

                    $terms = $this->analyze($data, $encoding);

                    foreach ($terms as $pos => $term) {
                        $index = new $class();

                        $index->keyword = $term;
                        $index->position = $pos;
                        $index->field = $field;

                        foreach ((array) $table->getIdentifier() as $identifier) {
                            $index->{$identifier} = $row[$table->getColumnName($identifier, $identifier)];
                        }

                        $index->save();
                        $index->free(true);
                    }
                }
                $conn->commit();
            } catch (Doctrine_Exception $e) {
                $conn->rollback();
                throw $e;
            }
        }
    }

    /**
     * buildDefinition.
     */
    public function setTableDefinition()
    {
        if (!isset($this->_options['table'])) {
            throw new Doctrine_Record_Exception("Unknown option 'table'.");
        }

        $componentName = $this->_options['table']->getComponentName();

        $className = $this->getOption('className');

        $autoLoad = (bool) $this->_options['generateFiles'];
        if (class_exists($className, $autoLoad)) {
            return false;
        }

        // move any columns currently in the primary key to the end
        // So that 'keyword' is the first field in the table
        $previousIdentifier = [];
        foreach ($this->_table->getIdentifier() as $name) {
            $previousIdentifier[$name] = $this->_table->getColumnDefinition($name);
            $this->_table->removeColumn($name);
        }

        $columns = ['keyword' => ['type' => 'string',
            'length' => 200,
            'primary' => true,
        ],
            'field' => ['type' => 'string',
                'length' => 50,
                'primary' => true],
            'position' => ['type' => 'integer',
                'length' => 8,
                'primary' => true,
            ]];

        $this->hasColumns($columns);
        $this->hasColumns($previousIdentifier);
    }
}
