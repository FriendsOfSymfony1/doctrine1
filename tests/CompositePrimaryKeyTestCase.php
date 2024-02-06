<?php

/**
 * @internal
 *
 * @coversNothing
 */
class Doctrine_Composite_PrimaryKey_TestCase extends Doctrine_UnitTestCase
{
    public function prepareData()
    {
    }

    public function prepareTables()
    {
        $this->tables = [];
        $this->tables[] = 'CPK_Test';
        $this->tables[] = 'CPK_Test2';
        $this->tables[] = 'CPK_Association';

        parent::prepareTables();
    }
}
