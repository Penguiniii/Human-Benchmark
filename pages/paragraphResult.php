<?php error_reporting (E_ALL ^ E_NOTICE);

	$resultQuery = "INSERT INTO typingspeed (username, WordCount, Errors)
		VALUES ('".$_GET["username"]."', '".$_GET["WordCount"]."', '".$_GET["total_errors"]."')";

	$dbConnection->query($resultQuery);
?>

<h2>Your result has been uploaded!</h2>

<!--Collects the name, words typed and errors made-->