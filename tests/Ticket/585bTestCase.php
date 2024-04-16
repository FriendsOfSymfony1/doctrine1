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
    private function doTestAliasWithSameNameAsIdentifiers($hydrateType, $checkArrayIndex)
    {
        $query = Doctrine_Query::create()
            ->select('99 as id, u.id as aliasId')
            ->from('User u')
        ;

        $results = $query->execute(array(), $hydrateType);

        $this->assertEqual(99, $results[0][$checkArrayIndex]);
    }

    public function test_hydrateScalar_aliasWithSameNameAsIdentifiers_thenResultsHasAllRecords()
    {
        $hydrateType = Doctrine_Core::HYDRATE_SCALAR;
        $checkArrayIndex = 'u_id';

        $this->doTestAliasWithSameNameAsIdentifiers($hydrateType, $checkArrayIndex);
    }

    public function test_hydrateArrayShallow_aliasWithSameNameAsIdentifiers_thenResultsHasAllRecords()
    {
        $hydrateType = Doctrine_Core::HYDRATE_ARRAY_SHALLOW;
        $checkArrayIndex = 'id';

        $this->doTestAliasWithSameNameAsIdentifiers($hydrateType, $checkArrayIndex);
    }

    public function test_hydrateArray_aliasWithSameNameAsIdentifiers_thenResultsHasAllRecords()
    {
        $hydrateType = Doctrine_Core::HYDRATE_ARRAY;
        $checkArrayIndex = 'id';

        $this->doTestAliasWithSameNameAsIdentifiers($hydrateType, $checkArrayIndex);
    }
}
