<?php

class Doctrine_Table_IndexesUsingSingleFieldString_TestCase extends Doctrine_UnitTestCase
{
    protected $tables = array('IndexDeclaredWithSingleFieldStringRecord');

    public function testSupportIndexesUsingSingleFieldString()
    {
    }
}

class IndexDeclaredWithSingleFieldStringRecord extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->hasColumn('some_column_name', 'string', 255);

        $this->index('single_field_index_as_string', array(
            'fields' => 'some_column_name',
        ));
    }
}
