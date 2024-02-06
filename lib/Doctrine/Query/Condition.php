<?php
/*
 *  $Id: Condition.php 7490 2010-03-29 19:53:27Z jwage $
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
 * Doctrine_Query_Condition.
 *
 * @see        www.doctrine-project.org
 *
 * @author      Konsta Vesterinen <kvesteri@cc.hut.fi>
 */
abstract class Doctrine_Query_Condition extends Doctrine_Query_Part
{
    /**
     * DQL CONDITION PARSER
     * parses the join condition/where/having part of the query string.
     *
     * @param  string $str
     * @return string
     */
    public function parse($str)
    {
        $tmp = trim($str);

        $parts = $this->_tokenizer->bracketExplode($str, [' OR '], '(', ')');

        if (count($parts) > 1) {
            $ret = [];
            foreach ($parts as $part) {
                $part = $this->_tokenizer->bracketTrim($part, '(', ')');
                $ret[] = $this->parse($part);
            }
            $r = implode(' OR ', $ret);
        } else {
            $parts = $this->_tokenizer->bracketExplode($str, [' AND '], '(', ')');

            // Ticket #1388: We need to make sure we're not splitting a BETWEEN ...  AND ... clause
            $tmp = [];

            for ($i = 0, $l = count($parts); $i < $l; ++$i) {
                $test = $this->_tokenizer->sqlExplode($parts[$i]);

                if (3 == count($test) && 'BETWEEN' == strtoupper($test[1])) {
                    $tmp[] = $parts[$i].' AND '.$parts[++$i];
                } elseif (4 == count($test) && 'NOT' == strtoupper($test[1]) && 'BETWEEN' == strtoupper($test[2])) {
                    $tmp[] = $parts[$i].' AND '.$parts[++$i];
                } else {
                    $tmp[] = $parts[$i];
                }
            }

            $parts = $tmp;
            unset($tmp);

            if (count($parts) > 1) {
                $ret = [];
                foreach ($parts as $part) {
                    $part = $this->_tokenizer->bracketTrim($part, '(', ')');
                    $ret[] = $this->parse($part);
                }
                $r = implode(' AND ', $ret);
            } else {
                // Fix for #710
                if ('(' == substr($parts[0], 0, 1) && ')' == substr($parts[0], -1)) {
                    return $this->parse(substr($parts[0], 1, -1));
                }
                // Processing NOT here
                if ('NOT ' === strtoupper(substr($parts[0], 0, 4))) {
                    $r = 'NOT ('.$this->parse(substr($parts[0], 4)).')';
                } else {
                    return $this->load($parts[0]);
                }
            }
        }

        return '('.$r.')';
    }

    /**
     * parses a literal value and returns the parsed value.
     *
     * boolean literals are parsed to integers
     * components are parsed to associated table aliases
     *
     * @param  string $value literal value to be parsed
     * @return string
     */
    public function parseLiteralValue($value)
    {
        // check that value isn't a string
        if (false === strpos($value, '\'')) {
            // parse booleans
            $value = $this->query->getConnection()
                ->dataDict->parseBoolean($value)
            ;

            $a = explode('.', $value);

            if (count($a) > 1) {
                // either a float or a component..

                if (!is_numeric($a[0])) {
                    // a component found
                    $field = array_pop($a);
                    $reference = implode('.', $a);
                    $value = $this->query->getConnection()->quoteIdentifier(
                        $this->query->getSqlTableAlias($reference).'.'.$field
                    );
                }
            }
        }
        // string literal found

        return $value;
    }
}
