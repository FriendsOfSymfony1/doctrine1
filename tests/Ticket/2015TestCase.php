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
 * Doctrine_Ticket_2015_TestCase.
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
class Doctrine_Ticket_2015_TestCase extends Doctrine_UnitTestCase
{
    public function prepareData()
    {
        $deer = new mkAnimal();
        $deer->title = 'Cervus Elaphus';
        $deer->save();

        $beech = new mkPlant();
        $beech->title = 'Fagus sylvatica';
        $beech->save();
    }

    public function testColumnAggregation()
    {
        $animal = Doctrine_Core::getTable('mkNode')->findOneById(1);
        $this->assertTrue($animal instanceof mkAnimal);

        $plant = Doctrine_Core::getTable('mkOrganism')->findOneById(2);
        $this->assertTrue($plant instanceof mkPlant);
    }

    public function prepareTables()
    {
        $this->tables = [
            'mkNode',
            'mkOrganism',
            'mkAnimal',
        ];

        parent::prepareTables();
    }
}

class mkNode extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('mk_node');
        $this->hasColumn('id', 'integer', 4, ['type' => 'integer', 'autoincrement' => true, 'primary' => true, 'length' => 4]);
        $this->hasColumn('title', 'string', 255);
        $this->hasColumn('type', 'string', 50);
        $this->hasColumn('sub_type', 'string', 50);

        $this->setSubclasses([
            'mkOrganism' => [
                'type' => 'organism',
            ],
            'mkAnimal' => [
                'type' => 'organism',
                'sub_type' => 'animal',
            ],
            'mkPlant' => [
                'type' => 'organism',
                'sub_type' => 'plant',
            ],
        ]);
    }
}

class mkOrganism extends mkNode
{
}

class mkAnimal extends mkOrganism
{
}

class mkPlant extends mkOrganism
{
}
