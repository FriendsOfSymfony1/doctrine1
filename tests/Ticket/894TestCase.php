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
 * Doctrine_Ticket_894_TestCase.
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
class Doctrine_Ticket_894_TestCase extends Doctrine_UnitTestCase
{
    public function prepareTables()
    {
        $this->tables = [];
        $this->tables[] = 'T894_Day';
        parent::prepareTables();
    }

    public function prepareData()
    {
    }

    public function testTicket()
    {
        $beginNumber = 1;
        $endNumber = 3;
        $query = Doctrine_Query::create()
            ->from('T894_Day d')
            ->where('d.number BETWEEN ? AND ?', [$beginNumber, $endNumber])
        ;
        $this->assertEqual(' FROM T894_Day d WHERE d.number BETWEEN ? AND ?', $query->getDql());
        $this->assertTrue(strstr($query->getSqlQuery(), 'BETWEEN ? AND ?'));
    }
}

class T894_Day extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('t894_days');
        $this->hasColumn('id', 'integer', 3, ['autoincrement' => true, 'unsigned' => true, 'primary' => true, 'notnull' => true]);
        $this->hasColumn('number', 'integer');
    }
}
