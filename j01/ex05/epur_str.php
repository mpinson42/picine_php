#!/usr/bin/php
<?php
	if ($argc <= 1)
	{
		exit(1);

	}
	$decoup = explode(' ', $argv[1]);
	$filtre = array_filter($decoup);
	$implod = implode(" ", $filtre);
	echo $implod;
	echo "\n";
?>