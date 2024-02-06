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
 * The base core class of Doctrine.
 *
 * @author      Konsta Vesterinen <kvesteri@cc.hut.fi>
 * @author      Lukas Smith <smith@pooteeweet.org> (PEAR MDB2 library)
 *
 * @see        www.doctrine-project.org
 */
class Doctrine_Core
{
    /**
     * VERSION.
     */
    public const VERSION = '1.2.4';

    /**
     * ERROR CONSTANTS.
     */
    public const ERR = -1;
    public const ERR_SYNTAX = -2;
    public const ERR_CONSTRAINT = -3;
    public const ERR_NOT_FOUND = -4;
    public const ERR_ALREADY_EXISTS = -5;
    public const ERR_UNSUPPORTED = -6;
    public const ERR_MISMATCH = -7;
    public const ERR_INVALID = -8;
    public const ERR_NOT_CAPABLE = -9;
    public const ERR_TRUNCATED = -10;
    public const ERR_INVALID_NUMBER = -11;
    public const ERR_INVALID_DATE = -12;
    public const ERR_DIVZERO = -13;
    public const ERR_NODBSELECTED = -14;
    public const ERR_CANNOT_CREATE = -15;
    public const ERR_CANNOT_DELETE = -16;
    public const ERR_CANNOT_DROP = -17;
    public const ERR_NOSUCHTABLE = -18;
    public const ERR_NOSUCHFIELD = -19;
    public const ERR_NEED_MORE_DATA = -20;
    public const ERR_NOT_LOCKED = -21;
    public const ERR_VALUE_COUNT_ON_ROW = -22;
    public const ERR_INVALID_DSN = -23;
    public const ERR_CONNECT_FAILED = -24;
    public const ERR_EXTENSION_NOT_FOUND = -25;
    public const ERR_NOSUCHDB = -26;
    public const ERR_ACCESS_VIOLATION = -27;
    public const ERR_CANNOT_REPLACE = -28;
    public const ERR_CONSTRAINT_NOT_NULL = -29;
    public const ERR_DEADLOCK = -30;
    public const ERR_CANNOT_ALTER = -31;
    public const ERR_MANAGER = -32;
    public const ERR_MANAGER_PARSE = -33;
    public const ERR_LOADMODULE = -34;
    public const ERR_INSUFFICIENT_DATA = -35;
    public const ERR_CLASS_NAME = -36;

    /**
     * PDO derived constants.
     */
    public const CASE_LOWER = 2;
    public const CASE_NATURAL = 0;
    public const CASE_UPPER = 1;
    public const CURSOR_FWDONLY = 0;
    public const CURSOR_SCROLL = 1;
    public const ERRMODE_EXCEPTION = 2;
    public const ERRMODE_SILENT = 0;
    public const ERRMODE_WARNING = 1;
    public const FETCH_ASSOC = 2;
    public const FETCH_BOTH = 4;
    public const FETCH_BOUND = 6;
    public const FETCH_CLASS = 8;
    public const FETCH_CLASSTYPE = 262144;
    public const FETCH_COLUMN = 7;
    public const FETCH_FUNC = 10;
    public const FETCH_GROUP = 65536;
    public const FETCH_INTO = 9;
    public const FETCH_LAZY = 1;
    public const FETCH_NAMED = 11;
    public const FETCH_NUM = 3;
    public const FETCH_OBJ = 5;
    public const FETCH_ORI_ABS = 4;
    public const FETCH_ORI_FIRST = 2;
    public const FETCH_ORI_LAST = 3;
    public const FETCH_ORI_NEXT = 0;
    public const FETCH_ORI_PRIOR = 1;
    public const FETCH_ORI_REL = 5;
    public const FETCH_SERIALIZE = 524288;
    public const FETCH_UNIQUE = 196608;
    public const NULL_EMPTY_STRING = 1;
    public const NULL_NATURAL = 0;
    public const NULL_TO_STRING = null;
    public const PARAM_BOOL = 5;
    public const PARAM_INPUT_OUTPUT = -2147483648;
    public const PARAM_INT = 1;
    public const PARAM_LOB = 3;
    public const PARAM_NULL = 0;
    public const PARAM_STMT = 4;
    public const PARAM_STR = 2;

    /**
     * ATTRIBUTE CONSTANTS.
     */

