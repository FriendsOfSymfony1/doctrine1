<?php

/**
 * @internal
 *
 * @coversNothing
 */
class ForeignKeyTest extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->hasColumn('name', 'string', null);
        $this->hasColumn('code', 'integer', 4);
        $this->hasColumn('content', 'string', 4000);
        $this->hasColumn('parent_id', 'integer');

        $this->hasOne(
            'ForeignKeyTest as Parent',
            ['local' => 'parent_id',
                'foreign' => 'id',
                'onDelete' => 'CASCADE',
                'onUpdate' => 'RESTRICT']
        );

        $this->hasMany('ForeignKeyTest as Children', [
            'local' => 'id', 'foreign' => 'parent_id', 'cascade' => ['delete']]);

        $this->option('type', 'INNODB');
    }
}
