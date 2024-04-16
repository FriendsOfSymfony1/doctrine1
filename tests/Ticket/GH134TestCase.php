<?php

class Doctrine_Ticket_GH134_TestCase extends Doctrine_UnitTestCase
{
    private function doTestWithAllColumnsAliased($hydrateType, $expectedKeys, $expectedRelationKeys = null)
    {
        try {
            $query = Doctrine_Query::create()
                ->select('u.id, e.address as aliasAddress')
                ->from('User u')
                ->innerJoin('u.Email e')
            ;

            $results = $query->execute(array(), $hydrateType);

            $expectedSql = 'SELECT e.id AS e__id, e2.address AS e2__0 FROM entity e INNER JOIN email e2 ON e.email_id = e2.id WHERE (e.type = 0)';

            $this->assertEqual($expectedSql, $query->getSqlQuery());
            $this->assertEqual($expectedKeys, array_keys($results[0]));
            if (null !== $expectedRelationKeys) {
                foreach ($expectedRelationKeys as $relationName => $relationKeys) {
                    $this->assertEqual($relationKeys, array_keys($results[0][$relationName]));
                }
            }
            $this->assertEqual(count($this->users), count($results));

            $this->pass();
        } catch (Exception $e) {
            $this->fail($e->getMessage());
        }
    }

    public function test_hydrateScalar_withAllColumnsAliased_thenResultsHasAllRecords()
    {
        $hydrateType = Doctrine_Core::HYDRATE_SCALAR;
        $expectedKeys = array('u_id', 'e_aliasAddress');

        $this->doTestWithAllColumnsAliased($hydrateType, $expectedKeys);
    }

    public function test_hydrateArrayShallow_withAllColumnsAliased_thenResultsHasAllRecords()
    {
        $hydrateType = Doctrine_Core::HYDRATE_ARRAY_SHALLOW;
        $expectedKeys = array('id', 'aliasAddress');

        $this->doTestWithAllColumnsAliased($hydrateType, $expectedKeys);
    }

    public function test_hydrateArray_withAllColumnsAliased_thenResultsHasAllRecords()
    {
        $hydrateType = Doctrine_Core::HYDRATE_ARRAY;
        $expectedKeys = array('id', 'aliasAddress', 'Email');
        $expectedRelationKeys = array(
            'Email' => array('id', 'aliasAddress'),
        );

        $this->doTestWithAllColumnsAliased($hydrateType, $expectedKeys, $expectedRelationKeys);
    }
}
