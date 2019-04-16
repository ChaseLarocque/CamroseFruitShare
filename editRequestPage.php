<!--
editRequestPage.php
Alex Ho, Chase Larocque, Justin Ikenouye
AUCSC401 - Hidden Harvests of Camrose (Camrose Fruit picking website)
February 01, 2019

This page is where users go to udpate a request for what fruit they want and for how long.
-->

<!doctype html>

<?php
    require "blockAccessIfNotLoggedIn.php";
    $requestId = $_GET['requestId'];
    require "getEditRequestData.php";
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

                <form method="post" action="editFruitRequestTable.php" onsubmit = "alert('Request Submitted! You Will Be Notified Of Any Potential Offerings!');">
                    <input type="hidden" name="requestId" value=<?php echo $requestId?>>                    
                    <div class="row">    
                        <div class="form-group col-sm-12 col-md-6 col-lg-4">
                            <label>Fruit Request to Update (Required) </label>
                            <select required id = "fruitVal" name="requestFruit" class="form-control">
                                <?php
                                    include 'populateDropDown.php';
                                ?>
                            </select>
                            <small id="fruitHelp" class="form-text text-muted">Don't See Your Fruit? Contact Us Using the Feedback Page!</small>
                        </div>

                        <div class="form-group col-sm-12 col-md-6 col-lg-4">
                            <label>Enter a Date To Remove Request #1 (Required) </label>
                            <input required type="date" name="requestDate1" class="form-control" value = <?php echo $requestDate;?>>
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
            </div>
        </div><!--main-container-->
    </body>

    <script src="resources/js/limitDate.js"></script> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript"> var selectFruit = "<?php echo $requestName; ?>";</script>
    <script src="resources/js/editDropDownSelect.js"></script> 

</html>