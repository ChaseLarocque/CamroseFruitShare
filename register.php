<!--
AUCSC401 - Hidden Harvests of Camrose (Camrose Fruit picking website)

February 01, 2019

register.php

This is the page for registering to the website by clicking on 'register' from login.php  
-->

<!doctype html>
<html class="no-js" lang="en" dir="ltr">

  <head>
    <!-- Required meta tags -->
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
      <div class="col">
        <h1 id = "title">
        Hidden Harvests of Camrose
       </h1>
      </div>
    </div>


<div class="vertical-align">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-8">

        <div class="card">
          <div class="card-header text-white" id = "login-head">Register to Hidden Harvests of Camrose</div>

            <div class="card-body">
              <form action="userPage.php" method="POST">
                <div class="form-group row">
                  <label for="email_address" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
                  <div class="col-6">
                    <input type="email" id="email_address" class="form-control" name="email-address" required autofocus>
                  </div>
                </div>

                <div class="form-group row">
                  <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                  <div class="col-6">
                    <input type="password" id="password" class="form-control" name="password" required>
                  </div>
                </div>
                
                <div class = "form-group row">
                  <div class ="col-6 offset-4">
                    <input type="checkbox" name="ettiquette" oninvalid="this.setCustomValidity('You Need To Read the Etiquette Guidelines')"
                           oninput="setCustomValidity('')" required> I have read the <a href = "#popup1">Etiquette Guidelines.</a>
                  </div>
                </div>

                <div class="form-group row">            
                  <div class="col-6 offset-4">
                    <button type="submit" class="btn btn-primary">Register</button>
                  </div>
              </form>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>
    
<div id="popup1" class="overlay">
    <div class="popup">
        <h2>Etiquette Guidelines</h2>
        <hr>
        <a class="close" href="#">&times;</a>
        <div class="content">
            1. Respect Other People</br>
            2. Respect Other People's Homes/Businesses</br>
            3. Respect Other People's Communication Wishes</br>
            4. ......</br>
            5. ......</br>
            6. ......</br>
            7. ......</br>
        </div>
    </div>
</div>


  <div class="footer">
    <div class="row">
        <div class="col text-left">
          Photo
        </div>
        <div class="col">  
          <p>
            Designed February 01,2019<br>
            Alex Ho, Chase Larocque, Justin Ikenouye.
          </p>
        </div>
        <div class="col text-center">
            <h6>Contact Information</h6>
        </div>
      </div>
  </div>
</div>
</body>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>