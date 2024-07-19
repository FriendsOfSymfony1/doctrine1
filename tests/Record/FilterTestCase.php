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
 * Doctrine_Record_Filter_TestCase
 *
 * @package     Doctrine
 * @author      Konsta Vesterinen <kvesteri@cc.hut.fi>
 * @license     http://www.opensource.org/licenses/lgpl-license.php LGPL
 * @category    Object Relational Mapping
 * @link        www.doctrine-project.org
 * @since       1.0
 * @version     $Revision$
 */
class Doctrine_Record_Filter_TestCase extends Doctrine_UnitTestCase
{
    public function tearDown()
    {
        InitTestCompositeRecord::$testHasRelatedRelation = true;

        parent::tearDown();
    }

    public function prepareData()
    {
    }

    public function prepareTables()
    {
        $this->tables = array(
            'CompositeRecord',
            'SomeRelatedCompositeRecord',
            'WithTwoCompoundRelationOfDistinctTableCompositeRecord',
            'AnotherRelatedCompositeRecord',
            'WithTwoCompoundRelationOfSameTableCompositeRecord',
            'WithRelationOnCompoundRelationCompositeRecord',
            'WithRelationForPropertyOrRelationCompositeRecord',
            'WithPropertyForPropertyOrRelationCompositeRecord',
            'WithRelationRelatedCompositeRecord',
            'WithoutAliasesCompositeRecord',
            'WithTwoRelationsHavingSameNameForPropertyAndForRelationCompositeRecord',
        );

        parent::prepareTables();
    }

    public function testStandardFiltersThrowsExceptionWhenGettingUnknownProperties()
    {
        $this->expectException('Doctrine_Record_Exception');

        $u = new User();

        $u->unknown;
    }

    public function testStandardFiltersThrowsExceptionWhenSettingUnknownProperties()
    {
        $this->expectException('Doctrine_Record_Exception');

        $u = new User();

        $u->unknown = 'something';
    }

    public function testCompound_willThrowTable_withAliasedRelationIsNotDefined()
    {
        InitTestCompositeRecord::$testHasRelatedRelation = false;

        $this->expectException('Doctrine_Table_Exception');

        new InitTestCompositeRecord();
    }

    public function testCompoundGet_willThrowUndefinedProperty_withPropertyDoesNotExists()
    {
        $composite = new CompositeRecord();

        $this->expectException('Doctrine_Record_UnknownPropertyException');

        $composite->notExistsProperty;
    }

    public function testCompoundSet_willThrowUndefinedProperty_withPropertyDoesNotExists()
    {
        $composite = new CompositeRecord();

        $this->expectException('Doctrine_Record_UnknownPropertyException');

        $composite->notExistsProperty = 'some value';
    }

    public function testCompoundSet_willThrowUndefinedProperty_withoutAliases()
    {
        $composite = new WithoutAliasesCompositeRecord();

        $this->expectException('Doctrine_Record_UnknownPropertyException');

        $composite->notExistsProperty = 'some value';
    }

    public function testCompoundSet_willThrowUndefinedProperty_withoutAliases_andRecordExists()
    {
        $composite = new WithoutAliasesCompositeRecord();
        $composite->save();

        $this->expectException('Doctrine_Record_UnknownPropertyException');

        $composite->notExistsProperty = 'some value';
    }

    public function testCompoundGet_willThrowUndefinedProperty_withoutAliases()
    {
        $composite = new WithoutAliasesCompositeRecord();

        $this->expectException('Doctrine_Record_UnknownPropertyException');

        $composite->notExistsProperty;
    }

    public function testCompoundGet_withOneRelation_willReturnRelationPropertyValue()
    {
        $composite = new CompositeRecord();
        $composite->SomeCompoundRelation->someProperty = 'some value';

        $actual = $composite->someProperty;

        $this->assertEqual('some value', $actual);
    }

    public function testCompoundGet_withTwoDistinctTableRelations_afterGetFromSecondRelation_willReturnRelationPropertyValue()
    {
        $composite = new WithTwoCompoundRelationOfDistinctTableCompositeRecord();
        $composite->AnotherCompoundRelation->anotherProperty = 'some value';

        $actual = $composite->anotherProperty;

        $this->assertEqual('some value', $actual);
    }

    public function testCompoundGet_withTwoRelationsHavingSameProperty_andFirstIsNull_willReturnFirstPropertyValue()
    {
        $composite = new WithTwoCompoundRelationOfSameTableCompositeRecord();
        $composite->FirstCompoundRelation->someProperty = null;
        $composite->SecondCompoundRelation->someProperty = 'some value';

        $actual = $composite->someProperty;

        $this->assertNull($actual);
    }

