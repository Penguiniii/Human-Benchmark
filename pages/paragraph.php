<div class="container"> 
	<div class="heading"> 
	Speed Typing Test
	</div> 
	
	<div class="header"> 
<!----------------------Accuracy and Errors work together----------------------------->

		<div class="accuracy"> 
        <div class="header_text">% Accuracy</div> 
        <div class="current_accuracy">100</div> 
      </div> 
	 
	  <div class="countWords"> 
        <div class="header_text">WordCount</div> 
        <div id="display_count">0</div> 
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
	<textarea id="word_count" class="whiteArea" placeholder="Start..." name="intputString" oninput="processCurrentText()" onfocus="startGame()"> 
	</textarea> 
	

</div> 

<div id="paragraph">
		<lable>Words typed</lable>
		<span id="words_counted"></span><br>
		<span id="errors_counted"></span><br>
    	<input id="usernameTextfield2" type="text" name="username"> <br>
    	<button id="submit">Submit</button>
	</div>

<script src="./js/typingspeed.js"></script>




