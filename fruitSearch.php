<!--
AUCSC401 - Hidden Harvests of Camrose (Camrose Fruit picking website)

February 01, 2019

fruitSearch.php

This page is where users go to search for all or for specific fruit.
Here, they can see what fruit is available, a bit of information of it, 
and contact information for getting a hold of the owners.
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

    <title>Hidden Harvest Requesting Page</title>

</head>

<body>
   <div class="main-container">
    <div class="header row">
        <div class="col-3"></div>
        <div class="col-6 my-auto">
            <h1 id = "title">
                Hidden Harvests of Camrose
            </h1>
        </div>
        <div class="col-3 logButton my-auto">
            <h4>
                <a href="logout.php" class="btn btn-secondary btnRed" role="button">Logout</a>
            </h4>
        </div>    
    </div>

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
            <li class="nav-item active">
                <a class="nav-link onPage disabled" href="fruitSearch.php">Request Fruit</a>
            </li>
            <li class="divider-vertical"></li>
            <li class="nav-item">
                <a class="nav-link navBtn" href="resourcePage.php">Community Resources</a>
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

        <h2> Request Fruit </h2>
            <p>Fill out and submit this form to request fruit from other users</p>
        <hr>

        <form method="post" action="addFruitRequestTable.php" onsubmit = "alert('Request Submitted! You Will Be Notified Of Any Potential Offerings!');"> <!--In future, we'll need to update this with a php scripts that redirects to userPage -->
            <div class="row">    
                <div class="form-group col-md-4">
                    <label>Fruit #1 (Required) </label>
                    <select required name="requestFruit1" class="form-control">
                        <?php
                            include 'populateDropDown.php';
                        ?>
                    </select>
                    <small id="fruitHelp" class="form-text text-muted">Don't See Your Fruit? Contact Us Using the Feedback Page!</small>
                </div>
                <div class="form-group col-md-4">
                    <label>Enter a Date To Remove Request #1 (Required) </label>
                    <input required type="date" name="requestDate1" class="form-control">
                    <small id="dateHelp" class="form-text text-muted">Select a Date Between Today - 30 Days From Now</small>
                </div>
            </div>                

            <div class="row">
                <div class="form-group col-md-4">
                    <label>Fruit #2</label>
                    <select name="requestFruit2" class="form-control">
                        <?php
                            include 'populateDropDown.php';
                        ?>
                    </select>
                    <small id="fruitHelp" class="form-text text-muted">Don't See Your Fruit? Contact Us Using the Feedback Page!</small>
                </div>
                <div class="form-group col-md-4">
                    <label>Enter a Date To Remove Request #2</label>
                    <input type="date" name="requestDate2" class="form-control">
                    <small id="dateHelp" class="form-text text-muted">Select a Date Between Today - 30 Days From Now</small>
                </div>
            </div>

            <div class="row">        
                <div class="form-group col-md-4">
                    <label>Fruit #3</label>
                    <select name="requestFruit3" class="form-control">
                        <?php
                            include 'populateDropDown.php';
                        ?>
                    </select>
                    <small id="fruitHelp" class="form-text text-muted">Don't See Your Fruit? Contact Us Using the Feedback Page!</small>
                </div>

                <div class="form-group col-md-4">
                    <label>Enter a Date To Remove Request #3</label>
                    <input type="date" name="requestDate3" class="form-control">
                    <small id="dateHelp" class="form-text text-muted">Select a Date Between Today - 30 Days From Now</small>
                </div>
            </div>

            <hr>

            <div class="form-group col-md-2">
                <button type="submit" class="btn btn-secondary btnGreen">Submit</button>
            </div>
        </form>
        <h6> By Submitting the request, you are subject to receiving emails whenever an offering that matches your request is submitted. </h6>    
        <br>    
    </div>

    <div class="footer">
        <div class="row">
            <div class="col">
                Photo
            </div>
            <div class="col" id="footerCenter">  
                <p>
                    Designed February 01,2019<br>
                    by Alex Ho, Chase Larocque, Justin Ikenouye.
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
    </div>
</div>
</body>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="resources/js/limitDate.js"></script> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</html>