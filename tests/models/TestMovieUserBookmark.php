<?php

class TestMovieUserBookmark extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->hasColumn('user_id', 'integer', null, ['primary' => true]);
        $this->hasColumn('movie_id', 'integer', null, ['primary' => true]);
    }
}
