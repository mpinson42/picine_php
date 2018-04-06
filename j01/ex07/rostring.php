#!/usr/bin/php
<?PHP
	if($argc < 2)
		exit();
	
	$tab = [];
	$str = preg_replace("/\t|\n|\r/", ' ', $str);
	$str = trim($argv[1]);
	$str = preg_replace('/ {2,}/', ' ', $str);
	$tab2 = explode(" ", $str);
	foreach ($tab2 as &$val) {
		array_push($tab, $val);
	}

	$tab = array_reverse($tab);
	$i = 0;
	$max = count($tab);
	foreach ($tab as $val) {
		$i++;
		
		if ($i != $max)
			print(trim($val) . " ");
		else {
			print(trim($val) . "\n");
		}

	}
?>