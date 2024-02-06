<?php
/*
 *  $Id: Statement.php 7490 2010-03-29 19:53:27Z jwage $
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
 * Doctrine_Adapter_Statement.
 *
 * @author      Konsta Vesterinen <kvesteri@cc.hut.fi>
 *
 * @see        www.doctrine-project.org
 */
abstract class Doctrine_Adapter_Statement
{
    /**
     * bindValue.
     *
     * @param string $no
     * @param string $value
     */
    public function bindValue($no, $value)
    {
    }

    /**
     * fetch.
     *
     * @see Doctrine_Core::FETCH_* constants
     */
    public function fetch()
    {
    }

    /**
     * nextRowSet.
     */
    public function nextRowset()
    {
    }

    /**
     * execute().
     */
    public function execute()
    {
    }

    /**
     * errorCode.
     */
    public function errorCode()
    {
    }

    /**
     * errorInfo.
     */
    public function errorInfo()
    {
    }

    /**
     * rowCount.
     */
    public function rowCount()
    {
    }

    /**
     * setFetchMode.
     *
     * @param string $mode
     */
    public function setFetchMode($mode)
    {
    }

    /**
     * columnCount.
     */
    public function columnCount()
    {
    }
}
