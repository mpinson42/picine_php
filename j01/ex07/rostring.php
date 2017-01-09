#!/usr/bin/php
<?php

	if ($argc <= 1)
	{
		exit(1);

	}

	$decoup = explode(' ', $argv[1]);
	$filtre = array_filter($decoup);

	if(count($filtre))
	{
		foreach (array_splice($filtre, 1) as $elem) 
		{
			echo "$elem ";
		}
		echo "$filtre[0]\n";
	}
?>