VM: http://ecm1417@ml-lab-4d78f073-aa49-4f0e-bce2-31e5254052c7.ukwest.cloudapp.azure.com:65413/

Shared Navbar (navbar.php), Completed all:
•	Uses Verdana font with size 12px on a blue background
•	Home button on left 
•	Avatar, nickname, and leaderboard button showing if user is registered, Register button showing if not
•	Play pairs button on right
•	Is included in the other webpages and shared while only being stored once

Landing page (index.php), Completed all:
•	Displays the ‘play pairs’ options if the user is registered
•	Displays the ‘register’ options if the user is not registered
•	Hyperlinks included to redirect user to correct pages

Registration (registration.php), Completed all:
•	Has input field for username/nickname which uses regex to ensure there are no special characters
•	Has input fields for complex avatar creation

Game Page (pairs.php), Completed most:
•	Has a grey div with 5px box-shadow for the game to be played in
•	Displays the play game button which fades out once clicked and game fades in
•	Game plays to the medium level: has 10 cards with randomly generated emojis as the pictures to match, points are calculated based on attempted matches and time taken
•	When game is complete, the user can submit their score or play again
•	When the game is restarted, the score is reset and emojis regenerated

Leaderboard (leaderboard.php), Completed all:
•	Has a grey div with 5px box-shadow for the leaderboard to be displayed in
•	Table is formatted and ordered
•	Table headers are blue
•	Border spacing is 2px
•	Uses a csv file to store the scores and associated nicknames
•	Updates with highest score instead of creating duplicate record
