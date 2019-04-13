<!--
feedbackForm.php
Alex Ho, Chase Larocque, Justin Ikenouye
AUCSC401 - Hidden Harvests of Camrose (Camrose fruit picking website)
February 01, 2019

This page is for users to submit feedback regarding the website and where users can request a fruit that's not listed. 
-->
<?
    require "feedbackMailer.php";
?>

<!doctype html>

<?php
    require 'blockAccessIfNotLoggedIn.php';
?>
<html class="no-js" lang="en" dir="ltr">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="resources/css/vendor/bootstrap.css">
        <link rel="stylesheet" href="resources/css/app.css">

        <title>Hidden Harvest Feedback Page</title>
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
                        <a href="login.php" class="btn btn-secondary btnRed" role="button">Logout</a>
                    </h4>
                </div>    
            </div><!--header row-->

            <nav class="navbar navbar-expand-sm navbar-light navSet font-weight-bolder">
                <ul class="navbar-nav nav-fill w-100">
                    <li class="nav-item">
                        <a class="nav-link navBtn" href="userPage.php">User Page</a>
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
                    <li class="nav-item active">
                        <a class="nav-link onPage disabled" href="feedbackForm.php">Feedback</a>
                    </li>
                </ul>
            </nav>

            <br>

            <div class="body container">
                <br>

                <h2> Feedback </h2>
                <p>Fill out this form with any feedback you may have</p>
                <hr>

                <form method="post" action="feedbackMailer.php" onsubmit = "alert('Feedback Submitted. Thank-You!');">
                    <div class="row">
                        <div class="form-group col-sm-12 col-md-12 col-lg-8">
                            <textarea name="feedback" class="form-control" rows="5" maxlength="300" placeholder = "This can include any comments or concerns about the website. Also tell us of any fruit not in the list that should be listed!"></textarea>
                        </div>
                    </div>

                    <hr>

                    <div class="form-group col-md-2">
                        <button type="submit" class="btn btn-secondary btnGreen">Submit</button>
                    </div>
                    <br>
                </form>          
            </div><!--body container-->

            <div class="bodyFooterSpacing"><!--Creates spacing for footer in mobile view (CSS)-->
            </div>

            <div class="footer">
                <div class="row">
                    <div class="col">
                        Photo
                    </div>
                    <div class="col" id="footerCenter">  
                        <p>
                            Designed February 01,2019<br>
                            by Alex Ho, Chase Larocque, Justin Ikenouye
                        </p>
                    </div>
                    <div class="col" id="footerRight">
                        <p>
                            Contact Information<br>
                            Dr. Greg King, Assistant Professor of Environmental Science<br>
                            gking@ualberta.ca 
                        </p>
                    </div>
                </div>
            </div><!--footer-->
        </div><!--main-container-->
    </body>
</html>