    /**
     * PDO derived attributes.
     */
    public const ATTR_AUTOCOMMIT = 0;
    public const ATTR_PREFETCH = 1;
    public const ATTR_TIMEOUT = 2;
    public const ATTR_ERRMODE = 3;
    public const ATTR_SERVER_VERSION = 4;
    public const ATTR_CLIENT_VERSION = 5;
    public const ATTR_SERVER_INFO = 6;
    public const ATTR_CONNECTION_STATUS = 7;
    public const ATTR_CASE = 8;
    public const ATTR_CURSOR_NAME = 9;
    public const ATTR_CURSOR = 10;
    public const ATTR_ORACLE_NULLS = 11;
    public const ATTR_PERSISTENT = 12;
    public const ATTR_STATEMENT_CLASS = 13;
    public const ATTR_FETCH_TABLE_NAMES = 14;
    public const ATTR_FETCH_CATALOG_NAMES = 15;
    public const ATTR_DRIVER_NAME = 16;
    public const ATTR_STRINGIFY_FETCHES = 17;
    public const ATTR_MAX_COLUMN_LEN = 18;

    /**
     * Doctrine constants.
     */
    public const ATTR_LISTENER = 100;
    public const ATTR_QUOTE_IDENTIFIER = 101;
    public const ATTR_FIELD_CASE = 102;
    public const ATTR_IDXNAME_FORMAT = 103;
    public const ATTR_SEQNAME_FORMAT = 104;
    public const ATTR_SEQCOL_NAME = 105;
    public const ATTR_CMPNAME_FORMAT = 118;
    public const ATTR_DBNAME_FORMAT = 117;
    public const ATTR_TBLCLASS_FORMAT = 119;
    public const ATTR_TBLNAME_FORMAT = 120;
    public const ATTR_FKNAME_FORMAT = 171;
    public const ATTR_EXPORT = 140;
    public const ATTR_DECIMAL_PLACES = 141;

    public const ATTR_PORTABILITY = 106;
    public const ATTR_VALIDATE = 107;
    public const ATTR_COLL_KEY = 108;
    public const ATTR_QUERY_LIMIT = 109;
    public const ATTR_DEFAULT_TABLE_TYPE = 112;
    public const ATTR_DEF_TEXT_LENGTH = 113;
    public const ATTR_DEF_VARCHAR_LENGTH = 114;
    public const ATTR_DEF_TABLESPACE = 115;
    public const ATTR_EMULATE_DATABASE = 116;
    public const ATTR_USE_NATIVE_ENUM = 117;
    public const ATTR_DEFAULT_SEQUENCE = 133;

    public const ATTR_FETCHMODE = 118;
    public const ATTR_NAME_PREFIX = 121;
    public const ATTR_CREATE_TABLES = 122;
    public const ATTR_COLL_LIMIT = 123;

    public const ATTR_CACHE = 150;
    public const ATTR_RESULT_CACHE = 150;
    public const ATTR_CACHE_LIFESPAN = 151;
    public const ATTR_RESULT_CACHE_LIFESPAN = 151;
    public const ATTR_LOAD_REFERENCES = 153;
    public const ATTR_RECORD_LISTENER = 154;
    public const ATTR_THROW_EXCEPTIONS = 155;
    public const ATTR_DEFAULT_PARAM_NAMESPACE = 156;
    public const ATTR_QUERY_CACHE = 157;
    public const ATTR_QUERY_CACHE_LIFESPAN = 158;
    public const ATTR_AUTOLOAD_TABLE_CLASSES = 160;
    public const ATTR_MODEL_LOADING = 161;
    public const ATTR_RECURSIVE_MERGE_FIXTURES = 162;
    public const ATTR_USE_DQL_CALLBACKS = 164;
    public const ATTR_AUTO_ACCESSOR_OVERRIDE = 165;
    public const ATTR_AUTO_FREE_QUERY_OBJECTS = 166;
    public const ATTR_DEFAULT_TABLE_CHARSET = 167;
    public const ATTR_DEFAULT_TABLE_COLLATE = 168;
    public const ATTR_DEFAULT_IDENTIFIER_OPTIONS = 169;
    public const ATTR_DEFAULT_COLUMN_OPTIONS = 170;
    public const ATTR_HYDRATE_OVERWRITE = 172;
    public const ATTR_QUERY_CLASS = 173;
    public const ATTR_CASCADE_SAVES = 174;
    public const ATTR_COLLECTION_CLASS = 175;
    public const ATTR_TABLE_CLASS = 176;
    public const ATTR_USE_NATIVE_SET = 177;
    public const ATTR_MODEL_CLASS_PREFIX = 178;
    public const ATTR_TABLE_CLASS_FORMAT = 179;
    public const ATTR_MAX_IDENTIFIER_LENGTH = 180;
    public const ATTR_USE_TABLE_REPOSITORY = 181;
    public const ATTR_USE_TABLE_IDENTITY_MAP = 182;
    public const ATTR_TABLE_CACHE = 183;
    public const ATTR_TABLE_CACHE_LIFESPAN = 184;

