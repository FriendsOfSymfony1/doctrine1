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
 * Doctrine_Ticket_1865_TestCase.
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
class Doctrine_Ticket_1865_TestCase extends Doctrine_UnitTestCase
{
    public function prepareData()
    {
    }

    public function prepareTables()
    {
        $this->tables[] = 'Ticket_1865_User';
        $this->tables[] = 'Ticket_1865_Profile';
        parent::prepareTables();
    }

    public function testSaveWithRelated()
    {
        $user = new Ticket_1865_User();
        $user->name = 'hello';
        $user->loginname = 'world';
        $user->password = '!';
        $user->Profile;
        $user->save();

        $this->assertNotEqual($user->Profile->id, null); // Ticket_1865_Profile is saved
        $user->delete();
    }

    public function testSaveWithRelatedWithPreInsert()
    {
        $user = new Ticket_1865_User();
        $user->name = 'hello';
        $user->loginname = 'world';
        $user->password = '!';
        $user->save(); // $user->Ticket_1865_Profile must be called in Ticket_1865_User::preInsert

        $this->assertNotEqual($user->Profile->id, null); // Ticket_1865_Profile is NOT saved - test failure
        $user->delete();
    }
}

class Ticket_1865_Profile extends Doctrine_Record
{
    public function setUp()
    {
        $this->hasOne('Ticket_1865_User as User', ['local' => 'id', 'foreign' => 'id', 'onDelete' => 'CASCADE']);
    }

    public function setTableDefinition()
    {
        $this->hasColumn('id', 'integer', 20, ['autoincrement', 'primary']);
        $this->hasColumn('user_id', 'integer', 20, ['notnull', 'unique']);
        $this->hasColumn('icq', 'string', 9, ['notnull']);
    }
}

class Ticket_1865_User extends Doctrine_Record
{
    public function setUp()
    {
        $this->hasOne('Ticket_1865_Profile as Profile', ['local' => 'id', 'foreign' => 'user_id']);
    }

    public function setTableDefinition()
    {
        $this->hasColumn('id', 'integer', 20, ['autoincrement', 'primary']);
        $this->hasColumn('name', 'string', 50);
        $this->hasColumn('loginname', 'string', 20, ['unique']);
        $this->hasColumn('password', 'string', 16);
    }

    public function preInsert($event)
    {
        $this->Profile;
        $this->Profile->icq = '';
    }
}
