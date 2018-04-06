<?php
	function auth($login, $passwd) {
		if(file_exists ("../private/passwd"))
		{
			$fichier = file_get_contents("../private/passwd");
			$fichier = unserialize($fichier);

			foreach ($fichier as $key) {
				if($key['login'] == $login)
				{
					if($key['passwd'] == hash("whirlpool", $passwd))
					{
						
						return true;
						break ;
					}
					else
					{
						return false;
					}
				}
				$i++;
			}
			return false;
		}
	}
?>