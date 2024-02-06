<?php

/**
 * @internal
 *
 * @coversNothing
 */
class SearchTest extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->hasColumn('title', 'string', 100);
        $this->hasColumn('content', 'string');
    }

    public function setUp()
    {
        $options = ['generateFiles' => false,
            'fields' => ['title', 'content']];

        $this->actAs('Searchable', $options);
    }
}
