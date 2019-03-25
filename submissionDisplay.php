<?php

function makeOfferDisplay(){
//connect to the Database
	include 'DBConnect.php';
	//Start session to get the session (user) id
	session_start();
	//Set session id to the user's session id
	$sessionId = $_SESSION['id'];
	echo "<table class=table>
	<thead>
		<tr>
		<th > <b>Name</b></th>
		<th ><b>Fruit Offered</b></th>
		<th ><b>Offer Until Date</b></th>
		<th ><b>Contact Email</b></td></th>
		<th r><b>Contact Phone Number</b></th>
		<th ><b>Description</b></th>
		</tr>
		</thead>";
	//sql statement that will be executed
	$sql = "SELECT offerId, contactName, fruitOffName, offerDate, contactEmail, contactPhone, description FROM fruit_offer WHERE userId = $sessionId";
	foreach ($pdo -> query($sql) as $row){
		echo "<tr>";
		echo "<td align=center>" . $row['contactName'] ."</td>";
		echo "<td align=center>" . $row['fruitOffName'] ."</td>";
		echo "<td align=center>" . $row['offerDate'] ."</td>";
		echo "<td align=center>" . $row['contactEmail'] ."</td>";
		echo "<td align=center>" . $row['contactPhone'] ."</td>";
		echo "<td align=center>" . $row['description'] ."</td>";
	}
	echo "</table";
	$sql = null;
	$pdo = null;
}

function makeRequestDisplay(){
//connect to the Database
	include 'DBConnect.php';
	//Start session to get the session (user) id
	session_start();
	//Set session id to the user's session id
	$sessionId = $_SESSION['id'];
	echo "<table class=table>
	<thead>
		<tr>
		<th ><b>Fruit Requested</b></th>
		<th ><b>Request Until Date</b></th>
		</tr>
		</thead>";
	//sql statement that will be executed
	$sql = "SELECT fruitReqName, reqDate FROM fruit_request WHERE userId = $sessionId";
	foreach ($pdo -> query($sql) as $row){
		echo "<tr>";
		echo "<td align=center>" . $row['fruitReqName'] ."</td>";
		echo "<td align=center>" . $row['reqDate'] ."</td>";
	}
	echo "</table";
	$sql = null;
	$pdo = null;
}









?>