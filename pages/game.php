<div class="container"> 
	<div class="heading"> 
	Speed Typing Test
	</div> 
	
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
    

    <div class="countWords"> 
        <div class="header_text">WordCount</div> 
        <div class="current_countWords">0</div> 
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
	
	<!--Edit please Tolu to fix it to show the total errors once game is finished and the word count-->

</div> 

<div id="paragraph">
		<span id="words"></span><br>
		<span id="errors"></span><br>
    	<input id="usernameTextfield2" type="text" name="username"> <br>
    	<button id="submit">Submit</button>
	</div>

<script src="./js/typingspeed.js"></script>



<!--Reaction time game -->

<h1>Reaction Time Test</h1>
<p>Random Shapes will apear through out the box click them to see how fast you were</p>

<div class="boxContainer">
    <div id="startButton">Start Test</div>
    <div id="box"></div>

    <div id="resultsWindow">
    	<span id="bestTimeText"></span><br>
    	<input id="usernameTextfield" type="text" name="username">
    	<div id="submitButton">Submit</div>
    </div>
</div>

<span id="progress"></span>

<script src="./js/reaction-time.js"></script>

