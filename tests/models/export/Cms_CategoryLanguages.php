<?php

class Cms_CategoryLanguages extends Doctrine_Record
{
    public function setUp()
    {
        $this->setAttribute(Doctrine_Core::ATTR_COLL_KEY, 'language_id');
        $this->hasOne('Cms_Category as category', ['local' => 'category_id', 'foreign' => 'id', 'onDelete' => 'CASCADE']);
    }

    public function setTableDefinition()
    {
        $this->hasColumn('name', 'string', 256);
        $this->hasColumn('category_id', 'integer', 11);
        $this->hasColumn('language_id', 'integer', 11);
        $this->option('collate', 'utf8_unicode_ci');
        $this->option('charset', 'utf8');
        $this->option('type', 'INNODB');
        $this->index('index_category', ['fields' => ['category_id']]);
        $this->index('index_language', ['fields' => ['language_id']]);
    }
}
