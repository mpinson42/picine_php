#!/usr/bin/php
<?php

function ft_split($str)
{
	$decoup = explode(' ', $str);
	$filtre = array_filter($decoup);
	sort($filtre);
	return $filtre;
}






if ($argc <= 1)
	{
		exit(1);

	}

$i = 1;
$tab = array();
while ($i < $argc)
{
	$splited = ft_split($argv[$i]);
	$tab = array_merge($tab, $splited);
	$i++;
}
asort($tab);
foreach ($tab as $elem) 
{
	echo "$elem\n";
}
?>