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
 * Doctrine_Template_TestCase.
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
class Doctrine_Ticket_1703_TestCase extends Doctrine_UnitTestCase
{
    public function prepareTables()
    {
        $this->tables[] = 'Ticket_1703_Content';
        $this->tables[] = 'Ticket_1703_Revision';
        parent::prepareTables();
    }

    public function testSerialization()
    {
        $revision = new Ticket_1703_Revision();
        $revision->content_id = 1;
        $revision->user_name = 'jwage';
        $foo = serialize($revision);
        $this->assertEqual(1, $revision->content_id);
    }
}

class Ticket_1703_Content extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->hasColumn('id', 'integer', 4, ['type' => 'integer', 'autoincrement' => true, 'primary' => true, 'length' => '4']);
        $this->hasColumn('content', 'string', null, ['type' => 'string']);
    }

    public function setUp()
    {
        $this->hasMany('Ticket_1703_Revision as revision', ['local' => 'id',
            'foreign' => 'content_id']);
    }
}

class Ticket_1703_Revision extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->hasColumn('revision', 'integer', 4, ['type' => 'integer', 'notnull' => true, 'default' => 1, 'length' => '4', 'primary' => true]);
        $this->hasColumn('user_name', 'string', 255, ['type' => 'string', 'notnull' => true, 'length' => '255']);
        $this->hasColumn('comment', 'string', 255, ['type' => 'string', 'length' => '255']);
        $this->hasColumn('content_id', 'integer', 4, ['type' => 'integer', 'primary' => true, 'length' => '4']);
    }

    public function setUp()
    {
        $this->hasOne('Ticket_1703_Content as contentStorage', ['local' => 'content_id',
            'foreign' => 'id',
            'onDelete' => 'CASCADE']);

        $timestampable0 = new Doctrine_Template_Timestampable(['update' => ['disabled' => true]]);
        $this->actAs($timestampable0);
    }
}
