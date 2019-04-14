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
            <div class="container mt-3">
                <div class="modal fade" id="myModal3" role="dialog" data-backdrop="static">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Etiquette</h4>
                            </div>
                            <div class="modal-body">

                                <h5>Please Read The Ettiquette List and Click <b>"I Agree"<b><h5>

                                <h6>1. Introduce yourself.<h6>
                                <h6>2. Confirm with the owner if they want a share of the fruit, and if they do, ask them for containers or boxes to put their share in. <h6>
                                <h6>3. Pick up windfall fruit.<h6>
                                <h6>4. Pick fruit. Divide the fruit.<h6>
                                <h6>5. Thank the owner. Say thank you and let the homeowner know you are leaving. Let the homeowners know that if they wish to donate to our organization they can do so through our website. <h6>
                                <h5>You are responsible for:<h5>
                                    <h6>- Picking fruit in a safe, responsible manner<h6>
                                    <h6>- Determining the quality of the fruit. If you are unsure, please refer to the fruit health guide for diseases and other issues.<h6>
                                    <br>
                                   <h6> No need to pick all of the fruit. Pick what you can, safely, in the time allotted.<h6>
                            </div>
                            <div class="modal-footer">
                                <input type="button" onclick="location.href='login.php';" value="I Agree" class = "btn btn-secondary btnGreen" />
                            </div>
                        </div>
      
                    </div>
                </div>
            </div>

        </div><!--maincontainer-->
    </body>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script src="resources/js/openPopupRegister.js"></script> 
</html>