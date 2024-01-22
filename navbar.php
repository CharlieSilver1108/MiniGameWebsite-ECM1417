<!-- This navbar is php included into every other page and holds the common headers for all the pages --> 



<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
</head>

<?php
session_start();    #This is an authorisation check
if (empty($_COOKIE['username'])){ #If the user has signed then $_SESSION['username'] will be set to their username
    $_SESSION['username'] = NULL;
}else{
    $_SESSION['username'] = $_COOKIE['username']; 
}
$username = $_SESSION['username'];

if(empty($_COOKIE['avatar']) OR $_COOKIE['avatar'] == false){
    $avatar = false;
}else{
    $avatar = true;                                             #This creates the avatar which the user has saved in their cookies

    if($_COOKIE['hair'] == "shortBlack"){
        $hairURL = "assets/avatars/hair/black1.png";
    }elseif($_COOKIE['hair'] == "longBlack"){
        $hairURL = "assets/avatars/hair/black2.png";
    }elseif($_COOKIE['hair'] == "shortBlonde"){
        $hairURL = "assets/avatars/hair/blonde1.png";
    }elseif($_COOKIE['hair'] == "longBlonde"){
        $hairURL = "assets/avatars/hair/blonde2.png";
    }elseif($_COOKIE['hair'] == "shortBrown"){
        $hairURL = "assets/avatars/hair/brown1.png";
    }elseif($_COOKIE['hair'] == "longBrown"){
        $hairURL = "assets/avatars/hair/brown2.png";
    }elseif($_COOKIE['hair'] == "shortGinger"){
        $hairURL = "assets/avatars/hair/ginger1.png";
    }elseif($_COOKIE['hair'] == "longGinger"){
        $hairURL = "assets/avatars/hair/ginger2.png";
    }

    if($_COOKIE['face'] == "roundBlack"){
        $faceURL = "assets/avatars/faces/black1.png";
    }elseif($_COOKIE['face'] == "pointyBlack"){
        $faceURL = "assets/avatars/faces/black2.png";
    }elseif($_COOKIE['face'] == "roundOlive"){
        $faceURL = "assets/avatars/faces/olive1.png";
    }elseif($_COOKIE['face'] == "pointyOlive"){
        $faceURL = "assets/avatars/faces/olive2.png";
    }elseif($_COOKIE['face'] == "roundWhite"){
        $faceURL = "assets/avatars/faces/white1.png";
    }elseif($_COOKIE['face'] == "pointyWhite"){
        $faceURL = "assets/avatars/faces/white2.png";
    }

    if($_COOKIE['shirt'] == "Blue"){
        $shirtURL = "assets/avatars/shirts/blue.png";
    }elseif($_COOKIE['shirt'] == "Green"){
        $shirtURL = "assets/avatars/shirts/green.png";
    }elseif($_COOKIE['shirt'] == "Pink"){
        $shirtURL = "assets/avatars/shirts/pink.png";
    }elseif($_COOKIE['shirt'] == "Red"){
        $shirtURL = "assets/avatars/shirts/red.png";
    }
}
?>

<style>
    .nav-link{
        color: #ffffff
    }

    .topnav {
        overflow: hidden;
    }

    /* Style the links inside the navigation bar */
    .topnav a {
        float: left;
        color: #f2f2f2;
        text-align: center;
        padding: 14px 14px;
        text-decoration: none;
        font-size: 12px;
        font-family: Verdana !important;
        font-weight: bold;
    }

    /* Change the color of links on hover */
    .topnav a:hover {
        background-color: #ddd;
        color: black;
    }

    /* Add a color to the active/current link */
    .topnav a.active {
        background-color: #808080;
        color: white;
    }

    /* Right-aligned section inside the top navigation */
    .topnav-right {
        float: right;
    }

    #backgroundimage {
        background-image: url("assets/arcade-unsplash.jpg");
        width: 100vw;
        height: 100vh; 
        background-size: 100% 100%;
        background-repeat: no-repeat;
        position: relative;
    }

    .parent {                           /*allows pictures to stack for avatars*/
        position: relative;
        top: 0;
        left: 0;
        height: 14px;
    }
    .image1 {
        position: relative;
        top: 0;
        left: 0;
        height: 30px;
        border-radius: 50%;
    }
    .image2 {
        position: absolute;
        top: 3px;
        left: 4px;
        height: 25px;
    }
    
</style>

<head>
    <div class="topnav bg-primary">
        
        <a class="active" style="height: 48px;" name="home" href="index.php">Home</a>

        <a href="registration.php">
            <?php if($avatar != false): ?>                      <!-- If the user has an avatar saved then it displays it next to their username -->
                <div style="height: 20px; padding-left: 1px; float: left;" name="avatar">
                    <div class="parent" style="height: 20px; padding: 1px; float: left;">
                        <img class="image1 img-circle" src="assets/avatars/bg.png" />
                        <img class="image2" src="<?php echo $faceURL?>" />
                        <img class="image2" src="<?php echo $hairURL?>" />
                        <img class="image2" src="<?php echo $shirtURL?>" />
                    </div>
                </div>
            <?php endif;?>
                <div class="text-centre" style="padding-left: 5px; color: #ffffff !important; float: left;"><?php echo $username?></div>
        </a>

        <div class="topnav-right">
            <a name="memory" style="height: 48px;"href="pairs.php">Play Pairs</a>

            <?php if($username != "" && $username != NULL): ?>              <!-- if the user is registered then the leaderboard button is displayed -->
                <a name="leaderboard" style="height: 48px;" href="leaderboard.php">Leaderboard</a>
            <?php else: ?>                                                  <!-- if the user is not registered then the register button is displayed -->
                <a name="register" style="height: 48px;" href="registration.php">Registration</a>
            <?php endif; ?>

        </div>
    </div>
</head>


<body class="view" id="backgroundimage">