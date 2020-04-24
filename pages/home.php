<h1>Speed typer highscore</h1>

<table>
	<tr>
		<td>Rank</td>
		<td>User</td>
		<td>Words</td>
		<td>Errors</td>
	</tr>

	<?php
	
		$result = $dbConnection->query("SELECT username, WordCount, Errors FROM typingspeed ORDER BY WordCount, Errors ASC");
		$rank = 1;

		if(!empty($result) && $result->num_rows > 0)
		{
			while($row = $result->fetch_assoc()) 
			{
				echo "<tr><td>{$rank}</td>
					  <td>{$row['username']}</td>
					  <td>{$row['WordCount']}</td>
					  <td>{$row['Errors']}</td>";
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

