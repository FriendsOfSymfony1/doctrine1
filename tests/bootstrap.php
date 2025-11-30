<?php

$startTime = time();

// Debug Diagnosic process attacher sleep time needed to link process
// More info about that: http://bugs.php.net/bugs-generating-backtrace-win32.php
//sleep(10);

ini_set('max_execution_time', 900);
ini_set('date.timezone', 'GMT+0');

define('DOCTRINE_DIR', $_SERVER['DOCTRINE_DIR']);

require_once(DOCTRINE_DIR . '/lib/Doctrine/Core.php');

spl_autoload_register(array('Doctrine_Core', 'autoload'));
spl_autoload_register(array('Doctrine_Core', 'modelsAutoload'));

require_once(DOCTRINE_DIR . '/tests/DoctrineTest.php');

spl_autoload_register(array('DoctrineTest', 'autoload'));
