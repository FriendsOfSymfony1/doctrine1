<?php

/**
 * Doctrine_Ticket_626_TestCase.
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
class Doctrine_Ticket_626C_TestCase extends Doctrine_UnitTestCase
{
    public function prepareData()
    {
    }

    public function prepareTables()
    {
        $this->tables = ['T626C_Student1', 'T626C_Student2'];
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
        $student1 = $this->newStudent('T626C_Student1', '07090002', 'First Student');

        try {
            $students = Doctrine_Query::create()
                ->from('T626C_Student1 s INDEXBY s.id')
                ->execute([], Doctrine_Core::HYDRATE_ARRAY)
            ;
            $this->pass();
        } catch (Exception $e) {
            $this->fail($e->__toString());
        }
    }

    public function testColNames()
    {
        $student1 = $this->newStudent('T626C_Student2', '07090002', 'First Student');

        try {
            $students = Doctrine_Query::create()
                ->from('T626C_Student2 s INDEXBY s.id')
                ->execute([], Doctrine_Core::HYDRATE_ARRAY)
            ;
            $this->pass();
        } catch (Exception $e) {
            $this->fail($e->__toString());
        }
    }
}

class T626C_Student1 extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('T626C_Student_record_1');

        $this->hasColumn('s_id as id', 'varchar', 30, ['primary' => true]);
        $this->hasColumn('s_name as name', 'varchar', 50, []);
    }
}

class T626C_Student2 extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('T626C_Student_record_2');

        $this->hasColumn('id', 'varchar', 30, ['primary' => true]);
        $this->hasColumn('name', 'varchar', 50, []);
    }
}
