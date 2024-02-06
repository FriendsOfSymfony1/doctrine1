<?php

/**
 * @internal
 *
 * @coversNothing
 */
class Doctrine_Cache_Query_SqliteTestCase extends Doctrine_UnitTestCase
{
    public function setUp()
    {
        parent::setUp();

        $dir = $this->connection->getAttribute(Doctrine_Core::ATTR_CACHE_DIR);

        if (file_exists($dir.DIRECTORY_SEPARATOR.'stats.cache')) {
            unlink($dir.DIRECTORY_SEPARATOR.'stats.cache');
        }

        $this->cache = new Doctrine_Cache_Query_Sqlite($this->connection);
        $this->cache->deleteAll();
    }

    public function testStore()
    {
        $this->cache->store('SELECT * FROM user', [['name' => 'Jack Daniels']], 60);
        $this->assertEqual($this->cache->count(), 1);

        $this->cache->store('SELECT * FROM group', [['name' => 'Drinkers club']], 60);

        $md5 = md5('SELECT * FROM user');
        $result = $this->cache->fetch($md5);
        $this->assertEqual($result, [['name' => 'Jack Daniels']]);

        $md5 = md5('SELECT * FROM group');
        $result = $this->cache->fetch($md5);
        $this->assertEqual($result, [['name' => 'Drinkers club']]);

        $this->assertEqual($this->cache->count(), 2);

        $this->cache->delete($md5);
        $this->assertEqual($this->cache->count(), 1);

        $this->cache->deleteAll();
        $this->assertEqual($this->cache->count(), 0);
    }
}
