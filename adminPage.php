<!--
adminPage.php
Alex Ho, Chase Larocque, Justin Ikenouye
AUCSC401 - Hidden Harvests of Camrose (Camrose Fruit picking website)
March 27, 2019

This page is for the admin when logged in. They will be able to change what fruits are available for either being offered or requested 
which will work to communicate with the Database.
-->

<!doctype html>
<?php
  include 'blockAccessToAdminPage.php';
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
                    <li class="nav-item ">
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
                    <li class="nav-item">
                      <a class="nav-link navBtn" href="feedbackForm.php">Feedback</a>
                    </li>
                    <li class="divider-vertical"></li>
                    <li class = "nav-item">
                      <a class="nav-link active onPage disabled" href="adminPage.php">Admin Settings</a>
                    </li>
                </ul>
            </nav>

            <br>

            <div class="body container">
                <br>
                <h2> Admin Settings </h2>
                <p>Use This Page To Change The Fruit in Drop Down Boxes</p>
                <hr>
                <h4> Delete Fruit In Database </h4>
                <form method="post" action="adminDeleteFruit.php" onsubmit = "alert('Fruit Deleted!');">
                    <div class = "row">
                        <div class="form-group col-8">
                            <select name="deleteFruitDB" id="deleteFruitDB" class="form-control">
                                <?php   
                                    include 'populateDropDown.php';
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group col-md-2">
                        <button type="submit" class="btn btn-secondary btnGreen">Delete Fruit</button>
                    </div>
                </form>

                <hr>
                <hr>
                    
                <h4> Add Fruit To Database </h4>
                <form method="post" action="adminAddFruit.php" onsubmit = "alert('Fruit Added!');"> 
                    <div class = "row">
                        <div class="form-group col-8">
                            <input type="text" name="addFruitToDB" class="form-control" placeholder = "Add A New Fruit">     
                        </div>
                    </div>
                    <div class="form-group col-md-2">
                        <button type="submit" class="btn btn-secondary btnGreen">Add New Fruit</button>
                    </div>
                </form>

                <hr>
                <br>
            </div><!--body container-->

            <div class="footer">
                <div class="row">
                    <div class="col">
                        Photo
                    </div>
                    <div class="col">  
                        <p>
                            Designed February 01,2019<br>
                            by Alex Ho, Chase Larocque, Justin Ikenouye.
                        </p>
                    </div>
                    <div class="col">
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