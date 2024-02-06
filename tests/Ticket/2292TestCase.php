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
 * Doctrine_Ticket_2292_TestCase.
 *
 * @author      Miloslav Kmeť <miloslav.kmet@gmail.com>
 *
 * @category    Object Relational Mapping
 *
 * @see        www.doctrine-project.org
 *
 * @internal
 *
 * @coversNothing
 */
class Doctrine_Ticket_2292_TestCase extends Doctrine_UnitTestCase
{
    public function prepareTables()
    {
        $this->tables = [];
        $this->tables[] = 'mkArticle';
        $this->tables[] = 'mkContent';
        parent::prepareTables();
    }

    public function prepareData()
    {
    }

    public function testOwningSideRelationToArray()
    {
        $article = new mkArticle();

        $this->assertEqual($article->content->toArray(false), ['id' => null, 'body' => null]);
    }
}

class mkArticle extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('mk_article');
        $this->hasColumn('id', 'integer', 4, ['type' => 'integer', 'autoincrement' => true, 'primary' => true, 'length' => 4]);
        $this->hasColumn('title', 'string', 200);
    }

    public function setup()
    {
        $this->hasOne('mkContent as content', ['local' => 'id',
            'foreign' => 'id',
            'owningSide' => false]);
    }
}

class mkContent extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('mk_content');
        $this->hasColumn('id', 'integer', 4, ['type' => 'integer', 'autoincrement' => false, 'primary' => true, 'length' => 4]);
        $this->hasColumn('body', 'string');
    }

    public function setup()
    {
        $this->hasOne('mkArticle as article', ['local' => 'id',
            'foreign' => 'id',
            'owningSide' => true]);
    }
}