    /**
     * LIMIT CONSTANTS.
     */

    /**
     * constant for row limiting.
     */
    public const LIMIT_ROWS = 1;
    public const QUERY_LIMIT_ROWS = 1;

    /**
     * constant for record limiting.
     */
    public const LIMIT_RECORDS = 2;
    public const QUERY_LIMIT_RECORDS = 2;

    /**
     * FETCHMODE CONSTANTS.
     */

    /**
     * PORTABILITY CONSTANTS.
     */

    /**
     * Portability: turn off all portability features.
     *
     * @see self::ATTR_PORTABILITY
     */
    public const PORTABILITY_NONE = 0;

    /**
     * Portability: convert names of tables and fields to case defined in the
     * "field_case" option when using the query*(), fetch*() methods.
     *
     * @see self::ATTR_PORTABILITY
     */
    public const PORTABILITY_FIX_CASE = 1;

    /**
     * Portability: right trim the data output by query*() and fetch*().
     *
     * @see self::ATTR_PORTABILITY
     */
    public const PORTABILITY_RTRIM = 2;

    /**
     * Portability: force reporting the number of rows deleted.
     *
     * @see self::ATTR_PORTABILITY
     */
    public const PORTABILITY_DELETE_COUNT = 4;

    /**
     * Portability: convert empty values to null strings in data output by
     * query*() and fetch*().
     *
     * @see self::ATTR_PORTABILITY
     */
    public const PORTABILITY_EMPTY_TO_NULL = 8;

    /**
     * Portability: removes database/table qualifiers from associative indexes.
     *
     * @see self::ATTR_PORTABILITY
     */
    public const PORTABILITY_FIX_ASSOC_FIELD_NAMES = 16;

    /**
     * Portability: makes Doctrine_Expression throw exception for unportable RDBMS expressions.
     *
     * @see self::ATTR_PORTABILITY
     */
    public const PORTABILITY_EXPR = 32;

    /**
     * Portability: turn on all portability features.
     *
     * @see self::ATTR_PORTABILITY
     */
    public const PORTABILITY_ALL = 63;

    /**
     * LOCKMODE CONSTANTS.
     */

    /**
     * mode for optimistic locking.
     */
    public const LOCK_OPTIMISTIC = 0;

    /**
     * mode for pessimistic locking.
     */
    public const LOCK_PESSIMISTIC = 1;

    /**
     * EXPORT CONSTANTS.
     */

    /**
     * EXPORT_NONE.
     */
    public const EXPORT_NONE = 0;

    /**
     * EXPORT_TABLES.
     */
    public const EXPORT_TABLES = 1;

    /**
     * EXPORT_CONSTRAINTS.
     */
    public const EXPORT_CONSTRAINTS = 2;

    /**
     * EXPORT_PLUGINS.
     */
    public const EXPORT_PLUGINS = 4;

    /**
     * EXPORT_ALL.
     */
    public const EXPORT_ALL = 7;

    /**
     * HYDRATION CONSTANTS.
     */

    /**
     * HYDRATE_RECORD.
     */
    public const HYDRATE_RECORD = 2;

    /**
     * HYDRATE_ARRAY.
     */
    public const HYDRATE_ARRAY = 3;

    /**
     * HYDRATE_NONE.
     */
    public const HYDRATE_NONE = 4;

    /**
     * HYDRATE_SCALAR.
     */
    public const HYDRATE_SCALAR = 5;

    /**
     * HYDRATE_SINGLE_SCALAR.
     */
    public const HYDRATE_SINGLE_SCALAR = 6;

    /**
     * HYDRATE_ON_DEMAND.
     */
    public const HYDRATE_ON_DEMAND = 7;

    /**
     * HYDRATE_ARRAY_HIERARCHY.
     */
    public const HYDRATE_ARRAY_HIERARCHY = 8;

    /**
     * HYDRATE_RECORD_HIERARCHY.
     */
    public const HYDRATE_RECORD_HIERARCHY = 9;

    /**
     * HYDRATE_ARRAY_SHALLOW.
     */
    public const HYDRATE_ARRAY_SHALLOW = 10;

    /**
     * VALIDATION CONSTANTS.
     */
    public const VALIDATE_NONE = 0;

    /**
     * VALIDATE_LENGTHS.
     */
    public const VALIDATE_LENGTHS = 1;

    /**
     * VALIDATE_TYPES.
     */
    public const VALIDATE_TYPES = 2;

