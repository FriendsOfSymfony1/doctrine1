<?php

class ValidatorTest_AddressModel extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->hasColumn('id', 'integer', 11, ['autoincrement' => true,
            'primary' => true,
        ]);
        $this->hasColumn('address1', 'string', 255, ['notnull' => true, 'notblank']);
        $this->hasColumn('address2', 'string', 255, ['notnull' => true]);
        $this->hasColumn('city', 'string', 255, ['notnull' => true, 'notblank']);
        $this->hasColumn('state', 'string', 10, ['notnull' => true, 'notblank', 'usstate']);
        $this->hasColumn('zip', 'string', 15, ['notnull' => true, 'notblank', 'regexp' => '/^[0-9-]*$/']);
    }

    public function setUp()
    {
        $this->hasMany('ValidatorTest_ClientModel', ['local' => 'address_id', 'foreign' => 'client_id', 'refClass' => 'ValidatorTest_ClientToAddressModel']);
    }
}
