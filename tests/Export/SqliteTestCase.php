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
 * Doctrine_Export_Sqlite_TestCase.
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
class Doctrine_Export_Sqlite_TestCase extends Doctrine_UnitTestCase
{
    public function testCreateDatabaseDoesNotExecuteSqlAndCreatesSqliteFile()
    {
        $this->export->createDatabase('sqlite.db');

        $this->assertTrue(file_exists('sqlite.db'));
    }

    public function testDropDatabaseDoesNotExecuteSqlAndDeletesSqliteFile()
    {
        $this->export->dropDatabase('sqlite.db');

        $this->assertFalse(file_exists('sqlite.db'));
    }

    public function testCreateTableSupportsAutoincPks()
    {
        $name = 'mytable';

        $fields = ['id' => ['type' => 'integer', 'unsigned' => 1, 'autoincrement' => true]];

        $this->export->createTable($name, $fields);

        $this->assertEqual($this->adapter->pop(), 'CREATE TABLE mytable (id INTEGER PRIMARY KEY AUTOINCREMENT)');
    }

    public function testCreateTableSupportsDefaultAttribute()
    {
        $name = 'mytable';
        $fields = ['name' => ['type' => 'char', 'length' => 10, 'default' => 'def'],
            'type' => ['type' => 'integer', 'length' => 3, 'default' => 12],
        ];

        $options = ['primary' => ['name', 'type']];
        $this->export->createTable($name, $fields, $options);

        $this->assertEqual($this->adapter->pop(), 'CREATE TABLE mytable (name CHAR(10) DEFAULT \'def\', type INTEGER DEFAULT 12, PRIMARY KEY(name, type))');
    }

    public function testCreateTableSupportsMultiplePks()
    {
        $name = 'mytable';
        $fields = ['name' => ['type' => 'char', 'length' => 10],
            'type' => ['type' => 'integer', 'length' => 3]];

        $options = ['primary' => ['name', 'type']];
        $this->export->createTable($name, $fields, $options);

        $this->assertEqual($this->adapter->pop(), 'CREATE TABLE mytable (name CHAR(10), type INTEGER, PRIMARY KEY(name, type))');
    }

    public function testCreateTableSupportsIndexes()
    {
        $fields = ['id' => ['type' => 'integer', 'unsigned' => 1, 'autoincrement' => true, 'unique' => true],
            'name' => ['type' => 'string', 'length' => 4],
        ];

        $options = ['primary' => ['id'],
            'indexes' => ['myindex' => ['fields' => ['id', 'name']]],
        ];

        $this->export->createTable('sometable', $fields, $options);

        // this was the old line, but it looks like the table is created first
        // and then the index so i replaced it with the ones below
        // $this->assertEqual($var, 'CREATE TABLE sometable (id INTEGER PRIMARY KEY AUTOINCREMENT, name VARCHAR(4), INDEX myindex (id, name))');

        $this->assertEqual($this->adapter->pop(), 'CREATE INDEX myindex_idx ON sometable (id, name)');

        $this->assertEqual($this->adapter->pop(), 'CREATE TABLE sometable (id INTEGER PRIMARY KEY AUTOINCREMENT, name VARCHAR(4))');
    }

    public function testIdentifierQuoting()
    {
        $this->conn->setAttribute(Doctrine_Core::ATTR_QUOTE_IDENTIFIER, true);

        $fields = ['id' => ['type' => 'integer', 'unsigned' => 1, 'autoincrement' => true, 'unique' => true],
            'name' => ['type' => 'string', 'length' => 4],
        ];

        $options = ['primary' => ['id'],
            'indexes' => ['myindex' => ['fields' => ['id', 'name']]],
        ];

        $this->export->createTable('sometable', $fields, $options);

        // this was the old line, but it looks like the table is created first
        // and then the index so i replaced it with the ones below
        // $this->assertEqual($var, 'CREATE TABLE sometable (id INTEGER PRIMARY KEY AUTOINCREMENT, name VARCHAR(4), INDEX myindex (id, name))');

        $this->assertEqual($this->adapter->pop(), 'CREATE INDEX "myindex_idx" ON "sometable" ("id", "name")');

        $this->assertEqual($this->adapter->pop(), 'CREATE TABLE "sometable" ("id" INTEGER PRIMARY KEY AUTOINCREMENT, "name" VARCHAR(4))');

        $this->conn->setAttribute(Doctrine_Core::ATTR_QUOTE_IDENTIFIER, false);
    }

    public function testQuoteMultiplePks()
    {
        $this->conn->setAttribute(Doctrine_Core::ATTR_QUOTE_IDENTIFIER, true);

        $name = 'mytable';
        $fields = ['name' => ['type' => 'char', 'length' => 10],
            'type' => ['type' => 'integer', 'length' => 3]];

        $options = ['primary' => ['name', 'type']];
        $this->export->createTable($name, $fields, $options);

        $this->assertEqual($this->adapter->pop(), 'CREATE TABLE "mytable" ("name" CHAR(10), "type" INTEGER, PRIMARY KEY("name", "type"))');

        $this->conn->setAttribute(Doctrine_Core::ATTR_QUOTE_IDENTIFIER, false);
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

    public function testCreateTableSupportsIndexesWithCustomSorting()
    {
        $fields = ['id' => ['type' => 'integer', 'unsigned' => 1, 'autoincrement' => true, 'unique' => true],
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

        // removed this assertion and inserted the two below
        //        $this->assertEqual($this->adapter->pop(), 'CREATE TABLE sometable (id INTEGER PRIMARY KEY AUTOINCREMENT, name VARCHAR(4), INDEX myindex (id ASC, name DESC))');

        $this->assertEqual($this->adapter->pop(), 'CREATE INDEX myindex_idx ON sometable (id ASC, name DESC)');

        $this->assertEqual($this->adapter->pop(), 'CREATE TABLE sometable (id INTEGER PRIMARY KEY AUTOINCREMENT, name VARCHAR(4))');
    }

    /*
     * public function testExportSupportsEmulationOfCascadingDeletes()
     * {
     * $r = new ForeignKeyTest;
     *
     * $this->assertEqual($this->adapter->pop(), 'COMMIT');
     * $this->assertEqual($this->adapter->pop(), 'CREATE TRIGGER doctrine_foreign_key_test_cscd_delete AFTER DELETE ON foreign_key_test BEGIN DELETE FROM foreign_key_test WHERE parent_id = old.id;END;');
     * $this->assertEqual($this->adapter->pop(), 'CREATE TABLE foreign_key_test (id INTEGER PRIMARY KEY AUTOINCREMENT, name VARCHAR(2147483647), code INTEGER, content VARCHAR(4000), parent_id INTEGER)');
     * $this->assertEqual($this->adapter->pop(), 'BEGIN TRANSACTION');
     * }
     */
}
