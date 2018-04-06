<?php
	if($_POST['submit'] && $_POST['submit'] == "OK" && $_POST['login'] && $_POST['oldpw'] && $_POST['newpw'])
	{
		if(!file_exists ("../private"))
		{

			mkdir("../private");
		}

		$fichier = [];
		$i = 0;
		$arr = [];
		$arr['login'] = $_POST['login']; 
		$arr['passwd'] = hash("whirlpool", $_POST['newpw']);  

		if(file_exists ("../private/passwd"))
		{
			$fichier = file_get_contents("../private/passwd");
			$fichier = unserialize($fichier);

			foreach ($fichier as $key) {
				if($key['login'] == $_POST['login'])
				{
					if($key['passwd'] == hash("whirlpool", $_POST['oldpw']))
					{
						$fichier[$i] = $arr;
						file_put_contents('../private/passwd', serialize($fichier));
						echo "OK\n";
						return true;
					}
					else
					{
						echo "ERROR\n";
						return false;
					}
				}
				$i++;
			}
			echo "ERROR\n";
		}
	}
	else
		echo "ERROR\n";
?>
