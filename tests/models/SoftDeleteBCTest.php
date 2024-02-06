<?php

/**
 * @internal
 *
 * @coversNothing
 */
class SoftDeleteBCTest extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('soft_delete_bc_test');

        $this->hasColumn('name', 'string', null, ['primary' => true]);
        $this->hasColumn('something', 'string', '25', ['notnull' => true, 'unique' => true]);
    }

    public function setUp()
    {
        $this->actAs('SoftDelete', ['name' => 'deleted', 'type' => 'boolean']);
    }
}
