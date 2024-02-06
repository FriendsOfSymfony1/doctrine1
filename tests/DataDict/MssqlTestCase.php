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
 * Doctrine_DataDict_Mysql_TestCase.
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
class Doctrine_DataDict_Mssql_TestCase extends Doctrine_UnitTestCase
{
    public function testGetPortableDeclarationSupportsNativeBitType()
    {
        $type = $this->dataDict->getPortableDeclaration(['type' => 'bit']);

        $this->assertEqual($type, ['type' => ['boolean'],
            'length' => null,
            'unsigned' => null,
            'fixed' => null]);
    }

    public function testGetPortableDeclarationSupportsNativeStringTypes()
    {
        $type = $this->dataDict->getPortableDeclaration(['type' => 'text']);

        $this->assertEqual($type, ['type' => ['string', 'clob'],
            'length' => null,
            'unsigned' => null,
            'fixed' => null]);

        $type = $this->dataDict->getPortableDeclaration(['type' => 'char', 'length' => 1]);

        $this->assertEqual($type, ['type' => ['string', 'boolean'],
            'length' => 1,
            'unsigned' => null,
            'fixed' => true]);

        $type = $this->dataDict->getPortableDeclaration(['type' => 'varchar', 'length' => 1]);

        $this->assertEqual($type, ['type' => ['string', 'boolean'],
            'length' => 1,
            'unsigned' => null,
            'fixed' => false]);
    }

    public function testGetPortableDeclarationSupportsNativeBlobTypes()
    {
        $type = $this->dataDict->getPortableDeclaration(['type' => 'image']);

        $this->assertEqual($type, ['type' => ['blob'],
            'length' => null,
            'unsigned' => null,
            'fixed' => null]);

        $type = $this->dataDict->getPortableDeclaration(['type' => 'varbinary']);

        $this->assertEqual($type, ['type' => ['blob'],
            'length' => null,
            'unsigned' => null,
            'fixed' => null]);
    }

    public function testGetPortableDeclarationSupportsNativeIntegerTypes()
    {
        $type = $this->dataDict->getPortableDeclaration(['type' => 'int']);

        $this->assertEqual($type, ['type' => ['integer'],
            'length' => null,
            'unsigned' => null,
            'fixed' => null]);

        $type = $this->dataDict->getPortableDeclaration(['type' => 'int', 'length' => 1]);

        $this->assertEqual($type, ['type' => ['integer', 'boolean'],
            'length' => 1,
            'unsigned' => null,
            'fixed' => null]);
    }

    public function testGetPortableDeclarationSupportsNativeTimestampType()
    {
        $type = $this->dataDict->getPortableDeclaration(['type' => 'datetime']);

        $this->assertEqual($type, ['type' => ['timestamp'],
            'length' => null,
            'unsigned' => null,
            'fixed' => null]);
    }

    public function testGetPortableDeclarationSupportsNativeDecimalTypes()
    {
        $type = $this->dataDict->getPortableDeclaration(['type' => 'decimal']);

        $this->assertEqual($type, ['type' => ['decimal'],
            'length' => null,
            'unsigned' => null,
            'fixed' => null]);

        $type = $this->dataDict->getPortableDeclaration(['type' => 'money']);

        $this->assertEqual($type, ['type' => ['decimal'],
            'length' => null,
            'unsigned' => null,
            'fixed' => null]);
    }

    public function testGetPortableDeclarationSupportsNativeFloatTypes()
    {
        $type = $this->dataDict->getPortableDeclaration(['type' => 'float']);

        $this->assertEqual($type, ['type' => ['float'],
            'length' => null,
            'unsigned' => null,
            'fixed' => null]);

        $type = $this->dataDict->getPortableDeclaration(['type' => 'real']);

        $this->assertEqual($type, ['type' => ['float'],
            'length' => null,
            'unsigned' => null,
            'fixed' => null]);

        $type = $this->dataDict->getPortableDeclaration(['type' => 'numeric']);

        $this->assertEqual($type, ['type' => ['float'],
            'length' => null,
            'unsigned' => null,
            'fixed' => null]);
    }

    public function testGetNativeDefinitionSupportsIntegerType()
    {
        $a = ['type' => 'integer', 'length' => 20, 'fixed' => false];

        $this->assertEqual($this->dataDict->getNativeDeclaration($a), 'INT');

        $a['length'] = 4;

        $this->assertEqual($this->dataDict->getNativeDeclaration($a), 'INT');

        $a['length'] = 2;

        $this->assertEqual($this->dataDict->getNativeDeclaration($a), 'INT');
    }

    public function testGetNativeDefinitionSupportsFloatType()
    {
        $a = ['type' => 'float', 'length' => 20, 'fixed' => false];

        $this->assertEqual($this->dataDict->getNativeDeclaration($a), 'FLOAT');
    }

    public function testGetNativeDefinitionSupportsBooleanType()
    {
        $a = ['type' => 'boolean', 'fixed' => false];

        $this->assertEqual($this->dataDict->getNativeDeclaration($a), 'BIT');
    }

    public function testGetNativeDefinitionSupportsDateType()
    {
        $a = ['type' => 'date', 'fixed' => false];

        $this->assertEqual($this->dataDict->getNativeDeclaration($a), 'CHAR(10)');
    }

    public function testGetNativeDefinitionSupportsTimestampType()
    {
        $a = ['type' => 'timestamp', 'fixed' => false];

        $this->assertEqual($this->dataDict->getNativeDeclaration($a), 'CHAR(19)');
    }

    public function testGetNativeDefinitionSupportsTimeType()
    {
        $a = ['type' => 'time', 'fixed' => false];

        $this->assertEqual($this->dataDict->getNativeDeclaration($a), 'CHAR(8)');
    }

    public function testGetNativeDefinitionSupportsClobType()
    {
        $a = ['type' => 'clob'];

        $this->assertEqual($this->dataDict->getNativeDeclaration($a), 'TEXT');
    }

    public function testGetNativeDefinitionSupportsBlobType()
    {
        $a = ['type' => 'blob'];

        $this->assertEqual($this->dataDict->getNativeDeclaration($a), 'IMAGE');
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
