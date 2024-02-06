<?php

/**
 * @internal
 *
 * @coversNothing
 */
class NestTest extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->hasColumn('name', 'string');
    }

    public function setUp()
    {
        $this->hasMany('NestTest as Parents', ['local' => 'child_id',
            'refClass' => 'NestReference',
            'foreign' => 'parent_id']);
        $this->hasMany('NestTest as Children', ['local' => 'parent_id',
            'refClass' => 'NestReference',
            'foreign' => 'child_id']);

        $this->hasMany('NestTest as Relatives', ['local' => 'child_id',
            'refClass' => 'NestReference',
            'foreign' => 'parent_id',
            'equal' => true]);
    }
}
