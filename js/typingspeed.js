console.log("Speed typer found");

//timer for 150 seconds
let TIME_LIMIT = 5; 

//paragraphs to type out
let quotes_array = [ 
"The European continent is located completely in the northern hemisphere and mainly in the eastern hemisphere. Europe borders onto the Arctic Ocean in the North, the Atlantic Ocean in the west and the Mediterranean Sea in the South.",  
"There are 50 countries in Europe with a total of more than 742 million people living on the continent. Of these 50 countries only 44 have their capital city on the European continent!", 
"Largest country: The European part of Russia covers more area than any other country.",
"Your time is limited, so don't waste it living someone else's life. Don't be trapped by dogma – which is living with the results of other people's thinking."
]; 

//required elements being selected by querySelector- returns the first element that matches a specified CSS selector in the document
let timer_text = document.querySelector(".current_time"); 
let accuracy_text = document.querySelector(".current_accuracy");
let error_text = document.querySelector(".current_errors"); 
let quote_text = document.querySelector(".quote");
 
let whiteArea = document.querySelector(".whiteArea"); 


let error_group = document.querySelector(".errors"); 
let accuracy_group = document.querySelector(".accuracy");
let textarea = document.getElementById("textarea");


let timeLeft = TIME_LIMIT; 
let timeElapsed = 0; 
let total_errors = 0; 
let errors = 0; 
let accuracy = 0;
let characterTyped = 0; 
let current_quote = ""; 
let quoteNo = 0; 
let timer = null;
let recordedTimes2 = [];


//Results window

let submit = document.getElementById("submit");
let paragraph = document.getElementById("paragraph");
let countederrors = document.getElementById("errors");
let words_counted = document.getElementById("words_counted");
let usernameTextfield2 = document.getElementById("usernameTextfield2");

paragraph.style.display = "none";


//////////////////////////////////////////////////////////////////////////////////////////////////

function updateQuote() { 
quote_text.textContent = null; 
current_quote = quotes_array[quoteNo]; 

// separate each character and make an element 
// out of each of them to individually style them
current_quote.split('').forEach(char => { 
	const charSpan = document.createElement('span') 
	charSpan.innerText = char 
	quote_text.appendChild(charSpan) 
}) 

// roll over to the first quote 
if (quoteNo < quotes_array.length - 1) 
	quoteNo++; 
else
	quoteNo = 0; 
} 


//////////////////////////////////////////////////////////////////////////////////////////////////////


function processCurrentText() { 

// get current input text and split it 
current_input = whiteArea.value; 
current_input_array = current_input.split(''); 

// increment total characters typed 
characterTyped++; 

errors = 0; 

quoteSpanArray = quote_text.querySelectorAll('span'); 
quoteSpanArray.forEach((char, index) => { 
	let typedChar = current_input_array[index] 

	// character not currently typed 
	if (typedChar == null) { 
	char.classList.remove('correct_char'); 
	char.classList.remove('incorrect_char'); 

	// correct character 
	} else if (typedChar === char.innerText) { 
	char.classList.add('correct_char'); 
	char.classList.remove('incorrect_char'); 

	// incorrect character 
	} else { 
	char.classList.add('incorrect_char'); 
	char.classList.remove('correct_char'); 

	// increment number of errors 
	errors++; 
	} 
	
}); 

// display the number of errors 
error_text.textContent = total_errors + errors; 

// update accuracy text 
let correctCharacters = (characterTyped - (total_errors + errors)); 
let accuracyVal = ((correctCharacters / characterTyped) * 100); 
accuracy_text.textContent = Math.round(accuracyVal); 

// if current text is completely typed 
// irrespective of errors 
if (current_input.length == current_quote.length) { 
	updateQuote(); 

	// update total errors 
	total_errors += errors; 

	// clear the white area 
	whiteArea.value = ""; 
} 
} 

////////////////////////////////////////////////////////////////////////////////////////////////////////////

function startGame() { 

resetValues(); 
updateQuote(); 

// clear old and start a new timer 
clearInterval(timer); 
timer = setInterval(updateTimer, 1000); 
} 

function resetValues() { 
timeLeft = TIME_LIMIT; 
timeElapsed = 0; 
errors = 0; 
total_errors = 0; 
accuracy = 0; 
characterTyped = 0; 
quoteNo = 0; 
whiteArea.disabled = false; 
whiteArea.value = ""; 
quote_text.textContent = 'Click on the area below to start the game.'; 
accuracy_text.textContent = 100; 
timer_text.textContent = timeLeft + 's'; 
error_text.textContent = 0;  

} 



///////////////////////////////////////////////////////////////////////////////////////////////////


function updateTimer() { 
if (timeLeft > 0) { 
	//countdown- decrease time left
	timeLeft--; 

	// increase time elapsed 
	timeElapsed++; 

	// update timer text 
	timer_text.textContent = timeLeft + "s"; 
} 
else { 
	// finish the game 
	finishGame(); 

}
}

//////////////////////////////////////////////////////////////////////////////////////////////////////

counter = function() {

	var value = $('#word_count').val();


    if (value.length == 0) {
        $('#display_count').html(0);

        return;
    }

    var regex = /\s+/gi;
    var wordCount = value.trim().replace(regex, ' ').split(' ').length;
	

	$('#display_count').html(wordCount);
	$('#words_counted').html(wordCount);
};

$(document).ready(function() {
    $('#word_count').keyup(counter);

});

////////////////////////////////////////////////////////////////////////////////////////////////////


function finishGame() { 
// stop the timer 
clearInterval(timer); 

// disable the white area 
whiteArea.disabled = true; 

// show finishing text 
quote_text.textContent = "Click Submit to upload your score."; 

recordResult2();
console.log('game has finished ~> ' );
console.log("game has finished ~> " + errors + " errors");
} 

//////////////////////////////////////////////////////////////////////////////////////////////////////

function recordResult2(result2) {
	
	recordedTimes2.push(result2);


	if(result2 < errors || errors === 0) {
		
	result2 = errors;
	}
    console.log('Current results (' + recordedTimes2.length + '): ' + recordedTimes2);



	if(TIME_LIMIT.length < 0) {

		startGame();

	} else {

		showResults2(errors);
	}
}

//////////////////////////////////////////////////////////////////////////////////////////////////////

function showResults2(most, best) {

	paragraph.style.display = "block";
	errors_counted.textContent = 'Errors made ' + most;
	
    submit.onclick = function(){
        console.log("Button clicked!");
        if(usernameTextfield2.value !== "") {
            console.log("Text detected!");
            window.location = "?page=paragraphResult&username="+usernameTextfield2.value + "&errors=" + most;
        }
	};
}




