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
 * Doctrine_AuditLog_Listener.
 *
 * @see        www.doctrine-project.org
 *
 * @author      Konsta Vesterinen <kvesteri@cc.hut.fi>
 */
class Doctrine_AuditLog_Listener extends Doctrine_Record_Listener
{
    /**
     * Instance of Doctrine_Auditlog.
     *
     * @var Doctrine_AuditLog
     */
    protected $_auditLog;

    /**
     * Instantiate AuditLog listener and set the Doctrine_AuditLog instance to the class.
     */
    public function __construct(Doctrine_AuditLog $auditLog)
    {
        $this->_auditLog = $auditLog;
    }

    /**
     * Pre insert event hook for incrementing version number.
     */
    public function preInsert(Doctrine_Event $event)
    {
        $version = $this->_auditLog->getOption('version');
        $name = null === $version['alias'] ? $version['name'] : $version['alias'];

        $record = $event->getInvoker();
        $record->set($name, $this->_getInitialVersion($record));
    }

    /**
     * Post insert event hook which creates the new version record
     * This will only insert a version record if the auditLog is enabled.
     */
    public function postInsert(Doctrine_Event $event)
    {
        if ($this->_auditLog->getOption('auditLog')) {
            $class = $this->_auditLog->getOption('className');

            $record = $event->getInvoker();
            $version = new $class();
            $version->merge($record->toArray(), false);
            $version->save();
        }
    }

    /**
     * Pre delete event hook deletes all related versions
     * This will only delete version records if the auditLog is enabled.
     */
    public function preDelete(Doctrine_Event $event)
    {
        if ($this->_auditLog->getOption('auditLog')) {
            $className = $this->_auditLog->getOption('className');
            $version = $this->_auditLog->getOption('version');
            $name = null === $version['alias'] ? $version['name'] : $version['alias'];
            $event->getInvoker()->set($name, null);

            if ($this->_auditLog->getOption('deleteVersions')) {
                $q = Doctrine_Core::getTable($className)
                    ->createQuery('obj')
                    ->delete()
                ;
                foreach ((array) $this->_auditLog->getOption('table')->getIdentifier() as $id) {
                    $conditions[] = 'obj.'.$id.' = ?';
                    $values[] = $event->getInvoker()->get($id);
                }

                $rows = $q->where(implode(' AND ', $conditions))
                    ->execute($values)
                ;
            }
        }
    }

    /**
     * Pre update event hook for inserting new version record
     * This will only insert a version record if the auditLog is enabled.
     */
    public function preUpdate(Doctrine_Event $event)
    {
        if ($this->_auditLog->getOption('auditLog')) {
            $class = $this->_auditLog->getOption('className');
            $record = $event->getInvoker();

            $version = $this->_auditLog->getOption('version');
            $name = null === $version['alias'] ? $version['name'] : $version['alias'];

            $record->set($name, $this->_getNextVersion($record));

            $version = new $class();
            $version->merge($record->toArray(), false);
            $version->save();
        }
    }

    /**
     * Get the initial version number for the audit log.
     *
     * @return int $initialVersion
     */
    protected function _getInitialVersion(Doctrine_Record $record)
    {
        return 1;
    }

    /**
     * Get the next version number for the audit log.
     *
     * @return int $nextVersion
     */
    protected function _getNextVersion(Doctrine_Record $record)
    {
        if ($this->_auditLog->getOption('auditLog')) {
            return $this->_auditLog->getMaxVersion($record) + 1;
        }
    }
}
