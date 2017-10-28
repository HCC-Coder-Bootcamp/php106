<?php 
	

	// $input = readline('Welcome, may I help you?' . PHP_EOL);

	$balance = 0;
	$transactions = [];


	do {
		$input = readline('May i help you?' . PHP_EOL);
		
		if ($input == 'b') {
			echo "$balance" . PHP_EOL;
		}elseif ($input == 'd') {
			$deposit = readline('How much you want to deposit?' . PHP_EOL);
			$balance = $balance + $deposit;
			$transaction = [];
			$transaction['type'] = 'deposit';
			$transaction['amount'] = $deposit;
			$transaction['balance'] = $balance;
			$transactions[] = $transaction;
		}elseif ($input == 'w') {
			$withraw = readline('How much you want to withraw?' . PHP_EOL);
			$balance = $balance - $withraw;
			$transaction = [];
			$transaction['type'] = 'withraw';
			$transaction['amount'] = $withraw;
			$transaction['balance'] = $balance;
			$transactions[] = $transaction;
		}elseif ($input == 't') {
			echo str_pad('Withdraw RM', 15, ' ');
			echo str_pad('Deposit RM', 15, ' ');
			echo str_pad('Balance RM', 15, ' ');
			echo PHP_EOL;
			foreach ($transactions as $key => $transaction) {
				$amount = $transaction['amount'];
				$balance = $transaction['balance'];
				if ($transaction['type'] == 'deposit') {
					echo str_pad('', 15, ' ');
					echo str_pad($amount, 15, ' ');
					echo str_pad($balance, 15, ' ');
					echo PHP_EOL;
				} else {
					echo str_pad($amount, 15, ' ');
					echo str_pad('', 15, ' ');
					echo str_pad($balance, 15, ' ');
					echo PHP_EOL;

				}
			}
		}

	} while ( $input !== 'x');
		echo "Thnak you" . PHP_EOL;

 