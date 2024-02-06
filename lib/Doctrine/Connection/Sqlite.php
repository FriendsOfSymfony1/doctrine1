<?php
/*
 *  $Id: Sqlite.php 7490 2010-03-29 19:53:27Z jwage $
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
 * Doctrine_Connection_Sqlite.
 *
 * @author      Konsta Vesterinen <kvesteri@cc.hut.fi>
 * @author      Lukas Smith <smith@pooteeweet.org> (PEAR MDB2 library)
 *
 * @see        www.doctrine-project.org
 */
class Doctrine_Connection_Sqlite extends Doctrine_Connection_Common
{
    /**
     * @var string the name of this connection driver
     */
    protected $driverName = 'Sqlite';

    /**
     * the constructor.
     */
    public function __construct(Doctrine_Manager $manager, $adapter)
    {
        $this->supported = ['sequences' => 'emulated',
            'indexes' => true,
            'affected_rows' => true,
            'summary_functions' => true,
            'order_by_text' => true,
            'current_id' => 'emulated',
            'limit_queries' => true,
            'LOBs' => true,
            'replace' => true,
            'transactions' => true,
            'savepoints' => false,
            'sub_selects' => true,
            'auto_increment' => true,
            'primary_key' => true,
            'result_introspection' => false, // not implemented
            'prepared_statements' => 'emulated',
            'identifier_quoting' => true,
            'pattern_escaping' => false,
        ];
        parent::__construct($manager, $adapter);

        if ($this->isConnected) {
            // PHP8.1 require default to true to keep BC
            // https://www.php.net/manual/en/migration81.incompatible.php#migration81.incompatible.pdo.sqlite
            // Can be overwritten by user later
            $this->dbh->setAttribute(PDO::ATTR_STRINGIFY_FETCHES, true);

            $this->dbh->sqliteCreateFunction('mod', ['Doctrine_Expression_Sqlite', 'modImpl'], 2);
            $this->dbh->sqliteCreateFunction('concat', ['Doctrine_Expression_Sqlite', 'concatImpl']);
            $this->dbh->sqliteCreateFunction('md5', 'md5', 1);
            $this->dbh->sqliteCreateFunction('now', ['Doctrine_Expression_Sqlite', 'nowImpl'], 0);
        }
    }

    /**
     * initializes database functions missing in sqlite.
     *
     * @see Doctrine_Expression
     *
     * @return bool
     */
    public function connect()
    {
        if ($this->isConnected) {
            return;
        }

        // If customer configure it
        $hasConfigureStringify = (isset($this->pendingAttributes[Doctrine_Core::ATTR_STRINGIFY_FETCHES]));

        $connected = parent::connect();

        if (!$hasConfigureStringify) {
            // PHP8.1 require default to true to keep BC
            // https://www.php.net/manual/en/migration81.incompatible.php#migration81.incompatible.pdo.sqlite
            // Can be overwritten by user later
            $this->dbh->setAttribute(PDO::ATTR_STRINGIFY_FETCHES, true);
        }

        $this->dbh->sqliteCreateFunction('mod', ['Doctrine_Expression_Sqlite', 'modImpl'], 2);
        $this->dbh->sqliteCreateFunction('concat', ['Doctrine_Expression_Sqlite', 'concatImpl']);
        $this->dbh->sqliteCreateFunction('md5', 'md5', 1);
        $this->dbh->sqliteCreateFunction('now', ['Doctrine_Expression_Sqlite', 'nowImpl'], 0);

        return $connected;
    }

    /**
     * createDatabase.
     */
    public function createDatabase()
    {
        if (!$dsn = $this->getOption('dsn')) {
            throw new Doctrine_Connection_Exception('You must create your Doctrine_Connection by using a valid Doctrine style dsn in order to use the create/drop database functionality');
        }

        $info = $this->getManager()->parseDsn($dsn);

        $this->export->createDatabase($info['database']);
    }

    /**
     * dropDatabase.
     */
    public function dropDatabase()
    {
        if (!$dsn = $this->getOption('dsn')) {
            throw new Doctrine_Connection_Exception('You must create your Doctrine_Connection by using a valid Doctrine style dsn in order to use the create/drop database functionality');
        }

        $info = $this->getManager()->parseDsn($dsn);

        $this->export->dropDatabase($info['database']);
    }
}
