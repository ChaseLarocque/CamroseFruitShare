<?php
$user = "root";
$pass = "";
//$dbh = new PDO('mysql:host=localhost;dbname=fruitpickers', $user, $pass);

include 'DBConnect.php';
session_start();
$sessionId = $_SESSION['id'];

$sth = $pdo->prepare("SELECT contactName, fruitOffName, offerDate, contactEmail, contactPhone, description FROM fruit_offer WHERE userId = $sessionId");

$sth->execute();
$result = $sth-> fetchAll();
print($sessionId);
print_r($result);

?>