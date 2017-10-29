<?php 

	$data = [];
	$firstName = [];
	$lastName = [];
	$username = [];
	$password = [];

	do {

		echo PHP_EOL . "Welcome" . PHP_EOL . "1. Register (Press 1)" . PHP_EOL . "2. Login (Press 2)" . PHP_EOL . "3. Exit (Press x)" . PHP_EOL;

		$select = readline();

		if ( $select == 1 ) {
			do {
				$inputFirstName = "First Name: " . readline( "First Name: " . PHP_EOL );
				$inputLastName = "Last Name: " . readline( "Last Name: " . PHP_EOL );
				$inputUsername = "Username: " . readline( "Username: " . PHP_EOL );
				$inputPassword = "Password: " . readline( "Password: " . PHP_EOL);
				$inputComfirmPassword = "Password: " . readline( "Comfirm Password: " . PHP_EOL);
				$exitRegister = readline( "Confirm?(Y/N) or Exit?(x)" . PHP_EOL );
				if ( $exitRegister == 'y' && $inputPassword === $inputComfirmPassword ) {
					$firstName[] = $inputFirstName;
					$lastName[] = $inputLastName;
					$username[] = $inputUsername;
					$password[] = $inputPassword;
					$data[] = $inputFirstName . PHP_EOL . $inputLastName . PHP_EOL . $inputUsername . PHP_EOL . $inputPassword . PHP_EOL;
					echo "Successful Register" . PHP_EOL;
				}
				else {
					echo "Register Fail" . PHP_EOL;
				}
			} while ( $exitRegister == 'n' && $exitRegister !== 'y' && $exitRegister !== 'x' );
		}

		if ( $select == 2 ) {
			do {
				echo PHP_EOL . "Welcome" . PHP_EOL;
				$loginUsername = "Username: " . readline( "Username: " . PHP_EOL );
				$loginPassword = "Password: " . readline( "Password: " . PHP_EOL );
				if ( $loginUsername == $inputUsername && $loginPassword == $inputPassword ) {
					echo "Login Successful" . PHP_EOL ;
			} while ( $login == 'x' );
		}

	} while ( $select !== 'x' || $exitRegister !== 'x' );

 ?>