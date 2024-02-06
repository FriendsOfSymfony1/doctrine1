<?php
/**
 * Doctrine_Ticket_697_TestCase.
 *
 * @category    Object Relational Mapping
 *
 * @see        www.doctrine-project.org
 *
 * @internal
 *
 * @coversNothing
 */
class Doctrine_Ticket_697_TestCase extends Doctrine_UnitTestCase
{
    public function prepareData()
    {
    }

    public function prepareTables()
    {
        $this->tables = ['T697_Person', 'T697_User'];
        parent::prepareTables();
    }

    public function testIdsAreSetWhenSavingSubclassInstancesInCTI()
    {
        $p = new T697_Person();
        $p['name'] = 'Rodrigo';
        $p->save();
        $this->assertEqual(1, $p->id);

        $u = new T697_User();
        $u['name'] = 'Fernandes';
        $u['password'] = 'Doctrine RULES';
        $u->save();
        $this->assertEqual(2, $u->id);
    }
}

class T697_Person extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->hasColumn('name', 'string', 30);
    }
}

// Class table inheritance
class T697_User extends T697_Person
{
    public function setTableDefinition()
    {
        $this->hasColumn('password', 'string', 30);
    }
}
