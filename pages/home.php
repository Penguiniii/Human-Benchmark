<h1>Speed Typing highscore</h1>
<span>WIP. Create leaderboard table.</span>

<table>
	<tr>
		<td>Rank</td>
		<td>User</td>
		<td>Score</td>
	</tr>


	<?php
	
	$result = mysql_query("SELECT use, score FROM leaderboard ORDER BY score DESC");
	$rank = 1;

		if(mysql_num_rows($relust)) {
			while($row = mysql_fetch_assoc($result)) {
				echo "<td>{$rank}</td>
					  <td>{$row['user']}</td>
					  <td>{$row['score']}</td>"

				$rank++;
			}
		}

?>

</table>

