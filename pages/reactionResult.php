<?php
	$resultQuery = "INSERT INTO reactions (username, timeTaken)
		VALUES ('".$_GET["username"]."', '".$_GET["timeTaken"]."')";

	$dbConnection->query($resultQuery);
?>

<h2>Your result has been uploaded!</h2>