<?php

include 'DBConnect.php';

$contactName = $_POST['contactName'];
$fruitOffName = $_POST['fruitOffName'];
$offerDate = $_POST['offerDate'];
$contactEmail = $_POST['contactEmail'];
$contactPhone = $_POST['contactPhone'];
$description = $_POST['description'];

$sql = "INSERT INTO fruit_offer (contactName, fruitOffName, offerDate, contactEmail, contactPhone, description)
		VALUES ('$contactName', '$fruitOffName', '$offerDate', '$contactEmail', $contactPhone, '$description')";
$pdo -> exec($sql);
$pdo = null;
header("location: userPage.php")

?>