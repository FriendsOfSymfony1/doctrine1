<?php

class Role extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->hasColumn('name', 'string', 20, ['unique' => true]);
    }

    public function setUp()
    {
        $this->hasMany('Auth', ['local' => 'id', 'foreign' => 'roleid']);
    }
}
