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
 * Doctrine_DataDict_Oracle_TestCase.
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
class Doctrine_DataDict_Oracle_TestCase extends Doctrine_UnitTestCase
{
    public function testGetPortableDeclarationSupportsNativeFloatType()
    {
        $type = $this->dataDict->getPortableDeclaration(['data_type' => 'float']);

        $this->assertEqual($type, ['type' => ['float'],
            'length' => null,
            'unsigned' => null,
            'fixed' => null]);
    }

    public function testGetPortableDeclarationSupportsNativeIntegerTypes()
    {
        $type = $this->dataDict->getPortableDeclaration(['data_type' => 'integer']);

        $this->assertEqual($type, ['type' => ['integer'],
            'length' => null,
            'unsigned' => null,
            'fixed' => null]);

        $type = $this->dataDict->getPortableDeclaration(['data_type' => 'pls_integer', 'data_length' => 1]);

        $this->assertEqual($type, ['type' => ['integer', 'boolean'],
            'length' => 1,
            'unsigned' => null,
            'fixed' => null]);

        $type = $this->dataDict->getPortableDeclaration(['data_type' => 'binary_integer', 'data_length' => 1]);

        $this->assertEqual($type, ['type' => ['integer', 'boolean'],
            'length' => 1,
            'unsigned' => null,
            'fixed' => null]);
    }

    public function testGetPortableDeclarationSupportsNativeStringTypes()
    {
        $type = $this->dataDict->getPortableDeclaration(['data_type' => 'varchar']);

        $this->assertEqual($type, ['type' => ['string'],
            'length' => null,
            'unsigned' => null,
            'fixed' => null]);

        $type = $this->dataDict->getPortableDeclaration(['data_type' => 'varchar2', 'data_length' => 1]);

        $this->assertEqual($type, ['type' => ['string', 'boolean'],
            'length' => 1,
            'unsigned' => null,
            'fixed' => false]);

        $type = $this->dataDict->getPortableDeclaration(['data_type' => 'nvarchar2', 'data_length' => 1]);

        $this->assertEqual($type, ['type' => ['string', 'boolean'],
            'length' => 1,
            'unsigned' => null,
            'fixed' => false]);

        $type = $this->dataDict->getPortableDeclaration(['data_type' => 'char', 'data_length' => 1]);

        $this->assertEqual($type, ['type' => ['string', 'boolean'],
            'length' => 1,
            'unsigned' => null,
            'fixed' => true]);

        $type = $this->dataDict->getPortableDeclaration(['data_type' => 'nchar', 'data_length' => 1]);

        $this->assertEqual($type, ['type' => ['string', 'boolean'],
            'length' => 1,
            'unsigned' => null,
            'fixed' => true]);
    }

    public function testGetPortableDeclarationSupportsNativeNumberType()
    {
        $type = $this->dataDict->getPortableDeclaration(['data_type' => 'number']);

        $this->assertEqual($type, ['type' => ['integer'],
            'length' => null,
            'unsigned' => null,
            'fixed' => null]);

        $type = $this->dataDict->getPortableDeclaration(['data_type' => 'number', 'data_length' => 1]);

        $this->assertEqual($type, ['type' => ['integer', 'boolean'],
            'length' => 1,
            'unsigned' => null,
            'fixed' => null]);
    }

    public function testGetPortableDeclarationSupportsNativeTimestampType()
    {
        $type = $this->dataDict->getPortableDeclaration(['data_type' => 'date']);

        $this->assertEqual($type, ['type' => ['timestamp'],
            'length' => null,
            'unsigned' => null,
            'fixed' => null]);

        $type = $this->dataDict->getPortableDeclaration(['data_type' => 'timestamp']);

        $this->assertEqual($type, ['type' => ['timestamp'],
            'length' => null,
            'unsigned' => null,
            'fixed' => null]);
    }

    public function testGetPortableDeclarationSupportsNativeClobTypes()
    {
        $type = $this->dataDict->getPortableDeclaration(['data_type' => 'clob']);

        $this->assertEqual($type, ['type' => ['clob'],
            'length' => null,
            'unsigned' => null,
            'fixed' => null]);

        $type = $this->dataDict->getPortableDeclaration(['data_type' => 'long']);

        $this->assertEqual($type, ['type' => ['string', 'clob'],
            'length' => null,
            'unsigned' => null,
            'fixed' => null]);

        $type = $this->dataDict->getPortableDeclaration(['data_type' => 'nclob']);

        $this->assertEqual($type, ['type' => ['clob'],
            'length' => null,
            'unsigned' => null,
            'fixed' => null]);
    }

    public function testGetPortableDeclarationSupportsNativeBlobTypes()
    {
        $type = $this->dataDict->getPortableDeclaration(['data_type' => 'blob']);

        $this->assertEqual($type, ['type' => ['blob'],
            'length' => null,
            'unsigned' => null,
            'fixed' => null]);

        $type = $this->dataDict->getPortableDeclaration(['data_type' => 'long raw']);

        $this->assertEqual($type, ['type' => ['blob'],
            'length' => null,
            'unsigned' => null,
            'fixed' => null]);

        $type = $this->dataDict->getPortableDeclaration(['data_type' => 'long raw']);

        $this->assertEqual($type, ['type' => ['blob'],
            'length' => null,
            'unsigned' => null,
            'fixed' => null]);

        $type = $this->dataDict->getPortableDeclaration(['data_type' => 'raw']);

        $this->assertEqual($type, ['type' => ['blob'],
            'length' => null,
            'unsigned' => null,
            'fixed' => null]);
    }

