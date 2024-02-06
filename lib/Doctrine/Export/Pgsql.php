<?php
/*
 *  $Id: Pgsql.php 7680 2010-08-19 14:08:28Z lsmith $
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
 * Doctrine_Export_Pgsql.
 *
 * @author      Konsta Vesterinen <kvesteri@cc.hut.fi>
 * @author      Lukas Smith <smith@pooteeweet.org> (PEAR MDB2 library)
 *
 * @see        www.doctrine-project.org
 */
class Doctrine_Export_Pgsql extends Doctrine_Export
{
    public $tmpConnectionDatabase = 'postgres';

    /**
     * createDatabaseSql.
     *
     * @param string $name
     */
    public function createDatabaseSql($name)
    {
        return 'CREATE DATABASE '.$this->conn->quoteIdentifier($name);
    }

    /**
     * drop an existing database.
     *
     * @param  string       $name name of the database that should be dropped
     * @throws PDOException
     */
    public function dropDatabaseSql($name)
    {
        return 'DROP DATABASE '.$this->conn->quoteIdentifier($name);
    }

    /**
     * getAdvancedForeignKeyOptions
     * Return the FOREIGN KEY query section dealing with non-standard options
     * as MATCH, INITIALLY DEFERRED, ON UPDATE, ...
     *
     * @param  array  $definition foreign key definition
     * @return string
     */
    public function getAdvancedForeignKeyOptions(array $definition)
    {
        $query = '';
        if (isset($definition['match'])) {
            $query .= ' MATCH '.$definition['match'];
        }
        if (isset($definition['onUpdate'])) {
            $query .= ' ON UPDATE '.$definition['onUpdate'];
        }
        if (isset($definition['onDelete'])) {
            $query .= ' ON DELETE '.$definition['onDelete'];
        }
        if (isset($definition['deferrable'])) {
            $query .= ' DEFERRABLE';
        } else {
            $query .= ' NOT DEFERRABLE';
        }
        if (isset($definition['deferred'])) {
            $query .= ' INITIALLY DEFERRED';
        } else {
            $query .= ' INITIALLY IMMEDIATE';
        }

        return $query;
    }

    /**
     * generates the sql for altering an existing table on postgresql.
     *
     * @param string $name    name of the table that is intended to be changed
     * @param array  $changes associative array that contains the details of each type      *
     * @param bool   $check   indicates whether the function should just check if the DBMS driver
     *                        can perform the requested table alterations if the value is true or
     *                        actually perform them otherwise
     *
     * @see Doctrine_Export::alterTable()
     *
     * @return array
     */
    public function alterTableSql($name, array $changes, $check = false)
    {
        foreach ($changes as $changeName => $change) {
            switch ($changeName) {
                case 'add':
                case 'remove':
                case 'change':
                case 'name':
                case 'rename':
                    break;
                default:
                    throw new Doctrine_Export_Exception('change type "'.$changeName.'\" not yet supported');
            }
        }

        if ($check) {
            return true;
        }

        $sql = [];

        if (isset($changes['add']) && is_array($changes['add'])) {
            foreach ($changes['add'] as $fieldName => $field) {
                $query = 'ADD '.$this->getDeclaration($fieldName, $field);
                $sql[] = 'ALTER TABLE '.$this->conn->quoteIdentifier($name, true).' '.$query;
            }
        }

        if (isset($changes['remove']) && is_array($changes['remove'])) {
            foreach ($changes['remove'] as $fieldName => $field) {
                $fieldName = $this->conn->quoteIdentifier($fieldName, true);
                $query = 'DROP '.$fieldName;
                $sql[] = 'ALTER TABLE '.$this->conn->quoteIdentifier($name, true).' '.$query;
            }
        }

        if (isset($changes['change']) && is_array($changes['change'])) {
            foreach ($changes['change'] as $fieldName => $field) {
                $fieldName = $this->conn->quoteIdentifier($fieldName, true);
                if (isset($field['definition']['type'])) {
                    $serverInfo = $this->conn->getServerVersion();

                    if (is_array($serverInfo) && $serverInfo['major'] < 8) {
                        throw new Doctrine_Export_Exception('changing column type for "'.$field['type'].'\" requires PostgreSQL 8.0 or above');
                    }
                    $query = 'ALTER '.$fieldName.' TYPE '.$this->conn->dataDict->getNativeDeclaration($field['definition']);
                    $sql[] = 'ALTER TABLE '.$this->conn->quoteIdentifier($name, true).' '.$query;
                }
                if (array_key_exists('default', $field['definition'])) {
                    $query = 'ALTER '.$fieldName.' SET DEFAULT '.$this->conn->quote($field['definition']['default'], $field['definition']['type']);
                    $sql[] = 'ALTER TABLE '.$this->conn->quoteIdentifier($name, true).' '.$query;
                }
                if (isset($field['definition']['notnull'])) {
                    $query = 'ALTER '.$fieldName.' '.($field['definition']['notnull'] ? 'SET' : 'DROP').' NOT NULL';
                    $sql[] = 'ALTER TABLE '.$this->conn->quoteIdentifier($name, true).' '.$query;
                }
            }
        }

        if (isset($changes['rename']) && is_array($changes['rename'])) {
            foreach ($changes['rename'] as $fieldName => $field) {
                $fieldName = $this->conn->quoteIdentifier($fieldName, true);
                $sql[] = 'ALTER TABLE '.$this->conn->quoteIdentifier($name, true).' RENAME COLUMN '.$fieldName.' TO '.$this->conn->quoteIdentifier($field['name'], true);
            }
        }

        $name = $this->conn->quoteIdentifier($name, true);
        if (isset($changes['name'])) {
            $changeName = $this->conn->quoteIdentifier($changes['name'], true);
            $sql[] = 'ALTER TABLE '.$this->conn->quoteIdentifier($name, true).' RENAME TO '.$changeName;
        }

        return $sql;
    }

