<?php
class GnatEmail extends Doctrine_Record
{
    public function setTableDefinition() 
    {
        $this->hasColumn('address', 'string', 150);
    }
}
