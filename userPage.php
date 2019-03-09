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
        <div class="col-6 my-auto">
          <h1 id = "title">
            Hidden Harvests of Camrose
          </h1>
        </div>
        <div class="col-3 logButton my-auto">
          <h4>
            <a href="login.php" class="btn btn-secondary" role="button">Logout</a>
          </h4>
        </div>   
      </div>

        <nav class="navbar navbar-expand-sm navbar-light navSet font-weight-bolder">
            <ul class="navbar-nav nav-fill w-100">
                <li class="nav-item active ">
                    <a class="nav-link onPage disabled" href="userPage.php">User Page</a>
                </li>
                <a>|</a>
                <li class="nav-item">
                    <a class="nav-link" href="fruitOffer.php">Offer Fruit</a>
                </li>
                <a>|</a>
                <li class="nav-item">
                    <a class="nav-link" href="fruitSearch.php">Requested Fruit</a>
                </li>
                <a>|</a>
                <li class="nav-item">
                    <a class="nav-link" href="resourcePage.php">Community Resources</a>
                </li>
                <a>|</a>
                <li class="nav-item">
                  <a class="nav-link" href="feedbackForm.php">Feedback</a>
                </li>
                <a>|</a>
                <li class = "nav-item">
                  <a class="nav-link" href="adminPage.php">Admin Settings</a>
                </li>
            </ul>
        </nav>

      <div class="body container">
        <div class = "row">
        <div class = "col-6 columnForUP">
          <h2 class = "center padding20"> My Fruit Being Offered </h2>
          <table class="table">
          <thead>
            <tr>
              <th scope="col">Fruit</th>
              <th scope="col">Until This Date</th>
              <th scope="col">Remove?</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Apples</td>
              <td>03-12-2019</td>
              <td><button class="btn btn-secondary">Remove</button></td>
            </tr>
            <tr>
              <td>Choke Cherries</td>
              <td>03-13-2019</td>
              <td><button class="btn btn-secondary">Remove</button></td>
            </tr>
          </tbody>
        </table>
      </div>
        <div class = "col-6 padding30">
          <h2 class = "center padding20"> My Requested Fruit </h2>
          <table class="table">
          <thead>
            <tr>
              <th scope="col">Fruit</th>
              <th scope="col">Until This Date</th>
              <th scope="col">Remove?</th>

            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Pear</td>
              <td>02-28-19</td>
               <td><button class="btn btn-secondary">Remove</button></td>
            </tr>
            <tr>
              <td>Goji Berries</td>
              <td>03-28-19</td>
               <td><button class="btn btn-secondary">Remove</button></td>
            </tr>
            <tr>
              <td>Crab Apples</td>
              <td>03-19-19</td>
               <td><button class="btn btn-secondary">Remove</button></td>
            </tr>
          </tbody>
        </table>
      </div>
      </div>
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