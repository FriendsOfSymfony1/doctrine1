<?php

class Rec1 extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->hasColumn('first_name', 'string', 128, []);
    }

    public function setUp()
    {
        $this->hasOne('Rec2 as Account', ['local' => 'id', 'foreign' => 'user_id', 'onDelete' => 'CASCADE']);
    }
}
