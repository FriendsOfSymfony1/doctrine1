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
 * Doctrine_Template_SoftDelete.
 *
 * @see        www.doctrine-project.org
 *
 * @author      Konsta Vesterinen <kvesteri@cc.hut.fi>
 * @author      Jonathan H. Wage <jonwage@gmail.com>
 */
class Doctrine_Template_SoftDelete extends Doctrine_Template
{
    /**
     * Array of SoftDelete options.
     *
     * @var string
     */
    protected $_options = [
        'name' => 'deleted_at',
        'type' => 'timestamp',
        'length' => null,
        'options' => [
            'notnull' => false,
        ],
        'hardDelete' => false,
    ];

    protected $_listener;

    /**
     * Set table definition for SoftDelete behavior.
     */
    public function setTableDefinition()
    {
        // BC to 1.0.X of SoftDelete behavior
        if ('boolean' == $this->_options['type']) {
            $this->_options['length'] = 1;
            $this->_options['options'] = ['default' => false, 'notnull' => true];
        }

        $this->hasColumn($this->_options['name'], $this->_options['type'], $this->_options['length'], $this->_options['options']);

        $this->_listener = new Doctrine_Template_Listener_SoftDelete($this->_options);
        $this->addListener($this->_listener);
    }

    /**
     * Add a hardDelete() method to any of the models who act as SoftDelete behavior.
     *
     * @param  Doctrine_Connection $conn
     * @return int                 $result number of affected rows
     */
    public function hardDelete($conn = null)
    {
        if (null === $conn) {
            $conn = $this->_table->getConnection();
        }
        $this->_listener->hardDelete(true);
        $result = $this->_invoker->delete();
        $this->_listener->hardDelete(false);

        return $result;
    }
}
