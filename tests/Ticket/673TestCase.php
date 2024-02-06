<?php

/**
 * Doctrine_Ticket_673_TestCase.
 *
 * @author      Tamcy <7am.online@gmail.com>
 *
 * @category    Object Relational Mapping
 *
 * @see        www.doctrine-project.org
 *
 * @internal
 *
 * @coversNothing
 */
class Doctrine_Ticket_673_TestCase extends Doctrine_UnitTestCase
{
    public function prepareData()
    {
    }

    public function prepareTables()
    {
        $this->tables = ['T673_Student'];
        parent::prepareTables();
    }

    public function testTicket()
    {
        $q = Doctrine_Query::create()
            ->update('T673_Student s')
            ->set('s.foo', 's.foo + 1')
            ->where('s.id = 2')
        ;

        $this->assertTrue(2 === preg_match_all('/(s_foo)/', $q->getSqlQuery(), $m));
        $this->assertTrue(1 === preg_match_all('/(s_id)/', $q->getSqlQuery(), $m));

        try {
            $q->execute();
            $this->pass();
        } catch (Exception $e) {
            $this->fail($e->__toString());
        }

        $q = Doctrine_Query::create()
            ->delete()
            ->from('T673_Student s')
            ->where('s.name = ? AND s.foo < ?', 'foo', 3)
        ;

        $this->assertTrue(1 === preg_match_all('/(s_name)/', $q->getSqlQuery(), $m));
        $this->assertTrue(1 === preg_match_all('/(s_foo)/', $q->getSqlQuery(), $m));

        try {
            $q->execute();
            $this->pass();
        } catch (Exception $e) {
            $this->fail($e->__toString());
        }
    }
}

class T673_Student extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('T673_Student_record');

        $this->hasColumn('s_id as id', 'varchar', 30, ['primary' => true]);
        $this->hasColumn('s_foo as foo', 'integer', 4, ['notnull' => true]);
        $this->hasColumn('s_name as name', 'varchar', 50, []);
    }
}
