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
 * Doctrine_IntegrityAction_TestCase.
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
class Doctrine_IntegrityAction_TestCase extends Doctrine_UnitTestCase
{
    public function prepareData()
    {
    }

    public function prepareTables()
    {
        $this->tables = ['CascadeDeleteTest', 'CascadeDeleteRelatedTest', 'CascadeDeleteRelatedTest2'];

        parent::prepareTables();
    }

    public function testIntegrityActionsAreAddedIntoGlobalActionsArray()
    {
        $c = new CascadeDeleteTest();
        $c2 = new CascadeDeleteRelatedTest();

        $expected = ['CascadeDeleteRelatedTest' => 'CASCADE'];
        $this->assertEqual($this->manager->getDeleteActions('CascadeDeleteTest'), $expected);

        $expected = ['CascadeDeleteRelatedTest' => 'SET NULL'];
        $this->assertEqual($this->manager->getUpdateActions('CascadeDeleteTest'), $expected);
    }

    public function testOnDeleteCascadeEmulation()
    {
        $c = new CascadeDeleteTest();
        $c->name = 'c 1';
        $c->Related[]->name = 'r 1';
        $c->Related[]->name = 'r 2';
        $c->Related[0]->Related[]->name = 'r r 1';
        $c->Related[1]->Related[]->name = 'r r 2';

        $c->save();

        $this->connection->clear();

        $c = $this->conn->queryOne('FROM CascadeDeleteTest c WHERE c.id = 1');

        $c->delete();
    }
}
