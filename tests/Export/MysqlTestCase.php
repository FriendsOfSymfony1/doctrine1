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
 * Doctrine_Export_Mysql_TestCase.
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
class Doctrine_Export_Mysql_TestCase extends Doctrine_UnitTestCase
{
    public function prepareTables()
    {
    }

    public function prepareData()
    {
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

    public function testCreateTableExecutesSql()
    {
        $name = 'mytable';

        $fields = ['id' => ['type' => 'integer', 'unsigned' => 1]];
        $options = ['type' => 'MYISAM'];

        $this->export->createTable($name, $fields, $options);

        $this->assertEqual($this->adapter->pop(), 'CREATE TABLE mytable (id INT UNSIGNED) ENGINE = MYISAM');
    }

    public function testCreateTableSupportsDefaultTableType()
    {
        $name = 'mytable';

        $fields = ['id' => ['type' => 'integer', 'unsigned' => 1]];

        $this->export->createTable($name, $fields);

        // INNODB is the default type
        $this->assertEqual($this->adapter->pop(), 'CREATE TABLE mytable (id INT UNSIGNED) ENGINE = INNODB');
    }

    public function testCreateTableSupportsMultiplePks()
    {
        $name = 'mytable';
        $fields = ['name' => ['type' => 'char', 'length' => 10],
            'type' => ['type' => 'integer', 'length' => 3]];

        $options = ['primary' => ['name', 'type']];
        $this->export->createTable($name, $fields, $options);

        $this->assertEqual($this->adapter->pop(), 'CREATE TABLE mytable (name CHAR(10), type MEDIUMINT, PRIMARY KEY(name, type)) ENGINE = INNODB');
    }

    public function testCreateTableSupportsAutoincPks()
    {
        $name = 'mytable';

        $fields = ['id' => ['type' => 'integer', 'unsigned' => 1, 'autoincrement' => true]];
        $options = ['primary' => ['id'],
            'type' => 'INNODB'];

        $this->export->createTable($name, $fields, $options);

        $this->assertEqual($this->adapter->pop(), 'CREATE TABLE mytable (id INT UNSIGNED AUTO_INCREMENT, PRIMARY KEY(id)) ENGINE = INNODB');
    }

    public function testCreateTableSupportsCharType()
    {
        $name = 'mytable';

        $fields = ['id' => ['type' => 'char', 'length' => 3]];
        $options = ['type' => 'MYISAM'];

        $this->export->createTable($name, $fields, $options);

        $this->assertEqual($this->adapter->pop(), 'CREATE TABLE mytable (id CHAR(3)) ENGINE = MYISAM');
    }

    public function testCreateTableSupportsCharType2()
    {
        $name = 'mytable';

        $fields = ['id' => ['type' => 'char']];
        $options = ['type' => 'MYISAM'];

        $this->export->createTable($name, $fields, $options);

        $this->assertEqual($this->adapter->pop(), 'CREATE TABLE mytable (id CHAR(255)) ENGINE = MYISAM');
    }

    public function testCreateTableSupportsVarcharType()
    {
        $name = 'mytable';

        $fields = ['id' => ['type' => 'varchar', 'length' => '100']];
        $options = ['type' => 'MYISAM'];

        $this->export->createTable($name, $fields, $options);

        $this->assertEqual($this->adapter->pop(), 'CREATE TABLE mytable (id VARCHAR(100)) ENGINE = MYISAM');
    }

    public function testCreateTableSupportsIntegerType()
    {
        $name = 'mytable';

        $fields = ['id' => ['type' => 'integer', 'length' => '10']];
        $options = ['type' => 'MYISAM'];

        $this->export->createTable($name, $fields, $options);

        $this->assertEqual($this->adapter->pop(), 'CREATE TABLE mytable (id BIGINT) ENGINE = MYISAM');
    }

    public function testCreateTableSupportsBlobType()
    {
        $name = 'mytable';

        $fields = ['content' => ['type' => 'blob']];
        $options = ['type' => 'MYISAM'];

        $this->export->createTable($name, $fields, $options);

        $this->assertEqual($this->adapter->pop(), 'CREATE TABLE mytable (content LONGBLOB) ENGINE = MYISAM');
    }

    public function testCreateTableSupportsBlobType2()
    {
        $name = 'mytable';

        $fields = ['content' => ['type' => 'blob', 'length' => 2000]];
        $options = ['type' => 'MYISAM'];

        $this->export->createTable($name, $fields, $options);

        $this->assertEqual($this->adapter->pop(), 'CREATE TABLE mytable (content BLOB) ENGINE = MYISAM');
    }

    public function testCreateTableSupportsBooleanType()
    {
        $name = 'mytable';

        $fields = ['id' => ['type' => 'boolean']];
        $options = ['type' => 'MYISAM'];

        $this->export->createTable($name, $fields, $options);

        $this->assertEqual($this->adapter->pop(), 'CREATE TABLE mytable (id TINYINT(1)) ENGINE = MYISAM');
    }

    public function testCreateTableSupportsForeignKeys()
    {
        $name = 'mytable';

        $fields = ['id' => ['type' => 'boolean', 'primary' => true],
            'foreignKey' => ['type' => 'integer'],
        ];
        $options = ['type' => 'INNODB',
            'foreignKeys' => [['local' => 'foreignKey',
                'foreign' => 'id',
                'foreignTable' => 'sometable']],
        ];

        $sql = $this->export->createTableSql($name, $fields, $options);

        $this->assertEqual($sql[0], 'CREATE TABLE mytable (id TINYINT(1), foreignKey INT, INDEX foreignKey_idx (foreignKey)) ENGINE = INNODB');
        $this->assertEqual($sql[1], 'ALTER TABLE mytable ADD FOREIGN KEY (foreignKey) REFERENCES sometable(id)');
    }

    public function testForeignKeyIdentifierQuoting()
    {
        $this->conn->setAttribute(Doctrine_Core::ATTR_QUOTE_IDENTIFIER, true);

        $name = 'mytable';

        $fields = ['id' => ['type' => 'boolean', 'primary' => true],
            'foreignKey' => ['type' => 'integer'],
        ];
        $options = ['type' => 'INNODB',
            'foreignKeys' => [['local' => 'foreignKey',
                'foreign' => 'id',
                'foreignTable' => 'sometable']],
        ];

        $sql = $this->export->createTableSql($name, $fields, $options);

        $this->assertEqual($sql[0], 'CREATE TABLE `mytable` (`id` TINYINT(1), `foreignKey` INT, INDEX `foreignKey_idx` (`foreignKey`)) ENGINE = INNODB');
        $this->assertEqual($sql[1], 'ALTER TABLE `mytable` ADD FOREIGN KEY (`foreignKey`) REFERENCES `sometable`(`id`)');

        $this->conn->setAttribute(Doctrine_Core::ATTR_QUOTE_IDENTIFIER, false);
    }

    public function testIndexIdentifierQuoting()
    {
        $this->conn->setAttribute(Doctrine_Core::ATTR_QUOTE_IDENTIFIER, true);

        $fields = ['id' => ['type' => 'integer', 'unsigned' => 1, 'autoincrement' => true],
            'name' => ['type' => 'string', 'length' => 4],
        ];

        $options = ['primary' => ['id'],
            'indexes' => ['myindex' => ['fields' => ['id', 'name']]],
        ];

        $this->export->createTable('sometable', $fields, $options);

        // this was the old line, but it looks like the table is created first
        // and then the index so i replaced it with the ones below
        // $this->assertEqual($var, 'CREATE TABLE sometable (id INTEGER PRIMARY KEY AUTOINCREMENT, name VARCHAR(4), INDEX myindex (id, name))');

        $this->assertEqual($this->adapter->pop(), 'CREATE TABLE `sometable` (`id` INT UNSIGNED AUTO_INCREMENT, `name` VARCHAR(4), INDEX `myindex_idx` (`id`, `name`), PRIMARY KEY(`id`)) ENGINE = INNODB');

        $this->conn->setAttribute(Doctrine_Core::ATTR_QUOTE_IDENTIFIER, false);
    }

    public function testCreateTableDoesNotAutoAddIndexesWhenIndexForFkFieldAlreadyExists()
    {
        $name = 'mytable';

        $fields = ['id' => ['type' => 'boolean', 'primary' => true],
            'foreignKey' => ['type' => 'integer'],
        ];
        $options = ['type' => 'INNODB',
            'foreignKeys' => [['local' => 'foreignKey',
                'foreign' => 'id',
                'foreignTable' => 'sometable']],
            'indexes' => ['myindex' => ['fields' => ['foreignKey']]],
        ];

        $sql = $this->export->createTableSql($name, $fields, $options);
        $this->assertEqual($sql[0], 'CREATE TABLE mytable (id TINYINT(1), foreignKey INT, INDEX myindex_idx (foreignKey)) ENGINE = INNODB');
        $this->assertEqual($sql[1], 'ALTER TABLE mytable ADD FOREIGN KEY (foreignKey) REFERENCES sometable(id)');
    }

    public function testCreateDatabaseExecutesSql()
    {
        $this->export->createDatabase('db');

        $this->assertEqual($this->adapter->pop(), 'CREATE DATABASE db');
    }

    public function testDropDatabaseExecutesSql()
    {
        $this->export->dropDatabase('db');

        $this->assertEqual($this->adapter->pop(), 'SET FOREIGN_KEY_CHECKS = 1');
        $this->assertEqual($this->adapter->pop(), 'DROP DATABASE db');
        $this->assertEqual($this->adapter->pop(), 'SET FOREIGN_KEY_CHECKS = 0');
    }

    public function testDropIndexExecutesSql()
    {
        $this->export->dropIndex('sometable', 'relevancy');

        $this->assertEqual($this->adapter->pop(), 'DROP INDEX relevancy_idx ON sometable');
    }

    public function testUnknownIndexSortingAttributeThrowsException()
    {
        $fields = ['id' => ['sorting' => 'ASC'],
            'name' => ['sorting' => 'unknown']];

        try {
            $this->export->getIndexFieldDeclarationList($fields);
            $this->fail();
        } catch (Doctrine_Export_Exception $e) {
            $this->pass();
        }
    }

    public function testIndexDeclarationsSupportSortingAndLengthAttributes()
    {
        $fields = ['id' => ['sorting' => 'ASC', 'length' => 10],
            'name' => ['sorting' => 'DESC', 'length' => 1]];

        $this->assertEqual($this->export->getIndexFieldDeclarationList($fields), 'id(10) ASC, name(1) DESC');
    }

    public function testCreateTableSupportsIndexesUsingSingleFieldString()
    {
        $fields = ['id' => ['type' => 'integer', 'unsigned' => 1, 'autoincrement' => true],
            'name' => ['type' => 'string', 'length' => 4],
        ];

        $options = ['primary' => ['id'],
            'indexes' => ['myindex' => [
                'fields' => 'name']],
        ];

        $this->export->createTable('sometable', $fields, $options);
        $this->assertEqual($this->adapter->pop(), 'CREATE TABLE sometable (id INT UNSIGNED AUTO_INCREMENT, name VARCHAR(4), INDEX myindex_idx (name), PRIMARY KEY(id)) ENGINE = INNODB');
    }

    public function testCreateTableSupportsIndexesWithCustomSorting()
    {
        $fields = ['id' => ['type' => 'integer', 'unsigned' => 1, 'autoincrement' => true],
            'name' => ['type' => 'string', 'length' => 4],
        ];

        $options = ['primary' => ['id'],
            'indexes' => ['myindex' => [
                'fields' => [
                    'id' => ['sorting' => 'ASC'],
                    'name' => ['sorting' => 'DESC'],
                ],
            ]],
        ];

        $this->export->createTable('sometable', $fields, $options);

        $this->assertEqual($this->adapter->pop(), 'CREATE TABLE sometable (id INT UNSIGNED AUTO_INCREMENT, name VARCHAR(4), INDEX myindex_idx (id ASC, name DESC), PRIMARY KEY(id)) ENGINE = INNODB');
    }

    public function testCreateTableSupportsFulltextIndexes()
    {
        $fields = ['id' => ['type' => 'integer', 'unsigned' => 1, 'autoincrement' => true],
            'content' => ['type' => 'string', 'length' => 4],
        ];

        $options = ['primary' => ['id'],
            'indexes' => ['myindex' => [
                'fields' => [
                    'content' => ['sorting' => 'DESC'],
                ],
                'type' => 'fulltext',
            ]],
            'type' => 'MYISAM',
        ];

        $this->export->createTable('sometable', $fields, $options);

        $this->assertEqual($this->adapter->pop(), 'CREATE TABLE sometable (id INT UNSIGNED AUTO_INCREMENT, content VARCHAR(4), FULLTEXT INDEX myindex_idx (content DESC), PRIMARY KEY(id)) ENGINE = MYISAM');
    }

    public function testCreateTableSupportsCompoundForeignKeys()
    {
        $name = 'mytable';

        $fields = ['id' => ['type' => 'boolean', 'primary' => true],
            'lang' => ['type' => 'integer', 'primary' => true],
        ];
        $options = ['type' => 'INNODB',
            'foreignKeys' => [['local' => ['id', 'lang'],
                'foreign' => ['id', 'lang'],
                'foreignTable' => 'sometable']],
        ];

        $sql = $this->export->createTableSql($name, $fields, $options);

        $this->assertEqual($sql[0], 'CREATE TABLE mytable (id TINYINT(1), lang INT, INDEX id_idx (id), INDEX lang_idx (lang)) ENGINE = INNODB');
        $this->assertEqual($sql[1], 'ALTER TABLE mytable ADD FOREIGN KEY (id, lang) REFERENCES sometable(id, lang)');
    }

    public function testCreateTableSupportsFieldCharset()
    {
        $sql = $this->export->createTableSql('mytable', [
            'name' => ['type' => 'string', 'length' => 255, 'charset' => 'utf8'],
        ]);

        $this->assertEqual($sql[0], 'CREATE TABLE mytable (name VARCHAR(255) CHARACTER SET utf8) ENGINE = INNODB');
    }

    public function testCreateTableSupportsFieldCollation()
    {
        $sql = $this->export->createTableSql('mytable', [
            'name' => ['type' => 'string', 'length' => 255, 'collation' => 'utf8_general_ci'],
        ]);

        $this->assertEqual($sql[0], 'CREATE TABLE mytable (name VARCHAR(255) COLLATE utf8_general_ci) ENGINE = INNODB');
    }
}
