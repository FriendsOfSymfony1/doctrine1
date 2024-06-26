<?php

require_once('Entity.php');

class Group extends Entity
{
    public function setUp()
    {
        parent::setUp();
        $this->hasMany('User', array(
            'local' => 'group_id',
            'foreign' => 'user_id',
            'refClass' => 'Groupuser',
        ));
    }
}

