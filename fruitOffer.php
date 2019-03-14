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
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="resources/css/vendor/bootstrap.css">
    <link rel="stylesheet" href="resources/css/app.css">

    <title>Fruit Picker's Offering Page</title>
</head>

<body>
    <div class="main-container">
        <div class="header row">
            <div class="col-3">
                <!-- FOR SPACING-->
            </div>

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
                <li class="divider-vertical"></li>
                <li class="nav-item active">
                    <a class="nav-link onPage disabled" href="fruitOffer.php">Offer Fruit</a>
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
            </ul>
        </nav>

        <br>
        
        <div class="body container">

            <h2> Offer Fruit </h2>
            <p>Fill out and submit this form to offer your fruit to other users</p>
            <hr>

            <form method="post" action="userPage.php" onsubmit = "alert('Offering Submitted!');"> <!--In future, we'll need to update this with a php scripts that redirects to userPage -->
                <div class="row">
                    <div class="form-group col-sm-10 col-md-8">
                        <label>Contact Name (Required)</label>
                        <input required type="text" name="contactName" class="form-control" placeholder = "John">     
                    </div>
                </div>
                <div class = "row">
                    <div class="form-group col-sm-5 col-md-4">
                        <label>Fruit (Required)</label>
                        <select required id="inputOfferFruit" class="form-control">
                            <option selected disabled hidden>Choose...</option>
                            <option value="apples">Apples</option>
                            <option value="crabapples">Crab Apples</option>
                            <option value="evans">Evans (Sour Cherries)</option>
                            <option value="pears">Pears</option>
                            <option value="saskatoons">Saskatoon Berries</option>
                            <option value="plums">Plums</option>
                            <option value="amurs">Amur (Choke Cherries)</option>
                            <option value="schuberts">Schubert (Choke Cherries)</option>
                            <option value="gojis">Goji Berries</option>
                        </select>
                        <small id="fruitHelp" class="form-text text-muted">Don't See Your Fruit? Contact Us Using the Feedback Page!</small>
                     </div>

                    <div class="form-group col-sm-5 col-md-4">
                        <label>Offer Until When? (Required) </label>
                        <input required type="date" name="offerUntilDate" class="form-control">
                        <small id="dateHelp" class="form-text text-muted">Select a Date Between Today - 30 Days From Now</small>
                    </div>
                </div>

                <div class = "row">
                    <div class="form-group col-sm-5 col-md-4">
                        <label>Contact Email</label>
                        <input required type="email" name="fruitEmail" class="form-control" placeholder="NAME@EMAIL.COM">
                    </div>
                    <div class="form-group col-sm-5 col-md-4">
                        <label>Contact Phone Number</label>
                        <input required type="tel" name="fruitNumber" minlength="10" maxlength="12" class="form-control" placeholder="123-123-1234">
                    </div>
                </div>

                <div class = "row" style = "margin-bottom: 20px;">
                    <div class = "col-md-8">
                        <h5>Either an Email Address or a Phone Number is Required</h5>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-sm-10 col-md-8">
                        <label>Description</label>
                        <textarea name="fruitDescription" class="form-control" rows="5" maxlength="300" placeholder = "Enter Any Additional Information Including: Type of Fruit | Time of Day | Special Requests When Picking Fruit"></textarea>
                    </div>
                </div>

                <hr>

                <div class="form-group col-2">
                    <button type="submit" class="btn btn-secondary btnGreen">Submit</button>
                </div>
                <br>
            </form>    


        </div><!--BODY CONTAINER-->

        <div class="footer">
            <div class="row">
                <div class="col">
                    Photo
                </div>
                <div class="col" id="footerCenter">  
                    <p> Designed February 01,2019<br>
                        Alex Ho, Chase Larocque, Justin Ikenouye
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
        </div> <!--FOOTER CONTAINER-->
    </div> <!--MAIN CONTAINER-->
</body>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->

<script
src="https://code.jquery.com/jquery-3.3.1.js"
integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<script src="resources/js/require1of2.js"></script> 
<script src="resources/js/limitDateOffer.js"></script> 
</html>