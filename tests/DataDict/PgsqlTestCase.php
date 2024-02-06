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
class Doctrine_DataDict_Pgsql_TestCase extends Doctrine_UnitTestCase
{
    public function getDeclaration($type)
    {
        return $this->dataDict->getPortableDeclaration(['type' => $type, 'name' => 'colname', 'length' => 2, 'fixed' => true]);
    }

    public function testGetPortableDeclarationSupportsNativeBlobTypes()
    {
        $type = $this->dataDict->getPortableDeclaration(['type' => 'blob']);

        $this->assertEqual($type, ['type' => ['blob'],
            'length' => null,
            'unsigned' => null,
            'fixed' => null]);

        $type = $this->dataDict->getPortableDeclaration(['type' => 'tinyblob']);

        $this->assertEqual($type, ['type' => ['blob'],
            'length' => null,
            'unsigned' => null,
            'fixed' => null]);

        $type = $this->dataDict->getPortableDeclaration(['type' => 'mediumblob']);

        $this->assertEqual($type, ['type' => ['blob'],
            'length' => null,
            'unsigned' => null,
            'fixed' => null]);

        $type = $this->dataDict->getPortableDeclaration(['type' => 'longblob']);

        $this->assertEqual($type, ['type' => ['blob'],
            'length' => null,
            'unsigned' => null,
            'fixed' => null]);

        $type = $this->dataDict->getPortableDeclaration(['type' => 'bytea']);

        $this->assertEqual($type, ['type' => ['blob'],
            'length' => null,
            'unsigned' => null,
            'fixed' => null]);

        $type = $this->dataDict->getPortableDeclaration(['type' => 'oid']);

        $this->assertEqual($type, ['type' => ['blob', 'clob'],
            'length' => null,
            'unsigned' => null,
            'fixed' => null]);
    }

    public function testGetPortableDeclarationSupportsNativeTimestampTypes()
    {
        $type = $this->dataDict->getPortableDeclaration(['type' => 'timestamp']);

        $this->assertEqual($type, ['type' => ['timestamp'],
            'length' => null,
            'unsigned' => null,
            'fixed' => null]);

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

        $type = $this->dataDict->getPortableDeclaration(['type' => 'numeric']);

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

        $type = $this->dataDict->getPortableDeclaration(['type' => 'double']);

        $this->assertEqual($type, ['type' => ['float'],
            'length' => null,
            'unsigned' => null,
            'fixed' => null]);

        $type = $this->dataDict->getPortableDeclaration(['type' => 'real']);

        $this->assertEqual($type, ['type' => ['float'],
            'length' => null,
            'unsigned' => null,
            'fixed' => null]);
    }

    public function testGetPortableDeclarationSupportsNativeYearType()
    {
        $type = $this->dataDict->getPortableDeclaration(['type' => 'year']);

        $this->assertEqual($type, ['type' => ['integer', 'date'],
            'length' => null,
            'unsigned' => null,
            'fixed' => null]);
    }

    public function testGetPortableDeclarationSupportsNativeDateType()
    {
        $type = $this->dataDict->getPortableDeclaration(['type' => 'date']);

        $this->assertEqual($type, ['type' => ['date'],
            'length' => null,
            'unsigned' => null,
            'fixed' => null]);
    }

