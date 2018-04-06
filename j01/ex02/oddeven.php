#!/usr/bin/php
<?php
while (1)
{
	print("Entrez un nombre: ");
	$ligne = fgets(STDIN);
	if(feof(STDIN) == true)
	{
		print ("\n");
		exit();
	}
	$ligne = substr($ligne, 0, strlen($ligne) - 1);
	$chiffre = intval($ligne);
	$is_number = 1;

	$i = 0;
	while($i < strlen($ligne))
	{
		if (($ligne[$i] < '0' || $ligne[$i]  > '9'))
		{
			$is_number = 0;
		}
		$i++;
	}

	if ($is_number == 0 || strlen($ligne) == 0)
	{
		$is_number = 1;
		print("'" . $ligne . "' n'est pas un chiffre\n");
		continue;
	}

	$is_pair = $chiffre % 2;

	if($chiffre % 2 == 1)
		print('Le chiffre ' . $chiffre . " est Impair\n");
	else
		print('Le chiffre ' . $chiffre . " est Pair\n");



	
	//print ("\n");
}
?>