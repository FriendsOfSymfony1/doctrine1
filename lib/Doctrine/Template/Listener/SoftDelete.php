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
 * Listener for SoftDelete behavior which will allow you to turn on the behavior which
 * sets a delete flag instead of actually deleting the record and all queries automatically
 * include a check for the deleted flag to exclude deleted records.
 *
 * @see        www.doctrine-project.org
 *
 * @author      Konsta Vesterinen <kvesteri@cc.hut.fi>
 * @author      Jonathan H. Wage <jonwage@gmail.com>
 */
class Doctrine_Template_Listener_SoftDelete extends Doctrine_Record_Listener
{
    /**
     * Array of SoftDelete options.
     *
     * @var string
     */
    protected $_options = [];

    /**
     * __construct.
     *
     * @param string $options
     */
    public function __construct(array $options)
    {
        $this->_options = $options;
    }

    /**
     * Set the hard delete flag so that it is really deleted.
     *
     * @param bool $bool
     */
    public function hardDelete($bool)
    {
        $this->_options['hardDelete'] = $bool;
    }

    /**
     * Skip the normal delete options so we can override it with our own.
     */
    public function preDelete(Doctrine_Event $event)
    {
        $name = $this->_options['name'];
        $invoker = $event->getInvoker();

        if ('timestamp' == $this->_options['type']) {
            $invoker->{$name} = date('Y-m-d H:i:s', time());
        } elseif ('boolean' == $this->_options['type']) {
            $invoker->{$name} = true;
        }

        if (!$this->_options['hardDelete']) {
            $event->skipOperation();
        }
    }

    /**
     * Implement postDelete() hook and set the deleted flag to true.
     */
    public function postDelete(Doctrine_Event $event)
    {
        if (!$this->_options['hardDelete']) {
            $event->getInvoker()->save();
        }
    }

    /**
     * Implement preDqlDelete() hook and modify a dql delete query so it updates the deleted flag
     * instead of deleting the record.
     */
    public function preDqlDelete(Doctrine_Event $event)
    {
        $params = $event->getParams();
        $field = $params['alias'].'.'.$this->_options['name'];
        $query = $event->getQuery();
        if (!$query->contains($field)) {
            $query->from('')->update($params['component']['table']->getOption('name').' '.$params['alias']);

            if ('timestamp' == $this->_options['type']) {
                $query->set($field, '?', date('Y-m-d H:i:s', time()));
                $query->addWhere($field.' IS NULL');
            } elseif ('boolean' == $this->_options['type']) {
                $query->set($field, $query->getConnection()->convertBooleans(true));
                $query->addWhere(
                    $field.' = '.$query->getConnection()->convertBooleans(false)
                );
            }
        }
    }

    /**
     * Implement preDqlSelect() hook and add the deleted flag to all queries for which this model
     * is being used in.
     */
    public function preDqlSelect(Doctrine_Event $event)
    {
        $params = $event->getParams();
        $field = $params['alias'].'.'.$this->_options['name'];
        $query = $event->getQuery();

        // We only need to add the restriction if:
        // 1 - We are in the root query
        // 2 - We are in the subquery and it defines the component with that alias
        if ((!$query->isSubquery() || ($query->isSubquery() && $query->contains(' '.$params['alias'].' '))) && !$query->contains($field)) {
            if ('timestamp' == $this->_options['type']) {
                $query->addPendingJoinCondition($params['alias'], $field.' IS NULL');
            } elseif ('boolean' == $this->_options['type']) {
                $query->addPendingJoinCondition(
                    $params['alias'],
                    $field.' = '.$query->getConnection()->convertBooleans(false)
                );
            }
        }
    }
}
