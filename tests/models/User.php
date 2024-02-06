<?php

require_once 'Entity.php';

// UserTable doesn't extend Doctrine_Table -> Doctrine_Connection
// won't initialize grouptable when Doctrine_Connection->getTable('User') is called
class UserTable extends Doctrine_Table
{
}

class User extends Entity
{
    public function setUp()
    {
        parent::setUp();
        $this->hasMany('Address', [
            'local' => 'user_id',
            'foreign' => 'address_id',
            'refClass' => 'EntityAddress',
        ]);
        $this->hasMany('Address as Addresses', [
            'local' => 'user_id',
            'foreign' => 'address_id',
            'refClass' => 'EntityAddress',
        ]);
        $this->hasMany('Album', ['local' => 'id', 'foreign' => 'user_id']);
        $this->hasMany('Book', ['local' => 'id', 'foreign' => 'user_id']);
        $this->hasMany('Group', [
            'local' => 'user_id',
            'foreign' => 'group_id',
            'refClass' => 'Groupuser',
        ]);
    }

    /** Custom validation */
    public function validate()
    {
        // Allow only one name!
        if ('The Saint' !== $this->name) {
            $this->errorStack()->add('name', 'notTheSaint');
        }
    }

    public function validateOnInsert()
    {
        if ('Top Secret' !== $this->password) {
            $this->errorStack()->add('password', 'pwNotTopSecret');
        }
    }

    public function validateOnUpdate()
    {
        if ('Nobody' !== $this->loginname) {
            $this->errorStack()->add('loginname', 'notNobody');
        }
    }
}
