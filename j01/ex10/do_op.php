#!/usr/bin/php
<?PHP
	$tab = [];
	$is_one = 0;
	if($argc != 4)
	{
		print("Incorrect Parameters\n");
		exit();
	}

	foreach ($argv as &$str) {
		if($is_one == 0) {
			$is_one = 1;
			continue;
		}
		$str = preg_replace("/\t|\n|\r/", ' ', $str);
		$str = trim($str);
		$str = preg_replace('/ {2,}/', ' ', $str);

		$tab2 = explode(" ", $str);
		foreach ($tab2 as &$val) {
			array_push($tab, $val);
		}
	}

	$number1 = $tab[0];
	$single = $tab[1];
	$number2 = $tab[2];


	if($single == '+')
		print($number1 + $number2 . "\n");
	elseif ($single == '-')
		print($number1 - $number2 . "\n");
	elseif ($single == '/')
	{
		if($number2 == 0)
		{
			print("error");
			exit();
		}
		print($number1 / $number2 . "\n");
	}
	else if ($single == '*')
		print($number1 * $number2 . "\n");
	else if ($single == '%')
	{
		if($number2 == 0)
		{
			print("error");
			exit();
		}
		print($number1 % $number2 . "\n");
	}
?>