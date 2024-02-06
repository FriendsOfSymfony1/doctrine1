<?php

class Rec2 extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->hasColumn('user_id', 'integer', 10, ['unique' => true]);
        $this->hasColumn('address', 'string', 150, []);
    }

    public function setUp()
    {
        $this->hasOne('Rec1 as User', ['local' => 'id', 'foreign' => 'user_id', 'onDelete' => 'CASCADE']);
    }
}
