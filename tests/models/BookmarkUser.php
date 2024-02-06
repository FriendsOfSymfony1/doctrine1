<?php

class BookmarkUser extends Doctrine_Record
{
    public function setUp()
    {
        $this->hasMany(
            'Bookmark as Bookmarks',
            ['local' => 'id',
                'foreign' => 'user_id']
        );
    }

    public function setTableDefinition()
    {
        $this->hasColumn('name', 'string', 30);
    }
}
