#!/usr/bin/php
<?PHP
	function ft_is_number($nb) {
		$i = 0;
		while($i < strlen($nb))
		{
			if (($nb[$i] < '0' || $nb[$i]  > '9'))
			{
				print("Syntax Error\n");
				exit();
			}
			$i++;
		}
	}

	function ft_is_op($nb) {
		$i = 0;
		while($i < strlen($nb))
		{
			if ($nb[$i] == '*' || $nb[$i] == '/' || $nb[$i] == '+' || $nb[$i] == '-' || $nb[$i] == '%')
			{
				return($i);
			}
			$i++;
		}
		print("Syntax Error\n");
		exit();
	}




	$tab = [];
	$is_one = 0;
	if($argc != 2)
	{
		print("Incorrect Parameters\n");
		exit();
	}

	$str = preg_replace("/\t|\n|\r/", ' ', $argv[1]);
	$str = trim($str);
	$str = str_replace(' ', '', $str);
	
	$i = ft_is_op($str);
	$number1 = substr($str, 0, $i);
	$single = $str[$i];
	$number2 = substr($str, $i + 1, strlen($str));

	ft_is_number($number1);
	ft_is_number($number2);


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
	else if ($single == '%'){
		if($number2 == 0)
		{
			print("error");
			exit();
		}
		print($number1 % $number2 . "\n");
	}
	else
	{
		print("Syntax Error\n");
	}
?>