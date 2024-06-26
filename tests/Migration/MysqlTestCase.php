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
 * Doctrine_Migration_TestCase
 *
 * @package     Doctrine
 * @author      Konsta Vesterinen <kvesteri@cc.hut.fi>
 * @license     http://www.opensource.org/licenses/lgpl-license.php LGPL
 * @category    Object Relational Mapping
 * @link        www.doctrine-project.org
 * @since       1.0
 * @version     $Revision$
 */
class Doctrine_Migration_Mysql_TestCase extends Doctrine_UnitTestCase
{
    private $migration;

    const TABLES = array(
        'MigrationPhonenumber',
        'MigrationUser',
        'MigrationProfile',
    );

    protected $tables = self::TABLES;

    public function setUp()
    {
        parent::setUp();

        $connection = $this->openMysqlAdditionalConnection();
        $this->resetTablesOnConnection(self::TABLES, $connection);

        $this->migration = new Doctrine_Migration('migration_classes', $connection);
    }

    public function test_afterSuccessfullMigration_willSetMigratedVersionAsCurrentVersionInMysqlDB()
    {
        $this->migration->setCurrentVersion(3);

        $this->migration->migrate(4);

        $this->assertEqual(4, $this->migration->getCurrentVersion());
    }

    public function test_afterFailedMigration_willKeepCurrentVersionInMysqlDB()
    {
        $this->migration->setCurrentVersion(0);

        try {
            $this->migration->migrate(1);

            $this->fail('migration must fail');
        } catch (Doctrine_Migration_Exception $e) {
            $this->assertEqual(0, $this->migration->getCurrentVersion());
        }
    }
}
