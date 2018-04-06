<?php
	session_start();?>
<!DOCTYPE html>
<html>
<head>
	<script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
	<meta charset="UTF-8">
  	<meta name="description" content="e-comerce">
  	<meta name="keywords" content="HTML,CSS,php">
  	<meta name="author" content="mpinson">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>magixisland.com</title>
</head>
<body>
	<div class="top_param">
		<a href="../index.php"><h1>magixisland.com</h1></a>

		<div class=contenu_param>
			<?php include_once "../phpfiles/init.php";
			include_once "../phpfiles/db_communication.php";
			$db = get_database();
			?>
			<p> votre adresse de livraison est : <p>
				<?php
					foreach($db["users"] as $id=>$user)
					{
						if ($user["username"] === $_SESSION['logged_on_user'])
						{
							echo $user["address"]."\n";
						}
					}
				?>
			<p> set adresse de livraison
			<form method="post" action="../phpfiles/set_address.php">
			<input type="hidden" name="login" value=<?php echo("'" . $_SESSION['logged_on_user'] . "'") ?>>
			<input type="text" name="address">
			<input type="submit" name="submit" value="OK"><p>
			</form>
			<hr/>
			reset votre mots de passe
				<form method="post" action="../phpfiles/reset_password.php">
				<input type="hidden" name="login" value=<?php echo("'" . $_SESSION['logged_on_user'] . "'") ?>>
				Nouveau mot de passe: <input type="text" name="passwd">
				<input type="submit" name="submit" value="OK"><p>
				</form>
			<hr/>

			<?php
					if ($_SESSION['logged_on_user'])
					{?>
						<form method="post" action="../phpfiles/self_destruct.php">
						<input type="hidden" name="name" value=<?php echo("'" . $_SESSION['logged_on_user'] . "'") ?>>
						Delete your account <input type="submit" name="submit" value="Delete">
						</form>
						<?php
					}
			?>
		</div>
	</div>
</body>
</html>
