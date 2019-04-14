<!--
fruitOffer.php
Alex Ho, Chase Larocque, Justin Ikenouye
AUCSC401 - Hidden Harvests of Camrose (Camrose Fruit picking website)
February 01, 2019


This page is a form for users to enter an offer for someone to pick their fruit
It allows them to enter details like what kind of fruit they have and how to contact them.
-->

<!doctype html>

<?php
    require "blockAccessIfNotLoggedIn.php";
    $offerId = $_GET['offerId'];
    require "getEditOfferData.php";
?>

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
                    <li class="nav-item active">
                        <a class="nav-link onPage disabled" href="fruitOffer.php">Edit Offer Fruit</a>
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
                <br>

                <h2> Edit Offered Fruit </h2>
                <p>Fill out and submit this form to offer your fruit to other users</p>
                <hr>

                <form method="post" action="editFruitOfferTable.php" onsubmit = "alert('Offering Edited!');">
                    <input type="hidden" name="offerId" value=<?php echo $offerId?>>
                    <div class="row"> 
                        <div class="form-group col-sm-12 col-md-12 col-lg-8">
                            <label>Contact Name (Required)</label>
                            <input required type="text" name="contactName" class="form-control" placeholder = "John" value = <?php echo $contactName;?>>     
                        </div>
                    </div>
                    <div class = "row">
                        <div class="form-group col-sm-12 col-md-6 col-lg-4">
                            <label>Fruit (Required)</label>
                            <select required id = "fruitVal" name="fruitOffName" class="form-control" >
                                <?php   
                                    include 'populateDropDown.php';
                                ?>
                            </select>
                            <small id="fruitHelp" class="form-text text-muted">Don't See Your Fruit? Contact Us Using the Feedback Page!</small>
                         </div>

                        <div class="form-group col-sm-12 col-md-6 col-lg-4">
                            <label>Offer Until When? (Required) </label>
                            <input required type="date" name="offerDate" class="form-control" value = <?php echo $offerDate;?>>
                            <small id="dateHelp" class="form-text text-muted">Select a Date Between Today - 30 Days From Now</small>
                        </div>
                    </div>

                    <div class = "row">
                        <div class="form-group col-sm-12 col-md-6 col-lg-4">
                            <label>Contact Email</label>
                            <input required type="email" name="contactEmail" class="form-control" placeholder="NAME@EMAIL.COM" value = <?php echo $contactEmail;?>>
                        </div>
                        <div class="form-group col-sm-12 col-md-6 col-lg-4">
                            <label>Contact Phone Number</label>
                            <input required type="tel" name="contactPhone" minlength="10" maxlength="12" class="form-control" placeholder="123-123-1234" value = <?php echo $contactPhone;?>>
                        </div>
                    </div>

                    <div class = "row" style = "margin-bottom: 20px;">
                        <div class = "col-12">
                            <h5>Either an Email Address or a Phone Number is Required</h5>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-sm-12 col-md-12 col-lg-8">
                            <label>Description</label>
                            <textarea name="description" class="form-control" rows="5" maxlength="300" placeholder = "Enter Any Additional Information Including: The Type of Fruit, What Time of Day to Pick, or Other Special Requests for the Fruit Pickers"><?php echo $description;?></textarea>
                        </div>
                    </div>

                    <hr>

                    <div class="form-group col-2">
                        <button type="submit" class="btn btn-secondary btnGreen">Submit</button>
                    </div>
                    <br>
                </form>    


            </div><!--BODY CONTAINER-->

            <div class="bodyFooterSpacing"><!--Creates spacing for footer in mobile view (CSS)-->
            </div>

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
    src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
    <script src="resources/js/require1of2.js"></script> 
    <script src="resources/js/limitDateOffer.js"></script>
    <script type="text/javascript">
    var selectFruit = "<?php echo $fruitOffName; ?>";
    </script>
    <script src="resources/js/editDropDownSelect.js"></script> 
</html>