    /**
     * VALIDATE_CONSTRAINTS.
     */
    public const VALIDATE_CONSTRAINTS = 4;

    /**
     * VALIDATE_ALL.
     */
    public const VALIDATE_ALL = 7;

    /**
     * VALIDATE_USER.
     */
    public const VALIDATE_USER = 8;

    /**
     * IDENTIFIER_AUTOINC.
     *
     * constant for auto_increment identifier
     */
    public const IDENTIFIER_AUTOINC = 1;

    /**
     * IDENTIFIER_SEQUENCE.
     *
     * constant for sequence identifier
     */
    public const IDENTIFIER_SEQUENCE = 2;

    /**
     * IDENTIFIER_NATURAL.
     *
     * constant for normal identifier
     */
    public const IDENTIFIER_NATURAL = 3;

    /**
     * IDENTIFIER_COMPOSITE.
     *
     * constant for composite identifier
     */
    public const IDENTIFIER_COMPOSITE = 4;

    /**
     * MODEL_LOADING_AGGRESSIVE.
     *
     * Constant for agressive model loading
     * Will require_once() all found model files
     */
    public const MODEL_LOADING_AGGRESSIVE = 1;

    /**
     * MODEL_LOADING_CONSERVATIVE.
     *
     * Constant for conservative model loading
     * Will not require_once() found model files inititally instead it will build an array
     * and reference it in autoload() when a class is needed it will require_once() it
     */
    public const MODEL_LOADING_CONSERVATIVE = 2;

    /**
     * MODEL_LOADING_PEAR.
     *
     * Constant for pear model loading
     * Will simply store the path passed to Doctrine_Core::loadModels()
     * and Doctrine_Core::autoload() will check there
     */
    public const MODEL_LOADING_PEAR = 3;

    /**
     * Path to Doctrine root.
     *
     * @var string doctrine root directory
     */
    private static $_path;

    /**
     * Path to the Doctrine extensions directory.
     *
     * @var string
     */
    private static $_extensionsPath;

    /**
     * Debug bool true/false option.
     *
     * @var bool
     */
    private static $_debug = false;

    /**
     * Array of all the loaded models and the path to each one for autoloading.
     *
     * @var array
     */
    private static $_loadedModelFiles = [];

    /**
     * Array of all the loaded validators.
     *
     * @var array
     */
    private static $_validators = [];

    /**
     * Path to the models directory.
     *
     * @var string
     */
    private static $_modelsDirectory;

    /**
     * __construct.
     *
     * @throws Doctrine_Exception
     */
    public function __construct()
    {
        throw new Doctrine_Exception('Doctrine is static class. No instances can be created.');
    }

    /**
     * Returns an array of all the loaded models and the path where each of them exists.
     *
     * @return array
     */
    public static function getLoadedModelFiles()
    {
        return self::$_loadedModelFiles;
    }

    /**
     * Turn on/off the debugging setting.
     *
     * @param string $bool
     */
    public static function debug($bool = null)
    {
        if (null !== $bool) {
            self::$_debug = (bool) $bool;
        }

        return self::$_debug;
    }

    /**
     * Set the path to your core Doctrine libraries.
     *
     * @param string $path The path to your Doctrine libraries
     */
    public static function setPath($path)
    {
        self::$_path = $path;
    }

    /**
     * Get the root path to Doctrine.
     *
     * @return string
     */
    public static function getPath()
    {
        if (!self::$_path) {
            self::$_path = realpath(dirname(__FILE__).'/..');
        }

        return self::$_path;
    }

    /**
     * Set the path to autoload extension classes from.
     *
     * @param string $extensionsPath
     */
    public static function setExtensionsPath($extensionsPath)
    {
        self::$_extensionsPath = $extensionsPath;
    }

    /**
     * Get the path to load extension classes from.
     *
     * @return string $extensionsPath
     */
    public static function getExtensionsPath()
    {
        return self::$_extensionsPath;
    }

    /**
     * Load an individual model name and path in to the model loading registry.
     *
     * @param mixed|null $path
     */
    public static function loadModel($className, $path = null)
    {
        self::$_loadedModelFiles[$className] = $path;
    }

    /**
     * Set the directory where your models are located for PEAR style
     * naming convention autoloading.
     *
     * @param string $directory
     */
    public static function setModelsDirectory($directory)
    {
        self::$_modelsDirectory = $directory;
    }

    /**
     * Get the directory where your models are located for PEAR style naming
     * convention autoloading.
     *
     * @author Jonathan Wage
     */
    public static function getModelsDirectory()
    {
        return self::$_modelsDirectory;
    }