    public function testGetNativeDefinitionSupportsIntegerType()
    {
        $a = ['type' => 'integer', 'length' => 20, 'fixed' => false];

        $this->assertEqual($this->dataDict->getNativeDeclaration($a), 'INTEGER');

        $a['length'] = 8;

        $this->assertEqual($this->dataDict->getNativeDeclaration($a), 'NUMBER(20)');

        $a['length'] = 4;

        $this->assertEqual($this->dataDict->getNativeDeclaration($a), 'NUMBER(10)');

        $a['length'] = 3;

        $this->assertEqual($this->dataDict->getNativeDeclaration($a), 'NUMBER(8)');

        $a['length'] = 2;

        $this->assertEqual($this->dataDict->getNativeDeclaration($a), 'NUMBER(5)');

        $a['length'] = 1;

        $this->assertEqual($this->dataDict->getNativeDeclaration($a), 'NUMBER(3)');

        unset($a['length']);

        $this->assertEqual($this->dataDict->getNativeDeclaration($a), 'INTEGER');
    }

    public function testGetNativeDefinitionSupportsFloatType()
    {
        $a = ['type' => 'float', 'length' => 20, 'fixed' => false];

        $this->assertEqual($this->dataDict->getNativeDeclaration($a), 'NUMBER');
    }

    public function testGetNativeDefinitionSupportsBooleanType()
    {
        $a = ['type' => 'boolean', 'fixed' => false];

        $this->assertEqual($this->dataDict->getNativeDeclaration($a), 'NUMBER(1)');
    }

    public function testGetNativeDefinitionSupportsDateType()
    {
        $a = ['type' => 'date', 'fixed' => false];

        $this->assertEqual($this->dataDict->getNativeDeclaration($a), 'DATE');
    }

    public function testGetNativeDefinitionSupportsTimestampType()
    {
        $a = ['type' => 'timestamp', 'fixed' => false];

        $this->assertEqual($this->dataDict->getNativeDeclaration($a), 'DATE');
    }

    public function testGetNativeDefinitionSupportsTimeType()
    {
        $a = ['type' => 'time', 'fixed' => false];

        $this->assertEqual($this->dataDict->getNativeDeclaration($a), 'DATE');
    }

    public function testGetNativeDefinitionSupportsClobType()
    {
        $a = ['type' => 'clob'];

        $this->assertEqual($this->dataDict->getNativeDeclaration($a), 'CLOB');
    }

    public function testGetNativeDefinitionSupportsBlobType()
    {
        $a = ['type' => 'blob'];

        $this->assertEqual($this->dataDict->getNativeDeclaration($a), 'BLOB');
    }

    public function testGetNativeDefinitionSupportsCharType()
    {
        $a = ['type' => 'char', 'length' => 10];

        $this->assertEqual($this->dataDict->getNativeDeclaration($a), 'CHAR(10)');
    }

    public function testGetNativeDefinitionSupportsVarcharType()
    {
        $a = ['type' => 'varchar', 'length' => 10];

        $this->assertEqual($this->dataDict->getNativeDeclaration($a), 'VARCHAR2(10)');
    }

    public function testGetNativeDefinitionSupportsVarcharOwnParams()
    {
        $a = ['type' => 'varchar', 'length' => 10];

        $this->conn->setParam('char_unit', 'CHAR');
        $this->conn->setParam('varchar2_max_length', 1000);

        $this->assertEqual($this->dataDict->getNativeDeclaration($a), 'VARCHAR2(10 CHAR)');

        $a['length'] = 1001;
        $this->assertEqual($this->dataDict->getNativeDeclaration($a), 'CLOB');

        $this->conn->setParam('char_unit', 'BYTE');
        $this->conn->setParam('varchar2_max_length', 4000);

        $this->assertEqual($this->dataDict->getNativeDeclaration($a), 'VARCHAR2(1001 BYTE)');

        $this->conn->setParam('char_unit', null);
    }

    public function testGetNativeDefinitionSupportsArrayType()
    {
        $a = ['type' => 'array', 'length' => 40];

        $this->assertEqual($this->dataDict->getNativeDeclaration($a), 'VARCHAR2(40)');
    }

    public function testGetNativeDefinitionSupportsStringType()
    {
        $a = ['type' => 'string'];

        $this->assertEqual($this->dataDict->getNativeDeclaration($a), 'CLOB');
    }

    public function testGetNativeDefinitionSupportsArrayType2()
    {
        $a = ['type' => 'array'];

        $this->assertEqual($this->dataDict->getNativeDeclaration($a), 'CLOB');
    }

    public function testGetNativeDefinitionSupportsObjectType()
    {
        $a = ['type' => 'object'];

        $this->assertEqual($this->dataDict->getNativeDeclaration($a), 'CLOB');
    }

    public function testGetNativeDefinitionSupportsLargerStrings()
    {
        $a = ['type' => 'string', 'length' => 4001];

        $this->assertEqual($this->dataDict->getNativeDeclaration($a), 'CLOB');
    }
}
