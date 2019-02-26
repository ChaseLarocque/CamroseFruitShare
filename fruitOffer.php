<!--
AUCSC401 - Hidden Harvests of Camrose (Camrose Fruit picking website)

February 01, 2019

fruitOffer.php

This page is a form for users to enter an offer for someone to pick their fruit
It allows them to enter details like what kind of fruit they have and how to contact them.
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
    <link rel="stylesheet" href="resources/css/userPage.css">



    <title>Fruit Picker's Offering Page</title>
</head>

<body>
    <div class="header row">
        <div class="col-3"></div>
        <div class="col-6">
            <h1 id = "title">
                <a>Hidden Harvests of Camrose</a>
            </h1>
        </div>
        <div class="col-3">
            <h4>
                <a href="index.php">Logout</a>
            </h4>
        </div>    
    </div>

    <div class="container">
        <div class="row">
            <div class="col">
                <a class="btn btn-primary btn-lg btn-block" href="userPage.php" role="button">User Page</a>
            </div>
            <div class="col">
                <a class="btn btn-primary btn-lg btn-block disabled" href="fruitOffer.php" role="button">Offer Fruit</a>
            </div>
            <div class="col">
                <a class="btn btn-primary btn-lg btn-block" href="fruitSearch.php" role="button">Search Fruit</a>
            </div>
            <div class="col">
                Button 4
            </div>
        </div>
    </div>

    <div class="body container">

                <h2> Offer Fruit </h2>
                <p>Fill out and submit this form to offer your fruit to other users</p>

                        <form>
                            <div class="form-group">
                                <div class="col-md-4">
                                    <label>Fruit</label>
                                    <select id="inputFruit" class="form-control">
                                        <option selected>Choose...</option>
                                        <option value="apples">Apples</option>
                                        <option value="crabapples">Crab Apples</option>
                                        <option value="evans">Evans (Sour Cherries)</option>
                                        <option value="pears">Pears</option>
                                        <option value="saskatoons">Saskatoon Berries</option>
                                        <option value="plums">Plums</option>
                                        <option value="amurs">Amur Choke Cherries</option>
                                        <option value="schuberts">Schubert Choke Cherries</option>
                                        <option value="gojis">Goji Berries</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label>Estimated Best Before</label>
                                    <input type="date" name="bestBeforeDate">

                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-4">
                                    <label for="inputState">Description</label>
                                    <input type="text" name="fruitDescription" class="form-control">
                                </div>
                            </div>

                            <hr>

                            <div class="form-group col-md-2">
                                <button type="submit" class="btn btn-primary">Submit</button>
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
                    Alex Ho, Chase Larocque, Justin Ikenouye
                </p>
            </div>
            <div class="col">
                <h6>Contact Information</h6>
            </div>
        </div>
    </div>
</body>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</html>