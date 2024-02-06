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
 * Doctrine_Migration_Base_TestCase.
 *
 * @author      Dan Bettles <danbettles@yahoo.co.uk>
 *
 * @category    Object Relational Mapping
 *
 * @see        www.doctrine-project.org
 *
 * @internal
 *
 * @coversNothing
 */
class Doctrine_Migration_Base_TestCase extends UnitTestCase
{
    public function tearDown()
    {
        Doctrine_Migration_Base::setDefaultTableOptions([]);

        parent::tearDown();
    }

    public function testIsAbstract()
    {
        $reflectionClass = new ReflectionClass('Doctrine_Migration_Base');
        $this->assertTrue($reflectionClass->isAbstract());
    }

    public function testByDefaultHasNoDefaultTableOptions()
    {
        $this->assertEqual([], Doctrine_Migration_Base::getDefaultTableOptions());
    }

    public function testGetdefaulttableoptionsReturnsTheOptionsSetWithSetdefaulttableoptions()
    {
        $fixtures = [
            [['charset' => 'utf8']],
            [[]],
            ['type' => 'INNODB', 'charset' => 'utf8', 'collate' => 'utf8_unicode_ci'],
        ];

        foreach ($fixtures as $fixture) {
            Doctrine_Migration_Base::setDefaultTableOptions($fixture);
            $this->assertEqual($fixture, Doctrine_Migration_Base::getDefaultTableOptions());
        }
    }

    public function testCreatetableMergesTheDefaultTableOptionsWithTheSpecifiedOptions()
    {
        $fixtures = [
            [
                'default' => ['type' => 'INNODB', 'charset' => 'utf8', 'collate' => 'utf8_unicode_ci'],
                'user' => [],
                'expected' => ['type' => 'INNODB', 'charset' => 'utf8', 'collate' => 'utf8_unicode_ci'],
            ],
            [
                'default' => ['type' => 'INNODB', 'charset' => 'utf8', 'collate' => 'utf8_unicode_ci'],
                'user' => ['charset' => 'latin1', 'collate' => 'latin1_general_ci'],
                'expected' => ['type' => 'INNODB', 'charset' => 'latin1', 'collate' => 'latin1_general_ci'],
            ],
        ];

        foreach ($fixtures as $fixture) {
            Doctrine_Migration_Base_TestCase_TestBase01::setDefaultTableOptions($fixture['default']);
            $migration = new Doctrine_Migration_Base_TestCase_TestBase01();
            $migration->createTable('anything', [], $fixture['user']);
            $this->assertEqual($fixture['expected'], $migration->mergedOptions);
        }
    }
}

class Doctrine_Migration_Base_TestCase_TestBase01 extends Doctrine_Migration_Base
{
    public $mergedOptions = [];

    public function table($upDown, $tableName, array $fields = [], array $options = [])
    {
        $this->mergedOptions = $options;
    }
}
