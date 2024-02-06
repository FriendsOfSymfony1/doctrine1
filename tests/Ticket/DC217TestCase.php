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
 * Doctrine_Ticket_DC217_TestCase.
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
class Doctrine_Ticket_DC217_TestCase extends Doctrine_UnitTestCase
{
    public function prepareTables()
    {
        $this->tables[] = 'Ticket_DC217_Industry';
        parent::prepareTables();
    }

    public function testTest()
    {
        $o = new Ticket_DC217_Industry();
        $o->name = 'test';
        // $o->parent_id = null;
        $o->save();
    }
}

class Ticket_DC217_Industry extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->hasColumn('id', 'integer', 4, [
            'type' => 'integer',
            'primary' => true,
            'autoincrement' => true,
            'length' => '4',
        ]);

        $this->hasColumn('parent_id', 'integer', 4, [
            'type' => 'integer',
            'notnull' => false,
            'length' => '4',
        ]);

        $this->hasColumn('name', 'string', 30, [
            'type' => 'string',
            'notnull' => true,
            'length' => '30',
        ]);
    }

    public function setUp()
    {
        $this->hasOne('Ticket_DC217_Industry as ParentIndustry', [
            'local' => 'parent_id',
            'foreign' => 'id']);

        $this->hasMany('Ticket_DC217_Industry as ChildIndustries', [
            'local' => 'id',
            'foreign' => 'parent_id']);
    }
}
