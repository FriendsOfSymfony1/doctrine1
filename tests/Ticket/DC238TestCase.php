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
 * Doctrine_Ticket_DC238_TestCase.
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
class Doctrine_Ticket_DC238_TestCase extends Doctrine_UnitTestCase
{
    public function testTest()
    {
        $conn = Doctrine_Manager::connection('sqlite::memory:', 'test', false);
        $conn->export->exportClasses(['Ticket_DC238_User']);

        $user = new Ticket_DC238_User();
        $user->username = 'jwage';
        $user->password = 'changeme';
        $user->save();

        $profiler = new Doctrine_Connection_Profiler();
        $conn->addListener($profiler);

        $cacheDriver = new Doctrine_Cache_Array();
        $q = Doctrine_Core::getTable('Ticket_DC238_User')
            ->createQuery('u')
            ->useResultCache($cacheDriver, 3600, 'user_query')
        ;

        $this->assertEqual(0, $profiler->count());

        $this->assertEqual(1, $q->count());

        $this->assertEqual(1, $profiler->count());

        $this->assertEqual(1, $q->count());

        $this->assertEqual(1, $profiler->count());

        $this->assertTrue($cacheDriver->contains('user_query_count'));
    }
}

class Ticket_DC238_User extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->hasColumn('username', 'string', 255);
        $this->hasColumn('password', 'string', 255);
    }
}
