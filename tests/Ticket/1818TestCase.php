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
 * Doctrine_Ticket_1818_TestCase.
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
class Doctrine_Ticket_1818_TestCase extends Doctrine_UnitTestCase
{
    public function prepareTables()
    {
        $this->tables[] = 'Ticket_1818_Foo';
        $this->tables[] = 'Ticket_1818_Bar';
        $this->tables[] = 'Ticket_1818_BarB';
        $this->tables[] = 'Ticket_1818_BarA';
        parent::prepareTables();
    }

    public function testTest()
    {
        Doctrine_Manager::getInstance()->setAttribute(Doctrine_Core::ATTR_VALIDATE, Doctrine_Core::VALIDATE_ALL);
        try {
            $foo = new Ticket_1818_Foo();
            $foo->Bar = new Ticket_1818_BarA();
            $foo->Bar->type = 'A';
            $foo->save();
            $this->pass();
        } catch (Exception $e) {
            $this->fail();
        }
        Doctrine_Manager::getInstance()->setAttribute(Doctrine_Core::ATTR_VALIDATE, Doctrine_Core::VALIDATE_NONE);
    }
}

class Ticket_1818_Foo extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->hasColumn('bar_id', 'integer', null, ['type' => 'integer']);
    }

    public function setUp()
    {
        $this->hasOne('Ticket_1818_Bar as Bar', ['local' => 'bar_id',
            'foreign' => 'id']);
    }
}

class Ticket_1818_BarB extends Ticket_1818_Bar
{
}

class Ticket_1818_BarA extends Ticket_1818_Bar
{
}

class Ticket_1818_Bar extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->hasColumn('type', 'string', null, ['type' => 'string']);

        $this->setSubClasses(['Ticket_1818_BarA' => ['type' => 'A'], 'Ticket_1818_BarB' => ['type' => 'B']]);
    }

    public function setUp()
    {
        $this->hasMany('Ticket_1818_Foo as Foos', ['local' => 'id',
            'foreign' => 'bar_id']);
    }
}
