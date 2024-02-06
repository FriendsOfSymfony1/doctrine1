<?php

class ClientModel extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('clients');

        $this->hasColumn('id', 'integer', 4, ['notnull' => true,
            'primary' => true,
            'autoincrement' => true,
            'unsigned' => true]);
        $this->hasColumn('short_name', 'string', 32, ['notnull' => true, 'notblank', 'unique' => true]);
    }

    public function setUp()
    {
        $this->hasMany('AddressModel', ['local' => 'client_id', 'foreign' => 'address_id', 'refClass' => 'ClientToAddressModel']);
    }
}

class ClientToAddressModel extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('clients_to_addresses');

        $this->hasColumn('client_id', 'integer', 11, ['primary' => true]);
        $this->hasColumn('address_id', 'integer', 11, ['primary' => true]);
    }

    public function construct()
    {
    }

    public function setUp()
    {
        $this->hasOne('ClientModel', ['local' => 'client_id', 'foreign' => 'id', 'onDelete' => 'CASCADE']);
        $this->hasOne('AddressModel', ['local' => 'address_id', 'foreign' => 'id', 'onDelete' => 'CASCADE']);
    }
}

class AddressModel extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('addresses');

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
        $this->hasMany('ClientModel', ['local' => 'address_id', 'foreign' => 'client_id', 'refClass' => 'ClientToAddressModel']);
    }
}
