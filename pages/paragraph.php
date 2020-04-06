<div class="container"> 
	<div class="heading"> 
	Speed Typing Test
	</div> 
	<img src="./images/keyboard1.jpg" alt="images" class="keyboard">
	
	<div class="header"> 
	
<!----------------------CC, WC, Accuracy and Errors work together----------------------------->
<!--Character Count-->		
	<div class="cc"> 
		<div class="header_text">CC</div> 
		<div class="current_cc">100</div> 
	</div>

	<!--Word Count-->
	<div class="wc"> 
		<div class="header_text">WC</div> 
		<div class="current_wc">100</div> 
	</div> 
	
		<div class="accuracy"> 
        <div class="header_text">% Accuracy</div> 
        <div class="current_accuracy">100</div> 
      </div> 
	 
	<div class="errors"> 
		<div class="header_text">Errors</div> 
		<div class="current_errors">0</div> 
	</div> 
<!------------------------------------------------------------------------------------------------->
	
	<div class="timer"> 
		<div class="header_text">Time</div> 
		<div class="current_time">150s</div> 
	</div> 
	
	</div> 

	<div class="quote"> 
	 Click on the white area to start the game. 
	</div> 
	<textarea class="whiteArea" placeholder="Start..." oninput="processCurrentText()" onfocus="startGame()"> 
	</textarea> 
	
	<button class="restart_btn"
	onclick="resetValues()"> 
	Restart 
	</button> 	
</div> 


<script src="./js/TypingSpeedGame.js"></script> 