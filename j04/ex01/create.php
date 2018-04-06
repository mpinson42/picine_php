<?php
	if($_POST['submit'] && $_POST['submit'] == "OK" && $_POST['login'] && $_POST['passwd'])
	{
		if(!file_exists ("../private"))
		{

			mkdir("../private");
		}

		$fichier = [];

		$arr = [];
		$arr['login'] = $_POST['login']; 
		$arr['passwd'] = hash("whirlpool", $_POST['passwd']);  

		if(file_exists ("../private/passwd"))
		{
			$fichier = file_get_contents("../private/passwd");
			$fichier = unserialize($fichier);

			foreach ($fichier as $key) {
				if($key['login'] == $_POST['login'])
				{
					echo "ERROR\n";
					return false;
				}
			}
			//if($fichier[]['login'] == $_)
		}
		$fichier[] = $arr;
		file_put_contents('../private/passwd', serialize($fichier));
		echo "OK\n";
	}
	else
		echo "ERROR\n";
?>
