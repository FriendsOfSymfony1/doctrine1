<?php

class MyUserOneThing extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->hasColumn('user_id', 'integer');
        $this->hasColumn('one_thing_id', 'integer');
    }

    public function setUp()
    {
        $this->hasOne('MyUser', [
            'local' => 'user_id', 'foreign' => 'id',
        ]);

        $this->hasOne('MyOneThing', [
            'local' => 'one_thing_id', 'foreign' => 'id',
        ]);
    }
}
