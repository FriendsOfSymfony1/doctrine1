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
 * Doctrine_Export_Mssql_TestCase.
 *
 * @author      Konsta Vesterinen <kvesteri@cc.hut.fi>
 *
 * @category    Object Relational Mapping
 *
 * @see        www.doctrine-project.org
 *
 * @internal
 *
 * @coversNothing
 */
class Doctrine_Export_Mssql_TestCase extends Doctrine_UnitTestCase
{
    public function prepareTables()
    {
    }

    public function prepareData()
    {
    }

    public function testAlterTableName()
    {
        $this->export->alterTable('user', [
            'name' => 'userlist',
        ]);

        $this->assertEqual($this->adapter->pop(), "EXECUTE sp_RENAME '[user]', 'userlist';");
    }

    public function testAlterTableRename()
    {
        $this->export->alterTable('user', [
            'rename' => [
                'sex' => [
                    'name' => 'gender',
                    'definition' => [
                        'type' => 'text',
                        'length' => 1,
                        'default' => 'M',
                    ],
                ],
            ],
        ]);

        $this->assertEqual($this->adapter->pop(), "EXECUTE sp_RENAME '[user].[sex]', 'gender', 'COLUMN';");
    }

    public function testAlterTableRemove()
    {
        $this->export->alterTable('user', [
            'remove' => [
                'file_limit' => [],
                'time_limit' => [],
            ],
        ]);

        $this->assertEqual($this->adapter->pop(), 'ALTER TABLE user DROP COLUMN file_limit, time_limit;');
    }

    public function testAlterTableChange()
    {
        $this->export->alterTable('user', [
            'change' => [
                'name' => [
                    'length' => '20',
                    'definition' => [
                        'type' => 'text',
                        'length' => '20',
                    ],
                ],
            ],
        ]);

        $this->assertEqual($this->adapter->pop(), 'ALTER TABLE user ALTER COLUMN name VARCHAR(20) NULL;');
    }

    public function testAlterTableThrowsExceptionWithoutValidTableName()
    {
        try {
            $this->export->alterTable(0, [], []);

            $this->fail();
        } catch (Doctrine_Export_Exception $e) {
            $this->pass();
        }
    }

    public function testAlterTableMultipleColumnAlterationsRequireMultipleAlterTableQueries()
    {
        $this->export->alterTable('user', [
            'change' => [
                'name' => [
                    'length' => '20',
                    'definition' => [
                        'type' => 'text',
                        'length' => '20',
                    ],
                ],
                'name2' => [
                    'length' => '20',
                    'definition' => [
                        'type' => 'text',
                        'length' => '20',
                    ],
                ],
            ],
        ]);

        $this->assertEqual($this->adapter->pop(), 'ALTER TABLE user ALTER COLUMN name VARCHAR(20) NULL; ALTER TABLE user ALTER COLUMN name2 VARCHAR(20) NULL;');
    }

    public function testCreateTableExecutesSql()
    {
        $name = 'mytable';

        $fields = ['id' => ['type' => 'integer', 'unsigned' => 1]];

        $this->export->createTable($name, $fields);

        $this->assertEqual($this->adapter->pop(), 'CREATE TABLE mytable (id BIGINT NULL)');
    }

    public function testCreateTableSupportsMultiplePks()
    {
        $name = 'mytable';
        $fields = ['name' => ['type' => 'char', 'length' => 10, 'notnull' => true],
            'type' => ['type' => 'integer', 'length' => 3, 'notnull' => true]];

        $options = ['primary' => ['name', 'type']];
        $this->export->createTable($name, $fields, $options);

        $this->assertEqual($this->adapter->pop(), 'CREATE TABLE mytable (name CHAR(10) NOT NULL, type INT NOT NULL, PRIMARY KEY([name], [type]))');
    }

    public function testCreateTableSupportsAutoincPks()
    {
        $name = 'mytable';

        $fields = ['id' => ['type' => 'integer', 'notnull' => true, 'unsigned' => 1, 'autoincrement' => true]];
        $options = ['primary' => ['id']];

        $this->export->createTable($name, $fields, $options);

        $this->assertEqual($this->adapter->pop(), 'CREATE TABLE mytable (id BIGINT NOT NULL identity, PRIMARY KEY([id]))');
    }

    public function testCreateTableSupportsForeignKeys()
    {
        $name = 'mytable';

        $fields = ['id' => ['type' => 'boolean', 'primary' => true, 'notnull' => true],
            'foreignKey' => ['type' => 'integer'],
        ];
        $options = ['foreignKeys' => [['local' => 'foreignKey',
            'foreign' => 'id',
            'foreignTable' => 'sometable']],
        ];

        $sql = $this->export->createTableSql($name, $fields, $options);

        $this->assertEqual(count($sql), 2);
        $this->assertEqual($sql[0], 'CREATE TABLE mytable (id BIT NOT NULL, foreignKey INT NULL, PRIMARY KEY([id]))');
        $this->assertEqual($sql[1], 'ALTER TABLE [mytable] ADD FOREIGN KEY ([foreignKey]) REFERENCES [sometable]([id])');
    }

    public function testCreateDatabaseExecutesSql()
    {
        $this->export->createDatabase('db');

        $this->assertEqual($this->adapter->pop(), 'CREATE DATABASE db');
    }

    public function testDropDatabaseExecutesSql()
    {
        $this->export->dropDatabase('db');

        $this->assertEqual($this->adapter->pop(), 'DROP DATABASE db');
    }

    public function testDropIndexExecutesSql()
    {
        $this->export->dropIndex('sometable', 'relevancy');

        $this->assertEqual($this->adapter->pop(), 'DROP INDEX [relevancy_idx] ON [sometable]');
    }

    public function testCreateTableSupportsIndexesUsingSingleFieldString()
    {
        $fields = ['id' => ['type' => 'integer', 'unsigned' => 1, 'autoincrement' => true, 'unique' => true, 'notnull' => true],
            'name' => ['type' => 'string', 'length' => 4],
        ];

        $options = ['primary' => ['id'],
            'indexes' => ['myindex' => [
                'fields' => ['name']]],
        ];

        $this->export->createTable('sometable', $fields, $options);
        $this->assertEqual($this->adapter->pop(), 'CREATE INDEX [myindex] ON [sometable] ([name])');
        $this->assertEqual($this->adapter->pop(), 'CREATE TABLE sometable (id BIGINT NOT NULL identity, name VARCHAR(4) NULL, PRIMARY KEY([id]))');
    }

    public function testCreateTableSupportsCompoundForeignKeys()
    {
        $name = 'mytable';

        $fields = ['id' => ['type' => 'boolean', 'primary' => true, 'notnull' => true],
            'lang' => ['type' => 'integer', 'primary' => true, 'notnull' => true],
        ];
        $options = ['foreignKeys' => [['local' => ['id', 'lang'],
            'foreign' => ['id', 'lang'],
            'foreignTable' => 'sometable']],
        ];

        $sql = $this->export->createTableSql($name, $fields, $options);

        $this->assertEqual(count($sql), 2);
        $this->assertEqual($sql[0], 'CREATE TABLE mytable (id BIT NOT NULL, lang INT NOT NULL, PRIMARY KEY([id], [lang]))');
        $this->assertEqual($sql[1], 'ALTER TABLE [mytable] ADD FOREIGN KEY ([id], [lang]) REFERENCES [sometable]([id], [lang])');
    }
}
