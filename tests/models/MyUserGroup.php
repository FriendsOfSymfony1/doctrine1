<?php

class MyUserGroup extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('my_user_group');

        $this->hasColumn('id', 'integer', 4, ['primary' => true,  'autoincrement' => true]);
        $this->hasColumn('group_id', 'integer', 4, []);
        $this->hasColumn('user_id', 'integer', 4, []);
    }

    public function setUp()
    {
        $this->hasOne('MyGroup as MyGroup', ['local' => 'group_id', 'foreign' => 'id', 'onDelete' => 'CASCADE']);
        $this->hasOne('MyUser as MyUser', ['local' => 'user_id', 'foreign' => 'id', 'onDelete' => 'CASCADE']);
    }
}
