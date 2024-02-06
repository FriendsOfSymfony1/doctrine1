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
 * Doctrine_Ticket_2123_TestCase.
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
class Doctrine_Ticket_2123_TestCase extends Doctrine_UnitTestCase
{
    public function testCheckingRelatedExistsOnCollectionThrowsException()
    {
        try {
            $user = Doctrine_Core::getTable('User')
                ->createQuery('u')
                ->fetchOne()
            ;
            $user->relatedExists('Phonenumber');
        } catch (Exception $e) {
            $this->pass();
        }
    }

    public function testRelatedExistsClearsReference()
    {
        $user = new User();
        $this->assertEqual($user->relatedExists('Email'), false);
        $this->assertEqual($user->hasReference('Email'), false);
    }

    public function testClearRelatedReference()
    {
        $user = new User();
        $email = $user->Email;
        $user->clearRelated('Email');
        $this->assertEqual($user->hasReference('Email'), false);
    }
}
