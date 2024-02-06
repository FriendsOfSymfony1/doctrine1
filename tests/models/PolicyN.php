<?php

class PolicyN extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('policies');
        $this->hasColumn('id', 'integer', 4, ['notnull' => true, 'primary' => true, 'autoincrement' => true]);
        $this->hasColumn('rate_id', 'integer', 4, []);
        $this->hasColumn('policy_number', 'integer', 4, ['unique' => true]);
    }

    public function setUp()
    {
        $this->hasOne('RateN', ['local' => 'rate_id', 'foreign' => 'id']);
    }
}
