<?php

class InheritanceEntityUser extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('inheritance_entity_user');

        $this->hasColumn('type', 'integer', 4, ['primary' => true]);
        $this->hasColumn('user_id', 'integer', 4, ['primary' => true]);
        $this->hasColumn('entity_id', 'integer', 4, ['primary' => true]);
    }

    public function setUp()
    {
    }
}

class InheritanceDealUser extends InheritanceEntityUser
{
    public function setTableDefinition()
    {
        parent::setTableDefinition();

        $this->setTableName('inheritance_entity_user');

        $this->hasColumn('user_id', 'integer', 4, ['primary' => true]);
        $this->hasColumn('entity_id', 'integer', 4, ['primary' => true]);
    }

    public function setUp()
    {
        parent::setUp();

        $this->hasOne('InheritanceUser as User', ['local' => 'user_id', 'foreign' => 'id']);
        $this->hasOne('InheritanceDeal as Deal', ['local' => 'entity_id', 'foreign' => 'id']);
        $this->setInheritanceMap([
            'type' => 1,
        ]);
    }
}
