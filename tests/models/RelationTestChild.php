<?php

require_once('RelationTest.php');

class RelationTestChild extends RelationTest
{
    public function setUp() 
    {
        $this->hasOne('RelationTest as Parent', array(
            'local' => 'parent_id',
            'foreign' => 'id',
            'onDelete' => 'CASCADE',
        ));
        $this->hasMany('RelationTestChild as Children', array(
            'local' => 'id',
            'foreign' => 'parent_id',
        ));
    }
}
