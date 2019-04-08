<?php  
/**
editSubmission.php
Alex Ho, Chase Larocque, Justin Ikenouye
AUCSC401 - Hidden Harvests of Camrose (Camrose Fruit picking website)
April 07, 2019

This php file contains the set of code that will execute an SQL query to SELECT a row from
the fruit_offer table in the Database and will be returned to populate the fruit offer page with the returned information. 
**/

/*------------------------------------------------------------------------------------------*/


require 'DBConnect.php'; //Connect to the DB

$offerId = $_REQUEST['offerId'];

$sql = $pd -> prepare ("SELECT * FROM fruit_offer WHERE offerId = ?");

$sql -> bindParam(1, $offerId, PDO::PARAM_STR, 50); // Bind Parameter $offerId to STR(50) (more secure)

$sql -> execute();



?>