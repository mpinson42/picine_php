#!/usr/bin/php
<?php


function ft_split($str)
{
	$decoup = explode(' ', $str);
	$filtre = array_filter($decoup);
	sort($filtre);
	return $filtre;
}



?>