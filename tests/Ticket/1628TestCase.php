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
 * Doctrine_Ticket_1628_TestCase.
 *
 * @author      Konsta Vesterinen <kvesteri@cc.hut.fi>
 *
 * @category    Object Relational Mapping
 *
 * @see        www.doctrine-project.org
 *
 * @internal
 *
 * @coversNothing
 */
class Doctrine_Ticket_1628_TestCase extends Doctrine_UnitTestCase
{
    public function testTest()
    {
        // String values for non-constant values
        $builder = new Doctrine_Import_Builder();
        $code = trim($builder->buildAttributes(['coll_key' => 'id']));
        $this->assertEqual($code, "\$this->setAttribute(Doctrine_Core::ATTR_COLL_KEY, 'id');");

        // Boolean values
        $code = trim($builder->buildAttributes(['use_dql_callbacks' => true]));
        $this->assertEqual($code, '$this->setAttribute(Doctrine_Core::ATTR_USE_DQL_CALLBACKS, true);');
        $code = trim($builder->buildAttributes(['use_dql_callbacks' => false]));
        $this->assertEqual($code, '$this->setAttribute(Doctrine_Core::ATTR_USE_DQL_CALLBACKS, false);');

        // Constant values
        $code = trim($builder->buildAttributes(['model_loading' => 'conservative']));
        $this->assertEqual($code, '$this->setAttribute(Doctrine_Core::ATTR_MODEL_LOADING, Doctrine_Core::MODEL_LOADING_CONSERVATIVE);');

        $code = trim($builder->buildAttributes(['export' => ['all', 'constraints']]));
        $this->assertEqual($code, '$this->setAttribute(Doctrine_Core::ATTR_EXPORT, Doctrine_Core::EXPORT_ALL ^ Doctrine_Core::EXPORT_CONSTRAINTS);');
    }
}
