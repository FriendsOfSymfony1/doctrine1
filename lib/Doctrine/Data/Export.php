<?php
/*
 *  $Id: Export.php 2552 2007-09-19 19:33:00Z Jonathan.Wage $
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
 * Doctrine_Data_Export.
 *
 * @author      Jonathan H. Wage <jwage@mac.com>
 *
 * @see        www.doctrine-project.org
 */
class Doctrine_Data_Export extends Doctrine_Data
{
    /**
     * constructor.
     *
     * @param string $directory
     */
    public function __construct($directory)
    {
        $this->setDirectory($directory);
    }

    /**
     * doExport.
     *
     * FIXME: This function has ugly hacks in it for temporarily disabling INDEXBY query parts of tables
     * to export.
     *
     * Update from jwage: I am not sure if their is any other better solution for this. It may be the correct
     * solution to disable the indexBy settings for tables when exporting data fixtures. Maybe a better idea
     * would be to extract this functionality to a pair of functions to enable/disable the index by settings
     * so simply turn them on and off when they need to query for the translations standalone and don't need
     * it to be indexed by the lang.
     */
    public function doExport()
    {
        $models = Doctrine_Core::getLoadedModels();
        $specifiedModels = $this->getModels();

        $data = [];

        // for situation when the $models array is empty, but the $specifiedModels array isn't
        if (empty($models)) {
            $models = $specifiedModels;
        }

        $models = Doctrine_Core::initializeModels($models);

        // temporarily disable indexBy query parts of selected and related tables
        $originalIndexBy = [];
        foreach ($models as $name) {
            $table = Doctrine_Core::getTable($name);
            if (!is_null($indexBy = $table->getBoundQueryPart('indexBy'))) {
                $originalIndexBy[$name] = $indexBy;
                $table->bindQueryPart('indexBy', null);
            }
        }

        foreach ($models as $name) {
            if (!empty($specifiedModels) and !in_array($name, $specifiedModels)) {
                continue;
            }

            $results = Doctrine_Core::getTable($name)->findAll();

            if ($results->count() > 0) {
                $data[$name] = $results;
            }
        }

        // Restore the temporarily disabled indexBy query parts
        foreach ($originalIndexBy as $name => $indexBy) {
            Doctrine_Core::getTable($name)->bindQueryPart('indexBy', $indexBy);
        }

        $data = $this->prepareData($data);

        return $this->dumpData($data);
    }

    /**
     * dumpData.
     *
     * Dump the prepared data to the fixtures files
     */
    public function dumpData(array $data)
    {
        $directory = $this->getDirectory();
        $format = $this->getFormat();

        if ($this->exportIndividualFiles()) {
            if (is_array($directory)) {
                throw new Doctrine_Data_Exception('You must specify a single path to a folder in order to export individual files.');
            }
            if (!is_dir($directory) && is_file($directory)) {
                $directory = dirname($directory);
            }

            foreach ($data as $className => $classData) {
                if (!empty($classData)) {
                    Doctrine_Parser::dump([$className => $classData], $format, $directory.DIRECTORY_SEPARATOR.$className.'.'.$format);
                }
            }
        } else {
            if (is_dir($directory)) {
                $directory .= DIRECTORY_SEPARATOR.'data.'.$format;
            }

            if (!empty($data)) {
                return Doctrine_Parser::dump($data, $format, $directory);
            }
        }
    }

    /**
     * prepareData.
     *
     * Prepare the raw data to be exported with the parser
     *
     * @param  string $data
     * @return array
     */
    public function prepareData($data)
    {
        $preparedData = [];

        foreach ($data as $className => $classData) {
            $preparedData[$className] = [];
            $keyType = $classData->getTable()->getIdentifierType();
            foreach ($classData as $record) {
                $className = get_class($record);
                $recordKey = $className.'_'.implode('_', $record->identifier());
                $preparedData[$className][$recordKey] = [];

                // skip single primary keys, we need to maintain composite primary keys
                $keys = $record->getTable()->getIdentifier();

                $recordData = $record->toArray(false);

                foreach ($recordData as $key => $value) {
                    if (!is_array($keys)) {
                        $keys = [$keys];
                    }

                    if (Doctrine_Core::IDENTIFIER_NATURAL !== $keyType && count($keys) <= 1 && in_array($key, $keys)) {
                        continue;
                    }

                    if (is_object($record[$key])) {
                        // If the field is an object serialize it
                        $value = serialize($record[$key]);
                    }

                    if ($relation = $this->isRelation($record, $key)) {
                        if (!$value) {
                            continue;
                        }
                        $relationAlias = $relation['alias'];
                        $relationRecord = $record->{$relationAlias};

                        // If collection then get first so we have an instance of the related record
                        if ($relationRecord instanceof Doctrine_Collection) {
                            $relationRecord = $relationRecord->getFirst();
                        }

                        // If relation is null or does not exist then continue
                        if ($relationRecord instanceof Doctrine_Null || !$relationRecord) {
                            continue;
                        }

                        // Get class name for relation
                        $relationClassName = get_class($relationRecord);

                        $relationValue = $relationClassName.'_'.$value;

                        $preparedData[$className][$recordKey][$relationAlias] = $relationValue;
                    } elseif ($record->getTable()->hasField($key)) {
                        $preparedData[$className][$recordKey][$key] = $value;
                    }
                }
            }
        }

        return $preparedData;
    }
}
