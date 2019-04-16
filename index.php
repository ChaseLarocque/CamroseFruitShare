<!--
index.php
Alex Ho, Chase Larocque, Justin Ikenouye
AUCSC401 - Hidden Harvests of Camrose (Camrose Fruit picking website)
February 01, 2019


This is the very first web page that will be displayed when a user is trying to access the
website. This will display information about the project and have some basic information that
will be available to all users. It also contains the login button.
-->

<!doctype html>

<?php
    include "skipIndexIfLoggedIn.php";
?>

<html class="no-js" lang="en" dir="ltr">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="resources/css/vendor/bootstrap.css">
        <link rel="stylesheet" href="resources/css/app.css">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Catamaran" rel="stylesheet">      
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <title>Hidden Harvest of Camrose</title>
    </head>
     
    <body>
        <div class = "main-container">
        	<div class="header row">
        		<div class="col-xs-0 col-sm-2"></div>
        		<div class="col-xs-12 col-sm-8 my-auto">
        	    	<h1 id = "title">
        	           Hidden Harvests of Camrose
        	     	</h1>
        	    </div>
        		<div class="col-xs-12 col-sm-2 logButton my-auto">
        			<h4>
        				<a href="login.php" class="btn btn-secondary" role="button">Login</a>
        			</h4>
        		</div>	
          	</div> <!--header row-->

            <br>

        	<div class="body container">
        		<div class="row">
        			<div class="col">
                        <br>
        				<h2> Who We Are </h2>
                        <hr>
                        <div id="indexText">   
                            <div class="row">
                                <div class="col-sm-12 col-md-6">
                                    <h4>
                                        Money may not grow on trees, but fruit absolutely does and you may have some in your own backyard!
                                        <br>
                                        <br>
                                        <br>
                                    </h4>
                                    <h4>
                                        This website has been designed to connect local fruit tree growers with local fruit pickers in an effort to increase awareness around locally grown food, while connecting people to build community around the theme of urban food.
                                        <br>
                                    </h4>
                                </div>
            
                                <div class="col-sm-12 col-md-6">
                                    <img src="resources/images/sampleAppleTree.jpg" class="rounded float-right">
                                </div>
                            </div>
                            
                            <div class="row">

                                <div class="col-sm-12 col-md-6">
                                    <img src="resources/images/photo2.jpg" class="rounded float-left">
                                </div>

                                <div class="col-sm-12 col-md-6">

                                    <h5>
                                        Do you have a fruit tree that you don’t have the time or the energy to harvest? Are there more berries than you can handle? Do you want to share your fruit tree with members of your community? If the answer is yes, Camrose Hidden Harvest can help! By signing up on this website and indicating availability and type of fruit, pickers in the local community can indicate their interest and can contact you to arrange fruit picking.<br>
                                    </h5>
                                    <br>
                                    <h5>
                                        Our sustainable food project is focused on supporting one potential pillar of a more sustainable local food network in Camrose, and we need your help to build connections and grow community. If you are interested, please sign up as a fruit grower/picker by clicking the login button in the top right. If you have any questions, please send them to Dr. Greg King.
                                    </h5>
                                    <br>
                                </div>
                            </div>
                        </div>
        			</div>
        		</div>
        	</div> <!--body container-->

            <div class="bodyFooterSpacing"></div><!--Creates spacing for footer in mobile view (CSS)-->

        	<div class="footer">
            	<div class="row">
                	<div class="col">
                  		Photo
                	</div>
                	<div class="col" id="footerCenter">  
                		<p>
                    		Designed February 01,2019<br>
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
            </div> <!--footer-->

        </div> <!--main-container-->
    </body>
</html>