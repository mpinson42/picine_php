#!/usr/bin/php
<?PHP
	if($argc < 2)
	{
		exit();
	}
	if($argv[1] == "mais pourquoi cette demo ?")
		print("Tout simplement pour quen feuilletant le sujet\non ne sapercoive pas de la nature de l'exo\n");
	elseif ($argv[1] == "mais pourquoi cette chanson ?")
		print("Parce que Kwame a des enfants\n");
	elseif ($argv[1] == "vraiment ?")
	{
		if(rand(0,1) == 0)
		{
			print("Nan cest parce que cest le premier avril\n");
		}
		else {
			print("Oui il a vraiment des enfants\n");
		}
	}
?>