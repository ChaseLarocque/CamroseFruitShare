<?php
include 'DBConnect.php';
session_start();
$sessionId = $_SESSION['id'];
$sql = "SELECT userId, contactName, fruitOffName, offerDate, contactEmail, contactPhone, description
		FROM fruit_offer
		WHERE userId = $sessionId";
$q = $pdo -> exec($sql);
	
//$q->setFetchMode(PDO::FETCH_ASSOC);
echo $sessionId;
echo $q;
?>