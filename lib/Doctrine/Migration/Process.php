<?php
/*
 *  $Id: Process.php 1080 2007-02-10 18:17:08Z jwage $
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
 * Doctrine_Migration_Process.
 *
 * @see        www.doctrine-project.org
 *
 * @author      Jonathan H. Wage <jwage@mac.com>
 */
class Doctrine_Migration_Process
{
    protected $_migration;

    public function __construct(Doctrine_Migration $migration)
    {
        $this->_migration = $migration;
    }

    public function getConnection()
    {
        return $this->_migration->getConnection();
    }

    /**
     * Process a created table change.
     *
     * @param string $table Table definition
     */
    public function processCreatedTable(array $table)
    {
        $this->getConnection()->export->createTable($table['tableName'], $table['fields'], $table['options']);
    }

    /**
     * Process a dropped table change.
     *
     * @param array $table Table definition
     */
    public function processDroppedTable(array $table)
    {
        $this->getConnection()->export->dropTable($table['tableName']);
    }

    /**
     * Process a renamed table change.
     *
     * @param array $table Renamed table definition
     */
    public function processRenamedTable(array $table)
    {
        $this->getConnection()->export->alterTable($table['oldTableName'], ['name' => $table['newTableName']]);
    }

    /**
     * Process a created column change.
     *
     * @param array $column Column definition
     */
    public function processCreatedColumn(array $column)
    {
        $this->getConnection()->export->alterTable($column['tableName'], ['add' => [$column['columnName'] => $column]]);
    }

    /**
     * Process a dropped column change.
     *
     * @param array $column Column definition
     */
    public function processDroppedColumn(array $column)
    {
        $this->getConnection()->export->alterTable($column['tableName'], ['remove' => [$column['columnName'] => []]]);
    }

    /**
     * Process a renamed column change.
     *
     * @param array $column Column definition
     */
    public function processRenamedColumn(array $column)
    {
        $columnList = $this->getConnection()->import->listTableColumns($column['tableName']);
        if (isset($columnList[$column['oldColumnName']])) {
            $this->getConnection()->export->alterTable($column['tableName'], ['rename' => [$column['oldColumnName'] => ['name' => $column['newColumnName'], 'definition' => $columnList[$column['oldColumnName']]]]]);
        }
    }

    /**
     * Process a changed column change.
     *
     * @param array $column Changed column definition
     */
    public function processChangedColumn(array $column)
    {
        $options = [];
        $options = $column['options'];
        $options['type'] = $column['type'];

        $this->getConnection()->export->alterTable($column['tableName'], ['change' => [$column['columnName'] => ['definition' => $options]]]);
    }

    /**
     * Process a created index change.
     *
     * @param array $index Index definition
     */
    public function processCreatedIndex(array $index)
    {
        $this->getConnection()->export->createIndex($index['tableName'], $index['indexName'], $index['definition']);
    }

    /**
     * Process a dropped index change.
     *
     * @param array $index Index definition
     */
    public function processDroppedIndex(array $index)
    {
        $this->getConnection()->export->dropIndex($index['tableName'], $index['indexName']);
    }

    /**
     * Process a created constraint change.
     *
     * @param array $constraint Constraint definition
     */
    public function processCreatedConstraint(array $constraint)
    {
        $this->getConnection()->export->createConstraint($constraint['tableName'], $constraint['constraintName'], $constraint['definition']);
    }

    /**
     * Process a dropped constraint change.
     *
     * @param array $constraint Constraint definition
     */
    public function processDroppedConstraint(array $constraint)
    {
        $this->getConnection()->export->dropConstraint($constraint['tableName'], $constraint['constraintName'], isset($constraint['definition']['primary']) && $constraint['definition']['primary']);
    }

    /**
     * Process a created foreign key change.
     *
     * @param array $foreignKey Foreign key definition
     */
    public function processCreatedForeignKey(array $foreignKey)
    {
        $this->getConnection()->export->createForeignKey($foreignKey['tableName'], $foreignKey['definition']);
    }

    /**
     * Process a dropped foreign key change.
     */
    public function processDroppedForeignKey(array $foreignKey)
    {
        $this->getConnection()->export->dropForeignKey($foreignKey['tableName'], $foreignKey['definition']['name']);
    }
}
