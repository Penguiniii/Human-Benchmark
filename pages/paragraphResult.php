<?php error_reporting (E_ALL ^ E_NOTICE);

	$resultQuery = "INSERT INTO typingspeed (username, word_count, errors)
		VALUES ('".$_GET["username"]."', '".$_GET["word_count"]."', '".$_GET["errors"]."')";

	$dbConnection->query($resultQuery);
?>

<h2>Your result has been uploaded!</h2>

<!--Collects the name, words typed and errors made-->