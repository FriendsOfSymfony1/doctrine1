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
 * Doctrine_Export_TestCase.
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
class Doctrine_Export_TestCase extends Doctrine_UnitTestCase
{
    public function testCreateTableThrowsExceptionWithoutValidTableName()
    {
        try {
            $this->export->createTable(0, [], []);

            $this->fail();
        } catch (Doctrine_Export_Exception $e) {
            $this->pass();
        }
    }

    public function testCreateTableThrowsExceptionWithEmptyFieldsArray()
    {
        try {
            $this->export->createTable('sometable', [], []);

            $this->fail();
        } catch (Doctrine_Export_Exception $e) {
            $this->pass();
        }
    }

    public function testDropConstraintExecutesSql()
    {
        $this->export->dropConstraint('sometable', 'relevancy');

        $this->assertEqual($this->adapter->pop(), 'ALTER TABLE sometable DROP CONSTRAINT relevancy');
    }

    public function testCreateIndexExecutesSql()
    {
        $this->export->createIndex('sometable', 'relevancy', ['fields' => ['title' => [], 'content' => []]]);

        $this->assertEqual($this->adapter->pop(), 'CREATE INDEX relevancy_idx ON sometable (title, content)');
    }

    public function testDropIndexExecutesSql()
    {
        $this->export->dropIndex('sometable', 'relevancy');

        $this->assertEqual($this->adapter->pop(), 'DROP INDEX relevancy_idx');
    }

    public function testDropTableExecutesSql()
    {
        $this->export->dropTable('sometable');

        $this->assertEqual($this->adapter->pop(), 'DROP TABLE sometable');
    }

    public function testRecordIsExportedProperly()
    {
    }

    public function testExport()
    {
    }

    public function testDropDottedForeignKey()
    {
        $this->export->dropForeignKey('sometable', 'normal_foreign_key');
        $this->assertEqual($this->adapter->pop(), 'ALTER TABLE sometable DROP CONSTRAINT normal_foreign_key');

        $this->export->dropForeignKey('sometable', 'dotted.foreign.key');
        $this->assertEqual($this->adapter->pop(), 'ALTER TABLE sometable DROP CONSTRAINT dotted_foreign_key');
    }
}
