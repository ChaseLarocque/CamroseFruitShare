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
session_start();

//userId is pulled from the session as user is logged in
$userId = $_SESSION['id'];

$offerId = $_REQUEST['offerId'];

//initialize the array to be sent back
$return_arr = array();

$sql = "SELECT * FROM fruit_offer WHERE offerId = ? AND userId = ?";

$sql -> bindParam(1, $offerId, PDO::PARAM_STR, 50); // Bind Parameter $offerId to STR(50) (more secure)
$sql -> bindParam(2, $userId, PDO::PARAM_STR, 50); // Bind Parameter $offerId to STR(50) (more secure)

for ($pdo -> query($sql) as $row){
	
	//variables to be put in the array to pass back to JS
	$contactName = $row['name'];
	$fruitOffName = $row['fruitOffName'];
	$offerDate = $row['offerDate'];
	$contactEmail = $row['contactEmail'];
	$contactPhone = $row['contactPhone'];
	$description = $row['description'];
	$return_arr[] = array(
					"contactName => $contactName",
					"fruitOffName => $fruitOffName",
					"offerDate => $offerDate",
					"contactEmail => $contactEmail",
					"contactPhone => $contactPhone",
					"description => $description");
}

echo json_encode($return_arr);

?>