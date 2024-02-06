<?php

/**
 * Doctrine_Ticket_626D_TestCase.
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
class Doctrine_Ticket_626D_TestCase extends Doctrine_UnitTestCase
{
    public function prepareData()
    {
    }

    public function prepareTables()
    {
        $this->tables = ['T626D_Student1'];
        parent::prepareTables();
    }

    protected function newStudent($cls, $id, $name)
    {
        $u = new $cls();
        $u->id = $id;
        $u->name = $name;
        $u->save();

        return $u;
    }

    public function testFieldNames()
    {
        $student1 = $this->newStudent('T626D_Student1', '07090002', 'First Student');

        try {
            $student = Doctrine_Core::getTable('T626D_Student1')->find('07090002');
            $this->pass();
        } catch (Exception $e) {
            $this->fail($e->__toString());
        }
    }
}

class T626D_Student1 extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('T626D_Student_record_1');

        $this->hasColumn('s_id as id', 'varchar', 30, ['primary' => true]);
        $this->hasColumn('s_name as name', 'varchar', 50, []);
    }
}