    /**
     * Recursively load all models from a directory or array of directories.
     *
     * @param string $directory    Path to directory of models or array of directory paths
     * @param int    $modelLoading Pass value of Doctrine_Core::ATTR_MODEL_LOADING to force a certain style of model loading
     *                             Allowed Doctrine_Core::MODEL_LOADING_AGGRESSIVE(default) or Doctrine_Core::MODEL_LOADING_CONSERVATIVE
     * @param string $classPrefix  The class prefix of the models to load. This is useful if the class name and file name are not the same
     */
    public static function loadModels($directory, $modelLoading = null, $classPrefix = null)
    {
        $manager = Doctrine_Manager::getInstance();

        $modelLoading = null === $modelLoading ? $manager->getAttribute(Doctrine_Core::ATTR_MODEL_LOADING) : $modelLoading;
        $classPrefix = null === $classPrefix ? $manager->getAttribute(Doctrine_Core::ATTR_MODEL_CLASS_PREFIX) : $classPrefix;

        $loadedModels = [];

        if (null !== $directory) {
            foreach ((array) $directory as $dir) {
                $dir = rtrim($dir, '/');
                if (!is_dir($dir)) {
                    throw new Doctrine_Exception('You must pass a valid path to a directory containing Doctrine models');
                }

                $it = new RecursiveIteratorIterator(
                    new RecursiveDirectoryIterator($dir),
                    RecursiveIteratorIterator::LEAVES_ONLY
                );

                foreach ($it as $file) {
                    $e = explode('.', $file->getFileName());

                    if ('php' === end($e) && false === strpos($file->getFileName(), '.inc')) {
                        if (Doctrine_Core::MODEL_LOADING_PEAR == $modelLoading) {
                            $className = str_replace($dir.DIRECTORY_SEPARATOR, null, $file->getPathName());
                            $className = str_replace(DIRECTORY_SEPARATOR, '_', $className);
                            $className = substr($className, 0, strpos($className, '.'));
                        } else {
                            $className = $e[0];
                        }

                        if ($classPrefix && $classPrefix != substr($className, 0, strlen($classPrefix))) {
                            $className = $classPrefix.$className;
                        }

                        if (!class_exists($className, false)) {
                            if (Doctrine_Core::MODEL_LOADING_CONSERVATIVE == $modelLoading || Doctrine_Core::MODEL_LOADING_PEAR == $modelLoading) {
                                self::loadModel($className, $file->getPathName());

                                $loadedModels[$className] = $className;
                            } else {
                                $declaredBefore = get_declared_classes();
                                require_once $file->getPathName();
                                $declaredAfter = get_declared_classes();

                                if (defined('HHVM_VERSION')) {
                                    // on HHVM get_declared_classes() returns in a different order, array_diff() works, so we have to use it
                                    $foundClasses = array_diff($declaredAfter, $declaredBefore);
                                } else {
                                    // Using array_slice because array_diff is broken is some PHP versions
                                    // https://bugs.php.net/bug.php?id=47643
                                    $foundClasses = array_slice($declaredAfter, count($declaredBefore));
                                }

                                if ($foundClasses) {
                                    foreach ($foundClasses as $className) {
                                        if (self::isValidModelClass($className)) {
                                            $loadedModels[$className] = $className;

                                            self::loadModel($className, $file->getPathName());
                                        }
                                    }
                                }

                                $previouslyLoaded = array_keys(self::$_loadedModelFiles, $file->getPathName());

                                if (!empty($previouslyLoaded)) {
                                    $previouslyLoaded = array_combine(array_values($previouslyLoaded), array_values($previouslyLoaded));
                                    $loadedModels = array_merge($loadedModels, $previouslyLoaded);
                                }
                            }
                        } elseif (self::isValidModelClass($className)) {
                            $loadedModels[$className] = $className;
                        }
                    }
                }
            }
        }

        asort($loadedModels);

        return $loadedModels;
    }

    /**
     * Get all the loaded models, you can provide an array of classes or it will use get_declared_classes().
     *
     * Will filter through an array of classes and return the Doctrine_Records out of them.
     * If you do not specify $classes it will return all of the currently loaded Doctrine_Records
     *
     * @param classes  Array of classes to filter through, otherwise uses get_declared_classes()
     * @param  mixed|null $classes
     * @return array      $loadedModels
     */
    public static function getLoadedModels($classes = null)
    {
        if (null === $classes) {
            $classes = get_declared_classes();
            $classes = array_merge($classes, array_keys(self::$_loadedModelFiles));
        }

        return self::filterInvalidModels($classes);
    }

