<?php

class Phonenumber extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->hasColumn('phonenumber', 'string', 20);
        $this->hasColumn('entity_id', 'integer');
    }

    public function setUp()
    {
        $this->hasOne('Entity', ['local' => 'entity_id',
            'foreign' => 'id',
            'onDelete' => 'CASCADE']);

        $this->hasOne('Group', ['local' => 'entity_id',
            'foreign' => 'id',
            'onDelete' => 'CASCADE']);

        $this->hasOne('User', ['local' => 'entity_id',
            'foreign' => 'id',
            'onDelete' => 'CASCADE']);
    }
}
