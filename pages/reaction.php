<h1>Reaction Time Test</h1>
<p>Random Shapes will apear through out the screen click them to see how fast you were</p>

<div class="boxContainer">
    <div id="startButton">Start Test</div>
    <div id="box"></div>
</div>

<span id="progress"></span>

<script src="./js/reaction-time.js"></script>

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