#!/usr/bin/php
<?PHP
	$tab = [];
	$tab3 = [];
	$is_one = 0;
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
			array_push($tab, strtolower($val));
			$tab3[strtolower($val)] = $val;
		}
	}
	

	sort($tab);

	foreach ($tab as $val) {
		if($val[0] >= 'a' && $val[0] <= 'z')
			print($tab3[$val] . "\n");
	}

	foreach ($tab as $val) {
		if($val[0] >= '0' && $val[0] <= '9')
			print($val . "\n");
	}

	foreach ($tab as $val) {
		if(($val[0] < 'a' || $val[0] > 'z') && ($val[0] < '0' || $val[0] > '9'))
			print($val . "\n");
	}

?>