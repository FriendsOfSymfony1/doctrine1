<?php

class Doctrine_Ticket_GH134_TestCase extends Doctrine_UnitTestCase
{
    public function test_addIdentifierForSelectedRelation_withAliases()
    {
        foreach ($this->provideIdentifierAndRelationData() as [$hydrateType, $expectedSql, $expectedFirstResult]) {
            $query = Doctrine_Query::create()
                ->select('u.id, e.address as aliasAddress')
                ->from('User u')
                ->innerJoin('u.Email e')
            ;

            $results = $query->execute(array(), $hydrateType);

            $this->assertEqual($expectedSql, $query->getSqlQuery());

            $this->assertEqual($expectedFirstResult, $results[0]);
            $this->assertEqual(count($this->users), count($results));
        }
    }

    private function provideIdentifierAndRelationData()
    {
        yield [
            Doctrine_Core::HYDRATE_ARRAY,
            'SELECT e.id AS e__id, e2.id AS e2__id, e2.address AS e2__0 FROM entity e INNER JOIN email e2 ON e.email_id = e2.id WHERE (e.type = 0)',
            array (
                'id' => '4',
                'aliasAddress' => 'zYne@example.com',
                'Email' => array (
                    'id' => 1,
                    'aliasAddress' => 'zYne@example.com',
                ),
            ),
        ];

        yield [
            Doctrine_Core::HYDRATE_ARRAY_SHALLOW,
            'SELECT e.id AS e__id, e2.address AS e2__0 FROM entity e INNER JOIN email e2 ON e.email_id = e2.id WHERE (e.type = 0)',
            array (
                'id' => '4',
                'aliasAddress' => 'zYne@example.com',
            ),
        ];

        yield [
            Doctrine_Core::HYDRATE_SCALAR,
            'SELECT e.id AS e__id, e2.address AS e2__0 FROM entity e INNER JOIN email e2 ON e.email_id = e2.id WHERE (e.type = 0)',
            array (
                'u_id' => '4',
                'e_aliasAddress' => 'zYne@example.com',
            ),
        ];
    }

    public function test_addIdentifierForSelectedRelation_withoutAlias()
    {
        foreach ($this->provideIdentifierAndRelationWithoutAliasData() as [$hydrateType, $expectedSql, $expectedFirstResult]) {
            $query = Doctrine_Query::create()
                ->select('u.id, e.address')
                ->from('User u')
                ->innerJoin('u.Email e')
            ;

            $results = $query->execute(array(), $hydrateType);

            $this->assertEqual($expectedSql, $query->getSqlQuery());

            $this->assertEqual($expectedFirstResult, $results[0]);
            $this->assertEqual(count($this->users), count($results));
        }
    }

    private function provideIdentifierAndRelationWithoutAliasData()
    {
        yield [
            Doctrine_Core::HYDRATE_ARRAY,
            'SELECT e.id AS e__id, e2.id AS e2__id, e2.address AS e2__address FROM entity e INNER JOIN email e2 ON e.email_id = e2.id WHERE (e.type = 0)',
            array (
                'id' => '4',
                'Email' => array (
                    'id' => 1,
                    'address' => 'zYne@example.com',
                ),
            ),
        ];

        yield [
            Doctrine_Core::HYDRATE_ARRAY_SHALLOW,
            'SELECT e.id AS e__id, e2.address AS e2__address FROM entity e INNER JOIN email e2 ON e.email_id = e2.id WHERE (e.type = 0)',
            array (
                'id' => '4',
                'address' => 'zYne@example.com',
            ),
        ];

        yield [
            Doctrine_Core::HYDRATE_SCALAR,
            'SELECT e.id AS e__id, e2.address AS e2__address FROM entity e INNER JOIN email e2 ON e.email_id = e2.id WHERE (e.type = 0)',
            array (
                'u_id' => '4',
                'e_address' => 'zYne@example.com',
            ),
        ];
    }

    public function test_columnAliasWithSameNameAsIdentifier_willKeepOverwriteIdentifierByAlias()
    {
        foreach ($this->provideKeepOverwriteIdentifierWithAliasData() as [$hydrateType, $checkArrayIndex]) {
            $query = Doctrine_Query::create()
                ->select('99 as id, u.id as aliasId')
                ->from('User u')
            ;

            $results = $query->execute(array(), $hydrateType);

            $this->assertEqual(99, $results[0][$checkArrayIndex]);
        }
    }

    private function provideKeepOverwriteIdentifierWithAliasData()
    {
        yield [Doctrine_Core::HYDRATE_SCALAR, 'u_id'];
        yield [Doctrine_Core::HYDRATE_ARRAY, 'id'];
        yield [Doctrine_Core::HYDRATE_ARRAY_SHALLOW, 'id'];
    }
}
