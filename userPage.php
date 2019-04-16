<!--
userPage.php
Alex Ho, Chase Larocque, Justin Ikenouye
AUCSC401 - Hidden Harvests of Camrose (Camrose fruit picking website)
February 01, 2019


This page users navigate to after they have logged in. It contains what fruit they are offering, looking for,
and current offerings for what they're looking for.
-->

<?php 
    require 'submissionDisplay.php';
    require 'enableAdminPageButton.php';
    require 'blockAccessIfNotLoggedIn.php';
?>

<!doctype html>
<html name = "home" class="no-js" lang="en" dir="ltr">


  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="resources/css/vendor/bootstrap.css">
    <link rel="stylesheet" href="resources/css/app.css">

    <title>Fruit Picker's User Page</title>
  </head>

  <body>
    <div class="main-container">
        <div class="header row">
            <div class="col-sm-0 col-md-2"></div>
            <div class="col-sm-12 col-md-8 my-auto">
                <h1 id = "title">
                    Hidden Harvests of Camrose
                </h1>
            </div>
            <div class="col-sm-12 col-md-2 logButton my-auto">
                <h4>
                    <a href="logout.php" class="btn btn-secondary btnRed" role="button">Logout</a>
                </h4>
                <h4>
                    <a href="changePasswordPage.php" class="btn btn-secondary btnRed" role="button">Change Password</a>
                </h4>
            </div>
        </div>

        <nav class="navbar navbar-expand-sm navbar-light navSet font-weight-bolder">
            <ul class="navbar-nav nav-fill w-100">
                <li class="nav-item active ">
                    <a class="nav-link onPage disabled" href="userPage.php">User Page</a>
                </li>
                <li class="divider-vertical"></li>
                <li class="nav-item">
                    <a class="nav-link navBtn" href="fruitOffer.php">Offer Fruit</a>
                </li>
                <li class="divider-vertical"></li>
                <li class="nav-item">
                    <a class="nav-link navBtn" href="fruitSearch.php">Request Fruit</a>
                </li>
                <li class="divider-vertical"></li>
                <li class="nav-item">
                    <a class="nav-link navBtn" href="resourcePage.php">Community Resources</a>
                </li>
                <li class="divider-vertical"></li>
                <li class="nav-item">
                  <a class="nav-link navBtn" href="feedbackForm.php">Feedback</a>
                </li>
                <?php enableAdminPage()?>
            </ul>
        </nav>

        <br>

        <div class="body container">
            <br>
            <div class = "row">
                <div class = "col-sm-12 col-md-12 columnForUP">
                    <h2 class = "center padding20"><b> My Fruit Being Offered</b> </h2>
                    <div class = table-responsive-lg><?php makeOfferDisplay()?> </div>
                 </div>
            </div><!--ROW CONTAINER-->

            <div class = "row">
                <div class = "col-sm-12 col-md-12">
                    <h2 class = "center padding20"><b> My Requested Fruit</b> </h2>

                    <div class = table-responsive-lg><?php makeRequestDisplay()?></div>
                </div>
            </div><!--ROW CONTAINER-->
            <div class = "row">
                <div class = "col-sm-12 col-md-12">
                    <h2 class = "center padding20"><b> My Fruit Matches </b></h2>
                    <div class = table-responsive-lg><?php makeMatchesDisplay()?></div>

                </div>
            </div><!--ROW CONTAINER-->

        </div><!--BODY CONTAINER-->

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
                        by Alex Ho, Chase Larocque, Justin Ikenouye
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
        </div><!--FOOTER CONTAINER-->
    </div> <!--MAIN CONTAINER-->
  </body>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

  <script src="resources/js/enableAdminPageButton.js"></script>

  <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
</html>