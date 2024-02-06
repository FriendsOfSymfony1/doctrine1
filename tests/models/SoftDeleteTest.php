<?php

/**
 * @internal
 *
 * @coversNothing
 */
class SoftDeleteTest extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->hasColumn('name', 'string', null, ['primary' => true]);
        $this->hasColumn('something', 'string', '25', ['notnull' => true, 'unique' => true]);
    }

    public function setUp()
    {
        $this->actAs('SoftDelete');
    }
}
