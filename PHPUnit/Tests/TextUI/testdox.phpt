--TEST--
phpunit --testdox php://stdout BankAccountTest ../../Samples/BankAccount/BankAccountTest.php
--FILE--
<?php
$_SERVER['argv'][1] = '--testdox';
$_SERVER['argv'][2] = 'BankAccountTest';
$_SERVER['argv'][3] = '../Samples/BankAccount/BankAccountTest.php';

require_once dirname(dirname(dirname(__FILE__))) . '/TextUI/Command.php';

PHPUnit_TextUI_Command::main();
?>
--EXPECTF--
PHPUnit @package_version@ by Sebastian Bergmann.

BankAccount
 [x] Balance is initially zero
 [x] Balance cannot become negative

