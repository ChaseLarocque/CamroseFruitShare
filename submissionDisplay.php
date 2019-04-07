<!--
submissionDisplay.php
Alex Ho, Chase Larocque, Justin Ikenouye
AUCSC401 - Hidden Harvests of Camrose (Camrose fruit picking website)
March 24, 2019


This file contains the code that dynamically creates the tables for a user's 
current fruit being offered, currently requesting, and matched from requested
on the userPage.php.
-->
<?php

//Start session to get the session (user) id	
session_start();

//this here to block access if not logged in
if(!isset($_SESSION['username'])){
   header("Location:index.php");
}//if

//require the deletesubmission.php on server side to ensure higher security
require 'deleteSubmission.php';

function makeOfferDisplay(){
	
	//Connect to the DB
	require 'DBConnect.php';
	
	//Set session id to the user's session id
	$sessionId = $_SESSION['id'];

	//echo - creates the display from server side
	echo 
	"<table class=table>
	<thead>
		<tr>
		<th ><h4><b>Name</b></h4></th>
		<th ><h4><b>Fruit Offered</b></h4></th>
		<th ><h4><b>Offer Until Date</b></h4></th>
		<th ><h4><b>Contact Email</b></td></h4></th>
		<th ><h4><b>Contact Phone Number</b></h4></th>
		<th ><h4><b>Description</b></h4></th>
		</tr>
	</thead>";

	//sql statement that will be executed
	$sql = "SELECT offerId, contactName, fruitOffName, offerDate, contactEmail, contactPhone, description FROM fruit_offer WHERE userId = $sessionId";

	//dynamically create a row for each row in DB
	foreach ($pdo -> query($sql) as $row){
		$buttonId = $row['offerId'];
		
		echo 
		"<tr>
			<td align=center><h5>" . $row['contactName'] . "</h5></td>
			<td align=center><h5>" . $row['fruitOffName'] . "</h5></td>
			<td align=center><h5>" . $row['offerDate'] . "</h5></td>
			<td align=center><h5>" . $row['contactEmail'] . "</h5></td>
			<td align=center><h5>" . $row['contactPhone'] . "</td>
			<td align=center><h5>" . $row['description'] . "</h5></td>
			<td align=center><button type='button' id= '" . $buttonId . "'class='btn btn-secondary btnRed' onclick ='confirmOfferDelete($buttonId)'> DELETE </button></td>
		</tr>";
	}//foreach 

	echo "</table>";

	unset($pdo); //unset $pdo & $sql from memory 
	unset($sql);
}//makeOfferDisplay()

function makeRequestDisplay(){

	//Connect to the DB
	require 'DBConnect.php';
	
	//Set session id to the user's session id
	$sessionId = $_SESSION['id'];	
	
	echo 
	"<table class=table>
	<thead>
		<tr>
			<th ><b>Fruit Requested</b></th>
			<th ><b>Request Until Date</b></th>
		</tr>
	</thead>";

	//sql statement that will be executed
	$sql = "SELECT requestId, requestName, requestDate FROM fruit_request WHERE userId = $sessionId";
	foreach ($pdo -> query($sql) as $row){
		$buttonId = $row['requestId'];

		echo 
		"<tr>
			<td align=center>" . $row['requestName'] . "</td>
			<td align=center>" . $row['requestDate'] . "</td>
			<td align=center><button type='button' id= '" . $buttonId . "'class='btn btn-secondary btnRed' onclick ='confirmRequestDelete($buttonId)'> DELETE </button></td>
		</tr>";
	}//foreach

	echo "</table>";

	unset($pdo);
	unset($sql);
}//makeRequestDisplay()


function makeMatchesDisplay(){

	//Connect to the DB
	require 'DBConnect.php';
	
	//Set session id to the user's session id
	$sessionId = $_SESSION['id'];	
	
	echo
	"<table class=table>
	<thead>
		<tr>
			<th ><b>Contact Name</b></th>
			<th ><b>Fruit Matched</b></th>
			<th ><b>Available Until Date</b></th>
			<th ><b>Contact Email</b></th>
			<th ><b>Contact Phone</b></th>
			<th ><b>Description</b></th>
		</tr>
	</thead>";

	//sql statement that will be executed
	$sql = "SELECT contactName, fruitOffName, offerDate, contactEmail, contactPhone, description FROM fruit_offer WHERE fruitOffName IN (SELECT requestName FROM fruit_request WHERE userId = $sessionId) AND NOT userId = $sessionId";


	foreach ($pdo -> query($sql) as $row){

		echo 
		"<tr>
			<td align=center>" . $row['contactName'] .	"</td>
			<td align=center>" . $row['fruitOffName'] . "</td>
			<td align=center>" . $row['offerDate'] . "</td>
			<td align=center>" . $row['contactEmail'] . "</td>
			<td align=center>" . $row['contactPhone'] . "</td>
			<td align=center>" . $row['description'] . "</td>
		</tr>";
	}//foreach

	echo "</table>";

	unset($pdo);
	unset($sql);
}//makeMatchesDisplay()

?>
<script src="resources/js/deleteButtonFunc.js"></script> 