<!-- This is the page used to register an account username and avatar -->

<!Doctype HTML>
<html lang="en">

    <head>
        <title>Registration</title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" rel="stylesheet"/>
    </head>

    <?php include "navbar.php"; ?>

    <style>
        label {                         /* This css allows for the 'radio' from input to only be in colour when the item is selected */
            cursor: pointer;
            filter: grayscale(100%);
            padding-left: 0px;
        }

        label:hover {
            filter: grayscale(0);
        }

        input[type="radio"]:checked + label {
            filter: grayscale(0);
        }
    </style>


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <form method="post" action="registerForm.php">
                    <div class="card shadow-lg border-0 rounded-lg mt-1">
                        <div class="card-header"><h3 class="text-center font-weight-light my-4">Registration</h3></div>
                        <div class="card-body">
                            <div class="form-floating mb-3">
                                <div class="form-group">
                                    <label for="username" style="font-size: 20px;">Username/Nickname</label>
                                    <input type="text" class="form-control" id="usernameInput" name="username" required pattern="[A-Za-z0-9]+" title= "Username cannot contain: &quot; !@#%^&*()+={}[]|;:\'<>?/ &quot;" >  <!-- this is validation and uses regular expression to ensure that the username does not contain any special characters -->
                                </div>
                            </div>
                            
                            <div class="form-floating mb-3">
                                <div style="font-size: 20px;">Avatar</div>

                                <div class="form-group" style="margin-top: 3px;">
                                    <label for="hairOptions">Hair</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input sr-only" type="radio" name="hairOptions" id="shortBlack" value="shortBlack">
                                        <label for="shortBlack"><img src="assets/avatars/hair/black1.png" alt="shortBlack"></label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input sr-only" type="radio" name="hairOptions" id="longBlack" value="longBlack">
                                        <label for="longBlack"><img src="assets/avatars/hair/black2.png" alt="longBlack"></label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input sr-only" type="radio" name="hairOptions" id="shortBlonde" value="shortBlonde">
                                        <label for="shortBlonde"><img src="assets/avatars/hair/blonde1.png" alt="shortBlonde"></label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input sr-only" type="radio" name="hairOptions" id="longBlonde" value="longBlonde">
                                        <label for="longBlonde"><img src="assets/avatars/hair/blonde2.png" alt="longBlonde"></label> 
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input sr-only" type="radio" name="hairOptions" id="shortBrown" value="shortBrown">
                                        <label for="shortBrown"><img src="assets/avatars/hair/brown1.png" alt="shortBrown"></label> 
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input sr-only" type="radio" name="hairOptions" id="longBrown" value="longBrown">
                                        <label for="longBrown"><img src="assets/avatars/hair/brown2.png" alt="longBrown"></label> 
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input sr-only" type="radio" name="hairOptions" id="shortGinger" value="shortGinger">
                                        <label for="shortGinger"><img src="assets/avatars/hair/ginger1.png" alt="shortGinger"></label> 
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input sr-only" type="radio" name="hairOptions" id="longGinger" value="longGinger">
                                        <label for="longGinger"><img src="assets/avatars/hair/ginger2.png" alt="longGinger"></label> 
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="faceOptions">Face</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input sr-only" type="radio" name="faceOptions" id="roundBlack" value="roundBlack">
                                        <label for="roundBlack"><img src="assets/avatars/faces/black1.png" alt="roundBlack"></label> 
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input sr-only" type="radio" name="faceOptions" id="pointyBlack" value="pointyBlack">
                                        <label for="pointyBlack"><img src="assets/avatars/faces/black2.png" alt="pointyBlack"></label> 
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input sr-only" type="radio" name="faceOptions" id="roundOlive" value="roundOlive">
                                        <label for="roundOlive"><img src="assets/avatars/faces/olive1.png" alt="roundOlive"></label> 
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input sr-only" type="radio" name="faceOptions" id="pointyOlive" value="pointyOlive">
                                        <label for="pointyOlive"><img src="assets/avatars/faces/olive2.png" alt="pointyOlive"></label> 
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input sr-only" type="radio" name="faceOptions" id="roundWhite" value="roundWhite">
                                        <label for="roundWhite"><img src="assets/avatars/faces/white1.png" alt="roundWhite"></label> 
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input sr-only" type="radio" name="faceOptions" id="pointyWhite" value="pointyWhite">
                                        <label for="pointyWhite"><img src="assets/avatars/faces/white2.png" alt="pointyWhite"></label> 
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="hairOptions">Shirt</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input sr-only" type="radio" name="shirtOptions" id="Blue" value="Blue">
                                        <label for="Blue"><img src="assets/avatars/shirts/blue.png" alt="Blue"></label> 
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input sr-only" type="radio" name="shirtOptions" id="Green" value="Green">
                                        <label for="Green"><img src="assets/avatars/shirts/green.png" alt="Green"></label> 
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input sr-only" type="radio" name="shirtOptions" id="Pink" value="Pink">
                                        <label for="Pink"><img src="assets/avatars/shirts/pink.png" alt="Pink"></label> 
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input sr-only" type="radio" name="shirtOptions" id="Red" value="Red">
                                        <label for="Red"><img src="assets/avatars/shirts/red.png" alt="Red"></label> 
                                    </div>
                                </div>

                            </div>
                            
                        </div>
                        <div class="card-footer text-center py-3">
                            <button type="submit" id="submitButton" class="btn btn-primary" style="float:right;" value="Submit">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>