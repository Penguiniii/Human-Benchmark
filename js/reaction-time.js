console.log("js found, Starting application");

function getRandomColor() 
{
    let letters = "0123456789ABCDEF".split('');
    let color = ["#0E7AC4", "#f1c40f", "#9b59b6", "#e74c3c", "#f39c12", "#c0392b", "#2c3e50", "#59ABE3",
    "#6BB9F0", "#26A65B", "#65C6BB", "#86E2D5", "#4DAF7C", "#F5D76E", "#FDE3A7", "#F9BF3B",
    "#FDE3A7", "#F4D03F", "#EB9532", "#F2784B", "#F5AB35", "#F9BF3B", "#ABB7B7"];
    for (let i = 0; i < 6; i++) {
        color += letters[Math.round(Math.random() * 20)];
    } 
    return color; 
} 

let bestTime = 0;
let clickedTime, createdTime;
let recordedTimes = [];
let boxElement = document.getElementById("box");
let progressText = document.getElementById("progress");

document.getElementById("startButton").onclick = function()
{
    this.style.display = 'none';
    makeBox();
}

function makeBox() 
{
    let time = Math.random() * 3000;

    console.log("Box event setup.")

    setTimeout(function() {

        console.log("Box is appearing!");

        let left = (Math.random() * 600) - 300; 
        let top = (Math.random() * 500);

        boxElement.style.top = top + "px";
        boxElement.style.left = left + "px"; 

        boxElement.style.backgroundColor = getRandomColor();

        boxElement.style.display="block";

        createdTime = Date.now();

        boxElement.onclick = function(){
            let timeTaken = (Date.now() - createdTime) / 1000;
            console.log("Box has been clicked! It was clicked in " + timeTaken + "ms.");
            recordResult(timeTaken);
            boxElement.style.display = "none";
        };

    }, time);
}

function recordResult(result)
{
    recordedTimes.push(result);

    if (result < bestTime || bestTime === 0)
    {
        bestTime = result;
        progressText.textContent = "Best Time: " + bestTime + "ms";
    }

    console.log('Current results (' + recordedTimes.length + '): ' + recordedTimes);

    if(recordedTimes.length < 5)
    {
        setTimeout(makebox()
        , time);
    }
    else 
    {
        // Submit to database.
        console.log('You have played your five games. Leave.')
    }
}

makeBox();

