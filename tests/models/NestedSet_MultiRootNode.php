<?php

class NestedSet_MultiRootNode extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->actAs('NestedSet', ['hasManyRoots' => true, 'rootColumnName' => 'root_id']);
        $this->hasColumn('name', 'string', 50, ['notnull']);
        $this->hasColumn('root_id', 'integer', 4);
    }
}
