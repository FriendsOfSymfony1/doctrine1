<?php

class Doctrine_Ticket_GH134_TestCase extends Doctrine_UnitTestCase
{
    public function test_hydrateArray_identifierOfRelations()
    {
        $query = Doctrine_Query::create()
            ->select('u.id, e.address as aliasAddress')
            ->from('User u')
            ->innerJoin('u.Email e')
        ;

        $results = $query->execute(array(), Doctrine_Core::HYDRATE_ARRAY);

        $expectedSql = 'SELECT e.id AS e__id, e2.id AS e2__id, e2.address AS e2__0 FROM entity e INNER JOIN email e2 ON e.email_id = e2.id WHERE (e.type = 0)';

        $this->assertEqual($expectedSql, $query->getSqlQuery());

        $expected = array (
            'id' => '4',
            'aliasAddress' => 'zYne@example.com',
            'Email' => array (
                'id' => 1,
                'aliasAddress' => 'zYne@example.com',
            ),
        );

        $this->assertEqual($expected, $results[0]);
        $this->assertEqual(count($this->users), count($results));
    }

    public function test_hydrateArrayShallow_identifierOfRelations()
    {
        $query = Doctrine_Query::create()
            ->select('u.id, e.address as aliasAddress')
            ->from('User u')
            ->innerJoin('u.Email e')
        ;

        $results = $query->execute(array(), Doctrine_Core::HYDRATE_ARRAY_SHALLOW);

        $expectedSql = 'SELECT e.id AS e__id, e2.address AS e2__0 FROM entity e INNER JOIN email e2 ON e.email_id = e2.id WHERE (e.type = 0)';

        $this->assertEqual($expectedSql, $query->getSqlQuery());

        $expected = array (
            'id' => '4',
            'aliasAddress' => 'zYne@example.com',
        );

        $this->assertEqual($expected, $results[0]);
        $this->assertEqual(count($this->users), count($results));
    }

    public function test_hydrateScalar_identifierOfRelations()
    {
        $query = Doctrine_Query::create()
            ->select('u.id, e.address as aliasAddress')
            ->from('User u')
            ->innerJoin('u.Email e')
        ;

        $results = $query->execute(array(), Doctrine_Core::HYDRATE_SCALAR);

        $expectedSql = 'SELECT e.id AS e__id, e2.address AS e2__0 FROM entity e INNER JOIN email e2 ON e.email_id = e2.id WHERE (e.type = 0)';

        $this->assertEqual($expectedSql, $query->getSqlQuery());

        $expected = array (
            'u_id' => '4',
            'e_aliasAddress' => 'zYne@example.com',
        );

        $this->assertEqual($expected, $results[0]);
        $this->assertEqual(count($this->users), count($results));
    }

    private function doTestAliasWithSameNameAsIdentifiers($hydrateType, $checkArrayIndex)
    {
        $query = Doctrine_Query::create()
            ->select('99 as id, u.id as aliasId')
            ->from('User u')
        ;

        $results = $query->execute(array(), $hydrateType);

        $this->assertEqual(99, $results[0][$checkArrayIndex]);
    }

    public function test_hydrateScalar_aliasWithSameNameAsIdentifiers_willKeepOverwriteIdentifierByAlias()
    {
        $hydrateType = Doctrine_Core::HYDRATE_SCALAR;
        $checkArrayIndex = 'u_id';

        $this->doTestAliasWithSameNameAsIdentifiers($hydrateType, $checkArrayIndex);
    }

    public function test_hydrateArrayShallow_aliasWithSameNameAsIdentifiers_willKeepOverwriteIdentifierByAlias()
    {
        $hydrateType = Doctrine_Core::HYDRATE_ARRAY_SHALLOW;
        $checkArrayIndex = 'id';

        $this->doTestAliasWithSameNameAsIdentifiers($hydrateType, $checkArrayIndex);
    }

    public function test_hydrateArray_aliasWithSameNameAsIdentifiers_willKeepOverwriteIdentifierByAlias()
    {
        $hydrateType = Doctrine_Core::HYDRATE_ARRAY;
        $checkArrayIndex = 'id';

        $this->doTestAliasWithSameNameAsIdentifiers($hydrateType, $checkArrayIndex);
    }
}