    public function testCompoundGet_withNewRecord_andForRelatedComponent()
    {
        $composite = new WithRelationOnCompoundRelationCompositeRecord();
        $composite->SomeCompoundRelation->SomeRelation->someProperty = 'some value';

        $actual = $composite->SomeRelation->someProperty;

        $this->assertEqual('some value', $actual);
    }

    public function testCompoundSet_willReturnTheGivenRecord_toRespectFluentInterface()
    {
        $composite = new CompositeRecord();

        $actual = $composite->set('someProperty', 'some value');

        $this->assertIdentical($composite, $actual);
    }

    public function testCompoundSet_withNewRecord_andForProperty()
    {
        $composite = new CompositeRecord();

        $composite->someProperty = 'some value';

        $this->assertEqual('some value', $composite->SomeCompoundRelation->someProperty);
    }

    public function testCompoundSet_withNewRecord_whenSetRelationOnCounpoundRelation_throwsUnknownProperty()
    {
        $composite = new WithRelationOnCompoundRelationCompositeRecord();

        $this->expectException('Doctrine_Record_UnknownPropertyException');

        $composite->SomeRelation = new SomeRelatedCompositeRecord();
    }

    public function testCompoundSet_withNewRecord_andRelationIsSets_whenSetRelationOnCounpoundRelation_willSetRelationThroughCompoundFilter()
    {
        $composite = new WithRelationOnCompoundRelationCompositeRecord();
        $composite->SomeCompoundRelation->SomeRelation = new SomeRelatedCompositeRecord();

        $newRelation = new SomeRelatedCompositeRecord();
        $composite->SomeRelation = $newRelation;

        $this->assertIdentical($newRelation, $composite->SomeCompoundRelation->SomeRelation);
    }

    public function testCompoundSet_withExistingRecord_whenSetRelationOnCounpoundRelation_doNothing()
    {
        $composite = new WithRelationOnCompoundRelationCompositeRecord();
        $composite->save();

        $someRecord = new SomeRelatedCompositeRecord();
        $someRecord->someProperty = 'some value';

        $composite->SomeRelation = $someRecord;

        $this->assertNull($composite->SomeCompoundRelation->SomeRelation->someProperty);
        $this->assertNotIdentical($someRecord, $composite->SomeRelation);
        $this->assertNotIdentical($someRecord, $composite->SomeCompoundRelation->SomeRelation);
    }

    public function testCompoundSet_withTwoRelationsHavingSameProperty_andFirstIsNull_willSetOnlyFirstRelation()
    {
        $composite = new WithTwoCompoundRelationOfSameTableCompositeRecord();
        $composite->FirstCompoundRelation->someProperty = null;
        $composite->SecondCompoundRelation->someProperty = 'some value';

        $composite->someProperty = 'new value';

        $this->assertEqual('new value', $composite->FirstCompoundRelation->someProperty);
        $this->assertEqual('some value', $composite->SecondCompoundRelation->someProperty);
    }

    public function testCompoundSet_withTwoRelationsHavingDistinctProperty_willCanSetOnSecondRelation()
    {
        $composite = new WithTwoCompoundRelationOfDistinctTableCompositeRecord();
        $composite->SomeCompoundRelation->someProperty = 'some value';
        $composite->AnotherCompoundRelation->anotherProperty = 'another value';

        $composite->anotherProperty = 'new value';

        $this->assertEqual('some value', $composite->SomeCompoundRelation->someProperty);
        $this->assertEqual('new value', $composite->AnotherCompoundRelation->anotherProperty);
    }

    public function testCompoundSet_withAliasXHavingRelationY_andAliasZHavingColumnY_whenSetY_throwsUnknownProperty()
    {
        $composite = new WithTwoRelationsHavingSameNameForPropertyAndForRelationCompositeRecord();
        $composite->RelationRelated->somePropertyOrRelation = new SomeRelatedCompositeRecord();
        $composite->PropertyRelated->somePropertyOrRelation = 'some value';

        $this->expectException('Doctrine_Record_UnknownPropertyException');

        $composite->somePropertyOrRelation = 'new value';
    }
}

