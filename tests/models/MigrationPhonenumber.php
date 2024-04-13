<?php

class MigrationPhonenumber extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->hasColumn('user_id', 'integer');
        $this->hasColumn('phonenumber', 'string', 255);
    }
}
