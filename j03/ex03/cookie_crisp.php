<?php
	if(!$_GET['action'] || !$_GET['name'])
		return(0);
	if($_GET['action'] == 'set')
	{
		if (!$_GET['value'])
			return(0);
		setcookie($_GET['name'], $_GET['value']);
	}
	elseif ($_GET['action'] == 'get') {

		if(!$_COOKIE[$_GET['name']])
			return (0);
		echo $_COOKIE[$_GET['name']] . "\n";
	}
	elseif ($_GET['action'] == 'del') {
		setcookie($_GET['name'], "", time());
	}
?>