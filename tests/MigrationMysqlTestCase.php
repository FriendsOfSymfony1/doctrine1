<?php

class Doctrine_MigrationMysql_TestCase extends Doctrine_UnitTestCase
{
    public function setUp()
    {
        parent::setUp();
        $dsn = getenv('MYSQL_TEST_DSN') ?? '';

        $this->connection = $this->openAdditionalPdoConnection($dsn);
        $this->connection->setOption('dsn', $dsn);
        $this->connection->dropDatabase();
        $this->connection->createDatabase();
    }

    public function disabled_testAfterSuccessfullMigrationItWillSetMigratedVersionAsCurrentVersionInMysqlDB()
    {
        $migration = new Doctrine_Migration(__DIR__.'/migration_classes', $this->connection);
        $this->assertFalse($migration->hasMigrated());
        $migration->setCurrentVersion(0);
        $this->assertFalse($this->connection->import->tableExists('migration_phonenumber'));
        $this->assertFalse($this->connection->import->tableExists('migration_user'));
        $this->assertFalse($this->connection->import->tableExists('migration_profile'));

        $migration->migrate(3);
        $this->assertTrue($migration->hasMigrated());
        $this->assertEqual($migration->getCurrentVersion(), 3);
        $this->assertTrue($this->connection->import->tableExists('migration_phonenumber'));
        $this->assertTrue($this->connection->import->tableExists('migration_user'));
        $this->assertTrue($this->connection->import->tableExists('migration_profile'));

        $migration->migrate(4);
        $this->assertEqual($migration->getCurrentVersion(), 4);
        $this->assertTrue($this->connection->import->tableExists('migration_phonenumber'));
        $this->assertTrue($this->connection->import->tableExists('migration_user'));
        $this->assertFalse($this->connection->import->tableExists('migration_profile'));
    }
}
