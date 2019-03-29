<?php
	//Start session to get the session (user) id	
	session_start();
function makeOfferDisplay(){
	//Connect to the DB
	require 'DBConnect.php';
	//Set session id to the user's session id
	$sessionId = $_SESSION['id'];	
	echo "<table class=table>
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
	foreach ($pdo -> query($sql) as $row){
		$buttonId = $row['offerId'];
		echo "<tr>";
		echo "<td align=center> <h5>" . $row['contactName'] ."</h5></td>";
		echo "<td align=center><h5>" . $row['fruitOffName'] ."</h5></td>";
		echo "<td align=center><h5>" . $row['offerDate'] ."</h5></td>";
		echo "<td align=center><h5>" . $row['contactEmail'] ."</h5></td>";
		echo "<td align=center><h5>" . $row['contactPhone'] ."</td>";
		echo "<td align=center><h5>" . $row['description'] ."</h5></td>";
		echo "<td align=center><button type='button' class='btn btn-secondary btnRed' round value =". $buttonId . " onclick>DELETE</button></td>";
	}
	echo "</table>";
unset($pdo);
unset($sql);
}

function makeRequestDisplay(){
	//Connect to the DB
	require 'DBConnect.php';
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
	$sql = "SELECT requestName, requestDate FROM fruit_request WHERE userId = $sessionId";
	foreach ($pdo -> query($sql) as $row){
		echo "<tr>";
		echo "<td align=center>" . $row['requestName'] ."</td>";
		echo "<td align=center>" . $row['requestDate'] ."</td>";
	}
	echo "</table>";
unset($pdo);
unset($sql);
}
?>