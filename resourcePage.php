<!--
AUCSC401 - Hidden Harvests of Camrose (Camrose Fruit picking website)

February 01, 2019

userPage.php

This page users navigate to after they have logged in. It contains what fruit they are looking for
and current offerings for that fruit.
-->

<!doctype html>
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
        <div class="col-3"></div>
        <div class="col-6">
          <h1 id = "title">
            Hidden Harvests of Camrose
          </h1>
        </div>
        <div class="col-3 logButton">
          <h4>
            <a href="login.php" class="btn btn-secondary" role="button">Logout</a>
          </h4>
        </div>   
      </div>

        <nav class="navbar navbar-expand-sm navbar-light navSet font-weight-bolder">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="userPage.php">User Page</a>
                </li>
                <a>|</a>
                <li class="nav-item">
                    <a class="nav-link" href="fruitOffer.php">Offer Fruit</a>
                </li>
                <a>|</a>
                <li class="nav-item">
                    <a class="nav-link" href="fruitSearch.php">Request Fruit</a>
                </li>
                <a>|</a>
                <li class="nav-item active">
                    <a class="nav-link onPage disabled" href="resourcePage.php">Community Resources</a>
                </li>
                <a>|</a>
                <li class="nav-item">
                  <a class="nav-link" href="feedbackForm.php">Feedback</a>
            </li>
            </ul>
        </nav>

      <div class="body container">
        <h1>
          This is where the community resources will be placed in hopes to help
          others connect with environmental resources in the future. 
        </h1>
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
            <p>Contact Information</p>
          </div>
        </div>
      </div>
    </div>
  </body>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <!--
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  -->
</html>