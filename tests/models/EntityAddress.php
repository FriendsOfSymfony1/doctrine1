<?php

class EntityAddress extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->hasColumn('user_id', 'integer', null, ['primary' => true]);
        $this->hasColumn('address_id', 'integer', null, ['primary' => true]);
    }
}
