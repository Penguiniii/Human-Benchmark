<h1>Reaction Time highscore</h1>

<table>
	<tr>
		<td>Rank</td>
		<td>User</td>
		<td>Score</td>
	</tr>

	<?php
	
		$result = $dbConnection->query("SELECT username, timeTaken FROM reactions ORDER BY timeTaken DESC");
		$rank = 1;

		if($result->num_rows > 0) 
		{
			while($row = $result->fetch_assoc()) 
			{
				echo "<tr><td>{$rank}</td>
					  <td>{$row['username']}</td>
					  <td>{$row['timeTaken']}</td>";
			}

			$rank++;
		}
		else
		{
			echo "No results yet!";
		}

	?>

</table>

