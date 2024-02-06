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
 * Doctrine_Ticket_DC82_TestCase.
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
class Doctrine_Ticket_DC82_TestCase extends Doctrine_UnitTestCase
{
    public function testTest()
    {
        $this->dbh = new Doctrine_Adapter_Mock('pgsql');
        $this->conn = $this->manager->openConnection($this->dbh);

        $sql = $this->conn->export->exportClassesSql(['Ticket_DC82_Article']);
        $this->assertEqual($sql, [
            'CREATE UNIQUE INDEX model_unique_title ON ticket__d_c82__article (title) WHERE deleted = false',
            "CREATE TABLE ticket__d_c82__article (id BIGSERIAL, title VARCHAR(128) NOT NULL UNIQUE, deleted BOOLEAN DEFAULT 'false' NOT NULL, PRIMARY KEY(id))",
        ]);
    }
}

class Ticket_DC82_Article extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->hasColumn('title', 'string', 128, ['notnull', 'unique' => ['where' => 'deleted = false']]);
        $this->hasColumn('deleted', 'boolean', 1, ['notnull', 'default' => false]);
        $this->index('model_unique_title', ['fields' => ['title'], 'where' => 'deleted = false', 'type' => 'unique']);
    }
}
