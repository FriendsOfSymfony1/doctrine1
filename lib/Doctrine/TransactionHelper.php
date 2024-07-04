<?php

/**
 * Helper for transactions handling.
 *
 * @author Kyle McGrogan <mcgrogan91@gmail.com>
 */
final class Doctrine_TransactionHelper
{
    /**
     * Execute a commit on the given connection, only if a transaction already started.
     */
    public static function commitIfInTransaction(Doctrine_Connection $connection): void
    {
        $handler = $connection->getDbh();

        // Attempt to commit while no transaction is running results in exception since PHP 8 + pdo_mysql combination
        if ($handler instanceof PDO && !$handler->inTransaction()) {
            return;
        }

        $connection->commit();
    }
}
