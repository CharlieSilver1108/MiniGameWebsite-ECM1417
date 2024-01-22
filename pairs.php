<!-- This is the main page which contains the pairs memory game -->

<!Doctype HTML>
<html lang="en">
    <?php include "navbar.php" ?>
    

    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        .start-btn{
            text-align: left !important;
            width: 100px;
            display: inline-block;
            margin:5px;
            font-weight: bold;
            padding: 10px 0 10px 10px ;
            background-color: lightgray;
            text-shadow: -1px -1px black, 1px 1px white;
            color: gray;
            -webkit-border-radius: 7px;
            -moz-border-radius: 7px;
            -o-border-radius: 7px;
            border-radius: 7px;
            box-shadow: 0 .2em gray;
            cursor: pointer;
        }

        .start-btn:active {
            box-shadow: none;
            position: relative;
            top: .2em;
        }

        .game {
            width: auto;
            height: auto;
            margin: auto;
            display: flex;
            flex-wrap: wrap;
            perspective: 1000px;
            padding-top: 20px;
            padding-left: calc(10% - 25px);
        }

        .game-card {
            width: 200px;
            height: 200px;
            margin: 5px;
            position: relative;
            box-shadow: 1px 1px 0 rgba(0, 0, 0, .3);
            transform: scale(1);
            transform-style: preserve-3d;
            transition: transform .5s;
        }

        .game-card:active {
            transform: scale(0.97);
            transition: transform .2s;
        }

        .game-card.flip {
            transform: rotateY(180deg);
        }

        .card-front, .card-back {
            height: auto;
            padding: 10px;
            position: absolute;
            border-radius: 5px;
            backface-visibility: hidden;
        }

        .card-front {
            width: 93%;
            background-color: #0880dd;
            transform: rotateY(180deg);
        }

        .card-back {
            width: 100%;
            background-color: #0275d8 /*this is the code for bootstrap 'primary'*/;
        }


        .container {                           /*allows pictures to stack for avatars*/
            position: relative;
            top: 0;
            left: 0;
            width: 100%;
        }
        .imageBG {                   /*allows pictures to stack for avatars*/
            position: relative;
            top: 0;
            left: 6px;
            width: 93%;
        }
        .imageOthers {
            position: absolute;
            top: 22px;
            left: 32px;
            width: 70% !important;
        }
    </style>


    <head>
        <title>Pairs</title>
    </head>
    
    <body style="overflow: hidden !important;">
        <div class="text-center" style="margin-top: 175px;" id="showGameButtonDiv">
            <span class="start-btn" type="button" id="showGameButton" value="Start Game">Start Game</span>
        </div>

        <div style="display: none; background-color: #808080; margin: 30px; border-radius: 5px; box-shadow: 5px 5px;" id="gameDiv">

            <section class="game">
                <div class="game-card" data-cardnumber="card1">
                    <div class="container card-front">
                        <img class="imageBG rounded-circle" src="assets/avatars/bg.png" />
                        <img class="imageOthers" src="#" id="card1Face"/>
                        <img class="imageOthers" src="#" id="card1Hair"/>
                        <img class="imageOthers" src="#" id="card1Shirt"/>
                    </div>
                    <img class="card-back imageOthers" style="width: 100% !important; top: 0px !important; left: 0px !important;" src="assets/cards/card-back-transparent.png" alt="Game Card">
                </div>

                <div class="game-card " data-cardnumber="card1">
                    <div class="container card-front">
                        <img class="imageBG rounded-circle" src="assets/avatars/bg.png" />
                        <img class="imageOthers" src="#" id="card2Face"/>
                        <img class="imageOthers" src="#" id="card2Hair"/>
                        <img class="imageOthers" src="#" id="card2Shirt"/>
                    </div>
                    <img class="card-back imageOthers" style="width: 100% !important; top: 0px !important; left: 0px !important;" src="assets/cards/card-back-transparent.png" alt="Game Card">
                </div>

                <div class="game-card" data-cardnumber="card2">
                    <div class="container card-front">
                        <img class="imageBG rounded-circle" src="assets/avatars/bg.png" />
                        <img class="imageOthers" src="#" id="card3Face"/>
                        <img class="imageOthers" src="#" id="card3Hair"/>
                        <img class="imageOthers" src="#" id="card3Shirt"/>
                    </div>
                    <img class="card-back imageOthers" style="width: 100% !important; top: 0px !important; left: 0px !important;" src="assets/cards/card-back-transparent.png" alt="Game Card">
                </div>

                <div class="game-card" data-cardnumber="card2">
                    <div class="container card-front">
                        <img class="imageBG rounded-circle" src="assets/avatars/bg.png" />
                        <img class="imageOthers" src="#" id="card4Face"/>
                        <img class="imageOthers" src="#" id="card4Hair"/>
                        <img class="imageOthers" src="#" id="card4Shirt"/>
                    </div>
                    <img class="card-back imageOthers" style="width: 100% !important; top: 0px !important; left: 0px !important;" src="assets/cards/card-back-transparent.png" alt="Game Card">
                </div>

                <div class="game-card" data-cardnumber="card3">
                    <div class="container card-front">
                        <img class="imageBG rounded-circle" src="assets/avatars/bg.png" />
                        <img class="imageOthers" src="#" id="card5Face"/>
                        <img class="imageOthers" src="#" id="card5Hair"/>
                        <img class="imageOthers" src="#" id="card5Shirt"/>
                    </div>
                    <img class="card-back imageOthers" style="width: 100% !important; top: 0px !important; left: 0px !important;" src="assets/cards/card-back-transparent.png" alt="Game Card">
                </div>

                <div class="game-card" data-cardnumber="card3">
                    <div class="container card-front">
                        <img class="imageBG rounded-circle" src="assets/avatars/bg.png" />
                        <img class="imageOthers" src="#" id="card6Face"/>
                        <img class="imageOthers" src="#" id="card6Hair"/>
                        <img class="imageOthers" src="#" id="card6Shirt"/>
                    </div>
                    <img class="card-back imageOthers" style="width: 100% !important; top: 0px !important; left: 0px !important;" src="assets/cards/card-back-transparent.png" alt="Game Card">
                </div>
            
                <div class="game-card" data-cardnumber="card4">
                    <div class="container card-front">
                        <img class="imageBG rounded-circle" src="assets/avatars/bg.png" />
                        <img class="imageOthers" src="#" id="card7Face"/>
                        <img class="imageOthers" src="#" id="card7Hair"/>
                        <img class="imageOthers" src="#" id="card7Shirt"/>
                    </div>
                    <img class="card-back imageOthers" style="width: 100% !important; top: 0px !important; left: 0px !important;" src="assets/cards/card-back-transparent.png" alt="Game Card">
                </div>

                <div class="game-card" data-cardnumber="card4">
                    <div class="container card-front">
                        <img class="imageBG rounded-circle" src="assets/avatars/bg.png" />
                        <img class="imageOthers" src="#" id="card8Face"/>
                        <img class="imageOthers" src="#" id="card8Hair"/>
                        <img class="imageOthers" src="#" id="card8Shirt"/>
                    </div>
                    <img class="card-back imageOthers" style="width: 100% !important; top: 0px !important; left: 0px !important;" src="assets/cards/card-back-transparent.png" alt="Game Card">
                </div>
            
                <div class="game-card" data-cardnumber="card5">
                    <div class="container card-front">
                        <img class="imageBG rounded-circle" src="assets/avatars/bg.png" />
                        <img class="imageOthers" src="#" id="card9Face"/>
                        <img class="imageOthers" src="#" id="card9Hair"/>
                        <img class="imageOthers" src="#" id="card9Shirt"/>
                    </div>
                    <img class="card-back imageOthers" style="width: 100% !important; top: 0px !important; left: 0px !important;" src="assets/cards/card-back-transparent.png" alt="Game Card">
                </div>

                <div class="game-card" data-cardnumber="card5">
                    <div class="container card-front">
                        <img class="imageBG rounded-circle" src="assets/avatars/bg.png" />
                        <img class="imageOthers" src="#" id="card10Face"/>
                        <img class="imageOthers" src="#" id="card10Hair"/>
                        <img class="imageOthers" src="#" id="card10Shirt"/>
                    </div>
                    <img class="card-back imageOthers" style="width: 100% !important; top: 0px !important; left: 0px !important;" src="assets/cards/card-back-transparent.png" alt="Game Card">
                </div>
            </section>
        </div>

        <div id="gameDone" class="text-center" style="display: none; background-color: #A0A0A0; margin-left: 200px; margin-right: 200px; margin-top: 30px; border-radius: 5px; box-shadow: 5px 5px;">
            <p id="scoreDisplay" style="padding-top: 5px;"></p>
            <input class="btn btn-primary" style="margin: 10px;" type="button" id="restartGameButton" value="Restart Game" />
            <form method="post" action="submitScore.php">
                <input class="btn btn-primary" style="margin: 10px;" type="submit" id="saveScoreButton" value="Submit Score" />
                <input type="hidden" name="score" id="hiddenScore" />
            </form>
        </div>

    </body>


    <script type="text/javascript" src="./scripts/pairsScript.js?2"></script>

</body>
</html>