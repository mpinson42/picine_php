<?php
	//if($_SESSION)
		session_start();
	if($_GET['submit'] && $_GET['submit'] == "OK")
	{
		$_SESSION['login'] = $_GET['login'];
		$_SESSION['passwd'] = $_GET['passwd'];
	}
 ?>



 <!DOCTYPE html>
<html>
<head>
	<title>oui</title>
</head>
<body>
	<form method="get" action="index.php">
		Identifiant: <input type="text" name="login" value="<?php echo $_SESSION['login'] ?>">
		Mot de passe: <input type="text" name="passwd" value="<?php echo $_SESSION['passwd'] ?>">
		<input type="submit" name="submit" value="OK">
	</form>	
</body>
</html>
