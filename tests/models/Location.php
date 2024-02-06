<?php

class Location extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->hasColumn('lat', 'double', 10, []);
        $this->hasColumn('lon', 'double', 10, []);
    }

    public function setUp()
    {
        $this->hasMany('LocationI18n as LocationI18n', ['local' => 'id', 'foreign' => 'id']);
    }
}
