<?php
/*
 *  $Id: None.php 115 2012-03-30 15:25:38Z jmacias $
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
 * Doctrine_Repository
 * each record is added into Doctrine_Repository at the same time they are created,
 * loaded from the database or retrieved from the cache.
 *
 * @author      Jérôme Macias <jmacias@groupe-exp.com>
 *
 * @see        www.doctrine-project.org
 */
class Doctrine_Table_Repository_None extends Doctrine_Table_Repository implements Countable, IteratorAggregate
{
    /**
     * add.
     *
     * @param  Doctrine_Record $record record to be added into registry
     * @return bool
     */
    public function add(Doctrine_Record $record)
    {
        return false;
    }

    /**
     * get.
     *
     * @param  int                                 $oid
     * @throws Doctrine_Table_Repository_Exception
     */
    public function get($oid)
    {
        throw new Doctrine_Table_Repository_Exception('Unknown object identifier');
    }

    /**
     * count
     * Doctrine_Registry implements interface Countable.
     *
     * @return int the number of records this registry has
     */
    #[ReturnTypeWillChange]
    public function count()
    {
        return 0;
    }

    /**
     * evict.
     *
     * @param  int  $oid object identifier
     * @return bool whether ot not the operation was successful
     */
    public function evict($oid)
    {
        return false;
    }

    /**
     * evictAll.
     *
     * @return int number of records evicted
     */
    public function evictAll()
    {
        return 0;
    }
}
