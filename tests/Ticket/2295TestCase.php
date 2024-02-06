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
 * Doctrine_Ticket_2295_TestCase.
 *
 * @author      Miloslav Kmeť <miloslav.kmet@gmail.com>
 *
 * @category    Object Relational Mapping
 *
 * @see        www.doctrine-project.org
 *
 * @internal
 *
 * @coversNothing
 */
class Doctrine_Ticket_2295_TestCase extends Doctrine_UnitTestCase
{
    public function testMappedValueFromArray()
    {
        $test = new Doctrine_Ticket_2295_Record();
        $test->fromArray(['test' => 'mapped value']);
        $this->assertEqual($test->test, 'mapped value');
    }

    public function testMappedValueSynchronizeWithArray()
    {
        $test = new Doctrine_Ticket_2295_Record();
        $test->synchronizeWithArray(['test' => 'mapped value']);
        $this->assertEqual($test->test, 'mapped value');
    }
}

class Doctrine_Ticket_2295_Record extends Doctrine_Record
{
    public function construct()
    {
        $this->mapValue('test');
    }
}
