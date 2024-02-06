<?php

class ValidatorTest_DateModel extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->hasColumn('birthday', 'date', null, ['past']);
        $this->hasColumn('death', 'date', null, ['future']);
    }
}
