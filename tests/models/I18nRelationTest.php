<?php

/**
 * @internal
 *
 * @coversNothing
 */
class I18nRelationTest extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->hasColumn('title', 'string', 200);
        $this->hasColumn('author_id', 'integer', 4);
    }

    public function setUp()
    {
        $this->hasOne('I18nAuthorTest', ['local' => 'author_id',
            'foreign' => 'id']);
        $this->actAs('I18n', ['fields' => ['author_id', 'title']]);
    }
}

/**
 * @internal
 *
 * @coversNothing
 */
class I18nAuthorTest extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->hasColumn('id', 'integer', 4, ['primary' => true, 'autoincrement' => true]);
    }

    public function setUp()
    {
        $this->hasMany('I18nRelationTest', ['local' => 'id',
            'foreign' => 'author_id']);
    }
}
