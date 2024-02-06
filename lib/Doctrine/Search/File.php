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
 * Doctrine_Search.
 *
 * @author      Konsta Vesterinen <kvesteri@cc.hut.fi>
 *
 * @see        www.doctrine-project.org
 */
class Doctrine_Search_File extends Doctrine_Search
{
    /**
     * constructor.
     *
     * @param array $options an array of plugin options
     */
    public function __construct(array $options = [])
    {
        parent::__construct($options);

        if (!isset($this->_options['resource'])) {
            $conn = Doctrine_Manager::connection();
            $tableClass = $conn->getAttribute(Doctrine_Core::ATTR_TABLE_CLASS);
            $table = new $tableClass('File', $conn);

            $table->setColumn('url', 'string', 255, ['primary' => true]);
        }

        if (empty($this->_options['fields'])) {
            $this->_options['fields'] = ['url', 'content'];
        }

        $this->initialize($table);
    }

    public function buildRelation()
    {
    }

    /**
     * indexes given directory.
     *
     * @param string $dir the name of the directory to index
     */
    public function indexDirectory($dir)
    {
        $it = new RecursiveIteratorIterator(
            new RecursiveDirectoryIterator($dir),
            RecursiveIteratorIterator::LEAVES_ONLY
        );

        foreach ($it as $file) {
            if (false !== strpos($file, DIRECTORY_SEPARATOR.'.svn')) {
                continue;
            }

            if ($file->isDir()) {
                continue;
            }

            $this->updateIndex(['url' => $file->getPathName(),
                'content' => file_get_contents($file)]);
        }
    }
}
