<!--
register.php
Alex Ho, Chase Larocque, Justin Ikenouye
AUCSC401 - Hidden Harvests of Camrose (Camrose Fruit picking website)
February 01, 2019



This is the page for registering an account to the website by clicking on 'register' from login.php  
-->
<?php
    // Include DB Access
    require_once "DBConnect.php";
    require_once "registerCode.php";
?>

<!doctype html>

<html class="no-js" lang="en" dir="ltr">


    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="resources/css/vendor/bootstrap.css">
        <link rel="stylesheet" href="resources/css/app.css">
        <link rel="stylesheet" href="resources/css/register.css">

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
            </div><!--header row-->


            <div class="vertical-align">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 col-sm-8 col-xs-8">
                            <div class="card">
                                <div class="card-header text-white" id = "login-head">Register to Hidden Harvests of Camrose</div>
                                <div class="card-body">
                                    <form action="" method="post" onsubmit="return openPopup()">

                                        <div class="form-group row">
                                            <label class="offset-1 col-8 offset-md-2 offset-sm-1 col-sm-10 offset-md-2 col-md-10 col-form-label text-md-left">Email</label>
                                            <input type="email" name="username" class="offset-1 col-10 offset-md-2 col-md-8 form-control" 
                                                   value="<?php echo $username; ?>">
                                            <span class="text-danger col-12 text-center"><?php echo $username_err; ?></span>
                                        </div>    

                                        <div class="form-group row">
                                            <label class="offset-1 col-8 offset-sm-1 col-sm-10 offset-md-2 col-md-10 col-form-label text-md-left">Password</label>
                                            <input type="password" name="password" class="offset-1 col-10  offset-md-2 col-md-8 form-control" 
                                                   value="<?php echo $password; ?>">
                                            <span class="text-danger col-12 text-center"><?php echo $password_err; ?></span>
                                        </div>
                                        <div class="form-group row">
                                            <label class="offset-1 col-8 offset-sm-1 col-sm-10 offset-md-2 col-md-10 col-form-label text-md-left">Confirm Password</label>
                                            <input type="password" name="confirm_password" class="offset-1 col-10 offset-md-2 col-md-8 form-control" 
                                                   value="<?php echo $confirm_password; ?>">
                                            <span class="text-danger col-12 text-center"><?php echo $confirm_password_err; ?></span>
                                        </div>

                                        <div class="form-group row">
                                            <div class="offset-2 col-8 col-md-6 offset-md-3">
                                                <input type="submit" class="btn btn-secondary btnGreen col-sm-12" value="Register">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <div class="col-12 text-center">
                                                <p>Already have an account? <a href="login.php">Login here</a>.</p>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
            </div><!--vertical-align(contains register card)-->
            
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
                            Alex Ho, Chase Larocque, Justin Ikenouye.
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
            </div><!--footer-->

        </div><!--maincontainer-->
    </body>
    <script src="resources/js/openPopupOnRegister.js"></script> 
</html>