    /**
     * Initialize all models so everything is present and loaded in to memory
     * This will also inheritently initialize any model behaviors and add
     * the models generated by Doctrine generators and add them to the $models
     * array.
     *
     * @param  string $models
     * @return array  $models
     */
    public static function initializeModels($models)
    {
        $models = self::filterInvalidModels($models);

        foreach ($models as $model) {
            $declaredBefore = get_declared_classes();
            Doctrine_Core::getTable($model);

            $declaredAfter = get_declared_classes();
            if (defined('HHVM_VERSION')) {
                // on HHVM get_declared_classes() returns in a different order, array_diff() works, so we have to use it
                $foundClasses = array_diff($declaredAfter, $declaredBefore);
            } else {
                // Using array_slice because array_diff is broken is some PHP versions
                // https://bugs.php.net/bug.php?id=47643
                $foundClasses = array_slice($declaredAfter, count($declaredBefore) - 1);
            }
            foreach ($foundClasses as $class) {
                if (self::isValidModelClass($class)) {
                    $models[] = $class;
                }
            }
        }

        return self::filterInvalidModels($models);
    }

    /**
     * Filter through an array of classes and return all the classes that are valid models.
     * This will inflect the class, causing it to be loaded in to memory.
     *
     * @param classes  Array of classes to filter through, otherwise uses get_declared_classes()
     * @return array $loadedModels
     */
    public static function filterInvalidModels($classes)
    {
        $validModels = [];

        foreach ((array) $classes as $name) {
            if (self::isValidModelClass($name) && !in_array($name, $validModels)) {
                $validModels[] = $name;
            }
        }

        return $validModels;
    }

    /**
     * Checks if what is passed is a valid Doctrine_Record
     * Will load class in to memory in order to inflect it and find out information about the class.
     *
     * @param  mixed $class Can be a string named after the class, an instance of the class, or an instance of the class reflected
     * @return bool
     */
    public static function isValidModelClass($class)
    {
        if ($class instanceof Doctrine_Record) {
            $class = get_class($class);
        }

        if (is_string($class) && class_exists($class)) {
            $class = new ReflectionClass($class);
        }

        if ($class instanceof ReflectionClass) {
            // Skip the following classes
            // - abstract classes
            // - not a subclass of Doctrine_Record
            if (!$class->isAbstract() && $class->isSubclassOf('Doctrine_Record')) {
                return true;
            }
        }

        return false;
    }

    /**
     * Get the connection object for a table by the actual table name
     * FIXME: I think this method is flawed because a individual connections could have the same table name.
     *
     * @param  string              $tableName
     * @return Doctrine_Connection
     */
    public static function getConnectionByTableName($tableName)
    {
        $loadedModels = self::getLoadedModels();

        foreach ($loadedModels as $name) {
            $table = Doctrine_Core::getTable($name);

            if ($table->getTableName() == $tableName) {
                return $table->getConnection();
            }
        }

        return Doctrine_Manager::connection();
    }

    /**
     * Method for importing existing schema to Doctrine_Record classes.
     *
     * @param  string    $directory   Directory to write your models to
     * @param  array     $connections Array of connection names to generate models for
     * @param  array     $options     Array of options
     * @return bool
     * @throws Exception
     */
    public static function generateModelsFromDb($directory, array $connections = [], array $options = [])
    {
        return Doctrine_Manager::connection()->import->importSchema($directory, $connections, $options);
    }

    /**
     * Generates models from database to temporary location then uses those models to generate a yaml schema file.
     * This should probably be fixed. We should write something to generate a yaml schema file directly from the database.
     *
     * @param string $yamlPath    Path to write oyur yaml schema file to
     * @param array  $connections Array of connection names to generate yaml for
     * @param array  $options     Array of options
     */
    public static function generateYamlFromDb($yamlPath, array $connections = [], array $options = [])
    {
        $directory = sys_get_temp_dir().DIRECTORY_SEPARATOR.'tmp_doctrine_models';

        $options['generateBaseClasses'] ??= false;
        $result = Doctrine_Core::generateModelsFromDb($directory, $connections, $options);

        if (empty($result) && !is_dir($directory)) {
            throw new Doctrine_Exception('No models generated from your databases');
        }

        $export = new Doctrine_Export_Schema();

        $result = $export->exportSchema($yamlPath, 'yml', $directory, [], Doctrine_Core::MODEL_LOADING_AGGRESSIVE);

        Doctrine_Lib::removeDirectories($directory);

        return $result;
    }

