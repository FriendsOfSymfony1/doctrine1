<?php
/*
 *  $Id: Timestamp.php 3884 2008-02-22 18:26:35Z jwage $
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
 * Doctrine_Validator_Timestamp.
 *
 * @see        www.doctrine-project.org
 *
 * @author      Mark Pearson <mark.pearson0@googlemail.com>
 */
class Doctrine_Validator_Timestamp extends Doctrine_Validator_Driver
{
    /**
     * checks if given value is a valid timestamp
     * ISO-8601 timestamp (YYYY-MM-DDTHH:MM:SS+00:00) or (YYYY-MM-DD HH:MM:SS).
     *
     * @return bool
     */
    public function validate($value)
    {
        if (is_null($value)) {
            return true;
        }

        $splitChar = false !== strpos($value, 'T') ? 'T' : ' ';

        $e = explode($splitChar, trim($value));
        $date = $e[0] ?? null;
        $time = $e[1] ?? null;

        $dateValidator = Doctrine_Validator::getValidator('date');
        $timeValidator = Doctrine_Validator::getValidator('time');

        if (!$dateValidator->validate($date)) {
            return false;
        }

        if (!$timeValidator->validate($time)) {
            return false;
        }

        return true;
    }
}
