<?php
/**
 * Script to test the output from Doctrine_Cli.
 *
 * @author Dan Bettles <danbettles@yahoo.co.uk>
 */

require_once dirname(__FILE__, 3).'/lib/Doctrine/Core.php';
spl_autoload_register(['Doctrine_Core', 'autoload']);

$cli = new Doctrine_Cli();

require_once dirname(__FILE__).'/TestTask02.php';

// Either...:
$cli->registerTaskClass('Doctrine_Cli_TestCase_TestTask02');
// ...Or:
$cli->registerIncludedTaskClasses();

$cli->run($_SERVER['argv']);
