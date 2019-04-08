<?php 
/**
AUCSC401 - Hidden Harvests of Camrose (Camrose Fruit picking website)

March 31, 2019

deleteSubmission.php

This php file contains the set of code that will execute an SQL query to delete a row from
the fruit_offer or fruit_request code
**/

/*------------------------------------------------------------------------------------------*/

require 'DBConnect.php'; //Connect to the DB
$action = '';
$action = $_POST['action'];

if($action == 'deleteOffer'){ //Check if action is deleteOffer from ajax

	$offerId = $_REQUEST['offerId'];

	$sql = $pdo->prepare( "DELETE FROM fruit_offer 
		WHERE  offerId = ?"); // Prepare the SQL Query 

	$sql -> bindParam(1, $offerId, PDO::PARAM_STR, 50); // Bind Parameter $offerId to STR(50) (more secure)

	$sql -> execute();

	$pdo = null; //Set $pdo & $sql to null (more secure)
	$sql = null;
	}// if

if($action == 'deleteRequest'){ //Check if action is deleteRequest from ajax

	$requestId = $_REQUEST['requestId'];

	$sql = $pdo->prepare( "DELETE FROM fruit_request 
		WHERE  requestId = ?"); //preparing sql statement to execute

	$sql -> bindParam(1, $requestId, PDO::PARAM_STR, 50); //Bind parameter $requestId to STR(50) (More Secure)

	$sql -> execute();

	$pdo = null; //Set $pdo & $sql to null (more secure)
	$sql = null;
	}//if
?>