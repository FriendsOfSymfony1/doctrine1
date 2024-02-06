<?php

class RateN extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('rates');
        $this->hasColumn('id', 'integer', 4, ['notnull' => true, 'primary' => true, 'autoincrement' => true]);
        $this->hasColumn('policy_code', 'integer', 4, ['notnull' => true,  'notblank' => true]);
        $this->hasColumn('coverage_code', 'integer', 4, ['notnull' => true,  'notblank' => true]);
        $this->hasColumn('liability_code', 'integer', 4, ['notnull' => true,  'notblank' => true]);
        $this->hasColumn('total_rate', 'float', null, ['notnull' => true,  'notblank' => true]);
    }

    public function setUp()
    {
        $this->hasOne('PolicyCodeN', ['local' => 'policy_code', 'foreign' => 'code']);
        $this->hasOne('CoverageCodeN', ['local' => 'coverage_code', 'foreign' => 'code']);
        $this->hasOne('LiabilityCodeN', ['local' => 'liability_code', 'foreign' => 'code']);
    }
}
