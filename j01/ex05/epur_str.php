#!/usr/bin/php
<?PHP
	if($argc < 2)
	{
		exit();
	}
	$str = preg_replace("/\t|\n|\r/", ' ', $str);
	$str = trim($argv[1]);
	$str = preg_replace('/ {2,}/', ' ', $str);
	print($str . "\n");
?>