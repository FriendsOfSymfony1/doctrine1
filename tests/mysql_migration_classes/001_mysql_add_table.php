<?php

class MysqlAddTable extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->createTable('migration_test', ['field1' => ['type' => 'string']]);
        $this->addColumn('migration_test', 'field2', 'integer');
    }

    public function down()
    {
        $this->dropTable('migration_test');
    }
}
