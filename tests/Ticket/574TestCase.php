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
 * Doctrine_Ticket_574_TestCase.
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
class Doctrine_Ticket_574_TestCase extends Doctrine_UnitTestCase
{
    /**
     * prepareData.
     */
    public function prepareData()
    {
        for ($i = 0; $i < 10; ++$i) {
            $oAuthor = new Author();
            $oAuthor->book_id = $i;
            $oAuthor->name = "Author {$i}";
            $oAuthor->save();
        }
    }

    /**
     * prepareTables.
     */
    public function prepareTables()
    {
        $this->tables = [];
        $this->tables[] = 'Author';
        $this->tables[] = 'Book';

        parent::prepareTables();
    }

    /**
     * Test the existence expected indexes.
     */
    public function testTicket()
    {
        $q = new Doctrine_Query();

        // simple query with 1 column selected
        $cAuthors = $q->select('book_id')->from('Author')->groupBy('book_id')->where('book_id = 2')->execute();

        // simple query, with 1 join and all columns selected
        $cAuthors = $q->from('Author, Author.Book')->execute();

        foreach ($cAuthors as $oAuthor) {
            if (!$oAuthor->name) {
                $this->fail('Querying the same table multiple times triggers hydration/caching(?) bug');
            }
        }
    }
}
