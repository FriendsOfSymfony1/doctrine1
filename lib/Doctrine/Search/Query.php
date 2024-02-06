<?php
/*
 *  $Id: Hook.php 1939 2007-07-05 23:47:48Z zYne $
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
 * Doctrine_Search_Query.
 *
 * @author      Konsta Vesterinen <kvesteri@cc.hut.fi>
 *
 * @see        www.doctrine-project.org
 */
class Doctrine_Search_Query
{
    /**
     * @var Doctrine_Table the index table
     */
    protected $_table = [];

    protected $_sql = '';

    protected $_params = [];

    protected $_words = [];

    protected $_tokenizer;

    protected $_condition;

    public function __construct($table)
    {
        if (is_string($table)) {
            $table = Doctrine_Core::getTable($table);
        } else {
            if (!$table instanceof Doctrine_Table) {
                throw new Doctrine_Search_Exception('Invalid argument type. Expected instance of Doctrine_Table.');
            }
        }

        $this->_tokenizer = new Doctrine_Query_Tokenizer();
        $this->_table = $table;

        $foreignId = current(array_diff($this->_table->getColumnNames(), ['keyword', 'field', 'position']));

        $this->_condition = $foreignId.' %s (SELECT '.$foreignId.' FROM '.$this->_table->getTableName().' WHERE ';
    }

    public function query($text, $includeRelevance = true)
    {
        $text = trim($text);

        $foreignId = current(array_diff($this->_table->getColumnNames(), ['keyword', 'field', 'position']));

        $weighted = false;
        if (false === strpos($text, '^')) {
            if ($includeRelevance) {
                $select = 'SELECT COUNT(keyword) AS relevance, '.$foreignId;
            } else {
                $select = 'SELECT '.$foreignId;
            }
        } else {
            if ($includeRelevance) {
                $select = 'SELECT SUM(sub_relevance) AS relevance, '.$foreignId;
            } else {
                $select = 'SELECT '.$foreignId;
            }
        }

        $from = 'FROM '.$this->_table->getTableName();
        $where = 'WHERE ';
        $where .= $this->parseClause($text);

        $groupby = 'GROUP BY '.$foreignId;
        if ($includeRelevance) {
            $orderBy = 'ORDER BY relevance DESC';
        } else {
            $orderBy = null;
        }
        $this->_sql = $select.' '.$from.' '.$where.' '.$groupby;
        if (isset($orderBy) && null !== $orderBy) {
            $this->_sql .= ' '.$orderBy;
        }
    }

    public function parseClause($originalClause, $recursive = false)
    {
        $clause = $this->_tokenizer->bracketTrim($originalClause);

        $brackets = false;

        if ($clause !== $originalClause) {
            $brackets = true;
        }

        $foreignId = current(array_diff($this->_table->getColumnNames(), ['keyword', 'field', 'position']));

        $terms = $this->_tokenizer->sqlExplode($clause, ' OR ', '(', ')');

        $ret = [];

        if (count($terms) > 1) {
            $leavesOnly = true;

            foreach ($terms as $k => $term) {
                if ($this->isExpression($term)) {
                    $ret[$k] = $this->parseClause($term, true);
                    $leavesOnly = false;
                } else {
                    $ret[$k] = $this->parseTerm($term);
                }
            }

            $return = implode(' OR ', $ret);

            if ($leavesOnly && $recursive) {
                $return = sprintf($this->_condition, 'IN').$return.')';
                $brackets = false;
            }
        } else {
            $terms = $this->_tokenizer->sqlExplode($clause, ' ', '(', ')');

            if (1 === count($terms) && !$recursive) {
                $return = $this->parseTerm($clause);
            } else {
                foreach ($terms as $k => $term) {
                    $term = trim($term);

                    if ('AND' === $term) {
                        continue;
                    }

                    if ('-' === substr($term, 0, 1)) {
                        $operator = 'NOT IN';
                        $term = substr($term, 1);
                    } else {
                        $operator = 'IN';
                    }

                    if ($this->isExpression($term)) {
                        $ret[$k] = $this->parseClause($term, true);
                    } else {
                        $ret[$k] = sprintf($this->_condition, $operator).$this->parseTerm($term).')';
                    }
                }
                $return = implode(' AND ', $ret);
            }
        }

        if ($brackets) {
            return '('.$return.')';
        }

        return $return;
    }

    public function isExpression($term)
    {
        if (false !== strpos($term, '(')) {
            return true;
        }
        $terms = $this->_tokenizer->quoteExplode($term);

        return count($terms) > 1;
    }

    public function parseTerm($term)
    {
        $negation = false;

        if (false === strpos($term, "'")) {
            $where = $this->parseWord($term);
        } else {
            $term = trim($term, "' ");

            $terms = $this->_tokenizer->quoteExplode($term);
            $where = $this->parseWord($terms[0]);

            foreach ($terms as $k => $word) {
                if (0 === $k) {
                    continue;
                }
                $where .= ' AND (position + '.$k.') IN (SELECT position FROM '.$this->_table->getTableName().' WHERE '.$this->parseWord($word).')';
            }
        }

        return $where;
    }

    public function parseWord($word)
    {
        $this->_words[] = str_replace('*', '', $word);

        if (false !== strpos($word, '?')
            || false !== strpos($word, '*')) {
            $word = str_replace('*', '%', $word);

            $where = 'keyword LIKE ?';

            $params = [$word];
        } else {
            $where = 'keyword = ?';
        }

        $this->_params[] = $word;

        return $where;
    }

    public function getWords()
    {
        return $this->_words;
    }

    public function getParams()
    {
        return $this->_params;
    }

    public function getSqlQuery()
    {
        return $this->_sql;
    }
}
