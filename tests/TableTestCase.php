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
 * Doctrine_Table_TestCase.
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
class Doctrine_Table_TestCase extends Doctrine_UnitTestCase
{
    public function prepareTables()
    {
        $this->tables[] = 'FieldNameTest';
        parent::prepareTables();
    }

    public function testInitializingNewTableWorksWithoutConnection()
    {
        $table = new Doctrine_Table('Test', $this->conn);

        $this->assertEqual($table->getComponentName(), 'Test');
    }

    public function testSerialize()
    {
        $table = new Doctrine_Table('FieldNameTest', $this->conn);
        $serializedTable = serialize($table);

        $unserializedTable = unserialize($serializedTable);
        $unserializedTable->initializeFromCache($this->objTable->getConnection());

        $this->assertEqual($table->getColumns(), $unserializedTable->getColumns());
    }

    public function testFieldConversion()
    {
        $this->dbh->setAttribute(PDO::ATTR_CASE, PDO::CASE_UPPER);

        $t = new FieldNameTest();

        $t->someColumn = 'abc';
        $t->someEnum = 'php';
        $t->someInt = 1;
        $t->someArray = [];
        $obj = new stdClass();
        $t->someObject = $obj;

        $this->assertEqual($t->someColumn, 'abc');
        $this->assertEqual($t->someEnum, 'php');
        $this->assertEqual($t->someInt, 1);
        $this->assertEqual($t->someArray, []);
        $this->assertEqual($t->someObject, $obj);

        $t->save();

        $this->assertEqual($t->someColumn, 'abc');
        $this->assertEqual($t->someEnum, 'php');
        $this->assertEqual($t->someInt, 1);
        $this->assertEqual($t->someArray, []);
        $this->assertEqual($t->someObject, $obj);

        $t->refresh();

        $this->assertEqual($t->someColumn, 'abc');
        $this->assertEqual($t->someEnum, 'php');
        $this->assertEqual($t->someInt, 1);
        $this->assertEqual($t->someArray, []);
        $this->assertEqual($t->someObject, $obj);

        $this->connection->clear();

        $t = $this->connection->getTable('FieldNameTest')->find(1);

        $this->assertEqual($t->someColumn, 'abc');
        $this->assertEqual($t->someEnum, 'php');
        $this->assertEqual($t->someInt, 1);
        $this->assertEqual($t->someArray, []);
        $this->assertEqual($t->someObject, $obj);

        $this->dbh->setAttribute(PDO::ATTR_CASE, PDO::CASE_NATURAL);
    }

    public function testGetForeignKey()
    {
        $fk = $this->objTable->getRelation('Group');
        $this->assertTrue($fk instanceof Doctrine_Relation_Association);
        $this->assertTrue($fk->getTable() instanceof Doctrine_Table);
        $this->assertTrue(Doctrine_Relation::MANY == $fk->getType());
        $this->assertTrue('user_id' == $fk->getLocal());
        $this->assertTrue('group_id' == $fk->getForeign());

        $fk = $this->objTable->getRelation('Email');
        $this->assertTrue($fk instanceof Doctrine_Relation_LocalKey);
        $this->assertTrue($fk->getTable() instanceof Doctrine_Table);
        $this->assertTrue(Doctrine_Relation::ONE == $fk->getType());
        $this->assertTrue('email_id' == $fk->getLocal());
        $this->assertTrue($fk->getForeign() == $fk->getTable()->getIdentifier());

        $fk = $this->objTable->getRelation('Phonenumber');
        $this->assertTrue($fk instanceof Doctrine_Relation_ForeignKey);
        $this->assertTrue($fk->getTable() instanceof Doctrine_Table);
        $this->assertTrue(Doctrine_Relation::MANY == $fk->getType());
        $this->assertTrue($fk->getLocal() == $this->objTable->getIdentifier());
        $this->assertTrue('entity_id' == $fk->getForeign());
    }

    public function testGetComponentName()
    {
        $this->assertTrue('User' == $this->objTable->getComponentName());
    }

    public function testGetTableName()
    {
        $this->assertTrue('entity' == $this->objTable->tableName);
    }

    public function testGetConnection()
    {
        $this->assertTrue($this->objTable->getConnection() instanceof Doctrine_Connection);
    }

    public function testGetData()
    {
        $this->assertTrue([] == $this->objTable->getData());
    }

    public function testSetSequenceName()
    {
        $this->objTable->setOption('sequenceName', 'test-seq');
        $this->assertEqual($this->objTable->sequenceName, 'test-seq');
        $this->objTable->setOption('sequenceName', null);
    }

    public function testCreate()
    {
        $record = $this->objTable->create();
        $this->assertTrue($record instanceof Doctrine_Record);
        $this->assertTrue(Doctrine_Record::STATE_TCLEAN == $record->state());
    }

    public function testFind()
    {
        $record = $this->objTable->find(4);
        $this->assertTrue($record instanceof Doctrine_Record);

        try {
            $record = $this->objTable->find('4');
            $this->assertTrue($record instanceof Doctrine_Record);
        } catch (Exception $e) {
            $this->assertTrue(false);
        }

        try {
            $record = $this->objTable->find('4', Doctrine_Core::HYDRATE_ARRAY);
            $this->assertTrue(is_array($record));
            $this->assertTrue(!is_object($record));
            $this->assertTrue(array_key_exists('id', $record));
            $this->assertTrue(array_key_exists('name', $record));
            $this->assertTrue(!$record instanceof Doctrine_Record);
        } catch (Exception $e) {
            $this->assertTrue(false);
        }

        try {
            $record = $this->objTable->find(123);
            $this->assertTrue(false === $record);
        } catch (Exception $e) {
            $this->assertTrue(false);
        }

        try {
            $record = $this->objTable->find(null);
            $this->assertTrue(false === $record);
        } catch (Exception $e) {
            $this->assertTrue(false);
        }

        try {
            $record = $this->objTable->find(false);
            $this->assertTrue(false === $record);
        } catch (Exception $e) {
            $this->assertTrue(false);
        }
    }

    public function testFindAll()
    {
        $users = $this->objTable->findAll();
        $this->assertEqual($users->count(), 8);
        $this->assertTrue($users instanceof Doctrine_Collection);

        $users = $this->objTable->findAll(Doctrine_Core::HYDRATE_ARRAY);
        $this->assertTrue(!$users instanceof Doctrine_Collection);
        $this->assertTrue(is_array($users));
        $this->assertTrue(!is_object($users));
        $this->assertEqual(count($users), 8);
    }

    public function testFindByDql()
    {
        $users = $this->objTable->findByDql("name LIKE '%Arnold%'");
        $this->assertEqual($users->count(), 1);
        $this->assertTrue($users instanceof Doctrine_Collection);
    }

    public function testFindByXXX()
    {
        $users = $this->objTable->findByName('zYne');
        $this->assertEqual($users->count(), 1);
        $this->assertTrue($users instanceof Doctrine_Collection);
    }

    public function testGetProxy()
    {
        $user = $this->objTable->getProxy(4);
        $this->assertTrue($user instanceof Doctrine_Record);

        try {
            $record = $this->objTable->find(123);
        } catch (Exception $e) {
            $this->assertTrue($e instanceof Doctrine_Find_Exception);
        }
    }

    public function testGetColumns()
    {
        $columns = $this->objTable->getColumns();
        $this->assertTrue(is_array($columns));
    }

    public function testApplyInheritance()
    {
        $this->assertEqual($this->objTable->applyInheritance('id = 3'), 'id = 3 AND type = ?');
    }
}
