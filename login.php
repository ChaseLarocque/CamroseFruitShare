<!--
login.php
Alex Ho, Chase Larocque, Justin Ikenouye
AUCSC401 - Hidden Harvests of Camrose (Camrose Fruit picking website)
February 01, 2019


This is the page for logging in to the website by clicking on 'login' from index.php
It authenticates current users so that they may access their account on userPage.php 
and directs new users to an account creation page register.php   
-->

<?php
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to userPage
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: userPage.php");
    exit;
}//if
 
// Include config file
require_once "DBConnect.php";
require_once "loginCode.php";

?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="resources/css/vendor/bootstrap.css">
        <link rel="stylesheet" href="resources/css/app.css">

        <title>Login Fruit Pickers</title>
    </head>

    <body>
        <div class="main-container">
            <div class="header row">
                <div class="col my-auto">
                    <h1 id = "title">
                        Hidden Harvests of Camrose
                    </h1>
                </div>
            </div> <!--Header-->

            <div class="vertical-align">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-8">
                            <div class="card my-auto">
                                <div class="card-header text-white" id = "login-head">Login to Hidden Harvests of Camrose</div>
                                <div class="card-body">       
                                    <form action="" method="post">

                                        <div class="form-group row">
                                            <label class = "offset-1 col-8 col-sm-12 offset-md-2 col-md-10 col-form-label text-md-left">Username</label>
                                            <input type="email" name="username" class="offset-1 col-10 offset-md-2 col-md-8 form-control" value="<?php echo $username; ?>">
                                            <span class="text-danger col-12 text-center"><?php echo $username_err; ?></span>
                                        </div>

                                        <div class="form-group row">
                                            <label class = "offset-1 col-8 col-sm-12 offset-md-2 col-md-10 col-form-label text-md-left">Password</label>
                                            <input type="password" name="password" class="offset-1 col-10 offset-md-2 col-md-8 form-control">
                                            <span class="text-danger col-12 text-center"><?php echo $password_err; ?></span>
                                        </div>

                                        <div class="form-group row">
                                            <div class="offset-2 col-8 col-md-6 offset-md-3">
                                                <input type="submit" class="btn btn-secondary btnGreen col-sm-12" value="Login">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-12 text-center">
                                                <p>Don't have an account? <a href="register.php">Sign up now</a>.</p>
                                            </div>
                                       </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!--vertical-align (Contains the login card)-->

            <div class="bodyFooterSpacing"><!--Creates spacing for footer in mobile view (CSS)-->
            </div>

            <div class="footer">
                <div class="row">
                    <div class="col">
                        Photo
                    </div>
                    <div class="col"  id="footerCenter">  
                        <p>
                            Designed February 01,2019<br>
                            Alex Ho, Chase Larocque, Justin Ikenouye
                        </p>
                    </div>
                    <div class="col"  id="footerRight">
                        <p>
                            Contact Information<br>
                            Dr. Greg King, Assistant Professor of Environmental Science<br>
                            gking@ualberta.ca 
                        </p>
                    </div>
                </div>
            </div> <!--footer-->

        </div> <!--main-container-->
    </body>
</html>