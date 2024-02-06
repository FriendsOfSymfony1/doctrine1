<?php

class Location2 extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->hasColumn('id', 'integer', 10, ['primary' => true]);
        $this->hasColumn('lat', 'double', 10);
        $this->hasColumn('lon', 'double', 10);
    }
}
