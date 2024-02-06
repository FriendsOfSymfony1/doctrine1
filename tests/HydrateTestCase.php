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

/**
 * Doctrine_Hydrate_TestCase.
 *
 * @author      Konsta Vesterinen <kvesteri@cc.hut.fi>
 *
 * @category    Object Relational Mapping
 *
 * @see        www.doctrine-project.org
 *
 * @internal
 *
 * @coversNothing
 */
class Doctrine_Hydrate_TestCase extends Doctrine_UnitTestCase
{
    protected $testData1 = [
        [
            'e' => ['id' => 1, 'name' => 'zYne'],
            'p' => ['id' => 1, 'phonenumber' => '123 123', 'user_id' => 1],
        ],
        [
            'e' => ['id' => 2, 'name' => 'John'],
            'p' => ['id' => 2, 'phonenumber' => '222 222', 'user_id' => 2],
        ],
        [
            'e' => ['id' => 2, 'name' => 'John'],
            'p' => ['id' => 3, 'phonenumber' => '343 343', 'user_id' => 2],
        ],
        [
            'e' => ['id' => 3, 'name' => 'Arnold'],
            'p' => ['id' => 4, 'phonenumber' => '333 333', 'user_id' => 3],
        ],
        [
            'e' => ['id' => 4, 'name' => 'Arnold'],
            'p' => ['id' => null, 'phonenumber' => null, 'user_id' => null],
        ],
    ];

    public function prepareData()
    {
    }

    public function testHydrateHooks()
    {
        $user = new User();
        $user->getTable()->addRecordListener(new HydrationListener());

        $user->name = 'zYne';
        $user->save();

        $this->conn->clear();

        $user = Doctrine_Query::create()->from('User u')->fetchOne();

        $this->assertEqual($user->name, 'ZYNE');
        $this->assertEqual($user->password, 'DEFAULT PASS');
    }
}

class HydrationListener extends Doctrine_Record_Listener
{
    public function preHydrate(Doctrine_Event $event)
    {
        $data = $event->data;
        $data['password'] = 'default pass';

        $event->data = $data;
    }

    public function postHydrate(Doctrine_Event $event)
    {
        foreach ($event->data as $key => $value) {
            $event->data[$key] = strtoupper((string) $value);
        }
    }
}

class Doctrine_Hydrate_Mock extends Doctrine_Hydrator_Abstract
{
    protected $data;

    public function setData($data)
    {
        $this->data = $data;
    }

    public function hydrateResultSet($stmt)
    {
        return true;
    }
}