    /**
     * Generate a yaml schema file from an existing directory of models.
     *
     * @param string $yamlPath  Path to your yaml schema files
     * @param string $directory Directory to generate your models in
     * @param array  $options   Array of options to pass to the schema importer
     */
    public static function generateModelsFromYaml($yamlPath, $directory, $options = [])
    {
        $import = new Doctrine_Import_Schema();
        $import->setOptions($options);

        return $import->importSchema($yamlPath, 'yml', $directory);
    }

    /**
     * Creates database tables for the models in the specified directory.
     *
     * @param string $directory Directory containing your models
     */
    public static function createTablesFromModels($directory = null)
    {
        return Doctrine_Manager::connection()->export->exportSchema($directory);
    }

    /**
     * Creates database tables for the models in the supplied array.
     *
     * @param array $array An array of models to be exported
     */
    public static function createTablesFromArray($array)
    {
        return Doctrine_Manager::connection()->export->exportClasses($array);
    }

    /**
     * Generate a array of sql for the passed array of models.
     *
     * @param  array $array
     * @return array $sql
     */
    public static function generateSqlFromArray($array)
    {
        return Doctrine_Manager::connection()->export->exportClassesSql($array);
    }

    /**
     * Generate a sql string to create the tables from all loaded models
     * or the models found in the passed directory.
     *
     * @param  string $directory
     * @return string $build  String of sql queries. One query per line
     */
    public static function generateSqlFromModels($directory = null)
    {
        $conn = Doctrine_Manager::connection();
        $sql = $conn->export->exportSql($directory);

        $build = '';
        foreach ($sql as $query) {
            $build .= $query.$conn->sql_file_delimiter;
        }

        return $build;
    }

    /**
     * Generate yaml schema file for the models in the specified directory.
     *
     * @param string $yamlPath  Path to your yaml schema files
     * @param string $directory Directory to generate your models in
     */
    public static function generateYamlFromModels($yamlPath, $directory)
    {
        $export = new Doctrine_Export_Schema();

        return $export->exportSchema($yamlPath, 'yml', $directory);
    }

    /**
     * Creates databases for connections.
     *
     * @param string $specifiedConnections Array of connections you wish to create the database for
     */
    public static function createDatabases($specifiedConnections = [])
    {
        return Doctrine_Manager::getInstance()->createDatabases($specifiedConnections);
    }

    /**
     * Drops databases for connections.
     *
     * @param string $specifiedConnections Array of connections you wish to drop the database for
     */
    public static function dropDatabases($specifiedConnections = [])
    {
        return Doctrine_Manager::getInstance()->dropDatabases($specifiedConnections);
    }

    /**
     * Dump data to a yaml fixtures file.
     *
     * @param string $yamlPath        Path to write the yaml data fixtures to
     * @param string $individualFiles Whether or not to dump data to individual fixtures files
     */
    public static function dumpData($yamlPath, $individualFiles = false)
    {
        $data = new Doctrine_Data();

        return $data->exportData($yamlPath, 'yml', [], $individualFiles);
    }

    /**
     * Load data from a yaml fixtures file.
     * The output of dumpData can be fed to loadData.
     *
     * @param string $yamlPath Path to your yaml data fixtures
     * @param string $append   Whether or not to append the data
     */
    public static function loadData($yamlPath, $append = false, $charset = 'UTF-8')
    {
        $data = new Doctrine_Data();

        return $data->importData($yamlPath, 'yml', [], $append, $charset);
    }

    /**
     * Migrate database to specified $to version. Migrates from current to latest if you do not specify.
     *
     * @param  string $migrationsPath Path to migrations directory which contains your migration classes
     * @param  string $to             version you wish to migrate to
     * @return bool   true
     * @throws new    Doctrine_Migration_Exception
     */
    public static function migrate($migrationsPath, $to = null)
    {
        $migration = new Doctrine_Migration($migrationsPath);

        return $migration->migrate($to);
    }

    /**
     * Generate new migration class skeleton.
     *
     * @param string $className      Name of the Migration class to generate
     * @param string $migrationsPath Path to directory which contains your migration classes
     */
    public static function generateMigrationClass($className, $migrationsPath)
    {
        $builder = new Doctrine_Migration_Builder($migrationsPath);

        return $builder->generateMigrationClass($className);
    }

    /**
     * Generate a set of migration classes from an existing database.
     *
     * @param  string $migrationsPath
     * @throws new    Doctrine_Migration_Exception
     */
    public static function generateMigrationsFromDb($migrationsPath)
    {
        $builder = new Doctrine_Migration_Builder($migrationsPath);

        return $builder->generateMigrationsFromDb();
    }

