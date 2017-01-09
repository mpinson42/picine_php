#!/usr/bin/php
<?php
while(1)
{
	echo "Entrez un nombre: ";
	$int = trim(fgets(STDIN));
	if(feof(STDIN) == TRUE)
		exit();
	if(!is_numeric($int))
	{
		echo "'$int'";
		echo " n'est pas un chiffre";
		echo "\n";
	}
	else
	{
		echo "le nombre '$int' est : ";
		if(substr($int, -1) % 2 == 0)
		{
			echo "Pair\n";
		}
		else
		{
			echo "Impair\n";
		}
	}

}

?>