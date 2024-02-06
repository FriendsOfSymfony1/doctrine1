<?php

class Book extends Doctrine_Record
{
    public function setUp()
    {
        $this->hasMany('Author', ['local' => 'id', 'foreign' => 'book_id']);
        $this->hasOne('User', ['local' => 'user_id',
            'foreign' => 'id',
            'onDelete' => 'CASCADE']);
    }

    public function setTableDefinition()
    {
        $this->hasColumn('user_id', 'integer');
        $this->hasColumn('name', 'string', 20);
    }
}