    /**
     * alter an existing table.
     *
     * @param string $name    name of the table that is intended to be changed
     * @param array  $changes associative array that contains the details of each type
     *                        of change that is intended to be performed. The types of
     *                        changes that are currently supported are defined as follows:
     *
     *                             name
     *
     *                                New name for the table.
     *
     *                            add
     *
     *                                Associative array with the names of fields to be added as
     *                                 indexes of the array. The value of each entry of the array
     *                                 should be set to another associative array with the properties
     *                                 of the fields to be added. The properties of the fields should
     *                                 be the same as defined by the Metabase parser.
     * @param  bool                          $check indicates whether the function should just check if the DBMS driver
     *                                              can perform the requested table alterations if the value is true or
     *                                              actually perform them otherwise
     * @return bool
     * @throws Doctrine_Connection_Exception
     */
    public function alterTable($name, array $changes, $check = false)
    {
        $sql = $this->alterTableSql($name, $changes, $check);
        foreach ($sql as $query) {
            $this->conn->exec($query);
        }

        return true;
    }

    /**
     * return RDBMS specific create sequence statement.
     *
     * @param  string                        $start   start value of the sequence; default is 1
     * @param  array                         $options An associative array of table options:
     *                                                array(
     *                                                'comment' => 'Foo',
     *                                                'charset' => 'utf8',
     *                                                'collate' => 'utf8_unicode_ci',
     *                                                );
     * @return string
     * @throws Doctrine_Connection_Exception if something fails at database level
     */
    public function createSequenceSql($sequenceName, $start = 1, array $options = [])
    {
        $sequenceName = $this->conn->quoteIdentifier($this->conn->formatter->getSequenceName($sequenceName), true);

        return 'CREATE SEQUENCE '.$sequenceName.' INCREMENT 1'.
                    ($start < 1 ? ' MINVALUE '.$start : '').' START '.$start;
    }

    /**
     * drop existing sequence.
     *
     * @param string $sequenceName name of the sequence to be dropped
     */
    public function dropSequenceSql($sequenceName)
    {
        $sequenceName = $this->conn->quoteIdentifier($this->conn->formatter->getSequenceName($sequenceName), true);

        return 'DROP SEQUENCE '.$sequenceName;
    }

    /**
     * Creates a table.
     *
     * @param  unknown_type $name
     * @return unknown
     */
    public function createTableSql($name, array $fields, array $options = [])
    {
        if (!$name) {
            throw new Doctrine_Export_Exception('no valid table name specified');
        }

        if (empty($fields)) {
            throw new Doctrine_Export_Exception('no fields specified for table '.$name);
        }

        $queryFields = $this->getFieldDeclarationList($fields);

        if (isset($options['primary']) && !empty($options['primary'])) {
            $keyColumns = array_values($options['primary']);
            $keyColumns = array_map([$this->conn, 'quoteIdentifier'], $keyColumns);
            $queryFields .= ', PRIMARY KEY('.implode(', ', $keyColumns).')';
        }

        $query = 'CREATE TABLE '.$this->conn->quoteIdentifier($name, true).' ('.$queryFields;

        if ($check = $this->getCheckDeclaration($fields)) {
            $query .= ', '.$check;
        }

        if (isset($options['checks']) && $check = $this->getCheckDeclaration($options['checks'])) {
            $query .= ', '.$check;
        }

        $query .= ')';

        $sql[] = $query;

        if (isset($options['indexes']) && !empty($options['indexes'])) {
            foreach ($options['indexes'] as $index => $definition) {
                $sql[] = $this->createIndexSql($name, $index, $definition);
            }
        }

        if (isset($options['foreignKeys'])) {
            foreach ((array) $options['foreignKeys'] as $k => $definition) {
                if (is_array($definition)) {
                    $sql[] = $this->createForeignKeySql($name, $definition);
                }
            }
        }
        if (isset($options['sequenceName'])) {
            $sql[] = $this->createSequenceSql($options['sequenceName']);
        }

        return $sql;
    }

    /**
     * Get the stucture of a field into an array.
     *
     * @param string $table      name of the table on which the index is to be created
     * @param string $name       name of the index to be created
     * @param array  $definition associative array that defines properties of the index to be created
     *
     * @see Doctrine_Export::createIndex()
     *
     * @return string
     */
    public function createIndexSql($table, $name, array $definition)
    {
        $query = parent::createIndexSql($table, $name, $definition);
        if (isset($definition['where'])) {
            return $query.' WHERE '.$definition['where'];
        }

        return $query;
    }
}
