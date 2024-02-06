<?php

class App extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->hasColumn('name', 'string', 32);
        $this->hasColumn('user_id', 'integer', 11);
        $this->hasColumn('app_category_id', 'integer', 11);
    }

    public function setUp()
    {
        $this->hasOne('User', [
            'local' => 'user_id', 'foreign' => 'id',
        ]);

        $this->hasOne('App_Category as Category', [
            'local' => 'app_category_id',
            'foreign' => 'id',
        ]);
    }
}
