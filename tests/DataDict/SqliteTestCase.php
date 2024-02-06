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
 * Doctrine_DataDict_Sqlite_TestCase.
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
class Doctrine_DataDict_Sqlite_TestCase extends Doctrine_UnitTestCase
{
    public function testBooleanMapsToBooleanType()
    {
        $this->assertDeclarationType('boolean', 'boolean');
    }

    public function testIntegersMapToIntegerType()
    {
        $this->assertDeclarationType('tinyint', ['integer', 'boolean']);
        $this->assertDeclarationType('smallint', 'integer');
        $this->assertDeclarationType('mediumint', 'integer');
        $this->assertDeclarationType('int', 'integer');
        $this->assertDeclarationType('integer', 'integer');
        $this->assertDeclarationType('serial', 'integer');
        $this->assertDeclarationType('bigint', 'integer');
        $this->assertDeclarationType('bigserial', 'integer');
    }

    public function testBlobsMapToBlobType()
    {
        $this->assertDeclarationType('tinyblob', 'blob');
        $this->assertDeclarationType('mediumblob', 'blob');
        $this->assertDeclarationType('longblob', 'blob');
        $this->assertDeclarationType('blob', 'blob');
    }

    public function testDecimalMapsToDecimal()
    {
        $this->assertDeclarationType('decimal', 'decimal');
        $this->assertDeclarationType('numeric', 'decimal');
    }

    public function testFloatRealAndDoubleMapToFloat()
    {
        $this->assertDeclarationType('float', 'float');
        $this->assertDeclarationType('double', 'float');
        $this->assertDeclarationType('real', 'float');
    }

    public function testYearMapsToIntegerAndDate()
    {
        $this->assertDeclarationType('year', ['integer', 'date']);
    }

    public function testGetNativeDefinitionSupportsIntegerType()
    {
        $a = ['type' => 'integer', 'length' => 20, 'fixed' => false];

        $this->assertEqual($this->dataDict->getNativeDeclaration($a), 'INTEGER');

        $a['length'] = 4;

        $this->assertEqual($this->dataDict->getNativeDeclaration($a), 'INTEGER');

        $a['length'] = 2;

        $this->assertEqual($this->dataDict->getNativeDeclaration($a), 'INTEGER');
    }

    public function testGetNativeDefinitionSupportsFloatType()
    {
        $a = ['type' => 'float', 'length' => 20, 'fixed' => false];

        $this->assertEqual($this->dataDict->getNativeDeclaration($a), 'DOUBLE');
    }

    public function testGetNativeDefinitionSupportsBooleanType()
    {
        $a = ['type' => 'boolean', 'fixed' => false];

        $this->assertEqual($this->dataDict->getNativeDeclaration($a), 'INTEGER');
    }

    public function testGetNativeDefinitionSupportsDateType()
    {
        $a = ['type' => 'date', 'fixed' => false];

        $this->assertEqual($this->dataDict->getNativeDeclaration($a), 'DATE');
    }

    public function testGetNativeDefinitionSupportsTimestampType()
    {
        $a = ['type' => 'timestamp', 'fixed' => false];

        $this->assertEqual($this->dataDict->getNativeDeclaration($a), 'DATETIME');
    }

    public function testGetNativeDefinitionSupportsTimeType()
    {
        $a = ['type' => 'time', 'fixed' => false];

        $this->assertEqual($this->dataDict->getNativeDeclaration($a), 'TIME');
    }

    public function testGetNativeDefinitionSupportsClobType()
    {
        $a = ['type' => 'clob'];

        $this->assertEqual($this->dataDict->getNativeDeclaration($a), 'LONGTEXT');
    }

    public function testGetNativeDefinitionSupportsBlobType()
    {
        $a = ['type' => 'blob'];

        $this->assertEqual($this->dataDict->getNativeDeclaration($a), 'LONGBLOB');
    }

    public function testGetNativeDefinitionSupportsCharType()
    {
        $a = ['type' => 'char', 'length' => 10];

        $this->assertEqual($this->dataDict->getNativeDeclaration($a), 'CHAR(10)');
    }

    public function testGetNativeDefinitionSupportsVarcharType()
    {
        $a = ['type' => 'varchar', 'length' => 10];

        $this->assertEqual($this->dataDict->getNativeDeclaration($a), 'VARCHAR(10)');
    }

    public function testGetNativeDefinitionSupportsArrayType()
    {
        $a = ['type' => 'array', 'length' => 40];

        $this->assertEqual($this->dataDict->getNativeDeclaration($a), 'VARCHAR(40)');
    }

    public function testGetNativeDefinitionSupportsStringType()
    {
        $a = ['type' => 'string'];

        $this->assertEqual($this->dataDict->getNativeDeclaration($a), 'TEXT');
    }

    public function testGetNativeDefinitionSupportsArrayType2()
    {
        $a = ['type' => 'array'];

        $this->assertEqual($this->dataDict->getNativeDeclaration($a), 'TEXT');
    }

    public function testGetNativeDefinitionSupportsObjectType()
    {
        $a = ['type' => 'object'];

        $this->assertEqual($this->dataDict->getNativeDeclaration($a), 'TEXT');
    }
}
