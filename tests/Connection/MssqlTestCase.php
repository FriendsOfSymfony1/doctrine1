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
 * Doctrine_Connection_Mssql_TestCase.
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
class Doctrine_Connection_Mssql_TestCase extends Doctrine_UnitTestCase
{
    public function testAlreadyExistsErrorIsSupported()
    {
        $this->assertTrue($this->exc->processErrorInfo([0, 2714, '']));

        $this->assertEqual($this->exc->getPortableCode(), Doctrine_Core::ERR_ALREADY_EXISTS);
    }

    public function testAlreadyExistsErrorIsSupported2()
    {
        $this->assertTrue($this->exc->processErrorInfo([0, 1913, '']));

        $this->assertEqual($this->exc->getPortableCode(), Doctrine_Core::ERR_ALREADY_EXISTS);
    }

    public function testValueCountOnRowErrorIsSupported()
    {
        $this->assertTrue($this->exc->processErrorInfo([0, 110, '']));

        $this->assertEqual($this->exc->getPortableCode(), Doctrine_Core::ERR_VALUE_COUNT_ON_ROW);
    }

    public function testNoSuchFieldErrorIsSupported()
    {
        $this->assertTrue($this->exc->processErrorInfo([0, 155, '']));

        $this->assertEqual($this->exc->getPortableCode(), Doctrine_Core::ERR_NOSUCHFIELD);
    }

    public function testNoSuchFieldErrorIsSupported2()
    {
        $this->assertTrue($this->exc->processErrorInfo([0, 207, '']));

        $this->assertEqual($this->exc->getPortableCode(), Doctrine_Core::ERR_NOSUCHFIELD);
    }

    public function testNoSuchTableErrorIsSupported()
    {
        $this->assertTrue($this->exc->processErrorInfo([0, 208, '']));

        $this->assertEqual($this->exc->getPortableCode(), Doctrine_Core::ERR_NOSUCHTABLE);
    }

    public function testNoSuchTableErrorIsSupported2()
    {
        $this->assertTrue($this->exc->processErrorInfo([0, 3701, '']));

        $this->assertEqual($this->exc->getPortableCode(), Doctrine_Core::ERR_NOSUCHTABLE);
    }

    public function testSyntaxErrorIsSupported()
    {
        $this->assertTrue($this->exc->processErrorInfo([0, 170, '']));

        $this->assertEqual($this->exc->getPortableCode(), Doctrine_Core::ERR_SYNTAX);
    }

    public function testInvalidNumberErrorIsSupported()
    {
        $this->assertTrue($this->exc->processErrorInfo([0, 245, '']));

        $this->assertEqual($this->exc->getPortableCode(), Doctrine_Core::ERR_INVALID_NUMBER);
    }

    public function testNotNullConstraintErrorIsSupported()
    {
        $this->assertTrue($this->exc->processErrorInfo([0, 515, '']));

        $this->assertEqual($this->exc->getPortableCode(), Doctrine_Core::ERR_CONSTRAINT_NOT_NULL);
    }

    public function testConstraintErrorIsSupported()
    {
        $this->assertTrue($this->exc->processErrorInfo([0, 547, '']));

        $this->assertEqual($this->exc->getPortableCode(), Doctrine_Core::ERR_CONSTRAINT);
    }

    public function testConstraintErrorIsSupported2()
    {
        $this->assertTrue($this->exc->processErrorInfo([0, 2627, '']));

        $this->assertEqual($this->exc->getPortableCode(), Doctrine_Core::ERR_CONSTRAINT);
    }

    public function testDivZeroErrorIsSupported()
    {
        $this->assertTrue($this->exc->processErrorInfo([0, 8134, '']));

        $this->assertEqual($this->exc->getPortableCode(), Doctrine_Core::ERR_DIVZERO);
    }
}
