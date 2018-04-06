#!/usr/bin/php
<?PHP
	$tab = [];
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
			array_push($tab, $val);
		}
	}

	sort($tab);

	foreach ($tab as $val) {
		print($val . "\n");
	}

?>