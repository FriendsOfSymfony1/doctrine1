<?php
/*
 *  $Id: Db2.php 7490 2010-03-29 19:53:27Z jwage $
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
 * Doctrine_Connection_Db2.
 *
 * @see        www.doctrine-project.org
 *
 * @author      Konsta Vesterinen <kvesteri@cc.hut.fi>
 */
class Doctrine_Connection_Db2 extends Doctrine_Connection_Common
{
    /**
     * Adds an driver-specific LIMIT clause to the query.
     *
     * @param  string $query  query to modify
     * @param  int    $limit  limit the number of rows
     * @param  int    $offset start reading from given offset
     * @return string the modified query
     */
    public function modifyLimitQuery($query, $limit = false, $offset = false, $isManip = false)
    {
        if ($limit <= 0) {
            return $query;
        }

        if (0 == $offset) {
            return $query.' FETCH FIRST '.(int) $limit.' ROWS ONLY';
        }
        $sqlPieces = explode('from', $query);
        $select = $sqlPieces[0];
        $table = $sqlPieces[1];

        $col = explode('select', $select);

        return 'WITH OFFSET AS('.$select.', ROW_NUMBER() '.
           'OVER(ORDER BY '.$col[1].') AS doctrine_rownum FROM '.$table.')'.
           $select.'FROM OFFSET WHERE doctrine_rownum BETWEEN '.(int) $offset.
               'AND '.((int) $offset + (int) $limit - 1);
    }
}