class CompositeRecord extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->hasColumn('name', 'string');
    }

    public function setUp()
    {
        $this->hasOne('SomeRelatedCompositeRecord as SomeCompoundRelation', array(
            'foreign' => 'foreign_id',
        ));

        $this->unshiftFilter(new Doctrine_Record_Filter_Compound(array(
            'SomeCompoundRelation',
        )));
    }
}

class WithRelationOnCompoundRelationCompositeRecord extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->hasColumn('name', 'string');
    }

    public function setUp()
    {
        $this->hasOne('WithRelationRelatedCompositeRecord as SomeCompoundRelation', array(
            'foreign' => 'foreign_id',
        ));

        $this->unshiftFilter(new Doctrine_Record_Filter_Compound(array(
            'SomeCompoundRelation',
        )));
    }
}

class WithTwoCompoundRelationOfDistinctTableCompositeRecord extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->hasColumn('name', 'string');
    }

    public function setUp()
    {
        $this->hasOne('SomeRelatedCompositeRecord as SomeCompoundRelation', array(
            'foreign' => 'foreign_id',
        ));
        $this->hasOne('AnotherRelatedCompositeRecord as AnotherCompoundRelation', array(
            'foreign' => 'foreign_id',
        ));

        $this->unshiftFilter(new Doctrine_Record_Filter_Compound(array(
            'SomeCompoundRelation',
            'AnotherCompoundRelation',
        )));
    }
}

class WithTwoCompoundRelationOfSameTableCompositeRecord extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->hasColumn('name', 'string');
    }

    public function setUp()
    {
        $this->hasOne('SomeRelatedCompositeRecord as FirstCompoundRelation', array(
            'foreign' => 'foreign_id',
        ));
        $this->hasOne('SomeRelatedCompositeRecord as SecondCompoundRelation', array(
            'foreign' => 'foreign_second_id',
        ));

        $this->unshiftFilter(new Doctrine_Record_Filter_Compound(array(
            'FirstCompoundRelation',
            'SecondCompoundRelation',
        )));
    }
}

class WithoutAliasesCompositeRecord extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->hasColumn('name', 'string');
    }

    public function setUp()
    {
        $this->unshiftFilter(new Doctrine_Record_Filter_Compound(array(
        )));
    }
}

class SomeRelatedCompositeRecord extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->hasColumn('someProperty', 'string');
        $this->hasColumn('foreign_id', 'integer');
        $this->hasColumn('foreign_second_id', 'integer');
    }
}

class AnotherRelatedCompositeRecord extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->hasColumn('anotherProperty', 'string');
        $this->hasColumn('foreign_id', 'integer');
    }
}

class WithRelationRelatedCompositeRecord extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->hasColumn('foreign_id', 'integer');

        $this->hasOne('SomeRelatedCompositeRecord as SomeRelation', array(
            'foreign' => 'foreign_id',
        ));
    }
}

class WithTwoRelationsHavingSameNameForPropertyAndForRelationCompositeRecord extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->hasColumn('name', 'string');
    }

    public function setUp()
    {
        $this->hasOne('WithRelationForPropertyOrRelationCompositeRecord as RelationRelated', array(
            'foreign' => 'foreign_id',
        ));
        $this->hasOne('WithPropertyForPropertyOrRelationCompositeRecord as PropertyRelated', array(
            'foreign' => 'foreign_id',
        ));

        $this->unshiftFilter(new Doctrine_Record_Filter_Compound(array(
            'RelationRelated',
            'PropertyRelated',
        )));
    }
}

class WithRelationForPropertyOrRelationCompositeRecord extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->hasColumn('foreign_id', 'integer');

        $this->hasOne('SomeRelatedCompositeRecord as somePropertyOrRelation', array(
            'foreign' => 'foreign_id',
        ));
    }
}

class WithPropertyForPropertyOrRelationCompositeRecord extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->hasColumn('somePropertyOrRelation', 'string');
        $this->hasColumn('foreign_id', 'integer');
        $this->hasColumn('foreign_second_id', 'integer');
    }
}

class InitTestCompositeRecord extends Doctrine_Record
{
    public static $testHasRelatedRelation = true;

    public function setTableDefinition()
    {
        $this->hasColumn('name', 'string');
    }

    public function setUp()
    {
        if (self::$testHasRelatedRelation) {
            $this->hasOne('SomeRelatedCompositeRecord as SomeCompoundRelation', array(
                'foreign' => 'foreign_id',
            ));
        }

        $this->unshiftFilter(new Doctrine_Record_Filter_Compound(array(
            'SomeCompoundRelation',
        )));
    }
}
