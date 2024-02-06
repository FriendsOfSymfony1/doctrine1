<?php

class MysqlIndexTestRecord extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->hasColumn('name', 'string', null);
        $this->hasColumn('code', 'integer', 4);
        $this->hasColumn('content', 'string', 4000);

        $this->index('content', ['fields' => ['content'], 'type' => 'fulltext']);
        $this->index('namecode', ['fields' => ['name', 'code'],
            'type' => 'unique']);

        $this->option('type', 'MYISAM');
    }
}
