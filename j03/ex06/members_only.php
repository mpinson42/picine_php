<?php
	if (!$_SERVER['PHP_AUTH_USER']) {
    header('WWW-Authenticate: Basic realm="My Realm"');
    header('HTTP/1.0 401 Unauthorized');
    echo '<html><body>Cette zone est accessible uniquement aux membres du site</body></html>';
    exit;
} else {
    if($_SERVER['PHP_AUTH_USER'] != "zaz" || $_SERVER['PHP_AUTH_PW'] != "jaimelespetitsponeys")
	{
		header('WWW-Authenticate: Basic realm="My Realm"');
    	header('HTTP/1.0 401 Unauthorized');
		echo "<html><body>Cette zone est accessible uniquement aux membres du site</body></html>";
	}
	else {
		$oui = file_get_contents("../img/42.png");
		$oui = base64_encode($oui);
		echo ("<html><body>\nBonjour Zaz<br />\n<img src='data:image/png;base64,".$oui."'>\n</body></html>\n");
	}
}
?>