<?php

/**
 * @internal
 *
 * @coversNothing
 */
class Doctrine_Ticket_gh110_TestCase extends Doctrine_UnitTestCase
{
    public function testAddActAsColumnsToDocBlock()
    {
        $builder = new Doctrine_Import_Builder();
        $class = $builder->buildDefinition(
            [
                'className' => 'Ticket_gh110_TestRecord',
                'topLevelClassName' => 'Ticket_gh110_TestRecord',
                'is_base_class' => true,
                'columns' => [
                    'id' => [
                        'type' => 'integer',
                        'length' => 4,
                    ],
                    'my_custom_created_at' => [
                        'name' => 'created_at',
                        'type' => 'my_custom_type',
                        'length' => '',
                    ],
                ],
                'actAs' => [
                    'SoftDelete' => [],
                    'Timestampable' => [
                        'updated' => [
                            'disabled' => true,
                        ],
                        'unknown_column' => [],
                    ],
                    'UnknownActAs' => [],
                    // This template brings an already defined column
                    'gh110_Template' => [],
                    'gh110_Invalid_Template' => [],
                    'gh110_Abstract_Template' => [],
                ],
            ]
        );

        // Can be used to update the snapshot.
        // file_put_contents(dirname(__FILE__) . '/gh110/Ticket_gh110_TestRecord.snapshot', $class);
        $this->assertEqual($class, file_get_contents(dirname(__FILE__).'/gh110/Ticket_gh110_TestRecord.snapshot'));
    }
}

abstract class gh110_Abstract_Template
{
}

/** This is just a simple class without the required getOptions()-Method */
class gh110_Invalid_Template
{
}

class Doctrine_Template_gh110_Template extends Doctrine_Template
{
    protected $_options = [
        'created' => [
            'name' => 'created_at',
            'alias' => null,
            'type' => 'timestamp',
            'format' => 'Y-m-d H:i:s',
            'disabled' => false,
            'expression' => false,
            'options' => ['notnull' => true],
        ],
    ];

    /**
     * Set table definition for Timestampable behavior.
     */
    public function setTableDefinition()
    {
        if (!$this->_options['created']['disabled']) {
            $name = $this->_options['created']['name'];
            if ($this->_options['created']['alias']) {
                $name .= ' as '.$this->_options['created']['alias'];
            }
            $this->hasColumn($name, $this->_options['created']['type'], null, $this->_options['created']['options']);
        }
    }
}
