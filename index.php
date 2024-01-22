<!-- This is the 'home' page for the website -->

<!Doctype HTML>
<html lang="en">

    <head>
        <title>Index</title>
    </head>

    <?php
    include "navbar.php";
    ?>


    <div class="text-center" style="background-color: #A0A0A0; margin-left: 200px; margin-right: 200px; margin-top: 30px; border-radius: 5px; box-shadow: 5px 5px;">
        <?php if($username != "" && $username != NULL): ?>          <!-- if the user is registered then the play pairs option is displayed -->
        <div name="logged-in">
            <h1 class="text-white">Welcome To Pairs</h1>
            <a href="pairs.php" class="btn btn-primary" role="button" style="margin-bottom: 5px;">Click here to play</a>
        </div>
        <?php else: ?>                                              <!-- if the user is not registered then the register option is displayed -->

        <div name="not-logged-in">
            <h3 class="text-white" style="margin-bottom: 10px !important;">You're not using a registered session? <a href="registration.php">Register here</a></h3>
        </div>
        <?php endif; ?>
    </div>

</body>
</html>