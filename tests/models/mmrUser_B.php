<?php

class mmrUser_B extends Doctrine_Record
{
    public function setUp()
    {
        $this->hasMany('mmrGroup_B as Group', ['local' => 'user_id',
            'foreign' => 'group_id',
            'refClass' => 'mmrGroupUser_B']);
    }

    public function setTableDefinition()
    {
        // Works when
        $this->hasColumn('id', 'string', 30, ['primary' => true]);
        $this->hasColumn('name', 'string', 30);
    }
}
