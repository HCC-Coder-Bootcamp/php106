<?php
/* Create an ATM with following features:

 a. create user, with username and pin number
 b. login user
 c. check balance
 d. deposit
 e. withdraw
 f. check transaction record *
 g. quit with ‘x’

 */

echo "----------------------------------------" . PHP_EOL . PHP_EOL . PHP_EOL . PHP_EOL . "     Hi, welcome to B2U ATM. " . PHP_EOL . PHP_EOL . PHP_EOL . PHP_EOL . "----------------------------------------" . PHP_EOL;
echo "Please create an account to continue :" . PHP_EOL . PHP_EOL;

 //create user
$userName = readline('Username :');
$password = readline('Password :');
		
	echo PHP_EOL . "You account had been created." . PHP_EOL . PHP_EOL;
	echo "----------------------------------------" . PHP_EOL;

//login
do {

echo "Please enter username and password to login. " . PHP_EOL . PHP_EOL;
$loginUser = readline('Username :');
$loginPw = readline('Password :');
echo PHP_EOL . "----------------------------------------" . PHP_EOL . PHP_EOL;
	
}

//check login
if ($loginUser == $userName && $loginPw == $password) {

	echo PHP_EOL . "Welcome, have a nice day." .PHP_EOL . PHP_EOL . PHP_EOL;
	echo "----------------------------------------" . PHP_EOL . PHP_EOL;

	//proccess
	$balance = 0;

	$function = readline(
	'Press 1 to Checkbalance ' . PHP_EOL .
	'Press 2 to Deposit ' . PHP_EOL . 
	'Press 3 to Withdraw ' . PHP_EOL . 
	'Press 4 to Check Transaction Record' . PHP_EOL . 
	'Press X to Exit ' . PHP_EOL . PHP_EOL);

	echo "----------------------------------------" . PHP_EOL . PHP_EOL;

	while ($function !== 'x') {

		if ($function == '1' ) {

			echo "You account balance is RM $balance " . PHP_EOL . PHP_EOL;
			echo "----------------------------------------" . PHP_EOL . PHP_EOL;

		}else if ($function == '2') {

			$deposit = readline('Enter amount : RM ');
			$record = "+RM $deposit";
			$balance += $deposit;

			echo PHP_EOL . PHP_EOL . "You transaction is success. " . PHP_EOL . PHP_EOL;
			echo "----------------------------------------" . PHP_EOL . PHP_EOL;

		}else if ($function == '3') {

			$withdraw = readline('Enter amount : RM ');
			$record = "-RM $withdraw ";
			$balance -= $deposit;

			echo PHP_EOL . PHP_EOL . "You withdraw is success. " . PHP_EOL . PHP_EOL;
			echo "You account balance is RM $balance " . PHP_EOL;
			echo "----------------------------------------" . PHP_EOL . PHP_EOL;

		}else if ($function == '4') {

			echo "$record";
			echo "----------------------------------------" . PHP_EOL . PHP_EOL;
		}
		$function = readline(
		'Press 1 to Checkbalance ' . PHP_EOL .
		'Press 2 to Deposit ' . PHP_EOL . 
		'Press 3 to Withdraw ' . PHP_EOL . 
		'Press 4 to Check Transaction Record' . PHP_EOL . 
		'Press X to Exit ' . PHP_EOL . PHP_EOL);

		echo "----------------------------------------" . PHP_EOL . PHP_EOL;

	}

		echo PHP_EOL . PHP_EOL . "Thank you for using." . PHP_EOL . PHP_EOL . PHP_EOL;
		echo "----------------------------------------" . PHP_EOL . PHP_EOL;