<?php
	switch ($_SERVER["SCRIPT_NAME"]) {
		case "/php-template/about.php":
			$CURRENT_PAGE = "Scoreboard"; 
			$PAGE_TITLE = "highscore1";
			break;
		case "/php-template/contact.php":
			$CURRENT_PAGE = "Scoreboard"; 
			$PAGE_TITLE = "highscore2";
			break;
		default:
			$CURRENT_PAGE = "Index";
			$PAGE_TITLE = "Typing Speed!";
	}
?>