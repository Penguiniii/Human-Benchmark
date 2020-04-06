function getRandomColor() 
{        
    var letters = "0123456789ABCDEF".split('');
    var colors = ["#0E7AC4", "#f1c40f", "#9b59b6", "#e74c3c", "#f39c12", "#c0392b", "#2c3e50", "#59ABE3",
    "#6BB9F0", "#26A65B", "#65C6BB", "#86E2D5", "#4DAF7C", "#F5D76E", "#FDE3A7", "#F9BF3B",
    "#FDE3A7", "#F4D03F", "#EB9532", "#F2784B", "#F5AB35", "#F9BF3B", "#ABB7B7"];
    for (var i = 0; i < 6; i++) {
        color += letters[Math.round(Math.random() * 20)];
    } 
    return color; 
} 

var recordedTimes = {};

var clickedTime, createdTime; 
var bestTime = 0;
var progressText = document.getElementById("progress");
var boxElement = document.getElementById("box");

function makeBox() 
{
    var time = Math.random() * 3000;

    console.log("Box event setup.")
    
    setTimeout(function() {

        console.log("Box is appearing!");
            
        var left = (Math.random() * 600) - 300; 
        var top = (Math.random() * 500);
            
        boxElement.style.top = top + "px";
        boxElement.style.left = left + "px"; 
    
        boxElement.style.backgroundColor = getRandomColor();
    
        boxElement.style.display="block";

        createdTime = Date.now();

        boxElement.onclick = function(){
            recordResult();
        };
    
        
    }, time);
}

function recordResult()
{
    boxElement.style.display = "none";

    var timeTaken = (Date.now() - createdTime) / 1000;

    console.log("Box has been clicked! It was clicked in " + timeTaken + "ms.");

    if (timeTaken < bestTime || bestTime === 0)
    {
        bestTime = timeTaken;
        progressText.textContent = "Best Time: " + bestTime + "ms";
    }
    
    var timeTaken = new recodedTimes[1,2,3,4,5];

    if(recordedTimes.length === 5) {
        recordResult();
    
    } else {
    
        makeBox();
    }

}

