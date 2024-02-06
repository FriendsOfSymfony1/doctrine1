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
 * Doctrine_Ticket_1365_TestCase.
 *
 * @author      David Stendardi <david.stendardi@adenclassifieds.com>
 *
 * @category    Query
 *
 * @see        www.doctrine-project.org
 *
 * @internal
 *
 * @coversNothing
 */
class Doctrine_Ticket_1365_TestCase extends Doctrine_UnitTestCase
{
    public function testInit()
    {
        $this->dbh = new Doctrine_Adapter_Mock('mysql');
        $this->conn = Doctrine_Manager::getInstance()->openConnection($this->dbh);

        $this->conn->setCharset('utf8');
        $this->conn->setAttribute(Doctrine_Core::ATTR_USE_NATIVE_ENUM, true);
    }

    public function prepareData()
    {
    }

    public function prepareTables()
    {
        $this->tables = [];
        $this->tables[] = 'T1365_Person';
        $this->tables[] = 'T1365_Skill';
        $this->tables[] = 'T1365_PersonHasSkill';

        parent::prepareTables();
    }

    public function testTicket()
    {
        $q = Doctrine_Query::create()
            ->select('s.*, phs.*')
            ->from('T1365_Skill s')
            ->leftJoin('s.T1365_PersonHasSkill phs')
            ->where('phs.value0 > phs.value1')
        ;

        $this->assertEqual(
            $q->getSqlQuery(),
            'SELECT l.id AS l__id, l.name AS l__name, '.
            'l2.id AS l2__id, l2.fk_person_id AS l2__fk_person_id, l2.fk_skill_id AS l2__fk_skill_id, l2.value0 AS l2__value0, l2.value1 AS l2__value1 '.
            'FROM la__skill l LEFT JOIN la__person_has_skill l2 ON l.id = l2.fk_skill_id '.
            'WHERE (l2.value0 > l2.value1)'
        );
    }
}

class T1365_Person extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('la__person');

        $this->hasColumn('name', 'string', 255);
    }

    public function setUp()
    {
        $this->hasMany('T1365_PersonHasSkill', ['local' => 'id', 'foreign' => 'fk_person_id']);
    }
}

class T1365_Skill extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('la__skill');

        $this->hasColumn('name', 'string', 255);
    }

    public function setUp()
    {
        $this->hasMany('T1365_PersonHasSkill', ['local' => 'id', 'foreign' => 'fk_skill_id']);
    }
}

class T1365_PersonHasSkill extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('la__person_has_skill');

        $this->hasColumn('fk_person_id', 'integer', 8, [
            'type' => 'integer', 'length' => '8',
        ]);

        $this->hasColumn('fk_skill_id', 'integer', 8, [
            'type' => 'integer', 'length' => '8',
        ]);

        $this->hasColumn('value0', 'enum', 3, [
            'type' => 'enum', 'values' => [
                0 => '0', 1 => '1', 2 => '2', 3 => '3',
            ], 'default' => 0, 'notnull' => true, 'length' => '3',
        ]);

        $this->hasColumn('value1', 'enum', 3, [
            'type' => 'enum', 'values' => [
                0 => '0', 1 => '1', 2 => '2', 3 => '3',
            ], 'default' => 0, 'notnull' => true, 'length' => '3',
        ]);
    }

    public function setUp()
    {
        $this->hasOne('T1365_Person', ['local' => 'fk_person_id', 'foreign' => 'id']);
        $this->hasOne('T1365_Skill', ['local' => 'fk_skill_id', 'foreign' => 'id']);
    }
}
