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
 * Doctrine_Ticket_1280_TestCase.
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
class Doctrine_Ticket_1280_TestCase extends Doctrine_UnitTestCase
{
    public function prepareTables()
    {
        // $this->tables = array();
        $this->tables[] = 'Ticket_1280_User';
        $this->tables[] = 'Ticket_1280_Group';
        parent::prepareTables();
    }

    public function testTicket()
    {
        $group = new Ticket_1280_Group();
        $group->name = 'Core Dev';
        $group->save();

        $user = new Ticket_1280_User();
        $user->Group = $group;
        $user->name = 'jwage';
        $user->save();

        $this->assertEqual($user->group_id, $group->id);

        try {
            $user->Group = null;
            $user->save();

            $this->assertEqual($user->group_id, null);

            $this->pass();
        } catch (Doctrine_Exception $e) {
            $this->fail($e->getMessage());
        }
    }
}

class Ticket_1280_User extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->hasColumn('group_id', 'integer', 20, [
            'notnull' => false, 'default' => null,
        ]);
        $this->hasColumn('name', 'string', 255);
    }

    public function setUp()
    {
        $this->hasOne('Ticket_1280_Group as Group', [
            'local' => 'group_id',
            'foreign' => 'id',
        ]);
    }
}

class Ticket_1280_Group extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->hasColumn('name', 'string', 255);
    }

    public function setUp()
    {
        $this->hasMany('Ticket_1280_User as Users', [
            'local' => 'id',
            'foreign' => 'group_id',
        ]);
    }
}
