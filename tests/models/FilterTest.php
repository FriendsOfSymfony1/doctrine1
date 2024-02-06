<?php

/**
 * @internal
 *
 * @coversNothing
 */
class FilterTest extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->hasColumn('name', 'string', 100);
    }

    public function setUp()
    {
        $this->hasMany('FilterTest2 as filtered', ['local' => 'id', 'foreign' => 'test1_id', 'onDelete' => 'CASCADE']);
    }
}