    /**
     * Generate a set of migration classes from an existing set of models.
     *
     * @param string $migrationsPath Path to your Doctrine migration classes
     * @param string $modelsPath     Path to your Doctrine model classes
     * @param int    $modelLoading   Style of model loading to use for loading the models in order to generate migrations
     */
    public static function generateMigrationsFromModels($migrationsPath, $modelsPath = null, $modelLoading = null)
    {
        $builder = new Doctrine_Migration_Builder($migrationsPath);

        return $builder->generateMigrationsFromModels($modelsPath, $modelLoading);
    }

    /**
     * Generate a set of migration classes by generating differences between two sets
     * of schema information.
     *
     * @param  string $migrationsPath Path to your Doctrine migration classes
     * @param  string $from           From schema information
     * @param  string $to             To schema information
     * @return array  $changes
     */
    public static function generateMigrationsFromDiff($migrationsPath, $from, $to)
    {
        $diff = new Doctrine_Migration_Diff($from, $to, $migrationsPath);

        return $diff->generateMigrationClasses();
    }

    /**
     * Get the Doctrine_Table object for the passed model.
     *
     * @param  string         $componentName
     * @return Doctrine_Table
     */
    public static function getTable($componentName)
    {
        return Doctrine_Manager::getInstance()->getConnectionForComponent($componentName)->getTable($componentName);
    }

    /**
     * Method for making a single file of most used doctrine runtime components
     * including the compiled file instead of multiple files (in worst
     * cases dozens of files) can improve performance by an order of magnitude.
     *
     * @param  string             $target
     * @param  array              $includedDrivers
     * @throws Doctrine_Exception
     */
    public static function compile($target = null, $includedDrivers = [])
    {
        return Doctrine_Compiler::compile($target, $includedDrivers);
    }

    /**
     * simple autoload function
     * returns true if the class was loaded, otherwise false.
     *
     * @param  string $className
     * @return bool
     */
    public static function autoload($className)
    {
        if (0 === strpos($className, 'sfYaml')) {
            require dirname(__FILE__).'/Parser/sfYaml/'.$className.'.php';

            return true;
        }

        if (0 !== stripos($className, 'Doctrine') || class_exists($className, false) || interface_exists($className, false)) {
            return false;
        }

        $class = self::getPath().DIRECTORY_SEPARATOR.str_replace('_', DIRECTORY_SEPARATOR, $className).'.php';

        if (file_exists($class)) {
            require $class;

            return true;
        }

        return false;
    }

    public static function modelsAutoload($className)
    {
        if (class_exists($className, false) || interface_exists($className, false)) {
            return false;
        }

        if (!self::$_modelsDirectory) {
            $loadedModels = self::$_loadedModelFiles;

            if (isset($loadedModels[$className]) && file_exists($loadedModels[$className])) {
                require $loadedModels[$className];

                return true;
            }
        } else {
            $class = self::$_modelsDirectory.DIRECTORY_SEPARATOR.str_replace('_', DIRECTORY_SEPARATOR, $className).'.php';

            if (file_exists($class)) {
                require $class;

                return true;
            }
        }

        return false;
    }

    /**
     * Load classes from the Doctrine extensions directory/path.
     *
     * @param  string $className
     * @return bool
     */
    public static function extensionsAutoload($className)
    {
        if (class_exists($className, false) || interface_exists($className, false)) {
            return false;
        }

        $extensions = Doctrine_Manager::getInstance()
            ->getExtensions()
        ;

        foreach ($extensions as $name => $path) {
            $class = $path.DIRECTORY_SEPARATOR.str_replace('_', DIRECTORY_SEPARATOR, $className).'.php';

            if (file_exists($class)) {
                require $class;

                return true;
            }
        }

        return false;
    }

    /**
     * dumps a given variable.
     *
     * @param  mixed       $var    a variable of any type
     * @param  bool        $output whether to output the content
     * @param  string      $indent indention string
     * @return void|string
     */
    public static function dump($var, $output = true, $indent = '')
    {
        $ret = [];
        switch (gettype($var)) {
            case 'array':
                $ret[] = 'Array(';
                $indent .= '    ';
                foreach ($var as $k => $v) {
                    $ret[] = $indent.$k.' : '.self::dump($v, false, $indent);
                }
                $indent = substr($indent, 0, -4);
                $ret[] = $indent.')';
                break;
            case 'object':
                $ret[] = 'Object('.get_class($var).')';
                break;
            default:
                $ret[] = var_export($var, true);
        }

        if ($output) {
            echo implode("\n", $ret);
        }

        return implode("\n", $ret);
    }
}
