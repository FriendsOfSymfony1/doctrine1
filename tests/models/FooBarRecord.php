<?php

class FooBarRecord extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->hasColumn('fooId', 'integer', null, ['primary' => true]);
        $this->hasColumn('barId', 'integer', null, ['primary' => true]);
    }
}
