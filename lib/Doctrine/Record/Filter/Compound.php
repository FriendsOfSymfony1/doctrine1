<?php
/*
 *  $Id: Record.php 1298 2007-05-01 19:26:03Z zYne $
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
 * Doctrine_Record_Filter_Compound
 *
 * @package     Doctrine
 * @subpackage  Record
 * @author      Konsta Vesterinen <kvesteri@cc.hut.fi>
 * @license     http://www.opensource.org/licenses/lgpl-license.php LGPL
 * @link        www.doctrine-project.org
 * @since       1.0
 * @version     $Revision: 1298 $
 */
class Doctrine_Record_Filter_Compound extends Doctrine_Record_Filter
{
    /**
     * @var string[]
     */
    protected $_aliases = array();

    /**
     * @param string[] $aliases A list of relation name
     */
    public function __construct(array $aliases)
    {
        $this->_aliases = $aliases;
    }

    /**
     * @throws Doctrine_Table_Exception when at least one configured alias is not a relation
     */
    public function init()
    {
        // check that all aliases exist
        foreach ($this->_aliases as $alias) {
            $this->_table->getRelation($alias);
        }
    }

    /**
     * Provides a way for setting property or relation value to the given record.
     *
     * @param string $propertyOrRelation
     *
     * @return Doctrine_Record the given record
     *
     * @thrown Doctrine_Record_UnknownPropertyException when this way is not available
     */
    public function filterSet(Doctrine_Record $record, $propertyOrRelation, $value)
    {
        foreach ($this->_aliases as $alias) {
            // The relationship must be fetched in order to check the field existence.
            // Related to PHP-7.0 compatibility so an explicit call to method get is required.
            $record[$alias];

            if ( ! $record->exists()) {
                if (isset($record[$alias][$propertyOrRelation])) {
                    $record[$alias][$propertyOrRelation] = $value;

                    return $record;
                }
            } else {
                if (isset($record[$alias][$propertyOrRelation])) {
                    $record[$alias][$propertyOrRelation] = $value;
                }

                return $record;
            }
        }
        throw new Doctrine_Record_UnknownPropertyException(sprintf('Unknown record property / related component "%s" on "%s"', $propertyOrRelation, get_class($record)));
    }

    /**
     * Provides a way for getting property or relation value from the given record.
     *
     * @param string $propertyOrRelation
     *
     * @return mixed
     *
     * @thrown Doctrine_Record_UnknownPropertyException when this way is not available
     */
    public function filterGet(Doctrine_Record $record, $propertyOrRelation)
    {
        foreach ($this->_aliases as $alias) {
            // The relationship must be fetched in order to check the field existence.
            // Related to PHP-7.0 compatibility so an explicit call to method get is required.
            $record[$alias];

            if ( ! $record->exists()) {
                if (isset($record[$alias][$propertyOrRelation])) {
                    return $record[$alias][$propertyOrRelation];
                }
            } else {
                if (isset($record[$alias][$propertyOrRelation])) {
                    return $record[$alias][$propertyOrRelation];
                }
            }
        }
        throw new Doctrine_Record_UnknownPropertyException(sprintf('Unknown record property / related component "%s" on "%s"', $propertyOrRelation, get_class($record)));
    }
}
