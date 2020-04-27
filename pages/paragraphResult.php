<?php error_reporting (E_ALL ^ E_NOTICE);
	$result2Query = "INSERT INTO typingspeed (username, errors)
		VALUES ('".$_GET["username"]."', '".$_GET["errors"]."')";

	$dbConnection->query($result2Query);
?>

<h2>Your result has been uploaded!</h2>

<!--Collects the name, words typed and errors made -->