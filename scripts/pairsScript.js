function flipCard() {
    if(!allowFlip){
        return;
    }
    this.classList.add('flip');                 //adds the css 'flip' to the card which is clicked

    if (!cardFlipped) {
        cardFlipped = true;
        firstCard = this;
    }else if(this === firstCard){
        return;
    }else{
        allowFlip = false;
        secondCard = this;
        cardFlipped = false;
        ++numberOfAttempts;
        matchCards();
    }
}

function matchCards(){
    if(firstCard.dataset.cardnumber === secondCard.dataset.cardnumber){
        ++numberOfMatches;
        disableCards();
        checkComplete();
    }else{
        unflipCards();
    }
}

function disableCards(){
    firstCard.removeEventListener('click', flipCard);
    secondCard.removeEventListener('click', flipCard);
    boardReset();
}

function unflipCards(){
    allowFlip = false;

    setTimeout(() => {
        firstCard.classList.remove('flip');
        secondCard.classList.remove('flip');
        boardReset();
    }, 750);
}

function boardReset(){
    firstCard = null;
    secondCard = null;
    allowFlip = true;
    cardFlipped = false;
}

function checkComplete(){
    if (numberOfMatches == 5){
        gameComplete();
    }
}

function timeCheck(){
    let endTime = Date.now();
    let timeTaken_ms = endTime - startTime;
    let timeTaken_s = timeTaken_ms / 1000;
    return (timeTaken_s);
}

function calcScore(){                   //calculates a score based upon time taken and the number of attempted matches
    let score = 0;
    score = 500 - (numberOfAttempts * timeTaken)
    score = Math.round(score);
    return(score);
}

function reset(){
    boardReset();
    numberOfAttempts = 0;
    numberOfMatches = 0;
    startTime = Date.now();

    cards.forEach(card => {
        let ramdomPos = Math.floor(Math.random() * 10);         //shuffles the cards into a random order
        card.style.order = ramdomPos;
        card.classList.remove('flip');
        card.addEventListener('click', flipCard);               //adds the event listener allowing the user to flip each card
    });

    $("#gameDiv").fadeIn(600);
    $("#gameDone").fadeOut(100);
}

function gameComplete(){
    $("#gameDiv").fadeOut(600);
    $("#showGameButton").fadeOut(100);
    $("#gameDone").fadeIn(600);                     //uses jQuery to fade the game out and fade the post-game options in
    timeTaken = timeCheck();
    let score = calcScore();
    if (score < 0){
        document.getElementById("scoreDisplay").innerHTML = "Your Score Was Negative (" + score + "). Sorry but you cannot submit it.";
        document.getElementById("saveScoreButton").style.display = "none";
    }else{
        document.getElementById("hiddenScore").value = score;
        document.getElementById("scoreDisplay").innerHTML = "Your Score Was: " + score;
    }
    
    
}



function chooseFace(card1,card2){
    var Faces = new Array("assets/avatars/faces/black1.png","assets/avatars/faces/black2.png","assets/avatars/faces/olive1.png", "assets/avatars/faces/olive2.png", "assets/avatars/faces/white1.png", "assets/avatars/faces/white2.png");
    var randomNum = Math.floor(Math.random() * Faces.length);
    document.getElementById(card1).src = Faces[randomNum];
    document.getElementById(card2).src = Faces[randomNum];
}

function chooseHair(card1, card2){
    var Hairs = new Array("assets/avatars/hair/black1.png", "assets/avatars/hair/black2.png", "assets/avatars/hair/blonde1.png", "assets/avatars/hair/blonde2.png", "assets/avatars/hair/brown1.png", "assets/avatars/hair/brown2.png", "assets/avatars/hair/ginger1.png", "assets/avatars/hair/ginger2.png");
    var randomNum = Math.floor(Math.random() * Hairs.length);
    document.getElementById(card1).src = Hairs[randomNum];
    document.getElementById(card2).src = Hairs[randomNum];
}

function chooseShirt(card1, card2){
    var Shirts = new Array("assets/avatars/shirts/blue.png", "assets/avatars/shirts/green.png", "assets/avatars/shirts/pink.png", "assets/avatars/shirts/red.png");
    var randomNum = Math.floor(Math.random() * Shirts.length);
    document.getElementById(card1).src = Shirts[randomNum];
    document.getElementById(card2).src = Shirts[randomNum];
}


window.onload = chooseFace("card1Face", "card2Face");
window.onload = chooseHair("card1Hair", "card2Hair");
window.onload = chooseShirt("card1Shirt", "card2Shirt");

window.onload = chooseFace("card3Face", "card4Face");
window.onload = chooseHair("card3Hair", "card4Hair");
window.onload = chooseShirt("card3Shirt", "card4Shirt");

window.onload = chooseFace("card5Face", "card6Face");
window.onload = chooseHair("card5Hair", "card6Hair");
window.onload = chooseShirt("card5Shirt", "card6Shirt");

window.onload = chooseFace("card7Face", "card8Face");
window.onload = chooseHair("card7Hair", "card8Hair");
window.onload = chooseShirt("card7Shirt", "card8Shirt");

window.onload = chooseFace("card9Face", "card10Face");
window.onload = chooseHair("card9Hair", "card10Hair");
window.onload = chooseShirt("card9Shirt", "card10Shirt");                   //creates random pictures for each card pair



let cardFlipped = false;
let allowFlip = true;
let firstCard, secondCard;
let numberOfAttempts = 0;
let numberOfMatches = 0;
let startTime = Date.now();

const cards = document.querySelectorAll('.game-card');

cards.forEach(card => {
    let ramdomPos = Math.floor(Math.random() * 10);         //shuffles the cards into a random order
    card.style.order = ramdomPos;
    card.addEventListener('click', flipCard);               //adds the event listener allowing the user to flip each card
});



$(document).ready(function() {
    $("#showGameButton").click(function () {
        $("#gameDiv").fadeIn(600);
        $("#showGameButton").fadeOut(100);
        setTimeout(() => {
            $('#showGameButtonDiv').css('margin-top', '3px');
        }, 100);
    });
});

const resetButton = document.querySelector('#restartGameButton')
resetButton.addEventListener('click', reset);