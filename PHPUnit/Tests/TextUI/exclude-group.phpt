--TEST--
phpunit --exclude-group balanceIsInitiallyZero BankAccountTest ../../Samples/BankAccount/BankAccountTest.php
--FILE--
<?php
$_SERVER['argv'][1] = '--exclude-group';
$_SERVER['argv'][2] = 'balanceIsInitiallyZero';
$_SERVER['argv'][3] = 'BankAccountTest';
$_SERVER['argv'][4] = '../Samples/BankAccount/BankAccountTest.php';

require_once dirname(dirname(dirname(__FILE__))) . '/TextUI/Command.php';

PHPUnit_TextUI_Command::main();
?>
--EXPECT--
PHPUnit @package_version@ by Sebastian Bergmann.

..

Time: 0 seconds

OK (2 tests, 2 assertions)
