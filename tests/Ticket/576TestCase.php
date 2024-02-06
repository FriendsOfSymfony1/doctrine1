<?php

/**
 * Doctrine_Ticket_587_TestCase.
 *
 * @author      Joaquin Bravo <jackbravo@gmail.com>
 *
 * @category    Object Relational Mapping
 *
 * @see        www.doctrine-project.org
 *
 * @internal
 *
 * @coversNothing
 */
class Doctrine_Ticket_576_TestCase extends Doctrine_UnitTestCase
{
    public function prepareTables()
    {
        $this->tables = ['Entity'];
        parent::prepareTables();
    }

    public function prepareData()
    {
    }

    public function testInit()
    {
        $entity = new Entity();
        $entity->name = 'myname';
        $entity->loginname = 'test';
        $entity->save();
    }

    public function testBug()
    {
        // load our user and our collection of pages
        $user = Doctrine_Query::create()->from('Entity')->fetchOne();
        $this->assertEqual($user->name, 'myname');
        $this->assertEqual($user->loginname, 'test');

        $user->name = null;
        $this->assertEqual($user->name, null);

        $data = Doctrine_Query::create()
            ->select('name')
            ->from('Entity')
            ->fetchOne([], Doctrine_Core::HYDRATE_ARRAY)
        ;

        $user->hydrate($data);
        $this->assertEqual($user->name, 'myname');
        $this->assertEqual($user->loginname, 'test'); // <<----- this is what the bug is about
    }
}
