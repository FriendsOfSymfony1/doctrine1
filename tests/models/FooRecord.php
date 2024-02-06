<?php

class FooRecord extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('foo');

        $this->hasColumn('name', 'string', 200, ['notnull' => true]);
        $this->hasColumn('parent_id', 'integer');
        $this->hasColumn('local_foo', 'integer');
    }

    public function setUp()
    {
        $this->hasMany('FooRecord as FooFriend', ['local' => 'foo1',
            'foreign' => 'foo2',
            'equal' => true,
            'refClass' => 'FooReferenceRecord',
        ]);

        $this->hasMany('FooRecord as FooParents', ['local' => 'foo1',
            'foreign' => 'foo2',
            'refClass' => 'FooReferenceRecord',
            'onDelete' => 'RESTRICT',
        ]);

        $this->hasMany('FooRecord as FooChildren', ['local' => 'foo2',
            'foreign' => 'foo1',
            'refClass' => 'FooReferenceRecord',
        ]);

        $this->hasMany('FooRecord as Children', ['local' => 'id', 'foreign' => 'parent_id']);

        $this->hasOne('FooRecord as Parent', ['local' => 'parent_id', 'foreign' => 'id', 'onDelete' => 'CASCADE']);
        $this->hasOne('FooForeignlyOwnedWithPk', ['local' => 'id', 'foreign' => 'id', 'constraint' => true]);
        $this->hasOne('FooLocallyOwned', ['local' => 'local_foo', 'onDelete' => 'RESTRICT']);

        $this->hasMany('BarRecord as Bar', ['local' => 'fooId',
            'foreign' => 'barId',
            'refClass' => 'FooBarRecord',
            'onUpdate' => 'RESTRICT']);
    }
}
