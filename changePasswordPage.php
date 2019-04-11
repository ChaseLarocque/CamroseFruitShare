<!--
changePassword.php
Alex Ho, Chase Larocque, Justin Ikenouye
AUCSC401 - Hidden Harvests of Camrose (Camrose Fruit picking website)
February 01, 2019



This page is for changing your password
-->
<?php
    // Include DB Access
    require"DBConnect.php";
    require "changePassword.php";
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

        <title>Change Your Password</title>
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
                                <div class="card-header text-white" id="login-head" >Change Your Password</div>
                                <div class="card-body">
                                    <form action="" method="post">
                                        <div class="form-group row">
                                            <label class="offset-1 col-8 offset-sm-1 col-sm-10 offset-md-2 col-md-10 col-form-label text-md-left">Password</label>
                                            <input type="password" name="new_password" class="offset-1 col-10 offset-sm-2 col-sm-8 offset-md-2 col-md-8 form-control" 
                                                   value="<?php echo $new_password; ?>">
                                            <span class="text-danger col-12 text-center"><?php echo $new_password_err; ?></span>
                                        </div>
                                        <div class="form-group row">
                                            <label class="offset-1 col-8 offset-sm-1 col-sm-10 offset-md-2 col-md-10 col-form-label text-md-left">Confirm Password</label>
                                            <input type="password" name="confirm_password" class="offset-1 col-10 offset-sm-2 col-sm-8 offset-md-2 col-md-8 form-control" 
                                                   value="<?php echo $confirm_password; ?>">
                                            <span class="text-danger col-12 text-center"><?php echo $confirm_password_err; ?></span>
                                        </div>
                                        <div class="form-group row">
                                            <div class="offset-2 col-8 col-md-6 offset-md-3">
                                                <input type="submit" class="btn btn-secondary btnGreen col-sm-12" value="Change Password">
                                            </div>
                                        </div>
                                        
                                    </form>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
            </div><!--vertical-align(contains register card)-->
            <br>
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


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</html>