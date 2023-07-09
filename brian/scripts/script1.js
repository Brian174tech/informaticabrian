var numberOfClicks = 0;
var powerOfClicks = 1;
var upgradeLevel = 0;

function countfunction(){
    numberOfClicks = numberOfClicks + powerOfClicks;
    document.getElementById("countresult").innerHTML = numberOfClicks;
    document.getElementById("powerclick").innerHTML = powerOfClicks;
    if (numberOfClicks > 1000000){
        document.getElementById("statusmessage").innerHTML = "You Won The Game";
    } else{
        document.getElementById("statusmessage").innerHTML = " ";
    }
}
function resetcountfunction(){
    numberOfClicks = 0;
    powerOfClicks = 1;
    document.getElementById("countresult").innerHTML = numberOfClicks;
    document.getElementById("powerclick").innerHTML = powerOfClicks;
}
function powerupfunction(){
    if (numberOfClicks >= 1000000){
        document.getElementById("statusmessage").innerHTML = "You already Won The Game";
    } 
    else if (numberOfClicks >= 10000){
        numberOfClicks =  numberOfClicks - 10000;
        powerOfClicks += 200;
        document.getElementById("countresult").innerHTML = numberOfClicks;
        document.getElementById("powerclick").innerHTML = powerOfClicks;
        document.getElementById("statusmessage").innerHTML = "You bought 200power for 10000 points";
    }
    else if (numberOfClicks >= 1000){
        numberOfClicks =  numberOfClicks - 1000;
        powerOfClicks += 15;
        document.getElementById("countresult").innerHTML = numberOfClicks;
        document.getElementById("powerclick").innerHTML = powerOfClicks;
        document.getElementById("statusmessage").innerHTML = "You bought 15power for 1000 points";
    }
    else if (numberOfClicks >= 100){
        numberOfClicks =  numberOfClicks - 100;
        powerOfClicks += 1;
        document.getElementById("countresult").innerHTML = numberOfClicks;
        document.getElementById("powerclick").innerHTML = powerOfClicks;
        document.getElementById("statusmessage").innerHTML = "You bought 1power for 100 points";
    }
    else{
        document.getElementById("statusmessage").innerHTML = "too little clicks to buy";
        document.getElementById("powerclick").innerHTML = powerOfClicks;
    }
    
}