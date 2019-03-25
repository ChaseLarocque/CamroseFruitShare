<?php
//connect to the Database
include 'DBConnect.php';
//Start session to get the session (user) id
session_start();
//Set session id to the user's session id
$sessionId = $_SESSION['id'];
//prepare the sqlQuery
$sth = $pdo->prepare("SELECT contactName, fruitOffName, offerDate, contactEmail, contactPhone, description FROM fruit_offer WHERE userId = $sessionId");
//execute the sql query that is set to $sth
$sth->execute();
//set all data from sql query to $result
$result = $sth-> fetchAll();
//test result
print_r($result);
?>