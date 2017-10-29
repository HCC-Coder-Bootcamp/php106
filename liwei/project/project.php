<?php

$array_createuser = [];

do {

    echo "ATM".PHP_EOL;
    echo "Create Account     (1)".PHP_EOL;
    echo "Login Account      (2)".PHP_EOL;
    echo "Balance            (3)".PHP_EOL;
    echo "Deposit            (4)".PHP_EOL;
    echo "Withdraw           (5)".PHP_EOL;
    echo "Transaction Record (6)".PHP_EOL;
    echo $input_atm = readline('Insert Number to Continue : "X" to Exit : '.PHP_EOL);
    /////
    if ($input_atm !== 'X' && $input_atm == '1') {
    	echo "Create Account".PHP_EOL;
        $input_user = readline('User Name  : '.PHP_EOL);
        $input_password = readline('Pin Number : '.PHP_EOL);
        $array_createuser[$input_user] = $input_password;
        echo "Hi, $input_user Create Account is Successful, Pin Number is $input_password" . PHP_EOL;
    }
    if ($input_atm !== 'X' && $input_atm == '2') {
        echo "Login Account".PHP_EOL;
        $login_user = readline('User Name  : '.PHP_EOL);
        $login_password = readline('Pin Number : '.PHP_EOL);
        $status = false;
        foreach ($array_createuser as $name => $password) {
            if ($login_password == $password AND $login_user == $name) {
                
                $status = true;
            }
        
        }   
        /////
        if ($status == true) {
            echo "Login Successful".PHP_EOL;
        }else{
            echo "Wrong Account, Please Try Again or Create a New Account".PHP_EOL;
        } 
    }
    /////

} while($input_atm !== 'X');
