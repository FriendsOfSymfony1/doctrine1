<?php
/*
 *  $Id: Compiler.php 7677 2010-07-28 03:37:42Z kriswallsmith $
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
 * Doctrine_Compiler
 * This class can be used for compiling the entire Doctrine framework into a single file.
 *
 * @author      Konsta Vesterinen <kvesteri@cc.hut.fi>
 *
 * @see        www.phpdoctrine.
 */
class Doctrine_Compiler
{
    /**
     * method for making a single file of most used doctrine runtime components
     * including the compiled file instead of multiple files (in worst
     * cases dozens of files) can improve performance by an order of magnitude.
     *
     * @param mixed|null $target
     * @return $target Path the compiled file was written to
     * @throws Doctrine_Compiler_Exception if something went wrong during the compile operation
     */
    public static function compile($target = null, $includedDrivers = [])
    {
        if (!is_array($includedDrivers)) {
            $includedDrivers = [$includedDrivers];
        }

        $excludedDrivers = [];

        // If we have an array of specified drivers then lets determine which drivers we should exclude
        if (!empty($includedDrivers)) {
            $drivers = ['db2',
                'mssql',
                'mysql',
                'oracle',
                'pgsql',
                'sqlite'];

            $excludedDrivers = array_diff($drivers, $includedDrivers);
        }

        $path = Doctrine_Core::getPath();
        $it = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($path.'/Doctrine'), RecursiveIteratorIterator::LEAVES_ONLY);

        foreach ($it as $file) {
            $e = explode('.', $file->getFileName());

            // @todo what is a versioning file? do we have these anymore? None
            // exists in my version of doctrine from svn.
            // we don't want to require versioning files
            if ('php' === end($e) && false === strpos($file->getFileName(), '.inc')
                && false === strpos($file->getFileName(), 'sfYaml')) {
                require_once $file->getPathName();
            }
        }

        $classes = array_merge(get_declared_classes(), get_declared_interfaces());

        $ret = [];

        foreach ($classes as $class) {
            $e = explode('_', $class);

            if ('Doctrine' !== $e[0]) {
                continue;
            }

            // Exclude drivers
            if (!empty($excludedDrivers)) {
                foreach ($excludedDrivers as $excludedDriver) {
                    $excludedDriver = ucfirst($excludedDriver);

                    if (in_array($excludedDriver, $e)) {
                        continue 2;
                    }
                }
            }

            $refl = new ReflectionClass($class);
            $file = $refl->getFileName();

            $lines = file($file);

            $start = $refl->getStartLine() - 1;
            $end = $refl->getEndLine();

            $ret = array_merge($ret, array_slice($lines, $start, $end - $start));
        }

        if (null == $target) {
            $target = $path.DIRECTORY_SEPARATOR.'Doctrine.compiled.php';
        }

        // first write the 'compiled' data to a text file, so
        // that we can use php_strip_whitespace (which only works on files)
        $fp = @fopen($target, 'w');

        if (false === $fp) {
            throw new Doctrine_Compiler_Exception("Couldn't write compiled data. Failed to open {$target}");
        }

        fwrite($fp, '<?php '.implode('', $ret));
        fclose($fp);

        $stripped = php_strip_whitespace($target);
        $fp = @fopen($target, 'w');
        if (false === $fp) {
            throw new Doctrine_Compiler_Exception("Couldn't write compiled data. Failed to open {$file}");
        }

        fwrite($fp, $stripped);
        fclose($fp);

        return $target;
    }
}
