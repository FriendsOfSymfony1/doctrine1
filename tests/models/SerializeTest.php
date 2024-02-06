<?php

/**
 * @internal
 *
 * @coversNothing
 */
class SerializeTest extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('serialize_test');

        $this->hasColumn('booltest', 'boolean');
        $this->hasColumn('integertest', 'integer', 4, ['unsigned' => true]);
        $this->hasColumn('floattest', 'float');
        $this->hasColumn('stringtest', 'string', 200, ['fixed' => true]);
        $this->hasColumn('arraytest', 'array', 10000);
        $this->hasColumn('objecttest', 'object');
        $this->hasColumn('blobtest', 'blob');
        $this->hasColumn('clobtest', 'clob');
        $this->hasColumn('timestamptest', 'timestamp');
        $this->hasColumn('timetest', 'time');
        $this->hasColumn('datetest', 'date');
        $this->hasColumn(
            'enumtest',
            'enum',
            4,
            [
                'values' => [
                    'php',
                    'java',
                    'python',
                ],
            ]
        );
        $this->hasColumn('gziptest', 'gzip');
    }
}
