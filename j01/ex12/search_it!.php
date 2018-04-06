#!/usr/bin/php
<?PHP
$tab = [];
	$is_one = 0;
	if($argc < 2)
	{
		exit();
	}

	foreach ($argv as &$str) {
		if($is_one == 1) {
			$is_one = 2;
			$value = $str;
			continue;
		}
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

	foreach ($tab as $key) {
		$spl = split(":", $key);
		if(count($spl) != 2)
		{
			print("error\n");
			exit();
		}
		if($value == $spl[0])
		{
			$print = $spl[1];
		}
	}

	if(strlen($print))
		print($print . "\n");
?>