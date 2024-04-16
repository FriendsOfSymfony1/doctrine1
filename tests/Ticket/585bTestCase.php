<?php
/*
 *  $Id$
 *
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 * "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR
 * A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT
 * OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL,
 * SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT
 * LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE,
 * DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY
 * THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
 * (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE
 * OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 *
 * This software consists of voluntary contributions made by many individuals
 * and is licensed under the LGPL. For more information, see
 * <http://www.doctrine-project.org>.
 */

class Doctrine_Ticket_585b_TestCase extends Doctrine_UnitTestCase
{
    private function doTestAliasWithSameNameAsIdentifiers($hydrateType, $expectedKeys, $expectedKeyValues = array())
    {
        try {
            $query = Doctrine_Query::create()
                ->select('99 as id, u.id as aliasId')
                ->from('User u')
            ;

            $results = $query->execute(array(), $hydrateType);

            $expectedSql = 'SELECT 99 AS e__0, e.id AS e__1 FROM entity e WHERE (e.type = 0)';

            $this->assertEqual($expectedSql, $query->getSqlQuery());
            $this->assertEqual($expectedKeys, array_keys($results[0]));
            foreach ($expectedKeyValues as $key => $value) {
                $this->assertEqual($value, $results[0][$key]);
            }
            $this->assertEqual(count($this->users), count($results));

            $this->pass();
        } catch (Exception $e) {
            $this->fail($e->getMessage());
        }
    }

    public function test_hydrateScalar_aliasWithSameNameAsIdentifiers_thenResultsHasAllRecords()
    {
        $hydrateType = Doctrine_Core::HYDRATE_SCALAR;
        $expectedKeys = array('u_id', 'u_aliasId');
        $expectedKeyValues = array(
            'u_id' => 99,
        );

        $this->doTestAliasWithSameNameAsIdentifiers($hydrateType, $expectedKeys, $expectedKeyValues);
    }

    public function test_hydrateArrayShallow_aliasWithSameNameAsIdentifiers_thenResultsHasAllRecords()
    {
        $hydrateType = Doctrine_Core::HYDRATE_ARRAY_SHALLOW;
        $expectedKeys = array('id', 'aliasId');
        $expectedKeyValues = array(
            'id' => 99,
        );

        $this->doTestAliasWithSameNameAsIdentifiers($hydrateType, $expectedKeys, $expectedKeyValues);
    }

    public function test_hydrateArray_aliasWithSameNameAsIdentifiers_thenResultsHasAllRecords()
    {
        $hydrateType = Doctrine_Core::HYDRATE_ARRAY;
        $expectedKeys = array('id', 'aliasId');
        $expectedKeyValues = array(
            'id' => 99,
        );

        $this->doTestAliasWithSameNameAsIdentifiers($hydrateType, $expectedKeys, $expectedKeyValues);
    }
}