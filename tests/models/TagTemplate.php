<?php
class TagTemplate extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->hasColumn('name', 'string', 100);
        $this->hasColumn('description', 'string');
    }

    public function setUp()
    {
        //$this->hasOne('[Component]', array('onDelete' => 'CASCADE'));
    }
}
