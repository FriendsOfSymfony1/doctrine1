<?php

class Album extends Doctrine_Record
{
    public function setUp()
    {
        $this->hasMany('Song', ['local' => 'id', 'foreign' => 'album_id']);
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
