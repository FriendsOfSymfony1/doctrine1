<?php

class App_Category extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->hasColumn('name', 'string', 32);
        $this->hasColumn('parent_id', 'integer');
    }

    public function setUp()
    {
        $this->hasMany('App', [
            'local' => 'id',
            'foreign' => 'app_category_id',
        ]);

        $this->hasMany('App_Category as Parent', [
            'local' => 'parent_id',
            'foreign' => 'id',
        ]);
    }
}
