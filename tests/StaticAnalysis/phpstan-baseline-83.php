<?php declare(strict_types = 1);

$ignoreErrors = [];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Access\\:\\:__unset\\(\\) with return type void returns bool but should not return anything\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Access.php',
];
$ignoreErrors[] = [
	'message' => '#^Class Doctrine_Adapter_Statement_Mock constructor invoked with 2 parameters, 1 required\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/../../lib/Doctrine/Adapter/Mock.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Adapter_Mock\\:\\:exec\\(\\) with return type void returns int but should not return anything\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Adapter/Mock.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Adapter_Mock\\:\\:lastInsertId\\(\\) should return int but returns null\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Adapter/Mock.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Adapter_Oracle\\:\\:commit\\(\\) with return type void returns bool but should not return anything\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Adapter/Oracle.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Adapter_Oracle\\:\\:exec\\(\\) with return type void returns int but should not return anything\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Adapter/Oracle.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param references unknown parameter\\: \\$name$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Adapter/Oracle.php',
];
$ignoreErrors[] = [
	'message' => '#^Unreachable statement \\- code above always terminates\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Adapter/Oracle.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param references unknown parameter\\: \\$cursorOffset$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Adapter/Statement.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param references unknown parameter\\: \\$cursorOrientation$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Adapter/Statement.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param references unknown parameter\\: \\$fetchStyle$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Adapter/Statement.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param references unknown parameter\\: \\$columnIndex$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Adapter/Statement/Interface.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param references unknown parameter\\: \\$param$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Adapter/Statement/Interface.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Adapter_Statement_Mock\\:\\:bindColumn\\(\\) should return bool but return statement is missing\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Adapter/Statement/Mock.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Adapter_Statement_Mock\\:\\:bindParam\\(\\) should return bool but return statement is missing\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Adapter/Statement/Mock.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Adapter_Statement_Mock\\:\\:bindValue\\(\\) should return bool but return statement is missing\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Adapter/Statement/Mock.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Adapter_Statement_Mock\\:\\:errorCode\\(\\) should return string but returns array\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Adapter/Statement/Mock.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Adapter_Statement_Mock\\:\\:fetchColumn\\(\\) should return string but returns int\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Adapter/Statement/Mock.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Adapter_Statement_Mock\\:\\:getColumnMeta\\(\\) should return array but return statement is missing\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Adapter/Statement/Mock.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Adapter_Statement_Mock\\:\\:setAttribute\\(\\) should return bool but return statement is missing\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Adapter/Statement/Mock.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Adapter_Statement_Mock\\:\\:setFetchMode\\(\\) should return bool but return statement is missing\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Adapter/Statement/Mock.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param references unknown parameter\\: \\$columnIndex$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Adapter/Statement/Mock.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param references unknown parameter\\: \\$fetchStyle$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Adapter/Statement/Mock.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param references unknown parameter\\: \\$param$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Adapter/Statement/Mock.php',
];
$ignoreErrors[] = [
	'message' => '#^Access to an undefined property Doctrine_Adapter_Statement_Oracle\\:\\:\\$oci_errors\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Adapter/Statement/Oracle.php',
];
$ignoreErrors[] = [
	'message' => '#^Else branch is unreachable because previous condition is always true\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Adapter/Statement/Oracle.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Adapter_Statement_Oracle\\:\\:bindValue\\(\\) should return bool but return statement is missing\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Adapter/Statement/Oracle.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Adapter_Statement_Oracle\\:\\:errorInfo\\(\\) should return array but returns string\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Adapter/Statement/Oracle.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Adapter_Statement_Oracle\\:\\:fetchColumn\\(\\) should return string but returns false\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Adapter/Statement/Oracle.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Adapter_Statement_Oracle\\:\\:setAttribute\\(\\) should return bool but return statement is missing\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Adapter/Statement/Oracle.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param has invalid value \\(string       Query string to parse, if NULL, \\$this\\-\\>queryString is used\\)\\: Unexpected token "Query", expected variable at offset 109$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Adapter/Statement/Oracle.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param references unknown parameter\\: \\$columnIndex$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Adapter/Statement/Oracle.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param references unknown parameter\\: \\$param$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Adapter/Statement/Oracle.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$message of class Doctrine_Adapter_Exception constructor expects string, array given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Adapter/Statement/Oracle.php',
];
$ignoreErrors[] = [
	'message' => '#^Undefined variable\\: \\$object$#',
	'count' => 2,
	'path' => __DIR__ . '/../../lib/Doctrine/Adapter/Statement/Oracle.php',
];
$ignoreErrors[] = [
	'message' => '#^Unreachable statement \\- code above always terminates\\.$#',
	'count' => 5,
	'path' => __DIR__ . '/../../lib/Doctrine/Adapter/Statement/Oracle.php',
];
$ignoreErrors[] = [
	'message' => '#^Variable \\$oci_length might not be defined\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Adapter/Statement/Oracle.php',
];
$ignoreErrors[] = [
	'message' => '#^Variable \\$conditions might not be defined\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/../../lib/Doctrine/AuditLog.php',
];
$ignoreErrors[] = [
	'message' => '#^Variable \\$values might not be defined\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/AuditLog.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_AuditLog_Listener\\:\\:_getNextVersion\\(\\) should return int but return statement is missing\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/AuditLog/Listener.php',
];
$ignoreErrors[] = [
	'message' => '#^Variable \\$conditions might not be defined\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/AuditLog/Listener.php',
];
$ignoreErrors[] = [
	'message' => '#^Variable \\$values might not be defined\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/AuditLog/Listener.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_AuditLog_Listener_Microtime\\:\\:_getInitialVersion\\(\\) should return int but returns string\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/AuditLog/Listener/Microtime.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_AuditLog_Listener_Microtime\\:\\:_getNextVersion\\(\\) should return int but returns string\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/AuditLog/Listener/Microtime.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Builder\\:\\:varExport\\(\\) with return type void returns string but should not return anything\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Builder.php',
];
$ignoreErrors[] = [
	'message' => '#^Default value of the parameter \\#3 \\$lifeTime \\(false\\) of method Doctrine_Cache_Apc\\:\\:_doSave\\(\\) is incompatible with type int\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Cache/Apc.php',
];
$ignoreErrors[] = [
	'message' => '#^Default value of the parameter \\#3 \\$lifeTime \\(false\\) of method Doctrine_Cache_Array\\:\\:_doSave\\(\\) is incompatible with type int\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Cache/Array.php',
];
$ignoreErrors[] = [
	'message' => '#^Access to an undefined property Doctrine_Connection\\:\\:\\$export\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Cache/Db.php',
];
$ignoreErrors[] = [
	'message' => '#^Default value of the parameter \\#3 \\$lifeTime \\(false\\) of method Doctrine_Cache_Db\\:\\:_doSave\\(\\) is incompatible with type int\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Cache/Db.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Cache_Db\\:\\:_doDelete\\(\\) should return bool but returns int\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Cache/Db.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Cache_Db\\:\\:_doSave\\(\\) should return bool but returns int\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Cache/Db.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Cache_Db\\:\\:_hex2bin\\(\\) should return string but returns null\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Cache/Db.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param references unknown parameter\\: \\$_options$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Cache/Db.php',
];
$ignoreErrors[] = [
	'message' => '#^Default value of the parameter \\#3 \\$lifeTime \\(false\\) of method Doctrine_Cache_Driver\\:\\:_doSave\\(\\) is incompatible with type int\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Cache/Driver.php',
];
$ignoreErrors[] = [
	'message' => '#^Default value of the parameter \\#3 \\$lifeTime \\(false\\) of method Doctrine_Cache_Driver\\:\\:save\\(\\) is incompatible with type int\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Cache/Driver.php',
];
$ignoreErrors[] = [
	'message' => '#^If condition is always true\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Cache/Driver.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Cache_Driver\\:\\:delete\\(\\) should return bool but returns int\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Cache/Driver.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param references unknown parameter\\: \\$_options$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Cache/Driver.php',
];
$ignoreErrors[] = [
	'message' => '#^Default value of the parameter \\#3 \\$lifeTime \\(false\\) of method Doctrine_Cache_Interface\\:\\:save\\(\\) is incompatible with type int\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Cache/Interface.php',
];
$ignoreErrors[] = [
	'message' => '#^Default value of the parameter \\#3 \\$lifeTime \\(false\\) of method Doctrine_Cache_Memcache\\:\\:_doSave\\(\\) is incompatible with type int\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Cache/Memcache.php',
];
$ignoreErrors[] = [
	'message' => '#^Constant XC_TYPE_VAR not found\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/../../lib/Doctrine/Cache/Xcache.php',
];
$ignoreErrors[] = [
	'message' => '#^Default value of the parameter \\#3 \\$lifeTime \\(false\\) of method Doctrine_Cache_Xcache\\:\\:_doSave\\(\\) is incompatible with type int\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Cache/Xcache.php',
];
$ignoreErrors[] = [
	'message' => '#^If condition is always false\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Cli.php',
];
$ignoreErrors[] = [
	'message' => '#^Left side of && is always true\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Cli.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param for parameter \\$cli with type object is not subtype of native type Doctrine_Cli\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Cli.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param for parameter \\$formatter with type object is not subtype of native type Doctrine_Cli_Formatter\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/../../lib/Doctrine/Cli.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param for parameter \\$task with type object is not subtype of native type Doctrine_Task\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/../../lib/Doctrine/Cli.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param has invalid value \\(array \\[\\$config\\=array\\(\\)\\]\\)\\: Unexpected token "\\[", expected variable at offset 50$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Cli.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param has invalid value \\(bool \\[\\$full\\=false\\]\\)\\: Unexpected token "\\[", expected variable at offset 144$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Cli.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param has invalid value \\(bool \\[\\$strict\\=false\\]\\)\\: Unexpected token "\\[", expected variable at offset 417$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Cli.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param has invalid value \\(mixed \\[\\$directories\\=null\\] Can be a string path or array of paths\\)\\: Unexpected token "\\[", expected variable at offset 230$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Cli.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param has invalid value \\(mixed \\[\\$value\\=null\\]\\)\\: Unexpected token "\\[", expected variable at offset 384$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Cli.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param has invalid value \\(object\\|null \\[\\$formatter\\=null\\] Doctrine_Cli_Formatter\\)\\: Unexpected token "\\[", expected variable at offset 94$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Cli.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param has invalid value \\(string\\|null \\[\\$taskName\\=null\\]\\)\\: Unexpected token "\\[", expected variable at offset 108$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Cli.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param has invalid value \\(string\\|null \\[&\\$className\\=null\\]\\)\\: Unexpected token "\\[", expected variable at offset 259$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Cli.php',
];
$ignoreErrors[] = [
	'message' => '#^Result of static method Doctrine_Core\\:\\:debug\\(\\) \\(void\\) is used\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Cli.php',
];
$ignoreErrors[] = [
	'message' => '#^Access to an undefined property Doctrine_Cli_AnsiColorFormatter\\:\\:\\$size\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Cli/AnsiColorFormatter.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param has invalid value \\(array  An array of options\\)\\: Unexpected token "An", expected variable at offset 93$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Cli/AnsiColorFormatter.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param has invalid value \\(integer The maximum size allowed for a line \\(65 by default\\)\\)\\: Unexpected token "The", expected variable at offset 154$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Cli/AnsiColorFormatter.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param has invalid value \\(integer The maximum size of the returned string \\(65 by default\\)\\)\\: Unexpected token "The", expected variable at offset 89$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Cli/AnsiColorFormatter.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param has invalid value \\(mixed  An array of options or a style name\\)\\: Unexpected token "An", expected variable at offset 139$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Cli/AnsiColorFormatter.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param has invalid value \\(mixed A stream\\)\\: Unexpected token "A", expected variable at offset 214$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Cli/AnsiColorFormatter.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param has invalid value \\(string  The section name\\)\\: Unexpected token "The", expected variable at offset 76$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Cli/AnsiColorFormatter.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param has invalid value \\(string  The text message\\)\\: Unexpected token "The", expected variable at offset 115$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Cli/AnsiColorFormatter.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param has invalid value \\(string  The text\\)\\: Unexpected token "The", expected variable at offset 58$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Cli/AnsiColorFormatter.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param has invalid value \\(string The style name\\)\\: Unexpected token "The", expected variable at offset 57$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Cli/AnsiColorFormatter.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param has invalid value \\(string The test to style\\)\\: Unexpected token "The", expected variable at offset 99$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Cli/AnsiColorFormatter.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$offset of function substr expects int, float given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Cli/AnsiColorFormatter.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#3 \\$length of function substr expects int\\|null, float given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Cli/AnsiColorFormatter.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to sprintf contains 1 placeholder, 2 values given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Cli/Formatter.php',
];
$ignoreErrors[] = [
	'message' => '#^Default value of the parameter \\#1 \\$maxLineSize \\(int\\) of method Doctrine_Cli_Formatter\\:\\:__construct\\(\\) is incompatible with type string\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Cli/Formatter.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param has invalid value \\(integer The maximum line size for a message\\)\\: Unexpected token "The", expected variable at offset 68$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Cli/Formatter.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param has invalid value \\(integer The maximum size allowed for a line \\(65 by default\\)\\)\\: Unexpected token "The", expected variable at offset 154$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Cli/Formatter.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param has invalid value \\(integer The maximum size of the returned string \\(65 by default\\)\\)\\: Unexpected token "The", expected variable at offset 89$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Cli/Formatter.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param has invalid value \\(mixed  An array of parameters\\)\\: Unexpected token "An", expected variable at offset 130$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Cli/Formatter.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param has invalid value \\(stream A stream \\(default to STDOUT\\)\\)\\: Unexpected token "A", expected variable at offset 175$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Cli/Formatter.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param has invalid value \\(string  The section name\\)\\: Unexpected token "The", expected variable at offset 76$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Cli/Formatter.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param has invalid value \\(string  The text message\\)\\: Unexpected token "The", expected variable at offset 115$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Cli/Formatter.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param has invalid value \\(string  The text\\)\\: Unexpected token "The", expected variable at offset 58$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Cli/Formatter.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param has invalid value \\(string The test to style\\)\\: Unexpected token "The", expected variable at offset 90$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Cli/Formatter.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$offset of function substr expects int, float given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Cli/Formatter.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#3 \\$length of function substr expects int\\|null, float given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Cli/Formatter.php',
];
$ignoreErrors[] = [
	'message' => '#^Default value of the parameter \\#2 \\$deep \\(true\\) of method Doctrine_Collection\\:\\:exportTo\\(\\) is incompatible with type string\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Collection.php',
];
$ignoreErrors[] = [
	'message' => '#^If condition is always true\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Collection.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Collection\\:\\:exportTo\\(\\) with return type void returns mixed but should not return anything\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Collection.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Collection\\:\\:exportTo\\(\\) with return type void returns null but should not return anything\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Collection.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Collection\\:\\:getNormalIterator\\(\\) has invalid return type Doctrine_Iterator_Normal\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Collection.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Collection\\:\\:getNormalIterator\\(\\) should return Doctrine_Iterator_Normal but returns Doctrine_Collection_Iterator_Normal\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Collection.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Collection\\:\\:importFrom\\(\\) with return type void returns null but should not return anything\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/../../lib/Doctrine/Collection.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Collection\\:\\:key\\(\\) should return Doctrine_Record but returns int\\|string\\|null\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Collection.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Collection\\:\\:loadRelated\\(\\) should return bool but empty return statement found\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Collection.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Collection\\:\\:loadRelated\\(\\) should return bool but return statement is missing\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Collection.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Collection\\:\\:search\\(\\) with return type void returns int\\|string\\|false but should not return anything\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Collection.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Collection\\:\\:setData\\(\\) should return Doctrine_Collection but return statement is missing\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Collection.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param references unknown parameter\\: \\$Doctrine_Record$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Collection.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param references unknown parameter\\: \\$serialized$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Collection.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$array of method Doctrine_Collection\\:\\:fromArray\\(\\) expects array, null given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Collection.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$array of method Doctrine_Collection\\:\\:fromArray\\(\\) expects array, string given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Collection.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$deep of method Doctrine_Collection\\:\\:toArray\\(\\) expects bool, string given\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/../../lib/Doctrine/Collection.php',
];
$ignoreErrors[] = [
	'message' => '#^Property Doctrine_Collection\\:\\:\\$keyColumn \\(string\\) in isset\\(\\) is not nullable\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/../../lib/Doctrine/Collection.php',
];
$ignoreErrors[] = [
	'message' => '#^Property Doctrine_Collection\\:\\:\\$reference \\(Doctrine_Record\\) does not accept null\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Collection.php',
];
$ignoreErrors[] = [
	'message' => '#^Property Doctrine_Collection\\:\\:\\$referenceField \\(string\\) in isset\\(\\) is not nullable\\.$#',
	'count' => 3,
	'path' => __DIR__ . '/../../lib/Doctrine/Collection.php',
];
$ignoreErrors[] = [
	'message' => '#^Result of method Doctrine_Collection\\:\\:fromArray\\(\\) \\(void\\) is used\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/../../lib/Doctrine/Collection.php',
];
$ignoreErrors[] = [
	'message' => '#^Result of static method Doctrine_Parser\\:\\:dump\\(\\) \\(void\\) is used\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Collection.php',
];
$ignoreErrors[] = [
	'message' => '#^Result of static method Doctrine_Parser\\:\\:load\\(\\) \\(void\\) is used\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Collection.php',
];
$ignoreErrors[] = [
	'message' => '#^Strict comparison using \\=\\=\\= between mixed and null will always evaluate to false\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Collection.php',
];
$ignoreErrors[] = [
	'message' => '#^Undefined variable\\: \\$array$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Collection.php',
];
$ignoreErrors[] = [
	'message' => '#^Variable \\$array in isset\\(\\) is never defined\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Collection.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @var above a method has no effect\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Collection/Iterator.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to an undefined method Doctrine_Collection\\:\\:expand\\(\\)\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Collection/Iterator/Expandable.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Collection_Iterator_Expandable\\:\\:valid\\(\\) should return bool but return statement is missing\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Collection/Iterator/Expandable.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Collection_Iterator_Offset\\:\\:valid\\(\\) should return bool but return statement is missing\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Collection/Iterator/Offset.php',
];
$ignoreErrors[] = [
	'message' => '#^Instanceof between int and Doctrine_Null will always evaluate to false\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Column.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Column\\:\\:enumValue\\(\\) should return string but returns false\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Column.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Column\\:\\:getEnumValues\\(\\) invoked with 1 parameter, 0 required\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Column.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param references unknown parameter\\: \\$field$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Column.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @var above a method has no effect\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Column.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @return has invalid value \\(\\$target Path the compiled file was written to\\)\\: Unexpected token "\\$target", expected type at offset 357$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Compiler.php',
];
$ignoreErrors[] = [
	'message' => '#^Variable \\$file might not be defined\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Compiler.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Configurable\\:\\:setEventListener\\(\\) with return type void returns Doctrine_Configurable but should not return anything\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Configurable.php',
];
$ignoreErrors[] = [
	'message' => '#^Property Doctrine_Configurable\\:\\:\\$parent \\(Doctrine_Configurable\\) in isset\\(\\) is not nullable\\.$#',
	'count' => 6,
	'path' => __DIR__ . '/../../lib/Doctrine/Configurable.php',
];
$ignoreErrors[] = [
	'message' => '#^Result of && is always false\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Configurable.php',
];
$ignoreErrors[] = [
	'message' => '#^Unreachable statement \\- code above always terminates\\.$#',
	'count' => 6,
	'path' => __DIR__ . '/../../lib/Doctrine/Configurable.php',
];
$ignoreErrors[] = [
	'message' => '#^Access to an undefined property Doctrine_Connection\\:\\:\\$formatter\\.$#',
	'count' => 5,
	'path' => __DIR__ . '/../../lib/Doctrine/Connection.php',
];
$ignoreErrors[] = [
	'message' => '#^Access to an undefined property Doctrine_Connection\\:\\:\\$sequence\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Connection.php',
];
$ignoreErrors[] = [
	'message' => '#^Access to an undefined property Doctrine_Connection\\:\\:\\$transaction\\.$#',
	'count' => 5,
	'path' => __DIR__ . '/../../lib/Doctrine/Connection.php',
];
$ignoreErrors[] = [
	'message' => '#^Access to an undefined property Doctrine_Connection\\:\\:\\$unitOfWork\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Connection.php',
];
$ignoreErrors[] = [
	'message' => '#^Access to an undefined property Doctrine_Event\\:\\:\\$skipOperation\\.$#',
	'count' => 3,
	'path' => __DIR__ . '/../../lib/Doctrine/Connection.php',
];
$ignoreErrors[] = [
	'message' => '#^Access to an undefined property Exception\\:\\:\\$errorInfo\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Connection.php',
];
$ignoreErrors[] = [
	'message' => '#^Constructor of class Doctrine_Connection has an unused parameter \\$pass\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Connection.php',
];
$ignoreErrors[] = [
	'message' => '#^Constructor of class Doctrine_Connection has an unused parameter \\$user\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Connection.php',
];
$ignoreErrors[] = [
	'message' => '#^Else branch is unreachable because previous condition is always true\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Connection.php',
];
$ignoreErrors[] = [
	'message' => '#^If condition is always true\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/../../lib/Doctrine/Connection.php',
];
$ignoreErrors[] = [
	'message' => '#^Left side of \\|\\| is always true\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Connection.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Connection\\:\\:convertBooleans\\(\\) with return type void returns mixed but should not return anything\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Connection.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Connection\\:\\:exec\\(\\) should return int but return statement is missing\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Connection.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Connection\\:\\:execute\\(\\) should return Doctrine_Adapter_Statement\\|PDOStatement but return statement is missing\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Connection.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Connection\\:\\:getDriverName\\(\\) with return type void returns string but should not return anything\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Connection.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Connection\\:\\:getManager\\(\\) should return Doctrine_Manager but returns Doctrine_Configurable\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Connection.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Connection\\:\\:getOption\\(\\) with return type void returns mixed but should not return anything\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Connection.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Connection\\:\\:getOptions\\(\\) with return type void returns mixed but should not return anything\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Connection.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Connection\\:\\:getTmpConnection\\(\\) with return type void returns Doctrine_Connection but should not return anything\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Connection.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Connection\\:\\:quoteMultipleIdentifier\\(\\) should return string but returns array\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Connection.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Connection\\:\\:select\\(\\) should return Doctrine_Connection_Statement but returns Doctrine_Adapter_Statement\\|PDOStatement\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Connection.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Connection\\:\\:setAttribute\\(\\) should return bool but returns \\$this\\(Doctrine_Connection\\)\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Connection.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Connection\\:\\:setOption\\(\\) with return type void returns mixed but should not return anything\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Connection.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Connection\\:\\:update\\(\\) should return int but returns false\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Connection.php',
];
$ignoreErrors[] = [
	'message' => '#^Negated boolean expression is always true\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/../../lib/Doctrine/Connection.php',
];
$ignoreErrors[] = [
	'message' => '#^Offset \'host\' does not exist on string\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Connection.php',
];
$ignoreErrors[] = [
	'message' => '#^Offset \'other\' on \\*NEVER\\* in isset\\(\\) always exists and is not nullable\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Connection.php',
];
$ignoreErrors[] = [
	'message' => '#^Offset \'port\' does not exist on string\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Connection.php',
];
$ignoreErrors[] = [
	'message' => '#^Offset \'scheme\' does not exist on string\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Connection.php',
];
$ignoreErrors[] = [
	'message' => '#^Offset \'unix_socket\' does not exist on string\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Connection.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param for parameter \\$table with type string is incompatible with native type Doctrine_Table\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Connection.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param has invalid value \\(\\)\\: Unexpected token "\\\\n     ", expected type at offset 58$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Connection.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param has invalid value \\(array           an associative array that describes the fields and the
                         values that will be inserted or updated in the specified table\\. The
                         indexes of the array are the names of all the fields of the table\\.\\)\\: Unexpected token "an", expected variable at offset 772$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Connection.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param has invalid value \\(string    time format\\)\\: Unexpected token "time", expected variable at offset 94$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Connection.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param has invalid value \\(string  name of the table on which the REPLACE query will
                         be executed\\.\\)\\: Unexpected token "name", expected variable at offset 638$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Connection.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param references unknown parameter\\: \\$values$#',
	'count' => 2,
	'path' => __DIR__ . '/../../lib/Doctrine/Connection.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @var has invalid value \\(\\$dbh                                the database handler\\)\\: Unexpected token "\\$dbh", expected type at offset 16$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Connection.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$adapter of method Doctrine_Manager\\:\\:openConnection\\(\\) expects Doctrine_Adapter_Interface\\|PDO, array\\<int, string\\|null\\> given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Connection.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$array of function implode expects array\\|null, string given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Connection.php',
];
$ignoreErrors[] = [
	'message' => '#^Result of && is always true\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Connection.php',
];
$ignoreErrors[] = [
	'message' => '#^Result of method Doctrine_Connection\\:\\:getDriverName\\(\\) \\(void\\) is used\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Connection.php',
];
$ignoreErrors[] = [
	'message' => '#^Result of method Doctrine_Connection\\:\\:getOption\\(\\) \\(void\\) is used\\.$#',
	'count' => 4,
	'path' => __DIR__ . '/../../lib/Doctrine/Connection.php',
];
$ignoreErrors[] = [
	'message' => '#^Unreachable statement \\- code above always terminates\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/../../lib/Doctrine/Connection.php',
];
$ignoreErrors[] = [
	'message' => '#^Variable \\$count might not be defined\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Connection.php',
];
$ignoreErrors[] = [
	'message' => '#^Variable \\$stmt might not be defined\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Connection.php',
];
$ignoreErrors[] = [
	'message' => '#^Negated boolean expression is always true\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Connection/Common.php',
];
$ignoreErrors[] = [
	'message' => '#^Default value of the parameter \\#2 \\$limit \\(false\\) of method Doctrine_Connection_Db2\\:\\:modifyLimitQuery\\(\\) is incompatible with type int\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Connection/Db2.php',
];
$ignoreErrors[] = [
	'message' => '#^Default value of the parameter \\#3 \\$offset \\(false\\) of method Doctrine_Connection_Db2\\:\\:modifyLimitQuery\\(\\) is incompatible with type int\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Connection/Db2.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Connection_Exception\\:\\:processErrorInfo\\(\\) should return bool but return statement is missing\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Connection/Exception.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param has invalid value \\(int\\|array   integer error code,
                          null to get the current error code\\-message map,
                          or an array with a new error code\\-message map\\)\\: Unexpected token "integer", expected variable at offset 103$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Connection/Exception.php',
];
$ignoreErrors[] = [
	'message' => '#^Constructor of class Doctrine_Connection_Mock has an unused parameter \\$adapter\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Connection/Mock.php',
];
$ignoreErrors[] = [
	'message' => '#^Constructor of class Doctrine_Connection_Mock has an unused parameter \\$manager\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Connection/Mock.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\$adapter of method Doctrine_Connection_Mock\\:\\:__construct\\(\\) has invalid type Doctrine_Adapter\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Connection/Mock.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Connection_Mssql\\:\\:exec\\(\\) should return Doctrine_Adapter_Statement\\|PDOStatement but returns int\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Connection/Mssql.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Connection_Mssql\\:\\:parseOrderBy\\(\\) is unused\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Connection/Mssql.php',
];
$ignoreErrors[] = [
	'message' => '#^Negated boolean expression is always false\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Connection/Mssql.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param references unknown parameter\\: \\$pdo$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Connection/Mssql.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param references unknown parameter\\: \\$seq_name$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Connection/Mssql.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param references unknown parameter\\: \\$values$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Connection/Mssql.php',
];
$ignoreErrors[] = [
	'message' => '#^Return type \\(Doctrine_Adapter_Statement\\|PDOStatement\\) of method Doctrine_Connection_Mssql\\:\\:exec\\(\\) should be compatible with return type \\(int\\) of method Doctrine_Connection\\:\\:exec\\(\\)$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Connection/Mssql.php',
];
$ignoreErrors[] = [
	'message' => '#^Undefined variable\\: \\$chunks$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Connection/Mssql.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param for parameter \\$table with type string is incompatible with native type Doctrine_Table\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Connection/Mysql.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param has invalid value \\(string    charset\\)\\: Unexpected token "charset", expected variable at offset 84$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Connection/Mysql.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\$adapter of method Doctrine_Connection_Mysql\\:\\:__construct\\(\\) has invalid type Doctrine_Adapter\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Connection/Mysql.php',
];
$ignoreErrors[] = [
	'message' => '#^Default value of the parameter \\#2 \\$limit \\(false\\) of method Doctrine_Connection_Oracle\\:\\:modifyLimitQuery\\(\\) is incompatible with type int\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Connection/Oracle.php',
];
$ignoreErrors[] = [
	'message' => '#^Default value of the parameter \\#3 \\$offset \\(false\\) of method Doctrine_Connection_Oracle\\:\\:modifyLimitQuery\\(\\) is incompatible with type int\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Connection/Oracle.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Connection_Oracle\\:\\:getTmpConnection\\(\\) with return type void returns \\$this\\(Doctrine_Connection_Oracle\\) but should not return anything\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Connection/Oracle.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Connection_Oracle\\:\\:quote\\(\\) should return string but returns int\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Connection/Oracle.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Connection_Oracle\\:\\:quote\\(\\) should return string but returns null\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Connection/Oracle.php',
];
$ignoreErrors[] = [
	'message' => '#^Default value of the parameter \\#1 \\$native \\(false\\) of method Doctrine_Connection_Pgsql\\:\\:getServerVersion\\(\\) is incompatible with type string\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Connection/Pgsql.php',
];
$ignoreErrors[] = [
	'message' => '#^Default value of the parameter \\#2 \\$limit \\(false\\) of method Doctrine_Connection_Pgsql\\:\\:modifyLimitQuery\\(\\) is incompatible with type int\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Connection/Pgsql.php',
];
$ignoreErrors[] = [
	'message' => '#^Default value of the parameter \\#3 \\$offset \\(false\\) of method Doctrine_Connection_Pgsql\\:\\:modifyLimitQuery\\(\\) is incompatible with type int\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Connection/Pgsql.php',
];
$ignoreErrors[] = [
	'message' => '#^Else branch is unreachable because previous condition is always true\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Connection/Pgsql.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Connection_Pgsql\\:\\:convertBooleans\\(\\) with return type void returns array but should not return anything\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Connection/Pgsql.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param has invalid value \\(string    charset\\)\\: Unexpected token "charset", expected variable at offset 84$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Connection/Pgsql.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param references unknown parameter\\: \\$pdo$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Connection/Pgsql.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param references unknown parameter\\: \\$values$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Connection/Pgsql.php',
];
$ignoreErrors[] = [
	'message' => '#^Result of \\|\\| is always true\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Connection/Pgsql.php',
];
$ignoreErrors[] = [
	'message' => '#^Undefined variable\\: \\$match$#',
	'count' => 2,
	'path' => __DIR__ . '/../../lib/Doctrine/Connection/Pgsql.php',
];
$ignoreErrors[] = [
	'message' => '#^Variable \\$limit in empty\\(\\) always exists and is not falsy\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Connection/Pgsql.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Connection_Profiler\\:\\:__call\\(\\) should return bool but return statement is missing\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Connection/Profiler.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Connection_Profiler\\:\\:lastEvent\\(\\) should return Doctrine_Event but returns false\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Connection/Profiler.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Connection_Profiler\\:\\:setFilterQueryType\\(\\) should return bool but return statement is missing\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Connection/Profiler.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param references unknown parameter\\: \\$filter$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Connection/Profiler.php',
];
$ignoreErrors[] = [
	'message' => '#^Property Doctrine_Connection_Profiler\\:\\:\\$listeners is never read, only written\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Connection/Profiler.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Connection_Sqlite\\:\\:connect\\(\\) should return bool but empty return statement found\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Connection/Sqlite.php',
];
$ignoreErrors[] = [
	'message' => '#^Negated boolean expression is always true\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/../../lib/Doctrine/Connection/Sqlite.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param references unknown parameter\\: \\$pdo$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Connection/Sqlite.php',
];
$ignoreErrors[] = [
	'message' => '#^Result of method Doctrine_Connection\\:\\:getOption\\(\\) \\(void\\) is used\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/../../lib/Doctrine/Connection/Sqlite.php',
];
$ignoreErrors[] = [
	'message' => '#^Return type \\(void\\) of method Doctrine_Connection_Sqlite\\:\\:createDatabase\\(\\) should be compatible with return type \\(string\\) of method Doctrine_Connection\\:\\:createDatabase\\(\\)$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Connection/Sqlite.php',
];
$ignoreErrors[] = [
	'message' => '#^Return type \\(void\\) of method Doctrine_Connection_Sqlite\\:\\:dropDatabase\\(\\) should be compatible with return type \\(string\\) of method Doctrine_Connection\\:\\:dropDatabase\\(\\)$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Connection/Sqlite.php',
];
$ignoreErrors[] = [
	'message' => '#^Unreachable statement \\- code above always terminates\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/../../lib/Doctrine/Connection/Sqlite.php',
];
$ignoreErrors[] = [
	'message' => '#^Access to an undefined property Doctrine_Event\\:\\:\\$columnIndex\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Connection/Statement.php',
];
$ignoreErrors[] = [
	'message' => '#^Access to an undefined property Doctrine_Event\\:\\:\\$cursorOffset\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Connection/Statement.php',
];
$ignoreErrors[] = [
	'message' => '#^Access to an undefined property Doctrine_Event\\:\\:\\$cursorOrientation\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Connection/Statement.php',
];
$ignoreErrors[] = [
	'message' => '#^Access to an undefined property Doctrine_Event\\:\\:\\$data\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Connection/Statement.php',
];
$ignoreErrors[] = [
	'message' => '#^Access to an undefined property Doctrine_Event\\:\\:\\$fetchMode\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/../../lib/Doctrine/Connection/Statement.php',
];
$ignoreErrors[] = [
	'message' => '#^Access to an undefined property Doctrine_Event\\:\\:\\$skipOperation\\.$#',
	'count' => 3,
	'path' => __DIR__ . '/../../lib/Doctrine/Connection/Statement.php',
];
$ignoreErrors[] = [
	'message' => '#^If condition is always false\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Connection/Statement.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param references unknown parameter\\: \\$fetchStyle$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Connection/Statement.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param references unknown parameter\\: \\$param$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Connection/Statement.php',
];
$ignoreErrors[] = [
	'message' => '#^Result of method Doctrine_Connection\\:\\:getDriverName\\(\\) \\(void\\) is used\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Connection/Statement.php',
];
$ignoreErrors[] = [
	'message' => '#^Variable \\$data might not be defined\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Connection/Statement.php',
];
$ignoreErrors[] = [
	'message' => '#^Access to an undefined property Doctrine_Connection\\:\\:\\$sequence\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/../../lib/Doctrine/Connection/UnitOfWork.php',
];
$ignoreErrors[] = [
	'message' => '#^Access to an undefined property Doctrine_Connection\\:\\:\\$transaction\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Connection/UnitOfWork.php',
];
$ignoreErrors[] = [
	'message' => '#^Access to an undefined property Doctrine_Event\\:\\:\\$skipOperation\\.$#',
	'count' => 4,
	'path' => __DIR__ . '/../../lib/Doctrine/Connection/UnitOfWork.php',
];
$ignoreErrors[] = [
	'message' => '#^Access to an undefined property Doctrine_Table\\:\\:\\$sequenceName\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/../../lib/Doctrine/Connection/UnitOfWork.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to an undefined method Doctrine_EventListener_Interface\\|Doctrine_Overloadable\\:\\:postDelete\\(\\)\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Connection/UnitOfWork.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to an undefined method Doctrine_EventListener_Interface\\|Doctrine_Overloadable\\:\\:preDelete\\(\\)\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Connection/UnitOfWork.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to function is_array\\(\\) with string will always evaluate to false\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Connection/UnitOfWork.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Connection\\:\\:getTable\\(\\) invoked with 2 parameters, 1 required\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/../../lib/Doctrine/Connection/UnitOfWork.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Connection_UnitOfWork\\:\\:saveGraph\\(\\) with return type void returns false but should not return anything\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Connection/UnitOfWork.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Connection_UnitOfWork\\:\\:saveGraph\\(\\) with return type void returns true but should not return anything\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Connection/UnitOfWork.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param has invalid value \\(Doctrine_Record  The record for which the delete operation will be cascaded\\.\\)\\: Unexpected token "The", expected variable at offset 461$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Connection/UnitOfWork.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param references unknown parameter\\: \\$table$#',
	'count' => 2,
	'path' => __DIR__ . '/../../lib/Doctrine/Connection/UnitOfWork.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$string of function strtolower expects string, null given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Connection/UnitOfWork.php',
];
$ignoreErrors[] = [
	'message' => '#^Result of method Doctrine_Connection\\:\\:getDriverName\\(\\) \\(void\\) is used\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Connection/UnitOfWork.php',
];
$ignoreErrors[] = [
	'message' => '#^Variable \\$rootRecord might not be defined\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Connection/UnitOfWork.php',
];
$ignoreErrors[] = [
	'message' => '#^Access to an undefined property Doctrine_Connection\\:\\:\\$export\\.$#',
	'count' => 4,
	'path' => __DIR__ . '/../../lib/Doctrine/Core.php',
];
$ignoreErrors[] = [
	'message' => '#^Access to an undefined property Doctrine_Connection\\:\\:\\$import\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Core.php',
];
$ignoreErrors[] = [
	'message' => '#^Access to an undefined property Doctrine_Connection\\:\\:\\$sql_file_delimiter\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Core.php',
];
$ignoreErrors[] = [
	'message' => '#^Default value of the parameter \\#1 \\$specifiedConnections \\(array\\) of method Doctrine_Core\\:\\:createDatabases\\(\\) is incompatible with type string\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Core.php',
];
$ignoreErrors[] = [
	'message' => '#^Default value of the parameter \\#1 \\$specifiedConnections \\(array\\) of method Doctrine_Core\\:\\:dropDatabases\\(\\) is incompatible with type string\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Core.php',
];
$ignoreErrors[] = [
	'message' => '#^Default value of the parameter \\#2 \\$append \\(false\\) of method Doctrine_Core\\:\\:loadData\\(\\) is incompatible with type string\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Core.php',
];
$ignoreErrors[] = [
	'message' => '#^Default value of the parameter \\#2 \\$individualFiles \\(false\\) of method Doctrine_Core\\:\\:dumpData\\(\\) is incompatible with type string\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Core.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Core\\:\\:compile\\(\\) with return type void returns mixed but should not return anything\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Core.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Core\\:\\:createDatabases\\(\\) with return type void returns null but should not return anything\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Core.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Core\\:\\:createTablesFromArray\\(\\) with return type void returns mixed but should not return anything\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Core.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Core\\:\\:createTablesFromModels\\(\\) with return type void returns mixed but should not return anything\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Core.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Core\\:\\:debug\\(\\) with return type void returns bool but should not return anything\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Core.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Core\\:\\:dropDatabases\\(\\) with return type void returns null but should not return anything\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Core.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Core\\:\\:dumpData\\(\\) with return type void returns null but should not return anything\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Core.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Core\\:\\:generateMigrationsFromDb\\(\\) with return type void returns null but should not return anything\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Core.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Core\\:\\:generateMigrationsFromModels\\(\\) with return type void returns bool but should not return anything\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Core.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Core\\:\\:generateModelsFromYaml\\(\\) with return type void returns null but should not return anything\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Core.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Core\\:\\:generateYamlFromDb\\(\\) with return type void returns null but should not return anything\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Core.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Core\\:\\:generateYamlFromModels\\(\\) with return type void returns null but should not return anything\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Core.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Core\\:\\:getModelsDirectory\\(\\) with return type void returns string but should not return anything\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Core.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Core\\:\\:loadData\\(\\) with return type void returns null but should not return anything\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Core.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Core\\:\\:loadModel\\(\\) should return null but return statement is missing\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Core.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Core\\:\\:migrate\\(\\) should return bool but returns int\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Core.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param has invalid value \\(classes  Array of classes to filter through, otherwise uses get_declared_classes\\(\\)\\)\\: Unexpected token "Array", expected variable at offset 200$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Core.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param has invalid value \\(classes  Array of classes to filter through, otherwise uses get_declared_classes\\(\\)\\)\\: Unexpected token "Array", expected variable at offset 339$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Core.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @throws with type new is not subtype of Throwable$#',
	'count' => 2,
	'path' => __DIR__ . '/../../lib/Doctrine/Core.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$options of method Doctrine_Import_Schema\\:\\:setOptions\\(\\) expects string, array given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Core.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$to of method Doctrine_Migration\\:\\:migrate\\(\\) expects int\\|null, string\\|null given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Core.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$modelLoading of method Doctrine_Migration_Builder\\:\\:generateMigrationsFromModels\\(\\) expects string\\|null, int\\|null given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Core.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$replace of function str_replace expects array\\|string, null given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Core.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#3 \\$models of method Doctrine_Data\\:\\:exportData\\(\\) expects string, array given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Core.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#3 \\$models of method Doctrine_Data\\:\\:importData\\(\\) expects string, array given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Core.php',
];
$ignoreErrors[] = [
	'message' => '#^Result of method Doctrine_Data\\:\\:exportData\\(\\) \\(void\\) is used\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Core.php',
];
$ignoreErrors[] = [
	'message' => '#^Result of method Doctrine_Data\\:\\:importData\\(\\) \\(void\\) is used\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Core.php',
];
$ignoreErrors[] = [
	'message' => '#^Result of method Doctrine_Export_Schema\\:\\:exportSchema\\(\\) \\(void\\) is used\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/../../lib/Doctrine/Core.php',
];
$ignoreErrors[] = [
	'message' => '#^Result of method Doctrine_Import_Schema\\:\\:importSchema\\(\\) \\(void\\) is used\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Core.php',
];
$ignoreErrors[] = [
	'message' => '#^Result of method Doctrine_Manager\\:\\:createDatabases\\(\\) \\(void\\) is used\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Core.php',
];
$ignoreErrors[] = [
	'message' => '#^Result of method Doctrine_Manager\\:\\:dropDatabases\\(\\) \\(void\\) is used\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Core.php',
];
$ignoreErrors[] = [
	'message' => '#^Result of method Doctrine_Migration_Builder\\:\\:generateMigrationsFromDb\\(\\) \\(void\\) is used\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Core.php',
];
$ignoreErrors[] = [
	'message' => '#^Static property Doctrine_Core\\:\\:\\$_validators is never read, only written\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Core.php',
];
$ignoreErrors[] = [
	'message' => '#^Access to an undefined property Doctrine_Connection\\:\\:\\$unitOfWork\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Data.php',
];
$ignoreErrors[] = [
	'message' => '#^Default value of the parameter \\#3 \\$models \\(array\\) of method Doctrine_Data\\:\\:exportData\\(\\) is incompatible with type string\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Data.php',
];
$ignoreErrors[] = [
	'message' => '#^Default value of the parameter \\#3 \\$models \\(array\\) of method Doctrine_Data\\:\\:importData\\(\\) is incompatible with type string\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Data.php',
];
$ignoreErrors[] = [
	'message' => '#^Default value of the parameter \\#4 \\$_exportIndividualFiles \\(false\\) of method Doctrine_Data\\:\\:exportData\\(\\) is incompatible with type string\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Data.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Data\\:\\:exportData\\(\\) with return type void returns null but should not return anything\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Data.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Data\\:\\:exportIndividualFiles\\(\\) should return bool but returns string\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Data.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Data\\:\\:getDirectory\\(\\) with return type void returns string but should not return anything\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Data.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Data\\:\\:getFormat\\(\\) with return type void returns string but should not return anything\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Data.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Data\\:\\:getFormats\\(\\) with return type void returns string but should not return anything\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Data.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Data\\:\\:getModels\\(\\) with return type void returns string but should not return anything\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Data.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Data\\:\\:importData\\(\\) with return type void returns null but should not return anything\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Data.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Data\\:\\:isRelation\\(\\) with return type void returns false but should not return anything\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Data.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Data\\:\\:isRelation\\(\\) with return type void returns mixed but should not return anything\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Data.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param references unknown parameter\\: \\$Doctrine_Record$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Data.php',
];
$ignoreErrors[] = [
	'message' => '#^Property Doctrine_Data\\:\\:\\$_exportIndividualFiles \\(string\\) does not accept default value of type false\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Data.php',
];
$ignoreErrors[] = [
	'message' => '#^Property Doctrine_Data\\:\\:\\$_formats \\(string\\) does not accept default value of type array\\<int, string\\>\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Data.php',
];
$ignoreErrors[] = [
	'message' => '#^Property Doctrine_Data\\:\\:\\$_models \\(string\\) does not accept default value of type array\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Data.php',
];
$ignoreErrors[] = [
	'message' => '#^Result of method Doctrine_Data_Export\\:\\:doExport\\(\\) \\(void\\) is used\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Data.php',
];
$ignoreErrors[] = [
	'message' => '#^Result of method Doctrine_Data_Import\\:\\:doImport\\(\\) \\(void\\) is used\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Data.php',
];
$ignoreErrors[] = [
	'message' => '#^Argument of an invalid type string supplied for foreach, only iterables are supported\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Data/Export.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to function is_array\\(\\) with null will always evaluate to false\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Data/Export.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to function is_null\\(\\) with string will always evaluate to false\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Data/Export.php',
];
$ignoreErrors[] = [
	'message' => '#^If condition is always false\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/../../lib/Doctrine/Data/Export.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Data_Export\\:\\:doExport\\(\\) with return type void returns null but should not return anything\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Data/Export.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Data_Export\\:\\:dumpData\\(\\) with return type void returns null but should not return anything\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Data/Export.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param references unknown parameter\\: \\$array$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Data/Export.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$array of static method Doctrine_Parser\\:\\:dump\\(\\) expects string, array given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Data/Export.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$array of static method Doctrine_Parser\\:\\:dump\\(\\) expects string, array\\<mixed\\> given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Data/Export.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$data of method Doctrine_Data_Export\\:\\:prepareData\\(\\) expects string, array\\<int\\|string, array\\|Doctrine_Collection\\> given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Data/Export.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$filename of function is_dir expects string, null given\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/../../lib/Doctrine/Data/Export.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$filename of function is_file expects string, null given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Data/Export.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$models of static method Doctrine_Core\\:\\:initializeModels\\(\\) expects string, array\\|null given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Data/Export.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$path of function dirname expects string, null given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Data/Export.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$type of static method Doctrine_Parser\\:\\:dump\\(\\) expects string, null given\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/../../lib/Doctrine/Data/Export.php',
];
$ignoreErrors[] = [
	'message' => '#^Result of && is always false\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Data/Export.php',
];
$ignoreErrors[] = [
	'message' => '#^Result of method Doctrine_Data\\:\\:getDirectory\\(\\) \\(void\\) is used\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Data/Export.php',
];
$ignoreErrors[] = [
	'message' => '#^Result of method Doctrine_Data\\:\\:getFormat\\(\\) \\(void\\) is used\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Data/Export.php',
];
$ignoreErrors[] = [
	'message' => '#^Result of method Doctrine_Data\\:\\:getModels\\(\\) \\(void\\) is used\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Data/Export.php',
];
$ignoreErrors[] = [
	'message' => '#^Result of method Doctrine_Data\\:\\:isRelation\\(\\) \\(void\\) is used\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Data/Export.php',
];
$ignoreErrors[] = [
	'message' => '#^Result of method Doctrine_Data_Export\\:\\:dumpData\\(\\) \\(void\\) is used\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Data/Export.php',
];
$ignoreErrors[] = [
	'message' => '#^Result of static method Doctrine_Parser\\:\\:dump\\(\\) \\(void\\) is used\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Data/Export.php',
];
$ignoreErrors[] = [
	'message' => '#^Variable \\$specifiedModels in empty\\(\\) always exists and is always falsy\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Data/Export.php',
];
$ignoreErrors[] = [
	'message' => '#^Argument of an invalid type string supplied for foreach, only iterables are supported\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Data/Import.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to an undefined method Doctrine_Tree\\:\\:createRoot\\(\\)\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Data/Import.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to function is_array\\(\\) with string will always evaluate to false\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Data/Import.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method getNode\\(\\) on string\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Data/Import.php',
];
$ignoreErrors[] = [
	'message' => '#^Offset 0 on \\*NEVER\\* in isset\\(\\) always exists and is not nullable\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Data/Import.php',
];
$ignoreErrors[] = [
	'message' => '#^Offset 0 on array in isset\\(\\) always exists and is not nullable\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Data/Import.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param for parameter \\$array with type string is incompatible with native type array\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Data/Import.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$models of method Doctrine_Data\\:\\:purge\\(\\) expects string\\|null, array\\<int, \\(int\\|string\\)\\> given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Data/Import.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$word of static method Doctrine_Inflector\\:\\:classify\\(\\) expects string, int given\\.$#',
	'count' => 4,
	'path' => __DIR__ . '/../../lib/Doctrine/Data/Import.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$haystack of function in_array expects array, null given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Data/Import.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$nestedSetData of method Doctrine_Data_Import\\:\\:_loadNestedSetData\\(\\) expects string, array given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Data/Import.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$type of static method Doctrine_Parser\\:\\:load\\(\\) expects string, null given\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/../../lib/Doctrine/Data/Import.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\.\\.\\.\\$arrays of callable \'array_merge\'\\|\'array_merge…\' expects array, null given\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/../../lib/Doctrine/Data/Import.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#3 \\$relationName of method Doctrine_Data_Import\\:\\:_getImportedObject\\(\\) expects string, int given\\.$#',
	'count' => 3,
	'path' => __DIR__ . '/../../lib/Doctrine/Data/Import.php',
];
$ignoreErrors[] = [
	'message' => '#^Result of && is always false\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Data/Import.php',
];
$ignoreErrors[] = [
	'message' => '#^Result of method Doctrine_Data\\:\\:getDirectory\\(\\) \\(void\\) is used\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Data/Import.php',
];
$ignoreErrors[] = [
	'message' => '#^Result of method Doctrine_Data\\:\\:getFormat\\(\\) \\(void\\) is used\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/../../lib/Doctrine/Data/Import.php',
];
$ignoreErrors[] = [
	'message' => '#^Result of method Doctrine_Data\\:\\:getFormats\\(\\) \\(void\\) is used\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Data/Import.php',
];
$ignoreErrors[] = [
	'message' => '#^Result of method Doctrine_Data\\:\\:getModels\\(\\) \\(void\\) is used\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Data/Import.php',
];
$ignoreErrors[] = [
	'message' => '#^Result of static method Doctrine_Parser\\:\\:load\\(\\) \\(void\\) is used\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/../../lib/Doctrine/Data/Import.php',
];
$ignoreErrors[] = [
	'message' => '#^Strict comparison using \\!\\=\\= between null and null will always evaluate to false\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Data/Import.php',
];
$ignoreErrors[] = [
	'message' => '#^Variable \\$specifiedModels in empty\\(\\) always exists and is always falsy\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Data/Import.php',
];
$ignoreErrors[] = [
	'message' => '#^Access to an undefined property Doctrine_Connection\\:\\:\\$varchar_max_length\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/../../lib/Doctrine/DataDict/Mssql.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to function array_key_exists\\(\\) with \'default\' and string will always evaluate to false\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/DataDict/Mssql.php',
];
$ignoreErrors[] = [
	'message' => '#^Offset \'autoincrement\' on string in empty\\(\\) does not exist\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/DataDict/Mssql.php',
];
$ignoreErrors[] = [
	'message' => '#^Offset \'comment\' on string in isset\\(\\) does not exist\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/DataDict/Mssql.php',
];
$ignoreErrors[] = [
	'message' => '#^Offset \'notnull\' on string in isset\\(\\) does not exist\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/DataDict/Mssql.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$field of method Doctrine_DataDict_Mssql\\:\\:getNativeDeclaration\\(\\) expects array, string given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/DataDict/Mssql.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$array of function array_key_exists expects array, string given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/DataDict/Mssql.php',
];
$ignoreErrors[] = [
	'message' => '#^Result of && is always false\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/../../lib/Doctrine/DataDict/Mssql.php',
];
$ignoreErrors[] = [
	'message' => '#^Access to an undefined property Doctrine_Connection\\:\\:\\$varchar_max_length\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/../../lib/Doctrine/DataDict/Mysql.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to function array_key_exists\\(\\) with \'default\' and string will always evaluate to false\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/DataDict/Mysql.php',
];
$ignoreErrors[] = [
	'message' => '#^Offset \'autoincrement\' on string in empty\\(\\) does not exist\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/DataDict/Mysql.php',
];
$ignoreErrors[] = [
	'message' => '#^Offset \'comment\' on string in isset\\(\\) does not exist\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/DataDict/Mysql.php',
];
$ignoreErrors[] = [
	'message' => '#^Offset \'notnull\' on string in isset\\(\\) does not exist\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/DataDict/Mysql.php',
];
$ignoreErrors[] = [
	'message' => '#^Offset \'unique\' on string in isset\\(\\) does not exist\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/DataDict/Mysql.php',
];
$ignoreErrors[] = [
	'message' => '#^Offset \'unsigned\' on string in isset\\(\\) does not exist\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/DataDict/Mysql.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$field of method Doctrine_DataDict_Mysql\\:\\:getNativeDeclaration\\(\\) expects array, string given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/DataDict/Mysql.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$array of function array_key_exists expects array, string given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/DataDict/Mysql.php',
];
$ignoreErrors[] = [
	'message' => '#^Result of && is always false\\.$#',
	'count' => 4,
	'path' => __DIR__ . '/../../lib/Doctrine/DataDict/Mysql.php',
];
$ignoreErrors[] = [
	'message' => '#^Access to an undefined property Doctrine_Connection\\:\\:\\$number_max_precision\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/DataDict/Oracle.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @throws with type Doctrine_DataDict_Oracle_Exception is not subtype of Throwable$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/DataDict/Oracle.php',
];
$ignoreErrors[] = [
	'message' => '#^Access to an undefined property Doctrine_Connection\\:\\:\\$varchar_max_length\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/DataDict/Pgsql.php',
];
$ignoreErrors[] = [
	'message' => '#^If condition is always true\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/DataDict/Pgsql.php',
];
$ignoreErrors[] = [
	'message' => '#^Access to an undefined property Doctrine_Connection\\:\\:\\$varchar_max_length\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/DataDict/Sqlite.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to function is_null\\(\\) with int will always evaluate to false\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Event.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Event\\:\\:__set\\(\\) with return type void returns \\$this\\(Doctrine_Event\\) but should not return anything\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Event.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Event\\:\\:getElapsedSecs\\(\\) should return int but returns false\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Event.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Event\\:\\:getName\\(\\) should return string but return statement is missing\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Event.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Event\\:\\:getParams\\(\\) should return array but returns string\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Event.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Event\\:\\:getQuery\\(\\) should return Doctrine_Query but returns string\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Event.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Event\\:\\:start\\(\\) should return Doctrine_Event but return statement is missing\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Event.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param has invalid value \\(Doctrine_Connection\\|Doctrine_Connection_Statement\\|
Doctrine_Connection_UnitOfWork\\|Doctrine_Transaction \\$invoker   the handler which invoked this event\\)\\: Unexpected token "\\\\n              ", expected type at offset 94$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Event.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @return has invalid value \\(Doctrine_Record\\|Doctrine_Connection\\|Doctrine_Connection_Statement\\|
                      Doctrine_Connection_UnitOfWork\\|Doctrine_Transaction   the handler that invoked this event\\)\\: Unexpected token "\\\\n     \\* ", expected type at offset 161$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Event.php',
];
$ignoreErrors[] = [
	'message' => '#^Property Doctrine_Event\\:\\:\\$_endedMicrotime \\(int\\) does not accept float\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Event.php',
];
$ignoreErrors[] = [
	'message' => '#^Property Doctrine_Event\\:\\:\\$_startedMicrotime \\(int\\) does not accept float\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Event.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Exception\\:\\:errorMessage\\(\\) should return string but returns array\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Exception.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param has invalid value \\(int\\|array   integer error code,
                          null to get the current error code\\-message map,
                          or an array with a new error code\\-message map\\)\\: Unexpected token "integer", expected variable at offset 103$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Exception.php',
];
$ignoreErrors[] = [
	'message' => '#^Access to an undefined property Doctrine_Connection\\:\\:\\$dataDict\\.$#',
	'count' => 3,
	'path' => __DIR__ . '/../../lib/Doctrine/Export.php',
];
$ignoreErrors[] = [
	'message' => '#^Access to an undefined property Doctrine_Connection\\:\\:\\$export\\.$#',
	'count' => 5,
	'path' => __DIR__ . '/../../lib/Doctrine/Export.php',
];
$ignoreErrors[] = [
	'message' => '#^Access to an undefined property Doctrine_Connection\\:\\:\\$formatter\\.$#',
	'count' => 4,
	'path' => __DIR__ . '/../../lib/Doctrine/Export.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to function is_null\\(\\) with string will always evaluate to false\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Export.php',
];
$ignoreErrors[] = [
	'message' => '#^Default value of the parameter \\#2 \\$start \\(int\\) of method Doctrine_Export\\:\\:createSequence\\(\\) is incompatible with type string\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Export.php',
];
$ignoreErrors[] = [
	'message' => '#^Default value of the parameter \\#2 \\$start \\(int\\) of method Doctrine_Export\\:\\:createSequenceSql\\(\\) is incompatible with type string\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Export.php',
];
$ignoreErrors[] = [
	'message' => '#^Default value of the parameter \\#3 \\$primary \\(false\\) of method Doctrine_Export\\:\\:dropConstraint\\(\\) is incompatible with type string\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Export.php',
];
$ignoreErrors[] = [
	'message' => '#^Empty array passed to foreach\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Export.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Export\\:\\:createConstraint\\(\\) with return type void returns int but should not return anything\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Export.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Export\\:\\:createConstraintSql\\(\\) with return type void returns string but should not return anything\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Export.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Export\\:\\:createForeignKey\\(\\) should return string but returns Doctrine_Adapter_Statement\\|PDOStatement\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Export.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Export\\:\\:createIndex\\(\\) with return type void returns Doctrine_Adapter_Statement\\|PDOStatement but should not return anything\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Export.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Export\\:\\:createSequence\\(\\) with return type void returns Doctrine_Adapter_Statement\\|PDOStatement but should not return anything\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Export.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Export\\:\\:createTableSql\\(\\) should return string but returns array\\<int, string\\>\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Export.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Export\\:\\:dropConstraint\\(\\) with return type void returns int but should not return anything\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Export.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Export\\:\\:dropForeignKey\\(\\) with return type void returns null but should not return anything\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Export.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Export\\:\\:dropIndex\\(\\) with return type void returns int but should not return anything\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Export.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Export\\:\\:exportClassesSql\\(\\) with return type void returns array\\<int, mixed\\> but should not return anything\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Export.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Export\\:\\:exportSql\\(\\) with return type void returns mixed but should not return anything\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Export.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Export\\:\\:exportTable\\(\\) should return bool but return statement is missing\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Export.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param has invalid value \\(string            foreign key referential action in uppercase\\)\\: Unexpected token "foreign", expected variable at offset 335$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Export.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param references unknown parameter\\: \\$field$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Export.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param references unknown parameter\\: \\$name$#',
	'count' => 4,
	'path' => __DIR__ . '/../../lib/Doctrine/Export.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @throws with type Doctrine_Exception_Exception is not subtype of Throwable$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Export.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$query of method Doctrine_Connection\\:\\:exec\\(\\) expects string, null given\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/../../lib/Doctrine/Export.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$start of method Doctrine_Export\\:\\:createSequenceSql\\(\\) expects string, int given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Export.php',
];
$ignoreErrors[] = [
	'message' => '#^Result of method Doctrine_Connection\\:\\:convertBooleans\\(\\) \\(void\\) is used\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Export.php',
];
$ignoreErrors[] = [
	'message' => '#^Result of method Doctrine_Export\\:\\:createConstraintSql\\(\\) \\(void\\) is used\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Export.php',
];
$ignoreErrors[] = [
	'message' => '#^Result of method Doctrine_Export\\:\\:dropConstraint\\(\\) \\(void\\) is used\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Export.php',
];
$ignoreErrors[] = [
	'message' => '#^Result of method Doctrine_Export\\:\\:dropDatabaseSql\\(\\) \\(void\\) is used\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Export.php',
];
$ignoreErrors[] = [
	'message' => '#^Result of method Doctrine_Export\\:\\:dropSequenceSql\\(\\) \\(void\\) is used\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Export.php',
];
$ignoreErrors[] = [
	'message' => '#^Unreachable statement \\- code above always terminates\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Export.php',
];
$ignoreErrors[] = [
	'message' => '#^Variable \\$queryFields might not be defined\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Export.php',
];
$ignoreErrors[] = [
	'message' => '#^Access to an undefined property Doctrine_Connection\\:\\:\\$formatter\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Export/Mssql.php',
];
$ignoreErrors[] = [
	'message' => '#^Access to protected property Doctrine_Connection\\:\\:\\$options\\.$#',
	'count' => 4,
	'path' => __DIR__ . '/../../lib/Doctrine/Export/Mssql.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to an undefined method Doctrine_Connection\\:\\:getSequenceName\\(\\)\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/../../lib/Doctrine/Export/Mssql.php',
];
$ignoreErrors[] = [
	'message' => '#^Default value of the parameter \\#2 \\$start \\(int\\) of method Doctrine_Export_Mssql\\:\\:createSequence\\(\\) is incompatible with type string\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Export/Mssql.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Connection\\:\\:standaloneQuery\\(\\) invoked with 3 parameters, 1\\-2 required\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/../../lib/Doctrine/Export/Mssql.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Export_Mssql\\:\\:alterTable\\(\\) with return type void returns false but should not return anything\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Export/Mssql.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Export_Mssql\\:\\:alterTable\\(\\) with return type void returns int but should not return anything\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Export/Mssql.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Export_Mssql\\:\\:alterTable\\(\\) with return type void returns true but should not return anything\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Export/Mssql.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Export_Mssql\\:\\:createDatabase\\(\\) with return type void returns Doctrine_Adapter_Statement\\|PDOStatement but should not return anything\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Export/Mssql.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Export_Mssql\\:\\:createSequence\\(\\) should return string but returns true\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/../../lib/Doctrine/Export/Mssql.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Export_Mssql\\:\\:createTableSql\\(\\) should return string but returns array\\<int, string\\>\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Export/Mssql.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Export_Mssql\\:\\:dropDatabase\\(\\) with return type void returns Doctrine_Adapter_Statement\\|PDOStatement but should not return anything\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Export/Mssql.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Export_Mssql\\:\\:dropSequenceSql\\(\\) with return type void returns string but should not return anything\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Export/Mssql.php',
];
$ignoreErrors[] = [
	'message' => '#^Offset \'database_device\' on null in isset\\(\\) does not exist\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Export/Mssql.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param references unknown parameter\\: \\$field$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Export/Mssql.php',
];
$ignoreErrors[] = [
	'message' => '#^Result of && is always false\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Export/Mssql.php',
];
$ignoreErrors[] = [
	'message' => '#^Result of method Doctrine_Connection\\:\\:convertBooleans\\(\\) \\(void\\) is used\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Export/Mssql.php',
];
$ignoreErrors[] = [
	'message' => '#^Result of method Doctrine_Connection\\:\\:getOptions\\(\\) \\(void\\) is used\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Export/Mssql.php',
];
$ignoreErrors[] = [
	'message' => '#^Access to an undefined property Doctrine_Connection\\:\\:\\$dataDict\\.$#',
	'count' => 5,
	'path' => __DIR__ . '/../../lib/Doctrine/Export/Mysql.php',
];
$ignoreErrors[] = [
	'message' => '#^Access to an undefined property Doctrine_Connection\\:\\:\\$formatter\\.$#',
	'count' => 4,
	'path' => __DIR__ . '/../../lib/Doctrine/Export/Mysql.php',
];
$ignoreErrors[] = [
	'message' => '#^Binary operation "\\-" between string and 1 results in an error\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Export/Mysql.php',
];
$ignoreErrors[] = [
	'message' => '#^Default value of the parameter \\#2 \\$start \\(int\\) of method Doctrine_Export_Mysql\\:\\:createSequence\\(\\) is incompatible with type string\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Export/Mysql.php',
];
$ignoreErrors[] = [
	'message' => '#^Default value of the parameter \\#3 \\$primary \\(false\\) of method Doctrine_Export_Mysql\\:\\:dropConstraint\\(\\) is incompatible with type string\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Export/Mysql.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Export_Mysql\\:\\:alterTableSql\\(\\) should return bool but returns string\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Export/Mysql.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Export_Mysql\\:\\:createDatabaseSql\\(\\) with return type void returns string but should not return anything\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Export/Mysql.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Export_Mysql\\:\\:createIndexSql\\(\\) with return type void returns string but should not return anything\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Export/Mysql.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Export_Mysql\\:\\:createSequence\\(\\) should return bool but return statement is missing\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Export/Mysql.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Export_Mysql\\:\\:createTableSql\\(\\) with return type void returns array\\<int, string\\> but should not return anything\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Export/Mysql.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Export_Mysql\\:\\:dropConstraint\\(\\) with return type void returns int but should not return anything\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Export/Mysql.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Export_Mysql\\:\\:dropDatabaseSql\\(\\) should return string but returns array\\<int, string\\>\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Export/Mysql.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Export_Mysql\\:\\:dropForeignKey\\(\\) with return type void returns int but should not return anything\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Export/Mysql.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Export_Mysql\\:\\:dropIndexSql\\(\\) with return type void returns string but should not return anything\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Export/Mysql.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Export_Mysql\\:\\:dropTableSql\\(\\) with return type void returns string but should not return anything\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Export/Mysql.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param references unknown parameter\\: \\$charset$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Export/Mysql.php',
];
$ignoreErrors[] = [
	'message' => '#^Return type \\(bool\\) of method Doctrine_Export_Mysql\\:\\:alterTableSql\\(\\) should be compatible with return type \\(string\\) of method Doctrine_Export\\:\\:alterTableSql\\(\\)$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Export/Mysql.php',
];
$ignoreErrors[] = [
	'message' => '#^Return type \\(void\\) of method Doctrine_Export_Mysql\\:\\:createDatabaseSql\\(\\) should be compatible with return type \\(string\\) of method Doctrine_Export\\:\\:createDatabaseSql\\(\\)$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Export/Mysql.php',
];
$ignoreErrors[] = [
	'message' => '#^Return type \\(void\\) of method Doctrine_Export_Mysql\\:\\:createIndexSql\\(\\) should be compatible with return type \\(string\\) of method Doctrine_Export\\:\\:createIndexSql\\(\\)$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Export/Mysql.php',
];
$ignoreErrors[] = [
	'message' => '#^Return type \\(void\\) of method Doctrine_Export_Mysql\\:\\:createTableSql\\(\\) should be compatible with return type \\(string\\) of method Doctrine_Export\\:\\:createTableSql\\(\\)$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Export/Mysql.php',
];
$ignoreErrors[] = [
	'message' => '#^Return type \\(void\\) of method Doctrine_Export_Mysql\\:\\:dropIndexSql\\(\\) should be compatible with return type \\(string\\) of method Doctrine_Export\\:\\:dropIndexSql\\(\\)$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Export/Mysql.php',
];
$ignoreErrors[] = [
	'message' => '#^Return type \\(void\\) of method Doctrine_Export_Mysql\\:\\:dropTableSql\\(\\) should be compatible with return type \\(string\\) of method Doctrine_Export\\:\\:dropTableSql\\(\\)$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Export/Mysql.php',
];
$ignoreErrors[] = [
	'message' => '#^Access to an undefined property Doctrine_Connection\\:\\:\\$dsn\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/../../lib/Doctrine/Export/Oracle.php',
];
$ignoreErrors[] = [
	'message' => '#^Access to an undefined property Doctrine_Connection\\:\\:\\$formatter\\.$#',
	'count' => 3,
	'path' => __DIR__ . '/../../lib/Doctrine/Export/Oracle.php',
];
$ignoreErrors[] = [
	'message' => '#^Access to protected property Doctrine_Connection\\:\\:\\$options\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/../../lib/Doctrine/Export/Oracle.php',
];
$ignoreErrors[] = [
	'message' => '#^Argument of an invalid type null supplied for foreach, only iterables are supported\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Export/Oracle.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to function is_null\\(\\) with string will always evaluate to false\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Export/Oracle.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot assign new offset to string\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Export/Oracle.php',
];
$ignoreErrors[] = [
	'message' => '#^Default value of the parameter \\#2 \\$start \\(int\\) of method Doctrine_Export_Oracle\\:\\:createSequenceSql\\(\\) is incompatible with type string\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Export/Oracle.php',
];
$ignoreErrors[] = [
	'message' => '#^Default value of the parameter \\#3 \\$start \\(int\\) of method Doctrine_Export_Oracle\\:\\:_makeAutoincrement\\(\\) is incompatible with type string\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Export/Oracle.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Export_Oracle\\:\\:_makeAutoincrement\\(\\) should return string but returns array\\<int, string\\>\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Export/Oracle.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Export_Oracle\\:\\:alterTable\\(\\) with return type void returns false but should not return anything\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Export/Oracle.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Export_Oracle\\:\\:createTableSql\\(\\) with return type void returns mixed but should not return anything\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Export/Oracle.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Export_Oracle\\:\\:dropDatabase\\(\\) should return bool but return statement is missing\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Export/Oracle.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Export_Oracle\\:\\:dropTable\\(\\) with return type void returns null but should not return anything\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Export/Oracle.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Export_Oracle\\:\\:getIndexDeclaration\\(\\) should return string but returns null\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Export/Oracle.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param has invalid value \\(object \\$this\\-\\>conn database object that is extended by this class\\)\\: Unexpected token "\\$this", expected variable at offset 62$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Export/Oracle.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param has invalid value \\(object \\$this\\-\\>conn database object that is extended by this class\\)\\: Unexpected token "\\$this", expected variable at offset 65$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Export/Oracle.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param references unknown parameter\\: \\$db$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Export/Oracle.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$start of method Doctrine_Export_Oracle\\:\\:createSequenceSql\\(\\) expects string, int given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Export/Oracle.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\.\\.\\.\\$arrays of function array_merge expects array, string given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Export/Oracle.php',
];
$ignoreErrors[] = [
	'message' => '#^Result of method Doctrine_Export\\:\\:createConstraintSql\\(\\) \\(void\\) is used\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Export/Oracle.php',
];
$ignoreErrors[] = [
	'message' => '#^Result of method Doctrine_Export\\:\\:dropTable\\(\\) \\(void\\) is used\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Export/Oracle.php',
];
$ignoreErrors[] = [
	'message' => '#^Result of method Doctrine_Export_Oracle\\:\\:createTableSql\\(\\) \\(void\\) is used\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Export/Oracle.php',
];
$ignoreErrors[] = [
	'message' => '#^Result of method Doctrine_Export_Oracle\\:\\:dropAutoincrement\\(\\) \\(void\\) is used\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Export/Oracle.php',
];
$ignoreErrors[] = [
	'message' => '#^Return type \\(void\\) of method Doctrine_Export_Oracle\\:\\:createTableSql\\(\\) should be compatible with return type \\(string\\) of method Doctrine_Export\\:\\:createTableSql\\(\\)$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Export/Oracle.php',
];
$ignoreErrors[] = [
	'message' => '#^Access to an undefined property Doctrine_Connection\\:\\:\\$dataDict\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Export/Pgsql.php',
];
$ignoreErrors[] = [
	'message' => '#^Access to an undefined property Doctrine_Connection\\:\\:\\$formatter\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/../../lib/Doctrine/Export/Pgsql.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to an undefined method Doctrine_Connection\\:\\:getServerVersion\\(\\)\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Export/Pgsql.php',
];
$ignoreErrors[] = [
	'message' => '#^Default value of the parameter \\#2 \\$start \\(int\\) of method Doctrine_Export_Pgsql\\:\\:createSequenceSql\\(\\) is incompatible with type string\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Export/Pgsql.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Export_Pgsql\\:\\:alterTableSql\\(\\) should return array but returns true\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Export/Pgsql.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Export_Pgsql\\:\\:createDatabaseSql\\(\\) with return type void returns string but should not return anything\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Export/Pgsql.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Export_Pgsql\\:\\:createTableSql\\(\\) has invalid return type unknown\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Export/Pgsql.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Export_Pgsql\\:\\:createTableSql\\(\\) should return unknown but returns array\\<int, string\\>\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Export/Pgsql.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Export_Pgsql\\:\\:dropDatabaseSql\\(\\) with return type void returns string but should not return anything\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Export/Pgsql.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Export_Pgsql\\:\\:dropSequenceSql\\(\\) with return type void returns string but should not return anything\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Export/Pgsql.php',
];
$ignoreErrors[] = [
	'message' => '#^Negated boolean expression is always false\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Export/Pgsql.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param references unknown parameter\\: \\$seqName$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Export/Pgsql.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$name \\(unknown_type\\) of method Doctrine_Export_Pgsql\\:\\:createTableSql\\(\\) should be compatible with parameter \\$name \\(string\\) of method Doctrine_Export\\:\\:createTableSql\\(\\)$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Export/Pgsql.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$str of method Doctrine_Connection\\:\\:quoteIdentifier\\(\\) expects string, unknown_type given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Export/Pgsql.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$table of method Doctrine_Export\\:\\:createForeignKeySql\\(\\) expects string, unknown_type given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Export/Pgsql.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$table of method Doctrine_Export_Pgsql\\:\\:createIndexSql\\(\\) expects string, unknown_type given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Export/Pgsql.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\$name of method Doctrine_Export_Pgsql\\:\\:createTableSql\\(\\) has invalid type unknown_type\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Export/Pgsql.php',
];
$ignoreErrors[] = [
	'message' => '#^Return type \\(array\\) of method Doctrine_Export_Pgsql\\:\\:alterTableSql\\(\\) should be compatible with return type \\(string\\) of method Doctrine_Export\\:\\:alterTableSql\\(\\)$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Export/Pgsql.php',
];
$ignoreErrors[] = [
	'message' => '#^Return type \\(unknown\\) of method Doctrine_Export_Pgsql\\:\\:createTableSql\\(\\) should be compatible with return type \\(string\\) of method Doctrine_Export\\:\\:createTableSql\\(\\)$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Export/Pgsql.php',
];
$ignoreErrors[] = [
	'message' => '#^Return type \\(void\\) of method Doctrine_Export_Pgsql\\:\\:createDatabaseSql\\(\\) should be compatible with return type \\(string\\) of method Doctrine_Export\\:\\:createDatabaseSql\\(\\)$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Export/Pgsql.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Export_Schema\\:\\:buildSchema\\(\\) with return type void returns array\\<int\\|string, array\\<string, mixed\\>\\> but should not return anything\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Export/Schema.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Export_Schema\\:\\:exportSchema\\(\\) with return type void returns null but should not return anything\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Export/Schema.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param references unknown parameter\\: \\$string$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Export/Schema.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$array of static method Doctrine_Parser\\:\\:dump\\(\\) expects string, null given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Export/Schema.php',
];
$ignoreErrors[] = [
	'message' => '#^Result of method Doctrine_Export_Schema\\:\\:buildSchema\\(\\) \\(void\\) is used\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Export/Schema.php',
];
$ignoreErrors[] = [
	'message' => '#^Result of static method Doctrine_Parser\\:\\:dump\\(\\) \\(void\\) is used\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Export/Schema.php',
];
$ignoreErrors[] = [
	'message' => '#^Access to an undefined property Doctrine_Connection\\:\\:\\$formatter\\.$#',
	'count' => 3,
	'path' => __DIR__ . '/../../lib/Doctrine/Export/Sqlite.php',
];
$ignoreErrors[] = [
	'message' => '#^Binary operation "\\-" between string and 1 results in an error\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Export/Sqlite.php',
];
$ignoreErrors[] = [
	'message' => '#^Default value of the parameter \\#2 \\$start \\(int\\) of method Doctrine_Export_Sqlite\\:\\:createSequence\\(\\) is incompatible with type string\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Export/Sqlite.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Export_Sqlite\\:\\:alterTableSql\\(\\) should return string but returns false\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Export/Sqlite.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Export_Sqlite\\:\\:alterTableSql\\(\\) should return string but returns true\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Export/Sqlite.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Export_Sqlite\\:\\:createDatabase\\(\\) with return type void returns PDO but should not return anything\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Export/Sqlite.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Export_Sqlite\\:\\:createForeignKey\\(\\) should return string but returns false\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Export/Sqlite.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Export_Sqlite\\:\\:createIndexSql\\(\\) with return type void returns string but should not return anything\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Export/Sqlite.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Export_Sqlite\\:\\:createTableSql\\(\\) with return type void returns array\\<int, string\\|null\\> but should not return anything\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Export/Sqlite.php',
];
$ignoreErrors[] = [
	'message' => '#^Result of method Doctrine_Export_Sqlite\\:\\:createIndexSql\\(\\) \\(void\\) is used\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Export/Sqlite.php',
];
$ignoreErrors[] = [
	'message' => '#^Return type \\(void\\) of method Doctrine_Export_Sqlite\\:\\:createIndexSql\\(\\) should be compatible with return type \\(string\\) of method Doctrine_Export\\:\\:createIndexSql\\(\\)$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Export/Sqlite.php',
];
$ignoreErrors[] = [
	'message' => '#^Return type \\(void\\) of method Doctrine_Export_Sqlite\\:\\:createTableSql\\(\\) should be compatible with return type \\(string\\) of method Doctrine_Export\\:\\:createTableSql\\(\\)$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Export/Sqlite.php',
];
$ignoreErrors[] = [
	'message' => '#^Undefined variable\\: \\$db$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Export/Sqlite.php',
];
$ignoreErrors[] = [
	'message' => '#^Access to an undefined property Doctrine_Connection\\:\\:\\$expression\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Expression.php',
];
$ignoreErrors[] = [
	'message' => '#^Variable \\$args might not be defined\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Expression.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Expression_Driver\\:\\:cos\\(\\) with return type void returns string but should not return anything\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Expression/Driver.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Expression_Driver\\:\\:locate\\(\\) should return int but returns string\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Expression/Driver.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Expression_Driver\\:\\:pi\\(\\) with return type void returns string but should not return anything\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Expression/Driver.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Expression_Driver\\:\\:sin\\(\\) with return type void returns string but should not return anything\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Expression/Driver.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param has invalid value \\(string\\|array\\(string\\)  values that will be matched against \\$column\\)\\: Unexpected token "\\(", expected variable at offset 509$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Expression/Driver.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param has invalid value \\(string\\|array\\(string\\) strings that will be concatinated\\.\\)\\: Unexpected token "\\(", expected variable at offset 230$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Expression/Driver.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param has invalid value \\(string\\|array\\(string\\)\\)\\: Unexpected token "\\(", expected variable at offset 269$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Expression/Driver.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param has invalid value \\(string\\|array\\(string\\)\\)\\: Unexpected token "\\(", expected variable at offset 279$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Expression/Driver.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param has invalid value \\(string\\|array\\(string\\)\\)\\: Unexpected token "\\(", expected variable at offset 283$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Expression/Driver.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param has invalid value \\(string\\|array\\(string\\)\\)\\: Unexpected token "\\(", expected variable at offset 285$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Expression/Driver.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param has invalid value \\(string\\|array\\(string\\)\\)\\: Unexpected token "\\(", expected variable at offset 405$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Expression/Driver.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param references unknown parameter\\: \\$expression1$#',
	'count' => 2,
	'path' => __DIR__ . '/../../lib/Doctrine/Expression/Driver.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param references unknown parameter\\: \\$expression2$#',
	'count' => 2,
	'path' => __DIR__ . '/../../lib/Doctrine/Expression/Driver.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param references unknown parameter\\: \\$length$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Expression/Driver.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param references unknown parameter\\: \\$position$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Expression/Driver.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param references unknown parameter\\: \\$arg1$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Expression/Mssql.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param references unknown parameter\\: \\$arg2$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Expression/Mssql.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param references unknown parameter\\: \\$values$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Expression/Mssql.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to an undefined method Doctrine_Connection\\:\\:escape\\(\\)\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Expression/Mysql.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to an undefined method Doctrine_Connection\\:\\:escapePattern\\(\\)\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Expression/Mysql.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to an undefined method Doctrine_Expression_Mysql\\:\\:patternEscapeString\\(\\)\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Expression/Mysql.php',
];
$ignoreErrors[] = [
	'message' => '#^Instantiated class Doctrine_Expression_Mysql_Exception not found\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Expression/Mysql.php',
];
$ignoreErrors[] = [
	'message' => '#^Throwing object of an unknown class Doctrine_Expression_Mysql_Exception\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Expression/Mysql.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param references unknown parameter\\: \\$arg1$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Expression/Oracle.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to an undefined method Doctrine_Connection\\:\\:escape\\(\\)\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Expression/Pgsql.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to an undefined method Doctrine_Connection\\:\\:escapePattern\\(\\)\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Expression/Pgsql.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to an undefined method Doctrine_Expression_Pgsql\\:\\:patternEscapeString\\(\\)\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Expression/Pgsql.php',
];
$ignoreErrors[] = [
	'message' => '#^Instantiated class Doctrine_Expression_Pgsql_Exception not found\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Expression/Pgsql.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Expression_Pgsql\\:\\:random\\(\\) has invalid return type return\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Expression/Pgsql.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Expression_Pgsql\\:\\:random\\(\\) should return return but returns string\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Expression/Pgsql.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param has invalid value \\(an array of values\\)\\: Unexpected token "array", expected variable at offset 66$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Expression/Pgsql.php',
];
$ignoreErrors[] = [
	'message' => '#^Return type \\(string\\) of method Doctrine_Expression_Pgsql\\:\\:locate\\(\\) should be compatible with return type \\(int\\) of method Doctrine_Expression_Driver\\:\\:locate\\(\\)$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Expression/Pgsql.php',
];
$ignoreErrors[] = [
	'message' => '#^Throwing object of an unknown class Doctrine_Expression_Pgsql_Exception\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Expression/Pgsql.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Expression_Sqlite\\:\\:locateImpl\\(\\) should return string but returns int\\<0, max\\>\\|false\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Expression/Sqlite.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Expression_Sqlite\\:\\:modImpl\\(\\) should return string but returns int\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Expression/Sqlite.php',
];
$ignoreErrors[] = [
	'message' => '#^Access to an undefined property Doctrine_Connection\\:\\:\\$identifier_quoting\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Formatter.php',
];
$ignoreErrors[] = [
	'message' => '#^Access to an undefined property Doctrine_Connection\\:\\:\\$string_quoting\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Formatter.php',
];
$ignoreErrors[] = [
	'message' => '#^Access to an undefined property Doctrine_Formatter\\:\\:\\$string_quoting\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Formatter.php',
];
$ignoreErrors[] = [
	'message' => '#^Access to an undefined property Doctrine_Formatter\\:\\:\\$wildcards\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Formatter.php',
];
$ignoreErrors[] = [
	'message' => '#^Else branch is unreachable because previous condition is always true\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Formatter.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Formatter\\:\\:convertBooleans\\(\\) with return type void returns array but should not return anything\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Formatter.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Formatter\\:\\:quote\\(\\) should return string but return statement is missing\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Formatter.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Formatter\\:\\:quoteMultipleIdentifier\\(\\) should return string but returns array\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Formatter.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param has invalid value \\(string    name of the foreign key\\)\\: Unexpected token "name", expected variable at offset 72$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Formatter.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param has invalid value \\(string    name of the index\\)\\: Unexpected token "name", expected variable at offset 85$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Formatter.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param has invalid value \\(string    name of the sequence\\)\\: Unexpected token "name", expected variable at offset 91$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Formatter.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param has invalid value \\(string    name of the table\\)\\: Unexpected token "name", expected variable at offset 85$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Formatter.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param has invalid value \\(string  the input string to quote\\)\\: Unexpected token "the", expected variable at offset 250$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Formatter.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to function is_string\\(\\) with Doctrine_Query will always evaluate to false\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Hook.php',
];
$ignoreErrors[] = [
	'message' => '#^Else branch is unreachable because previous condition is always true\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Hook.php',
];
$ignoreErrors[] = [
	'message' => '#^Variable \\$parser might not be defined\\.$#',
	'count' => 3,
	'path' => __DIR__ . '/../../lib/Doctrine/Hook.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Hook_Integer\\:\\:parseSingle\\(\\) with return type void returns string but should not return anything\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Hook/Integer.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Hook_Parser_Complex\\:\\:parseClause\\(\\) with return type void returns null but should not return anything\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Hook/Parser/Complex.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Hook_Parser_Complex\\:\\:parseClause\\(\\) with return type void returns string but should not return anything\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Hook/Parser/Complex.php',
];
$ignoreErrors[] = [
	'message' => '#^Result of method Doctrine_Hook_Parser_Complex\\:\\:parseClause\\(\\) \\(void\\) is used\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/../../lib/Doctrine/Hook/Parser/Complex.php',
];
$ignoreErrors[] = [
	'message' => '#^Result of method Doctrine_Hook_Parser_Complex\\:\\:parseSingle\\(\\) \\(void\\) is used\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/../../lib/Doctrine/Hook/Parser/Complex.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Hook_WordLike\\:\\:parseSingle\\(\\) with return type void returns string but should not return anything\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Hook/WordLike.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to function is_object\\(\\) with string will always evaluate to false\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Hydrator.php',
];
$ignoreErrors[] = [
	'message' => '#^Instanceof between \\*NEVER\\* and Doctrine_Hydrator_Abstract will always evaluate to false\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Hydrator.php',
];
$ignoreErrors[] = [
	'message' => '#^Unreachable statement \\- code above always terminates\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Hydrator.php',
];
$ignoreErrors[] = [
	'message' => '#^Variable \\$activeRootIdentifier might not be defined\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Hydrator/Graph.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param references unknown parameter\\: \\$Doctrine_Table$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/I18n.php',
];
$ignoreErrors[] = [
	'message' => '#^Variable \\$others in isset\\(\\) always exists and is not nullable\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/I18n.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$options of method Doctrine_Import_Builder\\:\\:setOptions\\(\\) expects string, array given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Import.php',
];
$ignoreErrors[] = [
	'message' => '#^Argument of an invalid type string supplied for foreach, only iterables are supported\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/../../lib/Doctrine/Import/Builder.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset mixed on float\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Import/Builder.php',
];
$ignoreErrors[] = [
	'message' => '#^Else branch is unreachable because previous condition is always true\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Import/Builder.php',
];
$ignoreErrors[] = [
	'message' => '#^If condition is always true\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Import/Builder.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Import_Builder\\:\\:buildAttributes\\(\\) with return type void returns string but should not return anything\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Import/Builder.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Import_Builder\\:\\:buildColumns\\(\\) with return type void returns string\\|null but should not return anything\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Import/Builder.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Import_Builder\\:\\:buildIndexes\\(\\) with return type void returns string but should not return anything\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Import/Builder.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Import_Builder\\:\\:buildOptions\\(\\) with return type void returns string but should not return anything\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Import/Builder.php',
];
$ignoreErrors[] = [
	'message' => '#^Negated boolean expression is always false\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Import/Builder.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param has invalid value \\(string path   the path where imported files are being generated\\)\\: Unexpected token "path", expected variable at offset 53$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Import/Builder.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param references unknown parameter\\: \\$actAs$#',
	'count' => 2,
	'path' => __DIR__ . '/../../lib/Doctrine/Import/Builder.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param references unknown parameter\\: \\$array$#',
	'count' => 4,
	'path' => __DIR__ . '/../../lib/Doctrine/Import/Builder.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param references unknown parameter\\: \\$attributes$#',
	'count' => 2,
	'path' => __DIR__ . '/../../lib/Doctrine/Import/Builder.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param references unknown parameter\\: \\$columns$#',
	'count' => 2,
	'path' => __DIR__ . '/../../lib/Doctrine/Import/Builder.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param references unknown parameter\\: \\$indexes$#',
	'count' => 2,
	'path' => __DIR__ . '/../../lib/Doctrine/Import/Builder.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param references unknown parameter\\: \\$option$#',
	'count' => 2,
	'path' => __DIR__ . '/../../lib/Doctrine/Import/Builder.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param references unknown parameter\\: \\$options$#',
	'count' => 2,
	'path' => __DIR__ . '/../../lib/Doctrine/Import/Builder.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param references unknown parameter\\: \\$relations$#',
	'count' => 2,
	'path' => __DIR__ . '/../../lib/Doctrine/Import/Builder.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param references unknown parameter\\: \\$templates$#',
	'count' => 2,
	'path' => __DIR__ . '/../../lib/Doctrine/Import/Builder.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @return has invalid value \\(\\)\\: Unexpected token "\\\\n     ", expected type at offset 124$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Import/Builder.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @var has invalid value \\(\\$_tpl\\)\\: Unexpected token "\\$_tpl", expected type at offset 89$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Import/Builder.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$listeners of method Doctrine_Import_Builder\\:\\:buildListeners\\(\\) expects string, array given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Import/Builder.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$var of method Doctrine_Builder\\:\\:varExport\\(\\) expects string, array given\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/../../lib/Doctrine/Import/Builder.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$var of method Doctrine_Builder\\:\\:varExport\\(\\) expects string, array\\<string, mixed\\> given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Import/Builder.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#3 \\$option of method Doctrine_Import_Builder\\:\\:emitAssign\\(\\) expects string, null given\\.$#',
	'count' => 3,
	'path' => __DIR__ . '/../../lib/Doctrine/Import/Builder.php',
];
$ignoreErrors[] = [
	'message' => '#^Result of method Doctrine_Builder\\:\\:varExport\\(\\) \\(void\\) is used\\.$#',
	'count' => 17,
	'path' => __DIR__ . '/../../lib/Doctrine/Import/Builder.php',
];
$ignoreErrors[] = [
	'message' => '#^Result of method Doctrine_Import_Builder\\:\\:buildAttributes\\(\\) \\(void\\) is used\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Import/Builder.php',
];
$ignoreErrors[] = [
	'message' => '#^Result of method Doctrine_Import_Builder\\:\\:buildColumns\\(\\) \\(void\\) is used\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Import/Builder.php',
];
$ignoreErrors[] = [
	'message' => '#^Result of method Doctrine_Import_Builder\\:\\:buildIndexes\\(\\) \\(void\\) is used\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Import/Builder.php',
];
$ignoreErrors[] = [
	'message' => '#^Result of method Doctrine_Import_Builder\\:\\:buildOptions\\(\\) \\(void\\) is used\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Import/Builder.php',
];
$ignoreErrors[] = [
	'message' => '#^Variable \\$e in empty\\(\\) always exists and is not falsy\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Import/Builder.php',
];
$ignoreErrors[] = [
	'message' => '#^Access to an undefined property Doctrine_Connection\\:\\:\\$dataDict\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Import/Mssql.php',
];
$ignoreErrors[] = [
	'message' => '#^Access to an undefined property Doctrine_Connection\\:\\:\\$formatter\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/../../lib/Doctrine/Import/Mssql.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Import_Mssql\\:\\:listTableIndexes\\(\\) should return array but return statement is missing\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Import/Mssql.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param references unknown parameter\\: \\$table$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Import/Mssql.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$params of method Doctrine_Connection\\:\\:fetchColumn\\(\\) expects array, string given\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/../../lib/Doctrine/Import/Mssql.php',
];
$ignoreErrors[] = [
	'message' => '#^Access to an undefined property Doctrine_Connection\\:\\:\\$dataDict\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Import/Mysql.php',
];
$ignoreErrors[] = [
	'message' => '#^Access to an undefined property Doctrine_Connection\\:\\:\\$formatter\\.$#',
	'count' => 3,
	'path' => __DIR__ . '/../../lib/Doctrine/Import/Mysql.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to an undefined method Doctrine_Connection\\:\\:getDatabaseName\\(\\)\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Import/Mysql.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param references unknown parameter\\: \\$table$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Import/Mysql.php',
];
$ignoreErrors[] = [
	'message' => '#^Access to an undefined property Doctrine_Connection\\:\\:\\$dataDict\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Import/Oracle.php',
];
$ignoreErrors[] = [
	'message' => '#^Access to an undefined property Doctrine_Connection\\:\\:\\$formatter\\.$#',
	'count' => 3,
	'path' => __DIR__ . '/../../lib/Doctrine/Import/Oracle.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Import_Oracle\\:\\:listDatabases\\(\\) should return array but returns int\\|string\\|false\\|null\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Import/Oracle.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Import_Oracle\\:\\:listTableTriggers\\(\\) should return array but return statement is missing\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Import/Oracle.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Import_Oracle\\:\\:listTableViews\\(\\) should return array but return statement is missing\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Import/Oracle.php',
];
$ignoreErrors[] = [
	'message' => '#^Access to an undefined property Doctrine_Connection\\:\\:\\$dataDict\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Import/Pgsql.php',
];
$ignoreErrors[] = [
	'message' => '#^Access to an undefined property Doctrine_Connection\\:\\:\\$formatter\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Import/Pgsql.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Import_Pgsql\\:\\:listTriggers\\(\\) should return array but return statement is missing\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Import/Pgsql.php',
];
$ignoreErrors[] = [
	'message' => '#^Argument of an invalid type null supplied for foreach, only iterables are supported\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/../../lib/Doctrine/Import/Schema.php',
];
$ignoreErrors[] = [
	'message' => '#^Argument of an invalid type string supplied for foreach, only iterables are supported\\.$#',
	'count' => 4,
	'path' => __DIR__ . '/../../lib/Doctrine/Import/Schema.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot assign offset \'inheritance\' to string\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Import/Schema.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot assign offset \'relations\' to string\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Import/Schema.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot unset offset mixed on null\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Import/Schema.php',
];
$ignoreErrors[] = [
	'message' => '#^If condition is always false\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Import/Schema.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Import_Schema\\:\\:_buildRelationships\\(\\) with return type void returns array\\<array\\<string, mixed\\>\\>\\|string but should not return anything\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Import/Schema.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Import_Schema\\:\\:_buildUniqueRelationKey\\(\\) with return type void returns string but should not return anything\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Import/Schema.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Import_Schema\\:\\:_processInheritance\\(\\) with return type void returns mixed but should not return anything\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Import/Schema.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Import_Schema\\:\\:buildSchema\\(\\) should return array but returns null\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Import/Schema.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Import_Schema\\:\\:getOption\\(\\) with return type void returns mixed but should not return anything\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Import/Schema.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Import_Schema\\:\\:getOptions\\(\\) with return type void returns array but should not return anything\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Import/Schema.php',
];
$ignoreErrors[] = [
	'message' => '#^Offset \'autoincrement\' on array in isset\\(\\) always exists and is not nullable\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Import/Schema.php',
];
$ignoreErrors[] = [
	'message' => '#^Offset \'class\' does not exist on string\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Import/Schema.php',
];
$ignoreErrors[] = [
	'message' => '#^Offset \'foreign\' does not exist on string\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Import/Schema.php',
];
$ignoreErrors[] = [
	'message' => '#^Offset \'inheritance\' on string in empty\\(\\) does not exist\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Import/Schema.php',
];
$ignoreErrors[] = [
	'message' => '#^Offset \'inheritance\' on string in isset\\(\\) does not exist\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Import/Schema.php',
];
$ignoreErrors[] = [
	'message' => '#^Offset \'local\' does not exist on string\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Import/Schema.php',
];
$ignoreErrors[] = [
	'message' => '#^Offset \'primary\' on array in isset\\(\\) always exists and is not nullable\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Import/Schema.php',
];
$ignoreErrors[] = [
	'message' => '#^Offset \'refClass\' on string in isset\\(\\) does not exist\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Import/Schema.php',
];
$ignoreErrors[] = [
	'message' => '#^Offset \'relations\' on string in isset\\(\\) does not exist\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Import/Schema.php',
];
$ignoreErrors[] = [
	'message' => '#^Offset string on string in isset\\(\\) does not exist\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Import/Schema.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param references unknown parameter\\: \\$value$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Import/Schema.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$array of method Doctrine_Import_Schema\\:\\:_buildRelationships\\(\\) expects string, array given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Import/Schema.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$array of method Doctrine_Import_Schema\\:\\:_processInheritance\\(\\) expects string, null given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Import/Schema.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$options of method Doctrine_Import_Builder\\:\\:setOptions\\(\\) expects string, null given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Import/Schema.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$relation of method Doctrine_Import_Schema\\:\\:_buildUniqueRelationKey\\(\\) expects string, array\\<string, mixed\\> given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Import/Schema.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$schema of method Doctrine_Import_Schema\\:\\:buildSchema\\(\\) expects string, array\\<int, string\\> given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Import/Schema.php',
];
$ignoreErrors[] = [
	'message' => '#^Property Doctrine_Import_Schema\\:\\:\\$_options \\(array\\) does not accept string\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Import/Schema.php',
];
$ignoreErrors[] = [
	'message' => '#^Result of && is always false\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Import/Schema.php',
];
$ignoreErrors[] = [
	'message' => '#^Result of method Doctrine_Import_Schema\\:\\:_buildRelationships\\(\\) \\(void\\) is used\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Import/Schema.php',
];
$ignoreErrors[] = [
	'message' => '#^Result of method Doctrine_Import_Schema\\:\\:_buildUniqueRelationKey\\(\\) \\(void\\) is used\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/../../lib/Doctrine/Import/Schema.php',
];
$ignoreErrors[] = [
	'message' => '#^Result of method Doctrine_Import_Schema\\:\\:_processInheritance\\(\\) \\(void\\) is used\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Import/Schema.php',
];
$ignoreErrors[] = [
	'message' => '#^Result of method Doctrine_Import_Schema\\:\\:getOptions\\(\\) \\(void\\) is used\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Import/Schema.php',
];
$ignoreErrors[] = [
	'message' => '#^Result of static method Doctrine_Parser\\:\\:load\\(\\) \\(void\\) is used\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Import/Schema.php',
];
$ignoreErrors[] = [
	'message' => '#^Access to an undefined property Doctrine_Connection\\:\\:\\$dataDict\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Import/Sqlite.php',
];
$ignoreErrors[] = [
	'message' => '#^Access to an undefined property Doctrine_Connection\\:\\:\\$formatter\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Import/Sqlite.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to an undefined method Doctrine_Connection\\:\\:fixSequenceName\\(\\)\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Import/Sqlite.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Import_Sqlite\\:\\:listDatabases\\(\\) should return array but return statement is missing\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Import/Sqlite.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Import_Sqlite\\:\\:listFunctions\\(\\) should return array but return statement is missing\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Import/Sqlite.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Import_Sqlite\\:\\:listTableTriggers\\(\\) should return array but return statement is missing\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Import/Sqlite.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Import_Sqlite\\:\\:listTriggers\\(\\) should return array but return statement is missing\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Import/Sqlite.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Import_Sqlite\\:\\:listUsers\\(\\) should return array but return statement is missing\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Import/Sqlite.php',
];
$ignoreErrors[] = [
	'message' => '#^Undefined variable\\: \\$db$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Import/Sqlite.php',
];
$ignoreErrors[] = [
	'message' => '#^Access to an undefined property Doctrine_IntegrityMapper\\:\\:\\$conn\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/IntegrityMapper.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to an undefined method Doctrine_Manager\\:\\:getDeleteActions\\(\\)\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/../../lib/Doctrine/IntegrityMapper.php',
];
$ignoreErrors[] = [
	'message' => '#^Access to an undefined property Doctrine_Connection\\:\\:\\$transaction\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/../../lib/Doctrine/Lib.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Lib\\:\\:getConnectionStateAsString\\(\\) should return string but return statement is missing\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Lib.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Lib\\:\\:getRecordStateAsString\\(\\) should return string but return statement is missing\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Lib.php',
];
$ignoreErrors[] = [
	'message' => '#^Negated boolean expression is always true\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Lib.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param references unknown parameter\\: \\$classname$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Lib.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @return has invalid value \\(\\)\\: Unexpected token "\\\\n     ", expected type at offset 320$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Lib.php',
];
$ignoreErrors[] = [
	'message' => '#^Unreachable statement \\- code above always terminates\\.$#',
	'count' => 9,
	'path' => __DIR__ . '/../../lib/Doctrine/Lib.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Locator\\:\\:bind\\(\\) has invalid return type Sensei_Locator\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Locator.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Locator\\:\\:bind\\(\\) should return Sensei_Locator but returns \\$this\\(Doctrine_Locator\\)\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Locator.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Locator\\:\\:instance\\(\\) has invalid return type Sensei_Locator\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Locator.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param has invalid value \\(array\\)\\: Unexpected token "\\\\n     \\* ", expected variable at offset 105$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Locator.php',
];
$ignoreErrors[] = [
	'message' => '#^Unreachable statement \\- code above always terminates\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Locator.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param has invalid value \\(Doctrine_Locator                the locator object\\)\\: Unexpected token "the", expected variable at offset 145$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Locator/Injectable.php',
];
$ignoreErrors[] = [
	'message' => '#^Property Doctrine_Locator_Injectable\\:\\:\\$_locator \\(Doctrine_Locator\\) does not accept Sensei_Locator\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Locator/Injectable.php',
];
$ignoreErrors[] = [
	'message' => '#^Property Doctrine_Locator_Injectable\\:\\:\\$_locator \\(Doctrine_Locator\\) in isset\\(\\) is not nullable\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Locator/Injectable.php',
];
$ignoreErrors[] = [
	'message' => '#^Access to an undefined property Doctrine_Connection\\:\\:\\$export\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Locking/Manager/Pessimistic.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to function is_array\\(\\) with string will always evaluate to false\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/../../lib/Doctrine/Locking/Manager/Pessimistic.php',
];
$ignoreErrors[] = [
	'message' => '#^Array has 2 duplicate keys with value 150 \\(\\\\Doctrine_Core\\:\\:ATTR_CACHE, \\\\Doctrine_Core\\:\\:ATTR_RESULT_CACHE\\)\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Manager.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to function is_array\\(\\) with Doctrine_Adapter_Interface\\|PDO will always evaluate to false\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Manager.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to function is_array\\(\\) with string will always evaluate to false\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/../../lib/Doctrine/Manager.php',
];
$ignoreErrors[] = [
	'message' => '#^Default value of the parameter \\#1 \\$specifiedConnections \\(array\\) of method Doctrine_Manager\\:\\:createDatabases\\(\\) is incompatible with type string\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Manager.php',
];
$ignoreErrors[] = [
	'message' => '#^Default value of the parameter \\#1 \\$specifiedConnections \\(array\\) of method Doctrine_Manager\\:\\:dropDatabases\\(\\) is incompatible with type string\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Manager.php',
];
$ignoreErrors[] = [
	'message' => '#^Else branch is unreachable because previous condition is always true\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/../../lib/Doctrine/Manager.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Manager\\:\\:bindComponent\\(\\) should return bool but return statement is missing\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Manager.php',
];
$ignoreErrors[] = [
	'message' => '#^Offset \'path\' on array in isset\\(\\) always exists and is not nullable\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/../../lib/Doctrine/Manager.php',
];
$ignoreErrors[] = [
	'message' => '#^Offset 0 on \\*NEVER\\* in isset\\(\\) always exists and is not nullable\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Manager.php',
];
$ignoreErrors[] = [
	'message' => '#^Offset 1 on \\*NEVER\\* in isset\\(\\) always exists and is not nullable\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Manager.php',
];
$ignoreErrors[] = [
	'message' => '#^Offset 2 on \\*NEVER\\* in isset\\(\\) always exists and is not nullable\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Manager.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @return has invalid value \\(\\$extensions\\)\\: Unexpected token "\\$extensions", expected type at offset 72$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Manager.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$string of function explode expects string, array given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Manager.php',
];
$ignoreErrors[] = [
	'message' => '#^Property Doctrine_Manager\\:\\:\\$_queryRegistry \\(Doctrine_Query_Registry\\) does not accept null\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Manager.php',
];
$ignoreErrors[] = [
	'message' => '#^Property Doctrine_Manager\\:\\:\\$_queryRegistry \\(Doctrine_Query_Registry\\) in isset\\(\\) is not nullable\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Manager.php',
];
$ignoreErrors[] = [
	'message' => '#^Variable \\$specifiedConnections in empty\\(\\) always exists and is not falsy\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/../../lib/Doctrine/Manager.php',
];
$ignoreErrors[] = [
	'message' => '#^If condition is always false\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Migration.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Migration\\:\\:loadMigrationClass\\(\\) with return type void returns false but should not return anything\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Migration.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Migration\\:\\:migrate\\(\\) should return int but returns false\\.$#',
	'count' => 3,
	'path' => __DIR__ . '/../../lib/Doctrine/Migration.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Migration\\:\\:migrateDryRun\\(\\) should return bool but returns int\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Migration.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$to of method Doctrine_Migration\\:\\:migrate\\(\\) expects int\\|null, string\\|null given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Migration.php',
];
$ignoreErrors[] = [
	'message' => '#^Argument of an invalid type string supplied for foreach, only iterables are supported\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Migration/Base.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Migration_Base\\:\\:_addChange\\(\\) with return type void returns array\\<int, array\\|string\\> but should not return anything\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Migration/Base.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Migration_Base\\:\\:_addChange\\(\\) with return type void returns array\\<int, mixed\\> but should not return anything\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Migration/Base.php',
];
$ignoreErrors[] = [
	'message' => '#^Offset \'autoincrement\' on string in isset\\(\\) does not exist\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Migration/Base.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param references unknown parameter\\: \\$constraintname$#',
	'count' => 2,
	'path' => __DIR__ . '/../../lib/Doctrine/Migration/Base.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$columnName of method Doctrine_Migration_Base\\:\\:changeColumn\\(\\) expects string, int given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Migration/Base.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$columnName of method Doctrine_Migration_Base\\:\\:removeColumn\\(\\) expects string, int given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Migration/Base.php',
];
$ignoreErrors[] = [
	'message' => '#^Variable \\$autoincrementColumn might not be defined\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Migration/Base.php',
];
$ignoreErrors[] = [
	'message' => '#^Variable \\$autoincrementLength might not be defined\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Migration/Base.php',
];
$ignoreErrors[] = [
	'message' => '#^Variable \\$autoincrementOptions might not be defined\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Migration/Base.php',
];
$ignoreErrors[] = [
	'message' => '#^Variable \\$autoincrementType might not be defined\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Migration/Base.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot unset offset \'length\' on string\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/../../lib/Doctrine/Migration/Builder.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot unset offset \'type\' on string\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/../../lib/Doctrine/Migration/Builder.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Builder\\:\\:varExport\\(\\) invoked with 2 parameters, 1 required\\.$#',
	'count' => 3,
	'path' => __DIR__ . '/../../lib/Doctrine/Migration/Builder.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Migration_Builder\\:\\:buildAddIndex\\(\\) has invalid return type sgtring\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Migration/Builder.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Migration_Builder\\:\\:buildAddIndex\\(\\) should return sgtring but returns string\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Migration/Builder.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Migration_Builder\\:\\:generateMigrationsFromDb\\(\\) with return type void returns bool but should not return anything\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Migration/Builder.php',
];
$ignoreErrors[] = [
	'message' => '#^Negated boolean expression is always false\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Migration/Builder.php',
];
$ignoreErrors[] = [
	'message' => '#^Offset \'columns\' does not exist on string\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Migration/Builder.php',
];
$ignoreErrors[] = [
	'message' => '#^Offset \'length\' does not exist on string\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/../../lib/Doctrine/Migration/Builder.php',
];
$ignoreErrors[] = [
	'message' => '#^Offset \'options\' on string in isset\\(\\) does not exist\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Migration/Builder.php',
];
$ignoreErrors[] = [
	'message' => '#^Offset \'tableName\' does not exist on string\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/../../lib/Doctrine/Migration/Builder.php',
];
$ignoreErrors[] = [
	'message' => '#^Offset \'type\' does not exist on string\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/../../lib/Doctrine/Migration/Builder.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param has invalid value \\(string path   the path where migration classes are stored and being generated\\)\\: Unexpected token "path", expected variable at offset 93$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Migration/Builder.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @var has invalid value \\(\\$tpl\\)\\: Unexpected token "\\$tpl", expected type at offset 70$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Migration/Builder.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$models of static method Doctrine_Core\\:\\:initializeModels\\(\\) expects string, array given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Migration/Builder.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$tableData of method Doctrine_Migration_Builder\\:\\:buildCreateTable\\(\\) expects string, array given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Migration/Builder.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$tableData of method Doctrine_Migration_Builder\\:\\:buildDropTable\\(\\) expects string, array given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Migration/Builder.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$var of method Doctrine_Builder\\:\\:varExport\\(\\) expects string, array given\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/../../lib/Doctrine/Migration/Builder.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$array of function implode expects array\\<string\\>, array\\<int\\<0, max\\>, sgtring\\|string\\> given\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/../../lib/Doctrine/Migration/Builder.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$modelLoading of method Doctrine_Migration_Builder\\:\\:generateMigrationsFromModels\\(\\) expects string\\|null, int given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Migration/Builder.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$modelLoading of static method Doctrine_Core\\:\\:loadModels\\(\\) expects int\\|null, string\\|null given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Migration/Builder.php',
];
$ignoreErrors[] = [
	'message' => '#^Result of method Doctrine_Builder\\:\\:varExport\\(\\) \\(void\\) is used\\.$#',
	'count' => 7,
	'path' => __DIR__ . '/../../lib/Doctrine/Migration/Builder.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$directory of static method Doctrine_Core\\:\\:setModelsDirectory\\(\\) expects string, null given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Migration/Diff.php',
];
$ignoreErrors[] = [
	'message' => '#^Result of static method Doctrine_Core\\:\\:getModelsDirectory\\(\\) \\(void\\) is used\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Migration/Diff.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param for parameter \\$table with type string is incompatible with native type array\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Migration/Process.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param for parameter \\$record with type object is not subtype of native type Doctrine_Record\\.$#',
	'count' => 3,
	'path' => __DIR__ . '/../../lib/Doctrine/Node.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param has invalid value \\(int\\)\\: Unexpected token "\\\\n     ", expected variable at offset 61$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Node.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param has invalid value \\(int\\)\\: Unexpected token "\\\\n     ", expected variable at offset 64$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Node.php',
];
$ignoreErrors[] = [
	'message' => '#^Property Doctrine_Node\\:\\:\\$_tree \\(unknown_type\\) does not accept Doctrine_Tree\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/../../lib/Doctrine/Node.php',
];
$ignoreErrors[] = [
	'message' => '#^Property Doctrine_Node\\:\\:\\$_tree has unknown class unknown_type as its type\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Node.php',
];
$ignoreErrors[] = [
	'message' => '#^Constructor of class Doctrine_Node_MaterializedPath_LevelOrderIterator has an unused parameter \\$node\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Node/MaterializedPath/LevelOrderIterator.php',
];
$ignoreErrors[] = [
	'message' => '#^Constructor of class Doctrine_Node_MaterializedPath_LevelOrderIterator has an unused parameter \\$opts\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Node/MaterializedPath/LevelOrderIterator.php',
];
$ignoreErrors[] = [
	'message' => '#^Property Doctrine_Node_MaterializedPath_LevelOrderIterator\\:\\:\\$curNode is never read, only written\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Node/MaterializedPath/LevelOrderIterator.php',
];
$ignoreErrors[] = [
	'message' => '#^Property Doctrine_Node_MaterializedPath_LevelOrderIterator\\:\\:\\$topNode is never read, only written\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Node/MaterializedPath/LevelOrderIterator.php',
];
$ignoreErrors[] = [
	'message' => '#^Constructor of class Doctrine_Node_MaterializedPath_PostOrderIterator has an unused parameter \\$node\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Node/MaterializedPath/PostOrderIterator.php',
];
$ignoreErrors[] = [
	'message' => '#^Constructor of class Doctrine_Node_MaterializedPath_PostOrderIterator has an unused parameter \\$opts\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Node/MaterializedPath/PostOrderIterator.php',
];
$ignoreErrors[] = [
	'message' => '#^Property Doctrine_Node_MaterializedPath_PostOrderIterator\\:\\:\\$curNode is never read, only written\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Node/MaterializedPath/PostOrderIterator.php',
];
$ignoreErrors[] = [
	'message' => '#^Property Doctrine_Node_MaterializedPath_PostOrderIterator\\:\\:\\$topNode is never read, only written\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Node/MaterializedPath/PostOrderIterator.php',
];
$ignoreErrors[] = [
	'message' => '#^Constructor of class Doctrine_Node_MaterializedPath_PreOrderIterator has an unused parameter \\$node\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Node/MaterializedPath/PreOrderIterator.php',
];
$ignoreErrors[] = [
	'message' => '#^Constructor of class Doctrine_Node_MaterializedPath_PreOrderIterator has an unused parameter \\$opts\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Node/MaterializedPath/PreOrderIterator.php',
];
$ignoreErrors[] = [
	'message' => '#^Property Doctrine_Node_MaterializedPath_PreOrderIterator\\:\\:\\$curNode is never read, only written\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Node/MaterializedPath/PreOrderIterator.php',
];
$ignoreErrors[] = [
	'message' => '#^Property Doctrine_Node_MaterializedPath_PreOrderIterator\\:\\:\\$topNode is never read, only written\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Node/MaterializedPath/PreOrderIterator.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to an undefined method Doctrine_Node\\:\\:getChildren\\(\\)\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Node/NestedSet.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to an undefined method Doctrine_Node\\:\\:getLeftValue\\(\\)\\.$#',
	'count' => 14,
	'path' => __DIR__ . '/../../lib/Doctrine/Node/NestedSet.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to an undefined method Doctrine_Node\\:\\:getLevel\\(\\)\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Node/NestedSet.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to an undefined method Doctrine_Node\\:\\:getRightValue\\(\\)\\.$#',
	'count' => 15,
	'path' => __DIR__ . '/../../lib/Doctrine/Node/NestedSet.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to an undefined method Doctrine_Node\\:\\:getRootValue\\(\\)\\.$#',
	'count' => 14,
	'path' => __DIR__ . '/../../lib/Doctrine/Node/NestedSet.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to an undefined method Doctrine_Node\\:\\:insertAsLastChildOf\\(\\)\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Node/NestedSet.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to an undefined method Doctrine_Node\\:\\:isRoot\\(\\)\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Node/NestedSet.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to method getAttribute\\(\\) on an unknown class unknown_type\\.$#',
	'count' => 7,
	'path' => __DIR__ . '/../../lib/Doctrine/Node/NestedSet.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to method getBaseAlias\\(\\) on an unknown class unknown_type\\.$#',
	'count' => 9,
	'path' => __DIR__ . '/../../lib/Doctrine/Node/NestedSet.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to method getBaseComponent\\(\\) on an unknown class unknown_type\\.$#',
	'count' => 8,
	'path' => __DIR__ . '/../../lib/Doctrine/Node/NestedSet.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to method getBaseQuery\\(\\) on an unknown class unknown_type\\.$#',
	'count' => 9,
	'path' => __DIR__ . '/../../lib/Doctrine/Node/NestedSet.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to method returnQueryWithRootId\\(\\) on an unknown class unknown_type\\.$#',
	'count' => 17,
	'path' => __DIR__ . '/../../lib/Doctrine/Node/NestedSet.php',
];
$ignoreErrors[] = [
	'message' => '#^Left side of && is always true\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Node/NestedSet.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Node_NestedSet\\:\\:getFirstChild\\(\\) should return Doctrine_Record but returns false\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Node/NestedSet.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Node_NestedSet\\:\\:getLastChild\\(\\) should return Doctrine_Record but returns false\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Node/NestedSet.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Node_NestedSet\\:\\:getNextSibling\\(\\) should return Doctrine_Record but returns false\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Node/NestedSet.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Node_NestedSet\\:\\:getParent\\(\\) should return Doctrine_Record but returns false\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Node/NestedSet.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Node_NestedSet\\:\\:getPrevSibling\\(\\) should return Doctrine_Record but returns false\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Node/NestedSet.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param has invalid value \\(int\\)\\: Unexpected token "\\\\n     ", expected variable at offset 72$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Node/NestedSet.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param has invalid value \\(int\\)\\: Unexpected token "\\\\n     ", expected variable at offset 73$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Node/NestedSet.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param has invalid value \\(int\\)\\: Unexpected token "\\\\n     ", expected variable at offset 74$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Node/NestedSet.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param references unknown parameter\\: \\$deth$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Node/NestedSet.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param references unknown parameter\\: \\$includeNode$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Node/NestedSet.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$first of method Doctrine_Node_NestedSet\\:\\:shiftRlValues\\(\\) expects int, unknown_type given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Node/NestedSet.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$newLeftValue of method Doctrine_Node_NestedSet\\:\\:_moveBetweenTrees\\(\\) expects unknown_type, \\(float\\|int\\) given\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/../../lib/Doctrine/Node/NestedSet.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#3 \\$moveType of method Doctrine_Node_NestedSet\\:\\:_moveBetweenTrees\\(\\) expects unknown_type, string given\\.$#',
	'count' => 4,
	'path' => __DIR__ . '/../../lib/Doctrine/Node/NestedSet.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\$moveType of method Doctrine_Node_NestedSet\\:\\:_moveBetweenTrees\\(\\) has invalid type unknown_type\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Node/NestedSet.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\$newLeftValue of method Doctrine_Node_NestedSet\\:\\:_moveBetweenTrees\\(\\) has invalid type unknown_type\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Node/NestedSet.php',
];
$ignoreErrors[] = [
	'message' => '#^Unreachable statement \\- code above always terminates\\.$#',
	'count' => 11,
	'path' => __DIR__ . '/../../lib/Doctrine/Node/NestedSet.php',
];
$ignoreErrors[] = [
	'message' => '#^Variable \\$child might not be defined\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/../../lib/Doctrine/Node/NestedSet.php',
];
$ignoreErrors[] = [
	'message' => '#^Variable \\$parent might not be defined\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Node/NestedSet.php',
];
$ignoreErrors[] = [
	'message' => '#^Variable \\$sibling might not be defined\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/../../lib/Doctrine/Node/NestedSet.php',
];
$ignoreErrors[] = [
	'message' => '#^Access to an undefined property Doctrine_Node_NestedSet_PreOrderIterator\\:\\:\\$level\\.$#',
	'count' => 4,
	'path' => __DIR__ . '/../../lib/Doctrine/Node/NestedSet/PreOrderIterator.php',
];
$ignoreErrors[] = [
	'message' => '#^Access to an undefined property Doctrine_Node_NestedSet_PreOrderIterator\\:\\:\\$maxLevel\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/../../lib/Doctrine/Node/NestedSet/PreOrderIterator.php',
];
$ignoreErrors[] = [
	'message' => '#^Access to an undefined property Doctrine_Node_NestedSet_PreOrderIterator\\:\\:\\$options\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Node/NestedSet/PreOrderIterator.php',
];
$ignoreErrors[] = [
	'message' => '#^Access to an undefined property Doctrine_Node_NestedSet_PreOrderIterator\\:\\:\\$prevLeft\\.$#',
	'count' => 3,
	'path' => __DIR__ . '/../../lib/Doctrine/Node/NestedSet/PreOrderIterator.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to an undefined method Doctrine_Node\\:\\:getLeftValue\\(\\)\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Node/NestedSet/PreOrderIterator.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to an undefined method Doctrine_Node\\:\\:setLevel\\(\\)\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Node/NestedSet/PreOrderIterator.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Node_NestedSet_PreOrderIterator\\:\\:next\\(\\) with return type void returns false but should not return anything\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Node/NestedSet/PreOrderIterator.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Node_NestedSet_PreOrderIterator\\:\\:next\\(\\) with return type void returns mixed but should not return anything\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Node/NestedSet/PreOrderIterator.php',
];
$ignoreErrors[] = [
	'message' => '#^If condition is always true\\.$#',
	'count' => 5,
	'path' => __DIR__ . '/../../lib/Doctrine/Pager.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Pager\\:\\:getExecuted\\(\\) has invalid return type boolen\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Pager.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Pager\\:\\:getExecuted\\(\\) should return boolen but returns bool\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Pager.php',
];
$ignoreErrors[] = [
	'message' => '#^Negated boolean expression is always false\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Pager.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param has invalid value \\(Doctrine_Query     Accepts either a Doctrine_Query object or a string 
                          \\(which does the Doctrine_Query class creation\\)\\.\\)\\: Unexpected token "Accepts", expected variable at offset 123$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Pager.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param has invalid value \\(Doctrine_Query  Accepts either a Doctrine_Query object or a string 
                       \\(which does the Doctrine_Query class creation\\)\\.\\)\\: Unexpected token "Accepts", expected variable at offset 122$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Pager.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param has invalid value \\(array           Optional params to be used by counter Doctrine_Query\\. 
                       If not defined, the params passed to execute method will be used\\.\\)\\: Unexpected token "Optional", expected variable at offset 282$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Pager.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param has invalid value \\(array       Optional params to be used by counter Doctrine_Query\\. 
                   If not defined, the params passed to execute method will be used\\.\\)\\: Unexpected token "Optional", expected variable at offset 134$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Pager.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param has invalid value \\(boolean     Optional argument that append the query param instead of overriding the existent ones\\.\\)\\: Unexpected token "Optional", expected variable at offset 307$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Pager.php',
];
$ignoreErrors[] = [
	'message' => '#^Unreachable statement \\- code above always terminates\\.$#',
	'count' => 5,
	'path' => __DIR__ . '/../../lib/Doctrine/Pager.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Pager_Layout\\:\\:__toString\\(\\) should return string but returns null\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Pager/Layout.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Pager_Layout\\:\\:_parseReplacementsTemplate\\(\\) should return string but returns array\\<string, mixed\\>\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Pager/Layout.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Pager_Layout\\:\\:display\\(\\) with return type void returns string but should not return anything\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Pager/Layout.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param has invalid value \\(array    Optional parameters to be applied in template and url mask\\)\\: Unexpected token "Optional", expected variable at offset 130$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Pager/Layout.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param has invalid value \\(array    Optional parameters to be applied in template and url mask\\)\\: Unexpected token "Optional", expected variable at offset 139$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Pager/Layout.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$replace_pairs of function strtr expects array, string given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Pager/Layout.php',
];
$ignoreErrors[] = [
	'message' => '#^Property Doctrine_Pager_Layout\\:\\:\\$_maskReplacements \\(array\\) does not accept null\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Pager/Layout.php',
];
$ignoreErrors[] = [
	'message' => '#^Result of method Doctrine_Pager_Layout\\:\\:display\\(\\) \\(void\\) is used\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Pager/Layout.php',
];
$ignoreErrors[] = [
	'message' => '#^Unreachable statement \\- code above always terminates\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Pager/Layout.php',
];
$ignoreErrors[] = [
	'message' => '#^If condition is always true\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Pager/Range/Jumping.php',
];
$ignoreErrors[] = [
	'message' => '#^Unreachable statement \\- code above always terminates\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Pager/Range/Jumping.php',
];
$ignoreErrors[] = [
	'message' => '#^If condition is always true\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Pager/Range/Sliding.php',
];
$ignoreErrors[] = [
	'message' => '#^Unreachable statement \\- code above always terminates\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Pager/Range/Sliding.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method dumpData\\(\\) on null\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Parser.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method loadData\\(\\) on null\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Parser.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Parser\\:\\:doDump\\(\\) with return type void returns int\\<0, max\\>\\|false but should not return anything\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Parser.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Parser\\:\\:doDump\\(\\) with return type void returns string but should not return anything\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Parser.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Parser\\:\\:doLoad\\(\\) with return type void returns string\\|false but should not return anything\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Parser.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Parser\\:\\:dump\\(\\) with return type void returns mixed but should not return anything\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Parser.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Parser\\:\\:getParser\\(\\) with return type void returns object but should not return anything\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Parser.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Parser\\:\\:load\\(\\) with return type void returns array but should not return anything\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Parser.php',
];
$ignoreErrors[] = [
	'message' => '#^Result of static method Doctrine_Parser\\:\\:getParser\\(\\) \\(void\\) is used\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/../../lib/Doctrine/Parser.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Parser_Json\\:\\:dumpData\\(\\) with return type void returns null but should not return anything\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Parser/Json.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$json of function json_decode expects string, null given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Parser/Json.php',
];
$ignoreErrors[] = [
	'message' => '#^Result of method Doctrine_Parser\\:\\:doDump\\(\\) \\(void\\) is used\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Parser/Json.php',
];
$ignoreErrors[] = [
	'message' => '#^Result of method Doctrine_Parser\\:\\:doLoad\\(\\) \\(void\\) is used\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Parser/Json.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Parser_Serialize\\:\\:dumpData\\(\\) with return type void returns null but should not return anything\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Parser/Serialize.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Parser_Serialize\\:\\:loadData\\(\\) with return type void returns mixed but should not return anything\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Parser/Serialize.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$data of function unserialize expects string, null given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Parser/Serialize.php',
];
$ignoreErrors[] = [
	'message' => '#^Result of method Doctrine_Parser\\:\\:doDump\\(\\) \\(void\\) is used\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Parser/Serialize.php',
];
$ignoreErrors[] = [
	'message' => '#^Result of method Doctrine_Parser\\:\\:doLoad\\(\\) \\(void\\) is used\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Parser/Serialize.php',
];
$ignoreErrors[] = [
	'message' => '#^Argument of an invalid type string supplied for foreach, only iterables are supported\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Parser/Xml.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to function is_int\\(\\) with \\(array\\<int, string\\>\\|string\\|null\\) will always evaluate to false\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Parser/Xml.php',
];
$ignoreErrors[] = [
	'message' => '#^If condition is always true\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Parser/Xml.php',
];
$ignoreErrors[] = [
	'message' => '#^Instanceof between string and SimpleXMLElement will always evaluate to false\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Parser/Xml.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Parser_Xml\\:\\:dumpData\\(\\) with return type void returns null but should not return anything\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Parser/Xml.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$array of static method Doctrine_Parser_Xml\\:\\:arrayToXml\\(\\) expects string, array given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Parser/Xml.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$data of function simplexml_load_string expects string, null given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Parser/Xml.php',
];
$ignoreErrors[] = [
	'message' => '#^Result of method Doctrine_Parser\\:\\:doDump\\(\\) \\(void\\) is used\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Parser/Xml.php',
];
$ignoreErrors[] = [
	'message' => '#^Result of method Doctrine_Parser\\:\\:doLoad\\(\\) \\(void\\) is used\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Parser/Xml.php',
];
$ignoreErrors[] = [
	'message' => '#^Undefined variable\\: \\$children$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Parser/Xml.php',
];
$ignoreErrors[] = [
	'message' => '#^Variable \\$return might not be defined\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Parser/Xml.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Parser_Yml\\:\\:dumpData\\(\\) with return type void returns null but should not return anything\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Parser/Yml.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$array of static method sfYaml\\:\\:dump\\(\\) expects array, string given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Parser/Yml.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$input of static method sfYaml\\:\\:load\\(\\) expects string, null given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Parser/Yml.php',
];
$ignoreErrors[] = [
	'message' => '#^Result of method Doctrine_Parser\\:\\:doDump\\(\\) \\(void\\) is used\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Parser/Yml.php',
];
$ignoreErrors[] = [
	'message' => '#^Result of method Doctrine_Parser\\:\\:doLoad\\(\\) \\(void\\) is used\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Parser/Yml.php',
];
$ignoreErrors[] = [
	'message' => '#^Static method sfYaml\\:\\:load\\(\\) invoked with 2 parameters, 1 required\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Parser/Yml.php',
];
$ignoreErrors[] = [
	'message' => '#^Method sfYamlInline\\:\\:evaluateScalar\\(\\) should return string but returns false\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Parser/sfYaml/sfYamlInline.php',
];
$ignoreErrors[] = [
	'message' => '#^Method sfYamlInline\\:\\:evaluateScalar\\(\\) should return string but returns float\\.$#',
	'count' => 3,
	'path' => __DIR__ . '/../../lib/Doctrine/Parser/sfYaml/sfYamlInline.php',
];
$ignoreErrors[] = [
	'message' => '#^Method sfYamlInline\\:\\:evaluateScalar\\(\\) should return string but returns float\\|int\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Parser/sfYaml/sfYamlInline.php',
];
$ignoreErrors[] = [
	'message' => '#^Method sfYamlInline\\:\\:evaluateScalar\\(\\) should return string but returns int\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Parser/sfYaml/sfYamlInline.php',
];
$ignoreErrors[] = [
	'message' => '#^Method sfYamlInline\\:\\:evaluateScalar\\(\\) should return string but returns int\\|false\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Parser/sfYaml/sfYamlInline.php',
];
$ignoreErrors[] = [
	'message' => '#^Method sfYamlInline\\:\\:evaluateScalar\\(\\) should return string but returns null\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Parser/sfYaml/sfYamlInline.php',
];
$ignoreErrors[] = [
	'message' => '#^Method sfYamlInline\\:\\:evaluateScalar\\(\\) should return string but returns true\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Parser/sfYaml/sfYamlInline.php',
];
$ignoreErrors[] = [
	'message' => '#^Method sfYamlInline\\:\\:load\\(\\) should return array but returns string\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/../../lib/Doctrine/Parser/sfYaml/sfYamlInline.php',
];
$ignoreErrors[] = [
	'message' => '#^Method sfYamlInline\\:\\:parseMapping\\(\\) should return string but returns array\\<string, string\\>\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Parser/sfYaml/sfYamlInline.php',
];
$ignoreErrors[] = [
	'message' => '#^Method sfYamlInline\\:\\:parseSequence\\(\\) should return string but returns array\\<int\\<0, max\\>, string\\>\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Parser/sfYaml/sfYamlInline.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param references unknown parameter\\: \\$stringDelimiter$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Parser/sfYaml/sfYamlInline.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$array of function implode expects array\\|null, string given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Parser/sfYaml/sfYamlInline.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$delimiters of static method sfYamlInline\\:\\:parseScalar\\(\\) expects string\\|null, array\\<int, string\\> given\\.$#',
	'count' => 3,
	'path' => __DIR__ . '/../../lib/Doctrine/Parser/sfYaml/sfYamlInline.php',
];
$ignoreErrors[] = [
	'message' => '#^Undefined variable\\: \\$merge$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Parser/sfYaml/sfYamlParser.php',
];
$ignoreErrors[] = [
	'message' => '#^Access to an undefined property Doctrine_Connection\\:\\:\\$dataDict\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Query.php',
];
$ignoreErrors[] = [
	'message' => '#^Access to an undefined property Doctrine_Connection\\:\\:\\$expression\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Query.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to an undefined method Doctrine_Relation\\:\\:getForeignRefColumnName\\(\\)\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Query.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to an undefined method Doctrine_Relation\\:\\:getLocalRefColumnName\\(\\)\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Query.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to function is_scalar\\(\\) with array\\|Doctrine_Collection will always evaluate to false\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Query.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to method free\\(\\) on an unknown class Doctrine_Hydrate\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Query.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to method parseDqlQuery\\(\\) on an unknown class Doctrine_Hydrate\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/../../lib/Doctrine/Query.php',
];
$ignoreErrors[] = [
	'message' => '#^Default value of the parameter \\#1 \\$params \\(array\\) of method Doctrine_Query\\:\\:fetchArray\\(\\) is incompatible with type string\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Query.php',
];
$ignoreErrors[] = [
	'message' => '#^If condition is always true\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Query.php',
];
$ignoreErrors[] = [
	'message' => '#^Left side of && is always true\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Query.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Connection\\:\\:modifyLimitQuery\\(\\) invoked with 6 parameters, 1\\-4 required\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Query.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Query\\:\\:_processPendingJoinConditions\\(\\) has invalid return type Processed\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Query.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Query\\:\\:_processPendingJoinConditions\\(\\) should return Processed but returns string\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Query.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Query\\:\\:addPendingJoinCondition\\(\\) should return Doctrine_Query but return statement is missing\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Query.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Query\\:\\:buildSqlQuery\\(\\) should return string but returns false\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Query.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Query\\:\\:createSubquery\\(\\) has invalid return type Doctrine_Hydrate\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Query.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Query\\:\\:createSubquery\\(\\) should return Doctrine_Hydrate but returns Doctrine_Query\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Query.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Query\\:\\:free\\(\\) should return Doctrine_Query but return statement is missing\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Query.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Query\\:\\:processPendingFields\\(\\) should return string but empty return statement found\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Query.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Query_Tokenizer\\:\\:quoteExplode\\(\\) invoked with 4 parameters, 1\\-2 required\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Query.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$params of method Doctrine_Query_Abstract\\:\\:execute\\(\\) expects array, string given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Query.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$params of method Doctrine_Query_Abstract\\:\\:getResultCacheHash\\(\\) expects array, null given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Query.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$string of function strtolower expects string, null given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Query.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$string of function substr expects string, Processed given\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/../../lib/Doctrine/Query.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$array of function implode expects array\\|null, string given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Query.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$params of method Doctrine_Connection\\:\\:fetchAll\\(\\) expects array, null given\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/../../lib/Doctrine/Query.php',
];
$ignoreErrors[] = [
	'message' => '#^Result of && is always true\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Query.php',
];
$ignoreErrors[] = [
	'message' => '#^Result of method Doctrine_Connection\\:\\:convertBooleans\\(\\) \\(void\\) is used\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Query.php',
];
$ignoreErrors[] = [
	'message' => '#^Result of method Doctrine_Connection\\:\\:getDriverName\\(\\) \\(void\\) is used\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Query.php',
];
$ignoreErrors[] = [
	'message' => '#^Strict comparison using \\=\\=\\= between array\\|Doctrine_Collection and null will always evaluate to false\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Query.php',
];
$ignoreErrors[] = [
	'message' => '#^Unreachable statement \\- code above always terminates\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Query.php',
];
$ignoreErrors[] = [
	'message' => '#^Variable \\$componentAlias might not be defined\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Query.php',
];
$ignoreErrors[] = [
	'message' => '#^Variable \\$parent might not be defined\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/../../lib/Doctrine/Query.php',
];
$ignoreErrors[] = [
	'message' => '#^Variable \\$q might not be defined\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Query.php',
];
$ignoreErrors[] = [
	'message' => '#^Variable \\$queryComponentsBefore might not be defined\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Query.php',
];
$ignoreErrors[] = [
	'message' => '#^Variable \\$tableAlias might not be defined\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/../../lib/Doctrine/Query.php',
];
$ignoreErrors[] = [
	'message' => '#^Variable \\$where in empty\\(\\) always exists and is not falsy\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Query.php',
];
$ignoreErrors[] = [
	'message' => '#^Access to an undefined property Doctrine_Query_Abstract\\:\\:\\$_parsers\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Query/Abstract.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to an undefined method Doctrine_Query_Abstract\\:\\:copy\\(\\)\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Query/Abstract.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to an undefined method Doctrine_Query_Abstract\\:\\:isSubquery\\(\\)\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Query/Abstract.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to an undefined method Doctrine_Query_Part\\:\\:parse\\(\\)\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Query/Abstract.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to function is_array\\(\\) with string will always evaluate to false\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/../../lib/Doctrine/Query/Abstract.php',
];
$ignoreErrors[] = [
	'message' => '#^Else branch is unreachable because previous condition is always true\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/../../lib/Doctrine/Query/Abstract.php',
];
$ignoreErrors[] = [
	'message' => '#^Left side of && is always true\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Query/Abstract.php',
];
$ignoreErrors[] = [
	'message' => '#^Left side of \\|\\| is always true\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/../../lib/Doctrine/Query/Abstract.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Query_Abstract\\:\\:getSqlQuery\\(\\) invoked with 2 parameters, 0\\-1 required\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Query/Abstract.php',
];
$ignoreErrors[] = [
	'message' => '#^Negated boolean expression is always false\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Query/Abstract.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param has invalid value \\(string  The cached query, in a serialized form\\.\\)\\: Unexpected token "The", expected variable at offset 83$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Query/Abstract.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$customComponent of method Doctrine_Query_Abstract\\:\\:getCachedForm\\(\\) expects array\\|Doctrine_Collection\\|null, string given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Query/Abstract.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$params of method Doctrine_Query_Abstract\\:\\:getFlattenedParams\\(\\) expects array, null given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Query/Abstract.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$params of method Doctrine_Query_Abstract\\:\\:getSqlQuery\\(\\) expects array, null given\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/../../lib/Doctrine/Query/Abstract.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$queryPart of method Doctrine_Query_Abstract\\:\\:_addDqlQueryPart\\(\\) expects string, int given\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/../../lib/Doctrine/Query/Abstract.php',
];
$ignoreErrors[] = [
	'message' => '#^Result of && is always false\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Query/Abstract.php',
];
$ignoreErrors[] = [
	'message' => '#^Result of && is always true\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/../../lib/Doctrine/Query/Abstract.php',
];
$ignoreErrors[] = [
	'message' => '#^Result of method Doctrine_Connection\\:\\:convertBooleans\\(\\) \\(void\\) is used\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/../../lib/Doctrine/Query/Abstract.php',
];
$ignoreErrors[] = [
	'message' => '#^Result of method Doctrine_Connection\\:\\:getOption\\(\\) \\(void\\) is used\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Query/Abstract.php',
];
$ignoreErrors[] = [
	'message' => '#^Strict comparison using \\=\\=\\= between string and null will always evaluate to false\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Query/Abstract.php',
];
$ignoreErrors[] = [
	'message' => '#^Access to an undefined property Doctrine_Connection\\:\\:\\$expression\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Query/Check.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Query_Check\\:\\:getTable\\(\\) should return Doctrine_Connection but returns Doctrine_Table\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Query/Check.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Query_Check\\:\\:parse\\(\\) should return string but return statement is missing\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Query/Check.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Query_Check\\:\\:parseClause\\(\\) with return type void returns mixed but should not return anything\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Query/Check.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Query_Check\\:\\:parseClause\\(\\) with return type void returns string but should not return anything\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Query/Check.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param references unknown parameter\\: \\$alias$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Query/Check.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param references unknown parameter\\: \\$field$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Query/Check.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param references unknown parameter\\: \\$value$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Query/Check.php',
];
$ignoreErrors[] = [
	'message' => '#^Property Doctrine_Query_Check\\:\\:\\$sql \\(string\\) does not accept null\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Query/Check.php',
];
$ignoreErrors[] = [
	'message' => '#^Result of method Doctrine_Query_Check\\:\\:parseClause\\(\\) \\(void\\) is used\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/../../lib/Doctrine/Query/Check.php',
];
$ignoreErrors[] = [
	'message' => '#^Variable \\$func might not be defined\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Query/Check.php',
];
$ignoreErrors[] = [
	'message' => '#^Access to an undefined property Doctrine_Connection\\:\\:\\$dataDict\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Query/Condition.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to an undefined method Doctrine_Query_Condition\\:\\:load\\(\\)\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Query/Condition.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Query_From\\:\\:parse\\(\\) with return type void returns array\\<int\\<0, max\\>, array\\<int, string\\>\\>\\|null but should not return anything\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Query/From.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Query_Groupby\\:\\:parse\\(\\) with return type void returns string but should not return anything\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Query/Groupby.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param references unknown parameter\\: \\$str$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Query/Groupby.php',
];
$ignoreErrors[] = [
	'message' => '#^Result of && is always true\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Query/Groupby.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to method parseDqlQuery\\(\\) on an unknown class Doctrine_Hydrate\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Query/Having.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to method parseDqlQuery\\(\\) on an unknown class Doctrine_Hydrate\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Query/JoinCondition.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Query_Orderby\\:\\:parse\\(\\) with return type void returns string but should not return anything\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Query/Orderby.php',
];
$ignoreErrors[] = [
	'message' => '#^Result of && is always true\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Query/Orderby.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to an undefined method Doctrine_Query_Set\\:\\:parseLiteralValue\\(\\)\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Query/Set.php',
];
$ignoreErrors[] = [
	'message' => '#^Iterating over an object of an unknown class unknown_type\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Query/Tokenizer.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Query_Tokenizer\\:\\:clauseExplodeCountBrackets\\(\\) has invalid return type unknown_type\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Query/Tokenizer.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Query_Tokenizer\\:\\:clauseExplodeCountBrackets\\(\\) should return unknown_type but returns array\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Query/Tokenizer.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param for parameter \\$d with type string is incompatible with native type array\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Query/Tokenizer.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$terms of method Doctrine_Query_Tokenizer\\:\\:mergeBracketTerms\\(\\) expects array, unknown_type given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Query/Tokenizer.php',
];
$ignoreErrors[] = [
	'message' => '#^Variable \\$p might not be defined\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Query/Tokenizer.php',
];
$ignoreErrors[] = [
	'message' => '#^Access to an undefined property Doctrine_Connection\\:\\:\\$varchar_max_length\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Query/Where.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to method parseDqlQuery\\(\\) on an unknown class Doctrine_Hydrate\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Query/Where.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$string of function strtolower expects string, null given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Query/Where.php',
];
$ignoreErrors[] = [
	'message' => '#^Result of method Doctrine_Connection\\:\\:getDriverName\\(\\) \\(void\\) is used\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Query/Where.php',
];
$ignoreErrors[] = [
	'message' => '#^Access to an undefined property Doctrine_Connection\\:\\:\\$formatter\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/RawSql.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_RawSql\\:\\:_addDqlQueryPart\\(\\) should return \\$this\\(Doctrine_RawSql\\) but returns Doctrine_Query\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/RawSql.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_RawSql\\:\\:parseDqlQueryPart\\(\\) should return Doctrine_Query but returns \\$this\\(Doctrine_RawSql\\)\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/../../lib/Doctrine/RawSql.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param has invalid value \\(Doctrine_Connection  The connection object the query will use\\.\\)\\: Unexpected token "The", expected variable at offset 66$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/RawSql.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param has invalid value \\(Doctrine_Hydrator_Abstract  The hydrator that will be used for generating result sets\\.\\)\\: Unexpected token "The", expected variable at offset 150$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/RawSql.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param references unknown parameter\\: \\$componentName$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/RawSql.php',
];
$ignoreErrors[] = [
	'message' => '#^Result of method Doctrine_Connection\\:\\:getOption\\(\\) \\(void\\) is used\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/RawSql.php',
];
$ignoreErrors[] = [
	'message' => '#^Variable \\$fields in empty\\(\\) always exists and is not falsy\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/RawSql.php',
];
$ignoreErrors[] = [
	'message' => '#^Variable \\$parent might not be defined\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/RawSql.php',
];
$ignoreErrors[] = [
	'message' => '#^Variable \\$type might not be defined\\.$#',
	'count' => 4,
	'path' => __DIR__ . '/../../lib/Doctrine/RawSql.php',
];
$ignoreErrors[] = [
	'message' => '#^Access to an undefined property Doctrine_Event\\:\\:\\$skipOperation\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Record.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to an undefined method ArrayAccess\\:\\:save\\(\\)\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Record.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to an undefined method Doctrine_EventListener_Interface\\|Doctrine_Overloadable\\:\\:postSerialize\\(\\)\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Record.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to an undefined method Doctrine_EventListener_Interface\\|Doctrine_Overloadable\\:\\:postUnserialize\\(\\)\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Record.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to an undefined method Doctrine_EventListener_Interface\\|Doctrine_Overloadable\\:\\:postValidate\\(\\)\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Record.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to an undefined method Doctrine_EventListener_Interface\\|Doctrine_Overloadable\\:\\:preSerialize\\(\\)\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Record.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to an undefined method Doctrine_EventListener_Interface\\|Doctrine_Overloadable\\:\\:preUnserialize\\(\\)\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Record.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to an undefined method Doctrine_EventListener_Interface\\|Doctrine_Overloadable\\:\\:preValidate\\(\\)\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Record.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to an undefined method Doctrine_Node\\:\\:delete\\(\\)\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Record.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to function is_bool\\(\\) with string will always evaluate to false\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/../../lib/Doctrine/Record.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset \\(int\\|string\\) on int\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Record.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset mixed on int\\.$#',
	'count' => 5,
	'path' => __DIR__ . '/../../lib/Doctrine/Record.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset string on int\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Record.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot assign new offset to string\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/../../lib/Doctrine/Record.php',
];
$ignoreErrors[] = [
	'message' => '#^Default value of the parameter \\#2 \\$deep \\(true\\) of method Doctrine_Record\\:\\:exportTo\\(\\) is incompatible with type string\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Record.php',
];
$ignoreErrors[] = [
	'message' => '#^Instanceof between Doctrine_Collection and Doctrine_Null will always evaluate to false\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Record.php',
];
$ignoreErrors[] = [
	'message' => '#^Instanceof between string and Doctrine_Expression will always evaluate to false\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Record.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Record\\:\\:assignDefaultValues\\(\\) should return bool but return statement is missing\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Record.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Record\\:\\:exportTo\\(\\) should return string but returns array\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Record.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Record\\:\\:exportTo\\(\\) should return string but returns null\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Record.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Record\\:\\:fromArray\\(\\) with return type void returns \\$this\\(Doctrine_Record\\) but should not return anything\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Record.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Record\\:\\:getAccessor\\(\\) should return string but return statement is missing\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Record.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Record\\:\\:getErrorStackAsString\\(\\) should return string but returns false\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Record.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Record\\:\\:getIncremented\\(\\) should return int but returns null\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Record.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Record\\:\\:getMutator\\(\\) should return string but return statement is missing\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Record.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Record\\:\\:getNode\\(\\) should return Doctrine_Node but returns Doctrine_Node_\\<TreeImpl\\>\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Record.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Record\\:\\:getNode\\(\\) should return Doctrine_Node but returns false\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Record.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Record\\:\\:getPendingDeletes\\(\\) should return array but returns string\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Record.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Record\\:\\:hasAccessor\\(\\) should return bool but return statement is missing\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Record.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Record\\:\\:hasMutator\\(\\) should return bool but return statement is missing\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Record.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Record\\:\\:identifier\\(\\) should return array but returns int\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Record.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Record\\:\\:importFrom\\(\\) with return type void returns null but should not return anything\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/../../lib/Doctrine/Record.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Record\\:\\:merge\\(\\) with return type void returns null but should not return anything\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Record.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Record\\:\\:reference\\(\\) should return Doctrine_Collection\\|Doctrine_Record but return statement is missing\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Record.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Record\\:\\:state\\(\\) should return int\\|null but return statement is missing\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Record.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Record\\:\\:toArray\\(\\) should return array but returns false\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Record.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Record\\:\\:trySave\\(\\) should return true but returns false\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Record.php',
];
$ignoreErrors[] = [
	'message' => '#^Negated boolean expression is always false\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Record.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param for parameter \\$array with type string is incompatible with native type array\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Record.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param has invalid value \\(Doctrine_Validator_ErrorStack          errorStack to be assigned for this record\\)\\: Unexpected token "errorStack", expected variable at offset 137$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Record.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param has invalid value \\(mixed arg1 \\.\\.\\. argN       optional callback arguments\\)\\: Unexpected token "arg1", expected variable at offset 150$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Record.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param references unknown parameter\\: \\$array$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Record.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param references unknown parameter\\: \\$fieldname$#',
	'count' => 2,
	'path' => __DIR__ . '/../../lib/Doctrine/Record.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param references unknown parameter\\: \\$name$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Record.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param references unknown parameter\\: \\$serialized$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Record.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$array of function current expects array\\|object, int given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Record.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$array of method Doctrine_Record\\:\\:fromArray\\(\\) expects array, null given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Record.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$array of method Doctrine_Record\\:\\:fromArray\\(\\) expects array, string given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Record.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$array of static method Doctrine_Parser\\:\\:dump\\(\\) expects string, array given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Record.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$deep of method Doctrine_Record\\:\\:toArray\\(\\) expects bool, string given\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/../../lib/Doctrine/Record.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\.\\.\\.\\$arrays of function array_merge expects array, int given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Record.php',
];
$ignoreErrors[] = [
	'message' => '#^Property Doctrine_Record\\:\\:\\$_id \\(int\\) does not accept array\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/../../lib/Doctrine/Record.php',
];
$ignoreErrors[] = [
	'message' => '#^Property Doctrine_Record\\:\\:\\$_id \\(int\\) does not accept default value of type array\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Record.php',
];
$ignoreErrors[] = [
	'message' => '#^Property Doctrine_Record\\:\\:\\$_node \\(Doctrine_Node_\\<TreeImpl\\>\\) in isset\\(\\) is not nullable\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Record.php',
];
$ignoreErrors[] = [
	'message' => '#^Property Doctrine_Record\\:\\:\\$_node has unknown class Doctrine_Node_ as its type\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Record.php',
];
$ignoreErrors[] = [
	'message' => '#^Property Doctrine_Record\\:\\:\\$_node has unknown class TreeImpl as its type\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Record.php',
];
$ignoreErrors[] = [
	'message' => '#^Property Doctrine_Record\\:\\:\\$_pendingDeletes \\(string\\) does not accept default value of type array\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Record.php',
];
$ignoreErrors[] = [
	'message' => '#^Result of method Doctrine_Connection\\:\\:convertBooleans\\(\\) \\(void\\) is used\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Record.php',
];
$ignoreErrors[] = [
	'message' => '#^Result of method Doctrine_Record\\:\\:fromArray\\(\\) \\(void\\) is used\\.$#',
	'count' => 3,
	'path' => __DIR__ . '/../../lib/Doctrine/Record.php',
];
$ignoreErrors[] = [
	'message' => '#^Result of static method Doctrine_Parser\\:\\:dump\\(\\) \\(void\\) is used\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Record.php',
];
$ignoreErrors[] = [
	'message' => '#^Result of static method Doctrine_Parser\\:\\:load\\(\\) \\(void\\) is used\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Record.php',
];
$ignoreErrors[] = [
	'message' => '#^Strict comparison using \\=\\=\\= between Doctrine_Collection\\|Doctrine_Record and null will always evaluate to false\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Record.php',
];
$ignoreErrors[] = [
	'message' => '#^Unreachable statement \\- code above always terminates\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Record.php',
];
$ignoreErrors[] = [
	'message' => '#^Variable \\$array might not be defined\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Record.php',
];
$ignoreErrors[] = [
	'message' => '#^Variable \\$foreignFieldName might not be defined\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Record.php',
];
$ignoreErrors[] = [
	'message' => '#^Variable \\$modifiedFields might not be defined\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Record.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Record_Abstract\\:\\:actAs\\(\\) should return Doctrine_Record but returns \\$this\\(Doctrine_Record_Abstract\\)\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Record/Abstract.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Record_Abstract\\:\\:addListener\\(\\) should return Doctrine_Record but returns \\$this\\(Doctrine_Record_Abstract\\)\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Record/Abstract.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Record_Abstract\\:\\:bindQueryParts\\(\\) should return Doctrine_Record but returns \\$this\\(Doctrine_Record_Abstract\\)\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Record/Abstract.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Record_Abstract\\:\\:check\\(\\) should return Doctrine_Record but returns \\$this\\(Doctrine_Record_Abstract\\)\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Record/Abstract.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Record_Abstract\\:\\:hasMany\\(\\) should return Doctrine_Record but returns \\$this\\(Doctrine_Record_Abstract\\)\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Record/Abstract.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Record_Abstract\\:\\:hasOne\\(\\) should return Doctrine_Record but returns \\$this\\(Doctrine_Record_Abstract\\)\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Record/Abstract.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Record_Abstract\\:\\:setListener\\(\\) should return Doctrine_Record but returns \\$this\\(Doctrine_Record_Abstract\\)\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Record/Abstract.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Record_Abstract\\:\\:unique\\(\\) with return type void returns mixed but should not return anything\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Record/Abstract.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param references unknown parameter\\: \\$columnName$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Record/Abstract.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param references unknown parameter\\: \\$componentName$#',
	'count' => 2,
	'path' => __DIR__ . '/../../lib/Doctrine/Record/Abstract.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param references unknown parameter\\: \\$options$#',
	'count' => 2,
	'path' => __DIR__ . '/../../lib/Doctrine/Record/Abstract.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param references unknown parameter\\: \\$validators$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Record/Abstract.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$invoker of method Doctrine_Template\\:\\:setInvoker\\(\\) expects Doctrine_Record, \\$this\\(Doctrine_Record_Abstract\\) given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Record/Abstract.php',
];
$ignoreErrors[] = [
	'message' => '#^Expression "\\$record\\[\\$alias\\]" on a separate line does not do anything\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/../../lib/Doctrine/Record/Filter/Compound.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Record_Generator\\:\\:generateClassFromTable\\(\\) with return type void returns null but should not return anything\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Record/Generator.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Record_Generator\\:\\:initialize\\(\\) with return type void returns false but should not return anything\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/../../lib/Doctrine/Record/Generator.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Record_Generator\\:\\:setOption\\(\\) has invalid return type Doctrine_Plugin\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Record/Generator.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Record_Generator\\:\\:setOption\\(\\) should return Doctrine_Plugin but returns \\$this\\(Doctrine_Record_Generator\\)\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Record/Generator.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$invoker of method Doctrine_Template\\:\\:setInvoker\\(\\) expects Doctrine_Record, \\$this\\(Doctrine_Record_Generator\\) given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Record/Generator.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$object of function get_class expects object, null given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Record/Generator.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$options of method Doctrine_Import_Builder\\:\\:setOptions\\(\\) expects string, array given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Record/Generator.php',
];
$ignoreErrors[] = [
	'message' => '#^Result of method Doctrine_Record_Generator\\:\\:generateClass\\(\\) \\(void\\) is used\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Record/Generator.php',
];
$ignoreErrors[] = [
	'message' => '#^Result of method Doctrine_Template\\:\\:getPlugin\\(\\) \\(void\\) is used\\.$#',
	'count' => 3,
	'path' => __DIR__ . '/../../lib/Doctrine/Record/Generator.php',
];
$ignoreErrors[] = [
	'message' => '#^Strict comparison using \\!\\=\\= between null and null will always evaluate to false\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Record/Generator.php',
];
$ignoreErrors[] = [
	'message' => '#^Property Doctrine_Record_Iterator\\:\\:\\$record is never read, only written\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Record/Iterator.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Record_Listener_Chain\\:\\:set\\(\\) should return Doctrine_Record_Listener_Chain but return statement is missing\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Record/Listener/Chain.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Relation\\:\\:getOrderBy\\(\\) should return string but return statement is missing\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Relation.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#3 \\$columnNames of method Doctrine_Table\\:\\:processOrderBy\\(\\) expects string, bool given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Relation.php',
];
$ignoreErrors[] = [
	'message' => '#^Variable \\$dql might not be defined\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Relation/Association.php',
];
$ignoreErrors[] = [
	'message' => '#^Variable \\$dql might not be defined\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Relation/Association/Self.php',
];
$ignoreErrors[] = [
	'message' => '#^Negated boolean expression is always false\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Relation/LocalKey.php',
];
$ignoreErrors[] = [
	'message' => '#^Result of \\|\\| is always false\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Relation/LocalKey.php',
];
$ignoreErrors[] = [
	'message' => '#^Variable \\$related in empty\\(\\) always exists and is not falsy\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Relation/LocalKey.php',
];
$ignoreErrors[] = [
	'message' => '#^Access to an undefined property Doctrine_Connection\\:\\:\\$formatter\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Relation/Nest.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to function is_array\\(\\) with string will always evaluate to false\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Relation/Parser.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Relation_Parser\\:\\:bind\\(\\) with return type void returns array but should not return anything\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Relation/Parser.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param has invalid value \\(string            relation to remove\\)\\: Unexpected token "relation", expected variable at offset 144$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Relation/Parser.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param references unknown parameter\\: \\$field$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Relation/Parser.php',
];
$ignoreErrors[] = [
	'message' => '#^Strict comparison using \\=\\=\\= between string and null will always evaluate to false\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Relation/Parser.php',
];
$ignoreErrors[] = [
	'message' => '#^Variable \\$columns might not be defined\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Relation/Parser.php',
];
$ignoreErrors[] = [
	'message' => '#^Variable \\$found might not be defined\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Relation/Parser.php',
];
$ignoreErrors[] = [
	'message' => '#^Variable \\$rel in isset\\(\\) always exists and is not nullable\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Relation/Parser.php',
];
$ignoreErrors[] = [
	'message' => '#^Argument of an invalid type null supplied for foreach, only iterables are supported\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/../../lib/Doctrine/Search.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Search\\:\\:analyze\\(\\) with return type void returns mixed but should not return anything\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Search.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Search\\:\\:buildTable\\(\\) with return type void returns null but should not return anything\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Search.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Search\\:\\:search\\(\\) should return array but returns Doctrine_Query\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Search.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Search\\:\\:setTableDefinition\\(\\) with return type void returns false but should not return anything\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Search.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Search\\:\\:updateIndex\\(\\) should return int but return statement is missing\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Search.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param references unknown parameter\\: \\$record$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Search.php',
];
$ignoreErrors[] = [
	'message' => '#^Result of method Doctrine_Record_Generator\\:\\:buildTable\\(\\) \\(void\\) is used\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Search.php',
];
$ignoreErrors[] = [
	'message' => '#^Result of method Doctrine_Search\\:\\:analyze\\(\\) \\(void\\) is used\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/../../lib/Doctrine/Search.php',
];
$ignoreErrors[] = [
	'message' => '#^Variable \\$terms in empty\\(\\) always exists and is not falsy\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Search/Analyzer/Standard.php',
];
$ignoreErrors[] = [
	'message' => '#^Variable \\$terms in empty\\(\\) always exists and is not falsy\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Search/Analyzer/Utf8.php',
];
$ignoreErrors[] = [
	'message' => '#^Variable \\$table might not be defined\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Search/File.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to an undefined method Doctrine_Search_Indexer_Dir\\:\\:indexFile\\(\\)\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Search/Indexer/Dir.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param references unknown parameter\\: \\$_table$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Search/Query.php',
];
$ignoreErrors[] = [
	'message' => '#^Property Doctrine_Search_Query\\:\\:\\$_table \\(Doctrine_Table\\) does not accept default value of type array\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Search/Query.php',
];
$ignoreErrors[] = [
	'message' => '#^Access to an undefined property Doctrine_Sequence\\:\\:\\$warnings\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Sequence.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param has invalid value \\(bool              when true missing sequences are automatic created\\)\\: Unexpected token "when", expected variable at offset 142$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Sequence.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param has invalid value \\(string  name of the field into which a new row was inserted\\)\\: Unexpected token "name", expected variable at offset 263$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Sequence.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param has invalid value \\(string  name of the table into which a new row was inserted\\)\\: Unexpected token "name", expected variable at offset 187$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Sequence.php',
];
$ignoreErrors[] = [
	'message' => '#^Access to an undefined property Doctrine_Connection\\:\\:\\$export\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Sequence/Db2.php',
];
$ignoreErrors[] = [
	'message' => '#^Access to an undefined property Doctrine_Connection\\:\\:\\$formatter\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/../../lib/Doctrine/Sequence/Db2.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to an undefined method Doctrine_Sequence_Db2\\:\\:_connect\\(\\)\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Sequence/Db2.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to an undefined method Doctrine_Sequence_Db2\\:\\:lastSequenceId\\(\\)\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Sequence/Db2.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to an undefined method Doctrine_Sequence_Db2\\:\\:query\\(\\)\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/../../lib/Doctrine/Sequence/Db2.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to an undefined method Doctrine_Sequence_Db2\\:\\:quoteIdentifier\\(\\)\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Sequence/Db2.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Sequence_Db2\\:\\:currId\\(\\) should return int but returns null\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Sequence/Db2.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Sequence_Db2\\:\\:lastInsertId\\(\\) should return int but returns null\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Sequence/Db2.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param has invalid value \\(bool              when true missing sequences are automatic created\\)\\: Unexpected token "when", expected variable at offset 142$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Sequence/Db2.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @throws with type Doctrine_Adapter_Db2_Exception is not subtype of Throwable$#',
	'count' => 2,
	'path' => __DIR__ . '/../../lib/Doctrine/Sequence/Db2.php',
];
$ignoreErrors[] = [
	'message' => '#^Undefined variable\\: \\$onDemand$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Sequence/Db2.php',
];
$ignoreErrors[] = [
	'message' => '#^Access to an undefined property Doctrine_Connection\\:\\:\\$export\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Sequence/Mssql.php',
];
$ignoreErrors[] = [
	'message' => '#^Access to an undefined property Doctrine_Connection\\:\\:\\$formatter\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Sequence/Mssql.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to an undefined method Doctrine_Connection\\:\\:getServerVersion\\(\\)\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Sequence/Mssql.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param has invalid value \\(bool              when true missing sequences are automatic created\\)\\: Unexpected token "when", expected variable at offset 142$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Sequence/Mssql.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param has invalid value \\(string  name of the field into which a new row was inserted\\)\\: Unexpected token "name", expected variable at offset 263$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Sequence/Mssql.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param has invalid value \\(string  name of the table into which a new row was inserted\\)\\: Unexpected token "name", expected variable at offset 187$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Sequence/Mssql.php',
];
$ignoreErrors[] = [
	'message' => '#^Access to an undefined property Doctrine_Connection\\:\\:\\$export\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Sequence/Mysql.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param has invalid value \\(bool              when true missing sequences are automatic created\\)\\: Unexpected token "when", expected variable at offset 142$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Sequence/Mysql.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param has invalid value \\(string  name of the field into which a new row was inserted\\)\\: Unexpected token "name", expected variable at offset 259$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Sequence/Mysql.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param has invalid value \\(string  name of the table into which a new row was inserted\\)\\: Unexpected token "name", expected variable at offset 185$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Sequence/Mysql.php',
];
$ignoreErrors[] = [
	'message' => '#^Access to an undefined property Doctrine_Connection\\:\\:\\$export\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Sequence/Oracle.php',
];
$ignoreErrors[] = [
	'message' => '#^Access to an undefined property Doctrine_Connection\\:\\:\\$formatter\\.$#',
	'count' => 3,
	'path' => __DIR__ . '/../../lib/Doctrine/Sequence/Oracle.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param has invalid value \\(bool onDemand     when true missing sequences are automatic created\\)\\: Unexpected token "onDemand", expected variable at offset 129$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Sequence/Oracle.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param has invalid value \\(string  name of the field into which a new row was inserted\\)\\: Unexpected token "name", expected variable at offset 263$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Sequence/Oracle.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param has invalid value \\(string  name of the table into which a new row was inserted\\)\\: Unexpected token "name", expected variable at offset 187$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Sequence/Oracle.php',
];
$ignoreErrors[] = [
	'message' => '#^Access to an undefined property Doctrine_Connection\\:\\:\\$export\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Sequence/Pgsql.php',
];
$ignoreErrors[] = [
	'message' => '#^Access to an undefined property Doctrine_Connection\\:\\:\\$formatter\\.$#',
	'count' => 3,
	'path' => __DIR__ . '/../../lib/Doctrine/Sequence/Pgsql.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param has invalid value \\(bool onDemand     when true missing sequences are automatic created\\)\\: Unexpected token "onDemand", expected variable at offset 129$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Sequence/Pgsql.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param has invalid value \\(string  name of the field into which a new row was inserted\\)\\: Unexpected token "name", expected variable at offset 290$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Sequence/Pgsql.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param has invalid value \\(string  name of the table into which a new row was inserted\\)\\: Unexpected token "name", expected variable at offset 214$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Sequence/Pgsql.php',
];
$ignoreErrors[] = [
	'message' => '#^Access to an undefined property Doctrine_Connection\\:\\:\\$export\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Sequence/Sqlite.php',
];
$ignoreErrors[] = [
	'message' => '#^Access to an undefined property Doctrine_Connection\\:\\:\\$formatter\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/../../lib/Doctrine/Sequence/Sqlite.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Sequence_Sqlite\\:\\:nextId\\(\\) should return int but returns string\\|false\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Sequence/Sqlite.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param has invalid value \\(string  name of the field into which a new row was inserted\\)\\: Unexpected token "name", expected variable at offset 263$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Sequence/Sqlite.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param has invalid value \\(string  name of the table into which a new row was inserted\\)\\: Unexpected token "name", expected variable at offset 187$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Sequence/Sqlite.php',
];
$ignoreErrors[] = [
	'message' => '#^Access to property \\$args on an unknown class Doctrine_Validator_Interface\\.$#',
	'count' => 4,
	'path' => __DIR__ . '/../../lib/Doctrine/Table.php',
];
$ignoreErrors[] = [
	'message' => '#^Access to property \\$field on an unknown class Doctrine_Validator_Interface\\.$#',
	'count' => 4,
	'path' => __DIR__ . '/../../lib/Doctrine/Table.php',
];
$ignoreErrors[] = [
	'message' => '#^Access to property \\$invoker on an unknown class Doctrine_Validator_Interface\\.$#',
	'count' => 4,
	'path' => __DIR__ . '/../../lib/Doctrine/Table.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to function is_array\\(\\) with string will always evaluate to false\\.$#',
	'count' => 3,
	'path' => __DIR__ . '/../../lib/Doctrine/Table.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to method validate\\(\\) on an unknown class Doctrine_Validator_Interface\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/../../lib/Doctrine/Table.php',
];
$ignoreErrors[] = [
	'message' => '#^Default value of the parameter \\#3 \\$columnNames \\(false\\) of method Doctrine_Table\\:\\:processOrderBy\\(\\) is incompatible with type string\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Table.php',
];
$ignoreErrors[] = [
	'message' => '#^Instanceof between int and Doctrine_Null will always evaluate to false\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Table.php',
];
$ignoreErrors[] = [
	'message' => '#^Instanceof between string and Doctrine_Record will always evaluate to false\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/../../lib/Doctrine/Table.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Table\\:\\:__call\\(\\) has invalid return type the\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Table.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Table\\:\\:_checkForeignKeyExists\\(\\) should return bool but returns \\(int\\|string\\)\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Table.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Table\\:\\:_resolveFindByFieldName\\(\\) should return string but returns false\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Table.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Table\\:\\:addCheckConstraint\\(\\) with return type void returns \\$this\\(Doctrine_Table\\) but should not return anything\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Table.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Table\\:\\:bindQueryPart\\(\\) should return Doctrine_Record but returns \\$this\\(Doctrine_Table\\)\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Table.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Table\\:\\:export\\(\\) should return bool but return statement is missing\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Table.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Table\\:\\:getBoundQueryPart\\(\\) should return string but returns null\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Table.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Table\\:\\:getColumnDefinition\\(\\) should return array but returns false\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Table.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Table\\:\\:getMethodOwner\\(\\) with return type void returns mixed but should not return anything\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Table.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Table\\:\\:getOrderByStatement\\(\\) should return string but return statement is missing\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Table.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Table\\:\\:getProxy\\(\\) should return Doctrine_Record but returns false\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Table.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Table\\:\\:getTree\\(\\) should return Doctrine_Tree but returns false\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Table.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Table\\:\\:hasGenerator\\(\\) with return type void returns bool but should not return anything\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Table.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Table\\:\\:setOption\\(\\) should return Doctrine_Table but return statement is missing\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Table.php',
];
$ignoreErrors[] = [
	'message' => '#^Negated boolean expression is always false\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Table.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param references unknown parameter\\: \\$alias$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Table.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param references unknown parameter\\: \\$column$#',
	'count' => 2,
	'path' => __DIR__ . '/../../lib/Doctrine/Table.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param references unknown parameter\\: \\$componentName$#',
	'count' => 2,
	'path' => __DIR__ . '/../../lib/Doctrine/Table.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param references unknown parameter\\: \\$createUniqueIndex$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Table.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param references unknown parameter\\: \\$field$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Table.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param references unknown parameter\\: \\$hydrationMode$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Table.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param references unknown parameter\\: \\$name$#',
	'count' => 2,
	'path' => __DIR__ . '/../../lib/Doctrine/Table.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param references unknown parameter\\: \\$options$#',
	'count' => 2,
	'path' => __DIR__ . '/../../lib/Doctrine/Table.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param references unknown parameter\\: \\$params$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Table.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param references unknown parameter\\: \\$validators$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Table.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @throws with type Doctrine_Find_Exception is not subtype of Throwable$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Table.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @throws with type Doctrine_Query_Registry is not subtype of Throwable$#',
	'count' => 2,
	'path' => __DIR__ . '/../../lib/Doctrine/Table.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$args \\(array\\) of method Doctrine_Table\\:\\:bind\\(\\) should be compatible with parameter \\$name \\(string\\) of method Doctrine_Locator_Injectable\\:\\:bind\\(\\)$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Table.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$errorCode of method Doctrine_Validator_ErrorStack\\:\\:add\\(\\) expects Doctrine_Validator_Driver\\|string, Doctrine_Validator_Interface given\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/../../lib/Doctrine/Table.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#3 \\$maximumLength of static method Doctrine_Validator\\:\\:validateLength\\(\\) expects string, int given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Table.php',
];
$ignoreErrors[] = [
	'message' => '#^Result of && is always false\\.$#',
	'count' => 3,
	'path' => __DIR__ . '/../../lib/Doctrine/Table.php',
];
$ignoreErrors[] = [
	'message' => '#^Result of method Doctrine_Connection\\:\\:convertBooleans\\(\\) \\(void\\) is used\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Table.php',
];
$ignoreErrors[] = [
	'message' => '#^Result of \\|\\| is always true\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Table.php',
];
$ignoreErrors[] = [
	'message' => '#^Return type \\(void\\) of method Doctrine_Table\\:\\:bind\\(\\) should be compatible with return type \\(static\\(Doctrine_Locator_Injectable\\)\\) of method Doctrine_Locator_Injectable\\:\\:bind\\(\\)$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Table.php',
];
$ignoreErrors[] = [
	'message' => '#^Strict comparison using \\=\\=\\= between int and false will always evaluate to false\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Table.php',
];
$ignoreErrors[] = [
	'message' => '#^Strict comparison using \\=\\=\\= between null and string will always evaluate to false\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Table.php',
];
$ignoreErrors[] = [
	'message' => '#^Strict comparison using \\=\\=\\= between string and null will always evaluate to false\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Table.php',
];
$ignoreErrors[] = [
	'message' => '#^Unreachable statement \\- code above always terminates\\.$#',
	'count' => 4,
	'path' => __DIR__ . '/../../lib/Doctrine/Table.php',
];
$ignoreErrors[] = [
	'message' => '#^Variable \\$id might not be defined\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Table.php',
];
$ignoreErrors[] = [
	'message' => '#^Variable \\$pk might not be defined\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Table.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Task\\:\\:ask\\(\\) with return type void returns string but should not return anything\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Task.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Task\\:\\:notify\\(\\) with return type void returns false but should not return anything\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Task.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Task\\:\\:notify\\(\\) with return type void returns mixed but should not return anything\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Task.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Task\\:\\:notify\\(\\) with return type void returns string but should not return anything\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Task.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$default of method Doctrine_Task\\:\\:getArgument\\(\\) expects string\\|null, array given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Task/Compile.php',
];
$ignoreErrors[] = [
	'message' => '#^Result of static method Doctrine_Core\\:\\:compile\\(\\) \\(void\\) is used\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Task/Compile.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$string of function explode expects string, null given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Task/Dql.php',
];
$ignoreErrors[] = [
	'message' => '#^Result of static method Doctrine_Parser\\:\\:dump\\(\\) \\(void\\) is used\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Task/Dql.php',
];
$ignoreErrors[] = [
	'message' => '#^If condition is always true\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Task/DropDb.php',
];
$ignoreErrors[] = [
	'message' => '#^Result of method Doctrine_Task\\:\\:ask\\(\\) \\(void\\) is used\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Task/DropDb.php',
];
$ignoreErrors[] = [
	'message' => '#^Left side of \\|\\| is always false\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Task/GenerateMigrationsDb.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$from of static method Doctrine_Core\\:\\:generateMigrationsFromDiff\\(\\) expects string, array\\<int\\<0, max\\>, mixed\\> given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Task/GenerateMigrationsDb.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$mode of function count expects int, true given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Task/GenerateMigrationsDb.php',
];
$ignoreErrors[] = [
	'message' => '#^Result of static method Doctrine_Core\\:\\:generateMigrationsFromDb\\(\\) \\(void\\) is used\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Task/GenerateMigrationsDb.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$mode of function count expects int, true given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Task/GenerateMigrationsDiff.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$default of method Doctrine_Task\\:\\:getArgument\\(\\) expects string\\|null, array given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Task/GenerateModelsYaml.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$default of method Doctrine_Task\\:\\:getArgument\\(\\) expects string\\|null, false given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Task/LoadData.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Template\\:\\:getPlugin\\(\\) with return type void returns Doctrine_Record_Generator but should not return anything\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Template.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Template\\:\\:setInvoker\\(\\) should return Doctrine_Template but return statement is missing\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Template.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param references unknown parameter\\: \\$array$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Template.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @var above a method has no effect\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Template.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$generator of method Doctrine_Record_Generator\\:\\:addChild\\(\\) expects Doctrine_Record_Generator, Doctrine_Template given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Template.php',
];
$ignoreErrors[] = [
	'message' => '#^Property Doctrine_Template\\:\\:\\$_plugin \\(Doctrine_Record_Generator\\) in isset\\(\\) is not nullable\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Template.php',
];
$ignoreErrors[] = [
	'message' => '#^Default value of the parameter \\#2 \\$kilometers \\(false\\) of method Doctrine_Template_Geographical\\:\\:getDistance\\(\\) is incompatible with type string\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Template/Geographical.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Template_Geographical\\:\\:getDistanceQuery\\(\\) invoked with 1 parameter, 0 required\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Template/Geographical.php',
];
$ignoreErrors[] = [
	'message' => '#^Offset \'latitude\' does not exist on string\\.$#',
	'count' => 5,
	'path' => __DIR__ . '/../../lib/Doctrine/Template/Geographical.php',
];
$ignoreErrors[] = [
	'message' => '#^Offset \'longitude\' does not exist on string\\.$#',
	'count' => 5,
	'path' => __DIR__ . '/../../lib/Doctrine/Template/Geographical.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param references unknown parameter\\: \\$Doctrine_Record$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Template/Geographical.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc type string of property Doctrine_Template_Geographical\\:\\:\\$_options is not covariant with PHPDoc type array of overridden property Doctrine_Template\\:\\:\\$_options\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Template/Geographical.php',
];
$ignoreErrors[] = [
	'message' => '#^Property Doctrine_Template_Geographical\\:\\:\\$_options \\(string\\) does not accept default value of type array\\<string, array\\<string, array\\<string, int\\>\\|int\\|string\\>\\>\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Template/Geographical.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Template_I18n\\:\\:getI18n\\(\\) with return type void returns Doctrine_Record_Generator but should not return anything\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Template/I18n.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param references unknown parameter\\: \\$array$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Template/I18n.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$options of class Doctrine_I18n constructor expects string, array given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Template/I18n.php',
];
$ignoreErrors[] = [
	'message' => '#^Offset \'builder\' does not exist on string\\.$#',
	'count' => 4,
	'path' => __DIR__ . '/../../lib/Doctrine/Template/Listener/Sluggable.php',
];
$ignoreErrors[] = [
	'message' => '#^Offset \'canUpdate\' does not exist on string\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/../../lib/Doctrine/Template/Listener/Sluggable.php',
];
$ignoreErrors[] = [
	'message' => '#^Offset \'fields\' does not exist on string\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Template/Listener/Sluggable.php',
];
$ignoreErrors[] = [
	'message' => '#^Offset \'fields\' on string in empty\\(\\) does not exist\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Template/Listener/Sluggable.php',
];
$ignoreErrors[] = [
	'message' => '#^Offset \'name\' does not exist on string\\.$#',
	'count' => 5,
	'path' => __DIR__ . '/../../lib/Doctrine/Template/Listener/Sluggable.php',
];
$ignoreErrors[] = [
	'message' => '#^Offset \'provider\' does not exist on string\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Template/Listener/Sluggable.php',
];
$ignoreErrors[] = [
	'message' => '#^Offset \'unique\' does not exist on string\\.$#',
	'count' => 3,
	'path' => __DIR__ . '/../../lib/Doctrine/Template/Listener/Sluggable.php',
];
$ignoreErrors[] = [
	'message' => '#^Offset \'uniqueBy\' does not exist on string\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Template/Listener/Sluggable.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param references unknown parameter\\: \\$array$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Template/Listener/Sluggable.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc type string of property Doctrine_Template_Listener_Sluggable\\:\\:\\$_options is not covariant with PHPDoc type array of overridden property Doctrine_Record_Listener\\:\\:\\$_options\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Template/Listener/Sluggable.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$string of function strlen expects string, int\\<1, max\\> given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Template/Listener/Sluggable.php',
];
$ignoreErrors[] = [
	'message' => '#^Property Doctrine_Template_Listener_Sluggable\\:\\:\\$_options \\(string\\) does not accept array\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Template/Listener/Sluggable.php',
];
$ignoreErrors[] = [
	'message' => '#^Property Doctrine_Template_Listener_Sluggable\\:\\:\\$_options \\(string\\) does not accept default value of type array\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Template/Listener/Sluggable.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot assign offset \'hardDelete\' to string\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Template/Listener/SoftDelete.php',
];
$ignoreErrors[] = [
	'message' => '#^Left side of && is always true\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Template/Listener/SoftDelete.php',
];
$ignoreErrors[] = [
	'message' => '#^Offset \'hardDelete\' does not exist on string\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/../../lib/Doctrine/Template/Listener/SoftDelete.php',
];
$ignoreErrors[] = [
	'message' => '#^Offset \'name\' does not exist on string\\.$#',
	'count' => 3,
	'path' => __DIR__ . '/../../lib/Doctrine/Template/Listener/SoftDelete.php',
];
$ignoreErrors[] = [
	'message' => '#^Offset \'type\' does not exist on string\\.$#',
	'count' => 6,
	'path' => __DIR__ . '/../../lib/Doctrine/Template/Listener/SoftDelete.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param for parameter \\$options with type string is incompatible with native type array\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Template/Listener/SoftDelete.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc type string of property Doctrine_Template_Listener_SoftDelete\\:\\:\\$_options is not covariant with PHPDoc type array of overridden property Doctrine_Record_Listener\\:\\:\\$_options\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Template/Listener/SoftDelete.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$item of method Doctrine_Connection\\:\\:convertBooleans\\(\\) expects array, false given\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/../../lib/Doctrine/Template/Listener/SoftDelete.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$item of method Doctrine_Connection\\:\\:convertBooleans\\(\\) expects array, true given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Template/Listener/SoftDelete.php',
];
$ignoreErrors[] = [
	'message' => '#^Property Doctrine_Template_Listener_SoftDelete\\:\\:\\$_options \\(string\\) does not accept array\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Template/Listener/SoftDelete.php',
];
$ignoreErrors[] = [
	'message' => '#^Property Doctrine_Template_Listener_SoftDelete\\:\\:\\$_options \\(string\\) does not accept default value of type array\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Template/Listener/SoftDelete.php',
];
$ignoreErrors[] = [
	'message' => '#^Result of method Doctrine_Connection\\:\\:convertBooleans\\(\\) \\(void\\) is used\\.$#',
	'count' => 3,
	'path' => __DIR__ . '/../../lib/Doctrine/Template/Listener/SoftDelete.php',
];
$ignoreErrors[] = [
	'message' => '#^Offset \'created\' does not exist on string\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/../../lib/Doctrine/Template/Listener/Timestampable.php',
];
$ignoreErrors[] = [
	'message' => '#^Offset \'updated\' does not exist on string\\.$#',
	'count' => 7,
	'path' => __DIR__ . '/../../lib/Doctrine/Template/Listener/Timestampable.php',
];
$ignoreErrors[] = [
	'message' => '#^Offset string does not exist on string\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Template/Listener/Timestampable.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc type string of property Doctrine_Template_Listener_Timestampable\\:\\:\\$_options is not covariant with PHPDoc type array of overridden property Doctrine_Record_Listener\\:\\:\\$_options\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Template/Listener/Timestampable.php',
];
$ignoreErrors[] = [
	'message' => '#^Property Doctrine_Template_Listener_Timestampable\\:\\:\\$_options \\(string\\) does not accept array\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Template/Listener/Timestampable.php',
];
$ignoreErrors[] = [
	'message' => '#^Property Doctrine_Template_Listener_Timestampable\\:\\:\\$_options \\(string\\) does not accept default value of type array\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Template/Listener/Timestampable.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to an undefined method Doctrine_Record_Generator\\:\\:batchUpdateIndex\\(\\)\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Template/Searchable.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to an undefined method Doctrine_Record_Generator\\:\\:search\\(\\)\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Template/Searchable.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$search of class Doctrine_Search_Listener constructor expects Doctrine_Search, Doctrine_Record_Generator given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Template/Searchable.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot assign offset \'indexName\' to string\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Template/Sluggable.php',
];
$ignoreErrors[] = [
	'message' => '#^Offset \'alias\' does not exist on string\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Template/Sluggable.php',
];
$ignoreErrors[] = [
	'message' => '#^Offset \'indexName\' does not exist on string\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/../../lib/Doctrine/Template/Sluggable.php',
];
$ignoreErrors[] = [
	'message' => '#^Offset \'length\' does not exist on string\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Template/Sluggable.php',
];
$ignoreErrors[] = [
	'message' => '#^Offset \'name\' does not exist on string\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/../../lib/Doctrine/Template/Sluggable.php',
];
$ignoreErrors[] = [
	'message' => '#^Offset \'options\' does not exist on string\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Template/Sluggable.php',
];
$ignoreErrors[] = [
	'message' => '#^Offset \'type\' does not exist on string\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Template/Sluggable.php',
];
$ignoreErrors[] = [
	'message' => '#^Offset \'unique\' does not exist on string\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Template/Sluggable.php',
];
$ignoreErrors[] = [
	'message' => '#^Offset \'uniqueBy\' does not exist on string\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Template/Sluggable.php',
];
$ignoreErrors[] = [
	'message' => '#^Offset \'uniqueIndex\' does not exist on string\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Template/Sluggable.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc type string of property Doctrine_Template_Sluggable\\:\\:\\$_options is not covariant with PHPDoc type array of overridden property Doctrine_Template\\:\\:\\$_options\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Template/Sluggable.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$options of class Doctrine_Template_Listener_Sluggable constructor expects array, string given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Template/Sluggable.php',
];
$ignoreErrors[] = [
	'message' => '#^Property Doctrine_Template_Sluggable\\:\\:\\$_options \\(string\\) does not accept default value of type array\\<string, array\\<int, string\\>\\|bool\\|int\\|string\\|null\\>\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Template/Sluggable.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot assign offset \'length\' to string\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Template/SoftDelete.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Template_SoftDelete\\:\\:hardDelete\\(\\) should return int but returns bool\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Template/SoftDelete.php',
];
$ignoreErrors[] = [
	'message' => '#^Offset \'length\' does not exist on string\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Template/SoftDelete.php',
];
$ignoreErrors[] = [
	'message' => '#^Offset \'name\' does not exist on string\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Template/SoftDelete.php',
];
$ignoreErrors[] = [
	'message' => '#^Offset \'options\' does not exist on string\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Template/SoftDelete.php',
];
$ignoreErrors[] = [
	'message' => '#^Offset \'type\' does not exist on string\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/../../lib/Doctrine/Template/SoftDelete.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc type string of property Doctrine_Template_SoftDelete\\:\\:\\$_options is not covariant with PHPDoc type array of overridden property Doctrine_Template\\:\\:\\$_options\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Template/SoftDelete.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$options of class Doctrine_Template_Listener_SoftDelete constructor expects array, string given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Template/SoftDelete.php',
];
$ignoreErrors[] = [
	'message' => '#^Property Doctrine_Template_SoftDelete\\:\\:\\$_options \\(string\\) does not accept default value of type array\\<string, array\\<string, bool\\>\\|string\\|false\\|null\\>\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Template/SoftDelete.php',
];
$ignoreErrors[] = [
	'message' => '#^Offset \'created\' does not exist on string\\.$#',
	'count' => 6,
	'path' => __DIR__ . '/../../lib/Doctrine/Template/Timestampable.php',
];
$ignoreErrors[] = [
	'message' => '#^Offset \'updated\' does not exist on string\\.$#',
	'count' => 6,
	'path' => __DIR__ . '/../../lib/Doctrine/Template/Timestampable.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc type string of property Doctrine_Template_Timestampable\\:\\:\\$_options is not covariant with PHPDoc type array of overridden property Doctrine_Template\\:\\:\\$_options\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Template/Timestampable.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$options of class Doctrine_Template_Listener_Timestampable constructor expects array, string given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Template/Timestampable.php',
];
$ignoreErrors[] = [
	'message' => '#^Property Doctrine_Template_Timestampable\\:\\:\\$_options \\(string\\) does not accept default value of type array\\<string, array\\<string, array\\<string, bool\\>\\|bool\\|string\\|null\\>\\>\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Template/Timestampable.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to an undefined method Doctrine_Record_Generator\\:\\:getVersion\\(\\)\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Template/Versionable.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Template_Versionable\\:\\:getAuditLog\\(\\) with return type void returns Doctrine_Record_Generator but should not return anything\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Template/Versionable.php',
];
$ignoreErrors[] = [
	'message' => '#^Access to an undefined property Doctrine_Event\\:\\:\\$skipOperation\\.$#',
	'count' => 6,
	'path' => __DIR__ . '/../../lib/Doctrine/Transaction.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param has invalid value \\(string  standard isolation level
                 READ UNCOMMITTED \\(allows dirty reads\\)
                 READ COMMITTED \\(prevents dirty reads\\)
                 REPEATABLE READ \\(prevents nonrepeatable reads\\)
                 SERIALIZABLE \\(prevents phantom reads\\)\\)\\: Unexpected token "standard", expected variable at offset 257$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Transaction.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$savepoint of method Doctrine_Transaction\\:\\:removeSavePoints\\(\\) expects sring, string given\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/../../lib/Doctrine/Transaction.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\$savepoint of method Doctrine_Transaction\\:\\:removeSavePoints\\(\\) has invalid type sring\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Transaction.php',
];
$ignoreErrors[] = [
	'message' => '#^Unreachable statement \\- code above always terminates\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/../../lib/Doctrine/Transaction.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param has invalid value \\(string  standard isolation level \\(SQL\\-92\\)
     portable modes\\:
                 READ UNCOMMITTED \\(allows dirty reads\\)
                 READ COMMITTED \\(prevents dirty reads\\)
                 REPEATABLE READ \\(prevents nonrepeatable reads\\)
                 SERIALIZABLE \\(prevents phantom reads\\)
     mssql specific modes\\:
                 SNAPSHOT\\)\\: Unexpected token "standard", expected variable at offset 78$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Transaction/Mssql.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Transaction_Mysql\\:\\:createSavePoint\\(\\) with return type void returns Doctrine_Adapter_Statement\\|PDOStatement but should not return anything\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Transaction/Mysql.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Transaction_Mysql\\:\\:releaseSavePoint\\(\\) with return type void returns Doctrine_Adapter_Statement\\|PDOStatement but should not return anything\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Transaction/Mysql.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Transaction_Mysql\\:\\:rollbackSavePoint\\(\\) with return type void returns Doctrine_Adapter_Statement\\|PDOStatement but should not return anything\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Transaction/Mysql.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Transaction_Mysql\\:\\:setIsolation\\(\\) with return type void returns Doctrine_Adapter_Statement\\|PDOStatement but should not return anything\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Transaction/Mysql.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param has invalid value \\(string  standard isolation level
                 READ UNCOMMITTED \\(allows dirty reads\\)
                 READ COMMITTED \\(prevents dirty reads\\)
                 REPEATABLE READ \\(prevents nonrepeatable reads\\)
                 SERIALIZABLE \\(prevents phantom reads\\)\\)\\: Unexpected token "standard", expected variable at offset 78$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Transaction/Mysql.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Transaction_Oracle\\:\\:createSavePoint\\(\\) with return type void returns Doctrine_Adapter_Statement\\|PDOStatement but should not return anything\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Transaction/Oracle.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Transaction_Oracle\\:\\:releaseSavePoint\\(\\) with return type void returns true but should not return anything\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Transaction/Oracle.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Transaction_Oracle\\:\\:rollbackSavePoint\\(\\) with return type void returns Doctrine_Adapter_Statement\\|PDOStatement but should not return anything\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Transaction/Oracle.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Transaction_Oracle\\:\\:setIsolation\\(\\) with return type void returns Doctrine_Adapter_Statement\\|PDOStatement but should not return anything\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Transaction/Oracle.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param has invalid value \\(string  standard isolation level
                 READ UNCOMMITTED \\(allows dirty reads\\)
                 READ COMMITTED \\(prevents dirty reads\\)
                 REPEATABLE READ \\(prevents nonrepeatable reads\\)
                 SERIALIZABLE \\(prevents phantom reads\\)\\)\\: Unexpected token "standard", expected variable at offset 78$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Transaction/Oracle.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Transaction_Pgsql\\:\\:createSavePoint\\(\\) with return type void returns Doctrine_Adapter_Statement\\|PDOStatement but should not return anything\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Transaction/Pgsql.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Transaction_Pgsql\\:\\:releaseSavePoint\\(\\) with return type void returns Doctrine_Adapter_Statement\\|PDOStatement but should not return anything\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Transaction/Pgsql.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Transaction_Pgsql\\:\\:rollbackSavePoint\\(\\) with return type void returns Doctrine_Adapter_Statement\\|PDOStatement but should not return anything\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Transaction/Pgsql.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Transaction_Pgsql\\:\\:setIsolation\\(\\) with return type void returns Doctrine_Adapter_Statement\\|PDOStatement but should not return anything\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Transaction/Pgsql.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param has invalid value \\(string  standard isolation level
                 READ UNCOMMITTED \\(allows dirty reads\\)
                 READ COMMITTED \\(prevents dirty reads\\)
                 REPEATABLE READ \\(prevents nonrepeatable reads\\)
                 SERIALIZABLE \\(prevents phantom reads\\)\\)\\: Unexpected token "standard", expected variable at offset 78$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Transaction/Pgsql.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Transaction_Sqlite\\:\\:setIsolation\\(\\) with return type void returns Doctrine_Adapter_Statement\\|PDOStatement but should not return anything\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Transaction/Sqlite.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param has invalid value \\(string  standard isolation level
                 READ UNCOMMITTED \\(allows dirty reads\\)
                 READ COMMITTED \\(prevents dirty reads\\)
                 REPEATABLE READ \\(prevents nonrepeatable reads\\)
                 SERIALIZABLE \\(prevents phantom reads\\)\\)\\: Unexpected token "standard", expected variable at offset 78$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Transaction/Sqlite.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param for parameter \\$table with type object is not subtype of native type Doctrine_Table\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/../../lib/Doctrine/Tree.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param has invalid value \\(mixed\\)\\: Unexpected token "\\\\n     ", expected variable at offset 75$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Tree.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param references unknown parameter\\: \\$impName$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Tree.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param references unknown parameter\\: \\$fetchmode$#',
	'count' => 2,
	'path' => __DIR__ . '/../../lib/Doctrine/Tree/Interface.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to an undefined method Doctrine_Node\\:\\:getRootValue\\(\\)\\.$#',
	'count' => 3,
	'path' => __DIR__ . '/../../lib/Doctrine/Tree/NestedSet.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to an undefined method Doctrine_Node\\:\\:setRootValue\\(\\)\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Tree/NestedSet.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to method addOrderBy\\(\\) on an unknown class unknown\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/../../lib/Doctrine/Tree/NestedSet.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to method addWhere\\(\\) on an unknown class unknown\\.$#',
	'count' => 6,
	'path' => __DIR__ . '/../../lib/Doctrine/Tree/NestedSet.php',
];
$ignoreErrors[] = [
	'message' => '#^Else branch is unreachable because previous condition is always true\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Tree/NestedSet.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Tree_NestedSet\\:\\:fetchRoot\\(\\) should return Doctrine_Record but returns false\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Tree/NestedSet.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Tree_NestedSet\\:\\:getBaseQuery\\(\\) has invalid return type unknown\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Tree/NestedSet.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param for parameter \\$record with type object is not subtype of native type Doctrine_Record\\|null\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Tree/NestedSet.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param for parameter \\$table with type object is not subtype of native type Doctrine_Table\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Tree/NestedSet.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param references unknown parameter\\: \\$fetchmode$#',
	'count' => 2,
	'path' => __DIR__ . '/../../lib/Doctrine/Tree/NestedSet.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param references unknown parameter\\: \\$options$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Tree/NestedSet.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param references unknown parameter\\: \\$root_id$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Tree/NestedSet.php',
];
$ignoreErrors[] = [
	'message' => '#^Access to an undefined property Doctrine_Validator\\:\\:\\$stack\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Validator.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to function is_array\\(\\) with mixed will always evaluate to false\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/../../lib/Doctrine/Validator.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to method validate\\(\\) on an unknown class Doctrine_Validator_Interface\\.$#',
	'count' => 3,
	'path' => __DIR__ . '/../../lib/Doctrine/Validator.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Validator\\:\\:getValidator\\(\\) has invalid return type Doctrine_Validator_Interface\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Validator.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$string of function explode expects string, float\\|int\\<0, max\\> given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Validator.php',
];
$ignoreErrors[] = [
	'message' => '#^Strict comparison using \\=\\=\\= between string and null will always evaluate to false\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Validator.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$month of function checkdate expects int, string given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Validator/Date.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$day of function checkdate expects int, string given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Validator/Date.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#3 \\$year of function checkdate expects int, string given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Validator/Date.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Validator_Driver\\:\\:__set\\(\\) with return type void returns \\$this\\(Doctrine_Validator_Driver\\) but should not return anything\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Validator/Driver.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$invalid of class Doctrine_Validator_Exception constructor expects array, string given\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Validator/Driver.php',
];
$ignoreErrors[] = [
	'message' => '#^Method Doctrine_Validator_ErrorStack\\:\\:remove\\(\\) should return bool but return statement is missing\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Validator/ErrorStack.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param has invalid value \\(mixed Either string with function name or array with object, 
functionname\\. See call_user_func in php manual for more inforamtion\\)\\: Unexpected token "Either", expected variable at offset 164$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Validator/Exception.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param references unknown parameter\\: \\$validator$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Validator/Exception.php',
];
$ignoreErrors[] = [
	'message' => '#^Binary operation "\\-" between string and numeric\\-string results in an error\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Validator/Future.php',
];
$ignoreErrors[] = [
	'message' => '#^Strict comparison using \\=\\=\\= between mixed and null will always evaluate to false\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Validator/Nospace.php',
];
$ignoreErrors[] = [
	'message' => '#^Binary operation "\\-" between string and numeric\\-string results in an error\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Validator/Past.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param references unknown parameter\\: \\$args$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Validator/Regexp.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to method validate\\(\\) on an unknown class Doctrine_Validator_Interface\\.$#',
	'count' => 2,
	'path' => __DIR__ . '/../../lib/Doctrine/Validator/Timestamp.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param references unknown parameter\\: \\$args$#',
	'count' => 1,
	'path' => __DIR__ . '/../../lib/Doctrine/Validator/Usstate.php',
];

return ['parameters' => ['ignoreErrors' => $ignoreErrors]];
