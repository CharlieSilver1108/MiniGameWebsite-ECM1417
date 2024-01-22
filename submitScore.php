<!-- This is the php action code for when the user submits their score -->

<?php
    include "navbar.php";

    function redirect($url){                #allows the user to be redirected automatically upon successful submission
        ob_start();
        header('Location: '.$url);
        ob_end_flush();
        die();
    }

    if(isset($_POST['score']) && isset($_SESSION['username'])){
        $score = $_POST['score'];
        $username = $_SESSION['username'];
        
        $removed = false;                                #writes and saves the user's account name and score into the csv file, updates their score if they score higher than a previous save
        $ftemp = fopen("highScoresTemp.csv", "a+");
        if (($file = fopen("highScores.csv", "r")) !== FALSE) {
            while (($row = fgetcsv($file)) !== FALSE) {
                if ($username != $row[0]){
                    $recordToAdd = ["$row[0]", "$row[1]"];
                    fputcsv($ftemp, $recordToAdd);
                }else{
                    if($row[1] > $score){
                        $recordToAdd = ["$username", "$row[1]"];
                    }else{
                        $recordToAdd = ["$username", "$score"];
                    }
                    fputcsv($ftemp, $recordToAdd);
                    $removed = true;
                }
            }
            if($removed == false){
                $recordToAdd = ["$username", "$score"];
                fputcsv($ftemp, $recordToAdd);
            }
        
            fclose($file);
            fclose($ftemp);
            rename("highScoresTemp.csv", "highScores.csv");
        }
        

        redirect("leaderboard.php");
    }
?>
    <h>Error</h>
    <a href="index.php">Return Home</a>
</html>