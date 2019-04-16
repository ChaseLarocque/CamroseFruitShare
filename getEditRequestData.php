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
//userId is pulled from the session as user is logged in
$userId = $_SESSION['id'];

//initialize the array to be sent back
$return_arr = array();

$sql = "SELECT * FROM fruit_request WHERE requestId = $requestId AND userId = $userId";

foreach ( $pdo -> query($sql) as $result){

	$requestName = $result['requestName'];
	$requestDate = $result['requestDate'];

}

?>