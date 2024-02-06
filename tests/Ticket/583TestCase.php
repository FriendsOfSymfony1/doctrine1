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
class Doctrine_Ticket_583_TestCase extends Doctrine_UnitTestCase
{
    public function prepareTables()
    {
        $this->tables = ['Entity'];
        parent::prepareTables();
    }

    public function prepareData()
    {
    }

    public function testBug()
    {
        $entity = new Entity();
        $entity->name = 'myname';
        $entity->save();

        // load our user and our collection of pages
        $user = Doctrine_Query::create()->select('id')->from('Entity')->fetchOne();
        $this->assertEqual($user->name, 'myname');

        // load our user and our collection of pages
        $user = Doctrine_Query::create()->select('*')->from('Entity')->fetchOne();
        $this->assertEqual($user->name, 'myname');
    }
}
