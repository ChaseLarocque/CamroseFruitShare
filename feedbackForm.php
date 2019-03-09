<!--
AUCSC401 - Hidden Harvests of Camrose (Camrose Fruit picking website)

February 01, 2019

feedbackForm.php

This page will be for feedback regarding the website, and where user's can request a fruit that's not listed. 
-->

<!doctype html>
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
        <div class="col-3"></div>
        <div class="col-6 my-auto">
            <h1 id = "title">
                Hidden Harvests of Camrose
            </h1>
        </div>
        <div class="col-3 logButton my-auto">
            <h4>
                <a href="login.php" class="btn btn-secondary btnRed" role="button">Logout</a>
            </h4>
        </div>    
    </div>

    <nav class="navbar navbar-expand-sm navbar-light navSet font-weight-bolder">
        <ul class="navbar-nav nav-fill w-100">
            <li class="nav-item">
                <a class="nav-link navBtn" href="userPage.php">User Page</a>
            </li>
            <a>|</a>
            <li class="nav-item">
                <a class="nav-link navBtn" href="fruitOffer.php">Offer Fruit</a>
            </li>
            <a>|</a>
            <li class="nav-item">
                <a class="nav-link navBtn" href="fruitSearch.php">Request Fruit</a>
            </li>
            <a>|</a>
            <li class="nav-item">
                <a class="nav-link navBtn" href="resourcePage.php">Community Resources</a>
            </li>
            <a>|</a>
            <li class="nav-item active">
                <a class="nav-link onPage disabled" href="feedbackForm.php">Feedback</a>
            </li>
        </ul>
    </nav>

     <div class="body container">

        <h2> Feedback? </h2>
        <p>Fill Out This Form With Any Feedback You May Have</p>
        <hr>

        <form method="post" action="userPage.php" onsubmit = "alert('Feedback Submitted. Thank-You!');"> <!--In future, we'll need to update this with a php scripts that redirects to userPage -->
            <div class="row">
                <div class="form-group col-8">
                    <label>Description</label>
                    <textarea name="fruitDescription" class="form-control" rows="5" maxlength="300" placeholder = "Enter Feedback. This can include any comments or concerns about the website. Also tell us of any fruit not in the list that should be listed!"></textarea>
                </div>
            </div>


            <hr>

            <div class="form-group col-md-2">
                <button type="submit" class="btn btn-secondary btnGreen">Submit</button>
            </div>
        </form>    
                   
          
    </div>

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