    public function testGetPortableDeclarationSupportsNativeTimeType()
    {
        $type = $this->dataDict->getPortableDeclaration(['type' => 'time']);

        $this->assertEqual($type, ['type' => ['time'],
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

        $type = $this->dataDict->getPortableDeclaration(['type' => 'interval']);

        $this->assertEqual($type, ['type' => ['string'],
            'length' => null,
            'unsigned' => null,
            'fixed' => false]);

        $type = $this->dataDict->getPortableDeclaration(['type' => 'varchar', 'length' => 1]);

        $this->assertEqual($type, ['type' => ['string', 'boolean'],
            'length' => 1,
            'unsigned' => null,
            'fixed' => false]);

        $type = $this->dataDict->getPortableDeclaration(['type' => 'unknown', 'length' => 1]);

        $this->assertEqual($type, ['type' => ['string', 'boolean'],
            'length' => 1,
            'unsigned' => null,
            'fixed' => true]);

        $type = $this->dataDict->getPortableDeclaration(['type' => 'char', 'length' => 1]);

        $this->assertEqual($type, ['type' => ['string', 'boolean'],
            'length' => 1,
            'unsigned' => null,
            'fixed' => true]);

        $type = $this->dataDict->getPortableDeclaration(['type' => 'bpchar', 'length' => 1]);

        $this->assertEqual($type, ['type' => ['string', 'boolean'],
            'length' => 1,
            'unsigned' => null,
            'fixed' => true]);
    }

    public function testGetPortableDeclarationSupportsNativeIntegerTypes()
    {
        $type = $this->dataDict->getPortableDeclaration(['type' => 'smallint']);

        $this->assertEqual($this->getDeclaration('smallint'), ['type' => ['integer', 'boolean'], 'length' => 2, 'unsigned' => false, 'fixed' => null]);
        $this->assertEqual($this->getDeclaration('int2'), ['type' => ['integer', 'boolean'], 'length' => 2, 'unsigned' => false, 'fixed' => null]);

        $this->assertEqual($this->getDeclaration('int'), ['type' => ['integer'], 'length' => 4, 'unsigned' => false, 'fixed' => null]);
        $this->assertEqual($this->getDeclaration('int4'), ['type' => ['integer'], 'length' => 4, 'unsigned' => false, 'fixed' => null]);
        $this->assertEqual($this->getDeclaration('integer'), ['type' => ['integer'], 'length' => 4, 'unsigned' => false, 'fixed' => null]);
        $this->assertEqual($this->getDeclaration('serial'), ['type' => ['integer'], 'length' => 4, 'unsigned' => false, 'fixed' => null]);
        $this->assertEqual($this->getDeclaration('serial4'), ['type' => ['integer'], 'length' => 4, 'unsigned' => false, 'fixed' => null]);

        $this->assertEqual($this->getDeclaration('bigint'), ['type' => ['integer'], 'length' => 8, 'unsigned' => false, 'fixed' => null]);
        $this->assertEqual($this->getDeclaration('int8'), ['type' => ['integer'], 'length' => 8, 'unsigned' => false, 'fixed' => null]);
        $this->assertEqual($this->getDeclaration('bigserial'), ['type' => ['integer'], 'length' => 8, 'unsigned' => false, 'fixed' => null]);
        $this->assertEqual($this->getDeclaration('serial8'), ['type' => ['integer'], 'length' => 8, 'unsigned' => false, 'fixed' => null]);
    }

    public function testGetPortableDeclarationSupportsNativeBooleanTypes()
    {
        $this->assertEqual($this->getDeclaration('bool'), ['type' => ['boolean'], 'length' => 1, 'unsigned' => false, 'fixed' => null]);
        $this->assertEqual($this->getDeclaration('boolean'), ['type' => ['boolean'], 'length' => 1, 'unsigned' => false, 'fixed' => null]);
    }

    public function testGetNativeDefinitionSupportsIntegerType()
    {
        $a = ['type' => 'integer', 'length' => 20, 'fixed' => false];

        $this->assertEqual($this->dataDict->getNativeDeclaration($a), 'BIGINT');

        $a['length'] = 4;

        $this->assertEqual($this->dataDict->getNativeDeclaration($a), 'INT');

        $a['length'] = 2;

        $this->assertEqual($this->dataDict->getNativeDeclaration($a), 'SMALLINT');
    }

    public function testGetNativeDefinitionSupportsIntegerTypeWithAutoinc()
    {
        $a = ['type' => 'integer', 'length' => 20, 'fixed' => false, 'autoincrement' => true];

        $this->assertEqual($this->dataDict->getNativeDeclaration($a), 'BIGSERIAL');

        $a['length'] = 4;

        $this->assertEqual($this->dataDict->getNativeDeclaration($a), 'SERIAL');

        $a['length'] = 2;

        $this->assertEqual($this->dataDict->getNativeDeclaration($a), 'SERIAL');
    }

    public function testGetNativeDefinitionSupportsFloatType()
    {
        $a = ['type' => 'float', 'length' => 20, 'fixed' => false];

        $this->assertEqual($this->dataDict->getNativeDeclaration($a), 'FLOAT');
    }

    public function testGetNativeDefinitionSupportsBooleanType()
    {
        $a = ['type' => 'boolean', 'fixed' => false];

        $this->assertEqual($this->dataDict->getNativeDeclaration($a), 'BOOLEAN');
    }

    public function testGetNativeDefinitionSupportsDateType()
    {
        $a = ['type' => 'date', 'fixed' => false];

        $this->assertEqual($this->dataDict->getNativeDeclaration($a), 'DATE');
    }

    public function testGetNativeDefinitionSupportsTimestampType()
    {
        $a = ['type' => 'timestamp', 'fixed' => false];

        $this->assertEqual($this->dataDict->getNativeDeclaration($a), 'TIMESTAMP');
    }

    public function testGetNativeDefinitionSupportsTimeType()
    {
        $a = ['type' => 'time', 'fixed' => false];

        $this->assertEqual($this->dataDict->getNativeDeclaration($a), 'TIME');
    }

    public function testGetNativeDefinitionSupportsClobType()
    {
        $a = ['type' => 'clob'];

        $this->assertEqual($this->dataDict->getNativeDeclaration($a), 'TEXT');
    }

    public function testGetNativeDefinitionSupportsBlobType()
    {
        $a = ['type' => 'blob'];

        $this->assertEqual($this->dataDict->getNativeDeclaration($a), 'BYTEA');
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
