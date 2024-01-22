<!-- This is the php action code for the registration form -->

<?php

    function redirect($url){            #allows the user to be redirected automatically if form is submitted correctly
        ob_start();
        header('Location: '.$url);
        ob_end_flush();
        die();
    }

    if(isset($_POST['username'])){
        $username = $_POST['username'];
        if(preg_match('!@#%^&*()+=fg[]|;:\<>?/', $username)){
            echo "Your username cannot contain any of these characters: \n ! @ # % ^ & * ( ) + = f g [ ] | ; : \ ' < > ? /";
        }else{
            setcookie("username", $username, time() + (86400 * 30), "/");
        }
    }else{
        echo "No username entered";
    }

    $avatar = true;

    if(isset($_POST['hairOptions']) && isset($_POST['faceOptions']) && isset($_POST['shirtOptions'])){
        if($_POST['hairOptions'] == "shortBlack"){
            $hair = "shortBlack";
        }elseif($_POST['hairOptions'] == "longBlack"){
            $hair = "longBlack";
        }elseif($_POST['hairOptions'] == "shortBlonde"){
            $hair = "shortBlonde";
        }elseif($_POST['hairOptions'] == "longBlonde"){
            $hair = "longBlonde";
        }elseif($_POST['hairOptions'] == "shortBrown"){
            $hair = "shortBrown";
        }elseif($_POST['hairOptions'] == "longBrown"){
            $hair = "longBrown";
        }elseif($_POST['hairOptions'] == "shortGinger"){
            $hair = "shortGinger";
        }elseif($_POST['hairOptions'] == "longGinger"){
            $hair = "longGinger";
        }else{
            $avatar = false;
            $hair = "#";
        }

        if($_POST['faceOptions'] == "roundBlack"){
            $face = "roundBlack";
        }elseif($_POST['faceOptions'] == "pointyBlack"){
            $face = "pointyBlack";
        }elseif($_POST['faceOptions'] == "roundOlive"){
            $face = "roundOlive";
        }elseif($_POST['faceOptions'] == "pointyOlive"){
            $face = "pointyOlive";
        }elseif($_POST['faceOptions'] == "roundWhite"){
            $face = "roundWhite";
        }elseif($_POST['faceOptions'] == "pointyWhite"){
            $face = "roundWhite";
        }else{
            $avatar = false;
            $face = "#";
        }

        if($_POST['shirtOptions'] == "Blue"){
            $shirt = "Blue";
        }elseif($_POST['shirtOptions'] == "Green"){
            $shirt = "Green";
        }elseif($_POST['shirtOptions'] == "Pink"){
            $shirt = "Pink";
        }elseif($_POST['shirtOptions'] == "Red"){
            $shirt = "Red";
        }else{
            $avatar = false;
            $shirt = "#";
        }

    }else{
        $avatar = false;
    }
    setcookie("avatar", $avatar, time() + (86400 * 30), "/");               #sets the cookies for the user's username and avatar
    setcookie("hair", $hair, time() + (86400 * 30), "/");
    setcookie("face", $face, time() + (86400 * 30), "/");
    setcookie("shirt", $shirt, time() + (86400 * 30), "/");



    redirect("index.php");
?>