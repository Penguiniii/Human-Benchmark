<?php error_reporting (E_ALL ^ E_NOTICE);

	$resultQuery = "INSERT INTO reactions (username, timeTaken)
		VALUES ('".$_GET["username"]."', '".$_GET["timeTaken"]."')";

	$dbConnection->query($resultQuery);
?>

<h2>Your result has been uploaded!</h2>

<!--Collects the name and recoreded time-->