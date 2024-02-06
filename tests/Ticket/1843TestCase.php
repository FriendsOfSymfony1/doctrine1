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
 * Doctrine_Ticket_1843_TestCase.
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
class Doctrine_Ticket_1843_TestCase extends Doctrine_UnitTestCase
{
    public function prepareTables()
    {
        $this->tables[] = 'Ticket_1843_User';
        parent::prepareTables();
    }

    public function testTest()
    {
        Doctrine_Manager::getInstance()->setAttribute(Doctrine_Core::ATTR_VALIDATE, Doctrine_Core::VALIDATE_ALL);
        $user = new Ticket_1843_User();
        $user->username = 'jwage';
        $user->password = 'changeme';

        $this->assertTrue($user->isValid());
        $user->save();

        $check = [
            'preSave' => 1,
            'preInsert' => 1,
            'postInsert' => 1,
            'postSave' => 1,
        ];
        $this->assertEqual($check, $user->hooks);
        $user->hooks = [];

        $check = [
            'preSave' => 1,
            'preUpdate' => 1,
            'postUpdate' => 1,
            'postSave' => 1,
        ];
        $user->username = 'test';
        $user->save();
        $this->assertEqual($check, $user->hooks);

        Doctrine_Manager::getInstance()->setAttribute(Doctrine_Core::ATTR_VALIDATE, Doctrine_Core::VALIDATE_NONE);
    }
}

class Ticket_1843_User extends Doctrine_Record
{
    public $hooks = [];

    public function setTableDefinition()
    {
        $this->hasColumn('username', 'string', 255);
        $this->hasColumn('password', 'string', 255);
    }

    public function preSave($event)
    {
        $num = $this->hooks[__FUNCTION__] ?? 0;
        $this->hooks[__FUNCTION__] = $num + 1;
    }

    public function postSave($event)
    {
        $num = $this->hooks[__FUNCTION__] ?? 0;
        $this->hooks[__FUNCTION__] = $num + 1;
    }

    public function preInsert($event)
    {
        $num = $this->hooks[__FUNCTION__] ?? 0;
        $this->hooks[__FUNCTION__] = $num + 1;
    }

    public function postInsert($event)
    {
        $num = $this->hooks[__FUNCTION__] ?? 0;
        $this->hooks[__FUNCTION__] = $num + 1;
    }

    public function preUpdate($event)
    {
        $num = $this->hooks[__FUNCTION__] ?? 0;
        $this->hooks[__FUNCTION__] = $num + 1;
    }

    public function postUpdate($event)
    {
        $num = $this->hooks[__FUNCTION__] ?? 0;
        $this->hooks[__FUNCTION__] = $num + 1;
    }

    public function preDelete($event)
    {
        $num = $this->hooks[__FUNCTION__] ?? 0;
        $this->hooks[__FUNCTION__] = $num + 1;
    }

    public function postDelete($event)
    {
        $num = $this->hooks[__FUNCTION__] ?? 0;
        $this->hooks[__FUNCTION__] = $num + 1;
    }

    public function setUp()
    {
        $this->actAs('Timestampable');
    }
}
