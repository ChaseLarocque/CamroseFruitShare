<!--
AUCSC401 - Hidden Harvests of Camrose (Camrose Fruit picking website)

February 01, 2019

login.php

This is the page for logging in to the website by clicking on 'login' from index.php
It authenticates current users so that they may access their account on userPage.php 
and directs new users to an account creation page register.php   
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



    <title>Login Fruit Pickers</title>
  </head>

<body>
  <div class="main-container">
    <div class="header row">
      <div class="col my-auto">
        <h1 id = "title">
          Hidden Harvests of Camrose
       </h1>
      </div>
    </div>


<div class="vertical-align">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-8">

        <div class="card my-auto">
          <div class="card-header text-white" id = "login-head">Login to Hidden Harvests of Camrose</div>

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
                            
                <div class="col-6 offset-md-4">
                  <button type="submit" class="btn btn-secondary btnGreen">Login</button>
                  <a href="#" class="btn btn-link">Forgot Your Password?</a>
                </div>

                <div class="form-group row">
                  <div class="col-6 offset-md-5">
                    <a href="register.php" class="btn btn-link">Need An Account?</a>
                  </div>
                </div>       
              </form>
            </div>
        </div>
      </div>
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
          Alex Ho, Chase Larocque, Justin Ikenouye.
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
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>