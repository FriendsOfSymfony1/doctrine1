<?php

class mmrGroup_C extends Doctrine_Record
{
    public function setUp()
    {
        $this->hasMany('mmrUser_C', ['local' => 'group_id',
            'foreign' => 'user_id',
            'refClass' => 'mmrGroupUser_C']);
    }

    public function setTableDefinition()
    {
        $this->hasColumn('g_id as id', 'string', 30, ['primary' => true]);
        $this->hasColumn('name', 'string', 30);
    }
}
