<h1>Speed typer highscore</h1>

<table>
	<tr>
		<td>Rank</td>
		<td>User</td>
		<td>Errors</td>
	</tr>

	<?php
	
		$result2 = $dbConnection->query("SELECT username, errors FROM typingspeed ORDER BY  errors ASC");
		$rank = 1;

		if(!empty($result2) && $result2->num_rows > 0)
		{
			while($row = $result2->fetch_assoc()) 
			{
				echo "<tr><td>{$rank}</td>
					  <td>{$row['username']}</td>
					  <td>{$row['errors']}</td>";
				$rank++;
			}


		}
		else
		{
			echo "No results yet!";
		}

	?>

</table>


<h1>Reaction Time highscore</h1>

<table>
	<tr>
		<td>Rank</td>
		<td>User</td>
		<td>Score</td>
	</tr>

	<?php
	
		$result = $dbConnection->query("SELECT username, timeTaken FROM reactions ORDER BY timeTaken ASC");
		$rank = 1;

		if(!empty($result) && $result->num_rows > 0)
		{
			while($row = $result->fetch_assoc()) 
			{
				echo "<tr><td>{$rank}</td>
					  <td>{$row['username']}</td>
					  <td>{$row['timeTaken']}</td>";
				$rank++;
			}


		}
		else
		{
			echo "No results yet!";
		}

	?>

</table>

