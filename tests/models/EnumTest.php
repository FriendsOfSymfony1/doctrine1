<?php

/**
 * @internal
 *
 * @coversNothing
 */
class EnumTest extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->hasColumn('status', 'enum', 11, ['values' => ['open', 'verified', 'closed']]);
        $this->hasColumn('text', 'string');
    }

    public function setUp()
    {
        $this->hasMany('EnumTest2 as Enum2', ['local' => 'id', 'foreign' => 'enum_test_id']);
        $this->hasMany('EnumTest3 as Enum3', ['local' => 'text', 'foreign' => 'text']);
    }
}
