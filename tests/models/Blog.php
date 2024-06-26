<?php
class Blog extends Doctrine_Record
{
    public function setTableDefinition()
    {
    	
    }
    public function setUp()
    {
        $this->actAs('Taggable');
    }
}
