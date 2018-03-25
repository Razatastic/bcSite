<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--Reference to Google Fonts, Bootstrap, Animate.css, local CSS file, Google Material Icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="bootstrap-4.0.0-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/animate.css@3.5.2/animate.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <!-- Scripts used for Bootstrap when site loads -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>

    <title>bcSite</title>
</head>

<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>

<!-- Login Form -->
<div class="container animated pulse jumbotron col-10 col-sm-8 col-md-8 col-lg-8 col-xl-4">
    <form>
        <!-- Username/Email -->
        <div class="form-group">
            <label for="email_support">Username</label>
            <input type="email" class="form-control" id="email_support" placeholder="buster@bcmail.com">
        </div>
        <!-- Password -->
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password">
        </div>
        <!-- Login Button -->
        <div id="login_button" class="form-group">
            <input type="submit" class="btn btn-info" value="Login">
        </div>
        <!-- Forgot Password (linked to modal), Register -->
        <div class="form-group">
            <span>Forgot your password?</span>
            <a href="#password_reset_modal" data-toggle="modal"> Reset password</a>
            <br>
            <span> Dont have an account? </span>
            <a href="./register.html"> Sign up</a>
        </div>
    </form>
</div>

<!-- Modal (for resetting password) -->
<div class="modal fade animated rubberBand" id="password_reset_modal" tabindex="-1" role="dialog"
     aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTitle">Password Recovery</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <i class="material-icons" style="font-size:14px">email</i>
                        <label for="password_reset_email">Email</label>
                        <input type="email" class="form-control" id="password_reset_email"
                               placeholder="johndoe@bcmail.com">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <!-- Empty div container that is modified by JS after checking if email is valid or not -->
                <div id="password_reset_alert" class="container alert" role="alert">
                </div>
                <button id="password_reset_submit_button" type="button" class="btn btn-primary"
                        onclick="emailValidation()">Submit
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Scripts (Local Files) -->
<script src="js/script.js"></script>

<!--Core Scripts used for Bootstrap-->
<script src="bootstrap-4.0.0-dist/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>

</body>

</html>