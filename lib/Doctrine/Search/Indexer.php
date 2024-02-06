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
 * Doctrine_Search_Indexer.
 *
 * @author      Konsta Vesterinen <kvesteri@cc.hut.fi>
 *
 * @see        www.doctrine-project.org
 */
class Doctrine_Search_Indexer
{
    public function indexDirectory($dir)
    {
        if (!file_exists($dir)) {
            throw new Doctrine_Search_Indexer_Exception('Unknown directory '.$dir);
        }

        $it = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($dir), RecursiveIteratorIterator::LEAVES_ONLY);

        $files = [];
        foreach ($it as $file) {
            $name = $file->getPathName();
            if (false === strpos($name, '.svn')) {
                $files[] = $name;
            }
        }

        $q = Doctrine_Core::getTable('Doctrine_File')
            ->createQuery('f')
            ->delete()
            ->where('f.url LIKE ?', [$dir.'%'])
            ->execute()
        ;

        // clear the index
        $q = Doctrine_Core::getTable('Doctrine_File_Index')
            ->createQuery('i')
            ->where('i.file_id = ?')
            ->execute()
        ;

        $coll = Doctrine_Collection::create('Doctrine_File');

        foreach ($files as $file) {
            $coll[]->url = $file;
        }

        $coll->save();
    }
}
