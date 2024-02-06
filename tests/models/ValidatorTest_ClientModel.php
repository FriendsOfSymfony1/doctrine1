<?php

class ValidatorTest_ClientModel extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->hasColumn('id', 'integer', 4, ['notnull' => true,
            'primary' => true,
            'autoincrement' => true,
            'unsigned' => true]);
        $this->hasColumn('short_name', 'string', 32, ['notnull' => true, 'notblank', 'unique' => true]);
    }

    public function setUp()
    {
        $this->hasMany('ValidatorTest_AddressModel', ['local' => 'client_id', 'foreign' => 'address_id', 'refClass' => 'ValidatorTest_ClientToAddressModel']);
    }
}
