<?php

class QueryTest_Category extends Doctrine_Record
{
    /**
     * The depth of the category inside the tree.
     * Non-persistent field.
     *
     * @var int
     */
    public $depth;

    /**
     * Table definition.
     */
    public function setTableDefinition()
    {
        $this->hasColumn('id', 'integer', 4, ['primary', 'autoincrement', 'notnull']);
        $this->hasColumn(
            'rootCategoryId as rootCategoryId',
            'integer',
            4,
            ['notnull', 'default' => 0]
        );
        $this->hasColumn(
            'parentCategoryId as parentCategoryId',
            'integer',
            4,
            ['notnull', 'default' => 0]
        );
        $this->hasColumn(
            'name as name',
            'string',
            50,
            ['notnull', 'unique']
        );
        $this->hasColumn(
            'position as position',
            'integer',
            4,
            ['default' => 0, 'notnull']
        );
    }

    /**
     * Relations definition.
     */
    public function setUp()
    {
        $this->hasMany('QueryTest_Category as subCategories', [
            'local' => 'id', 'foreign' => 'parentCategoryId',
        ]);
        $this->hasOne('QueryTest_Category as rootCategory', [
            'local' => 'rootCategoryId', 'foreign' => 'id',
        ]);
        $this->hasMany('QueryTest_Board as boards', [
            'local' => 'id', 'foreign' => 'categoryId', 'onDelete' => 'CASCADE',
        ]);
    }
}
