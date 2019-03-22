<?php
include 'DBConnect.php';
session_start();

$userId = $_SESSION['id'];
$contactName = $_POST['contactName'];
$fruitOffName = $_POST['fruitOffName'];
$offerDate = $_POST['offerDate'];
$contactEmail = $_POST['contactEmail'];
$contactPhone = $_POST['contactPhone'];
$description = $_POST['description'];

$sth = $pdo-> prepare("INSERT INTO fruit_offer (userId, contactName, fruitOffName, offerDate, contactEmail, contactPhone, description)
		VALUES ('$userId', '$contactName', '$fruitOffName', '$offerDate', '$contactEmail', $contactPhone, '$description')");
$sth -> execute();
$sth = null;
header("location: userPage.php")

?>