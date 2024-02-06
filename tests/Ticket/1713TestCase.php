<?php
/**
 * Doctrine_Ticket_1713_TestCase.
 *
 * @internal
 *
 * @coversNothing
 */
class Doctrine_Ticket_1713_TestCase extends Doctrine_UnitTestCase
{
    public function prepareTables()
    {
        $this->tables = ['Parent1713', 'Child1713A'];
        parent::prepareTables();
    }

    public function prepareData()
    {
        $record = new Child1713A();
        $record['title'] = 'Child1713A';
        $record->save();
    }

    public function testInheritanceSubclasses()
    {
        $records = Doctrine_Query::create()->query('FROM Parent1713 m');

        foreach ($records as $rec) {
            $this->assertEqual(get_class($rec), $rec['title']);
        }
    }
}

class Parent1713 extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('mytable');
        $this->hasColumn('id', 'integer', 4, [
            'primary' => true,
            'autoincrement' => true,
            'notnull' => true,
        ]);

        $this->hasColumn('title', 'string', 255, []);
        $this->hasColumn('PHP_TYPE as phpType', 'integer', 11, []);

        $this->setSubclasses(
            ['Child1713A' => ['phpType' => 1]]
        );
    }

    public function setUp()
    {
    }
}

class Child1713A extends Parent1713
{
}
