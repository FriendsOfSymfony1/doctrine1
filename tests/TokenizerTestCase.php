<?php
/*
 *  $Id: TokenizerTestCase.php 1181 2007-03-20 23:22:51Z gnat $
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
 * Doctrine_Tokenizer_TestCase
 * This class tests the functinality of Doctrine_Tokenizer component.
 *
 * @category    Object Relational Mapping
 *
 * @see        www.doctrine-project.org
 *
 * @author      Konsta Vesterinen <kvesteri@cc.hut.fi>
 *
 * @internal
 *
 * @coversNothing
 */
class Doctrine_Tokenizer_TestCase extends Doctrine_UnitTestCase
{
    public function prepareData()
    {
    }

    public function prepareTables()
    {
    }

    public function testSqlExplode()
    {
        $tokenizer = new Doctrine_Query_Tokenizer();

        $str = 'word1 word2 word3';
        $a = $tokenizer->sqlExplode($str);

        $this->assertEqual($a, ['word1', 'word2', 'word3']);

        $str = 'word1 (word2 word3)';
        $a = $tokenizer->sqlExplode($str);
        $this->assertEqual($a, ['word1', '(word2 word3)']);

        $str = "word1 'word2 word3'";
        $a = $tokenizer->sqlExplode($str);
        $this->assertEqual($a, ['word1', "'word2 word3'"]);

        $str = "word1 'word2 word3'";
        $a = $tokenizer->sqlExplode($str);
        $this->assertEqual($a, ['word1', "'word2 word3'"]);

        $str = 'word1 "word2 word3"';
        $a = $tokenizer->sqlExplode($str);
        $this->assertEqual($a, ['word1', '"word2 word3"']);

        $str = 'word1 ((word2) word3)';
        $a = $tokenizer->sqlExplode($str);
        $this->assertEqual($a, ['word1', '((word2) word3)']);

        $str = "word1 ( (word2) 'word3')";
        $a = $tokenizer->sqlExplode($str);
        $this->assertEqual($a, ['word1', "( (word2) 'word3')"]);

        $str = "word1 ( \"(word2) 'word3')";
        $a = $tokenizer->sqlExplode($str);
        $this->assertEqual($a, ['word1', "( \"(word2) 'word3')"]);

        $str = "word1 ( ''(word2) 'word3')";
        $a = $tokenizer->sqlExplode($str);
        $this->assertEqual($a, ['word1', "( ''(word2) 'word3')"]);

        $str = "word1 ( '()()'(word2) 'word3')";
        $a = $tokenizer->sqlExplode($str);
        $this->assertEqual($a, ['word1', "( '()()'(word2) 'word3')"]);

        $str = "word1 'word2)() word3'";
        $a = $tokenizer->sqlExplode($str);
        $this->assertEqual($a, ['word1', "'word2)() word3'"]);

        $str = 'word1 (word2() word3)';
        $a = $tokenizer->sqlExplode($str);
        $this->assertEqual($a, ['word1', '(word2() word3)']);

        $str = 'word1 "word2)() word3"';
        $a = $tokenizer->sqlExplode($str);
        $this->assertEqual($a, ['word1', '"word2)() word3"']);

        $str = "something (subquery '')";
        $a = $tokenizer->sqlExplode($str);
        $this->assertEqual($a, ['something', "(subquery '')"]);

        $str = 'something (( ))';
        $a = $tokenizer->sqlExplode($str);
        $this->assertEqual($a, ['something', '(( ))']);
    }

    public function testSqlExplode2()
    {
        $tokenizer = new Doctrine_Query_Tokenizer();
        $str = 'rdbms (dbal OR database)';
        $a = $tokenizer->sqlExplode($str, ' OR ');

        $this->assertEqual($a, ['rdbms (dbal OR database)']);
    }

    public function testBracketExplode()
    {
        $tokenizer = new Doctrine_Query_Tokenizer();

        $str = 'foo.field AND bar.field';
        $a = $tokenizer->bracketExplode($str, [' \&\& ', ' AND '], '(', ')');
        $this->assertEqual($a, ['foo.field', 'bar.field']);

        // delimiters should be case insensitive
        $str = 'foo.field and bar.field';
        $a = $tokenizer->bracketExplode($str, [' \&\& ', ' AND '], '(', ')');
        $this->assertEqual($a, ['foo.field', 'bar.field']);

        // test the JOIN splitter as used in Doctrine_Query_From::parse()
        $str = 'foo.field join bar.field';
        $a = $tokenizer->bracketExplode($str, 'JOIN');
        $this->assertEqual($a, ['foo.field', 'bar.field']);

        // test that table names including the split string are unaffected
        $str = 'foojointable.field join bar.field';
        $a = $tokenizer->bracketExplode($str, 'JOIN');
        $this->assertEqual($a, ['foojointable.field', 'bar.field']);
    }

    public function testQuoteExplodedShouldQuoteArray()
    {
        $tokenizer = new Doctrine_Query_Tokenizer();
        $term = $tokenizer->quoteExplode('test', ["'test'", 'test2']);
        $this->assertEqual($term[0], 'test');
    }
}
