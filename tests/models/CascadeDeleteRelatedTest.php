<?php

/**
 * @internal
 *
 * @coversNothing
 */
class CascadeDeleteRelatedTest extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->hasColumn('name', 'string');
        $this->hasColumn('cscd_id', 'integer');
    }

    public function setUp()
    {
        $this->hasOne('CascadeDeleteTest', ['local' => 'cscd_id',
            'foreign' => 'id',
            'onDelete' => 'CASCADE',
            'onUpdate' => 'SET NULL']);

        $this->hasMany(
            'CascadeDeleteRelatedTest2 as Related',
            ['local' => 'id',
                'foreign' => 'cscd_id']
        );
    }
}
