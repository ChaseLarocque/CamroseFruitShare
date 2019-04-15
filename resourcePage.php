<!--
resourcePage.php
Alex Ho, Chase Larocque, Justin Ikenouye
AUCSC401 - Hidden Harvests of Camrose (Camrose fruit picking website)
February 01, 2019

This page will contain environmentally friendly community resources to connect users to
-->

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
                    <li class="nav-item active">
                        <a class="nav-link onPage disabled" href="resourcePage.php">Community Resources</a>
                    </li>
                    <li class="divider-vertical"></li>
                    <li class="nav-item">
                        <a class="nav-link navBtn" href="feedbackForm.php">Feedback</a>
                    </li>
                </ul>
            </nav>

            <br>

            <div class="body container">
                <br>
                <h2>
                  Community Resources
                </h2>
                <p>  
                  Connect with these other environmentally friendly resources!
                </p>
                <hr>

                <h5> Other fruit picking websites </h5>
                <ul>
                    <li>
                        <a href="https://operationfruitrescue.org/">
                            Operation Fruit Rescue Edmonton
                        </a>
                    </li>
                    <li>
                        <a href="https://www.fruitsofsherbrooke.ca/">
                            Fruits of Sherbrooke 
                        </a>
                    </li>
                </ul>

                <h5> Resources for fruit pickers </h5>
                <ul>
                    <li>
                        <a href="http://www.leevalley.com/us/garden/page.aspx?p=10165&cat=2,2120,33277&ap=1">
                            LeeValley: Suggestions for gear
                        </a>
           
                    </li>
                </ul>

                <h5> Resources for fruit tree owners </h5>
                <ul>
                    <li>
                        <a href="https://operationfruitrescue.org/fruit-harvesting-tree-maintenance-canning-resources/how-do-i-know-when-my-fruit-is-ready/">
                            Operation Fruit Rescue: Is my fruit ready to pick?
                        </a>
                    </li>
                </ul>
                <br>
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