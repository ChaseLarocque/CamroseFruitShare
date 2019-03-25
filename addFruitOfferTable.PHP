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

$sql = $pdo-> prepare("INSERT INTO fruit_offer (userId, contactName, fruitOffName, offerDate, contactEmail, contactPhone, description)
		VALUES (?,?,?,?,?,?,?)");
$sql->bindParam(1, $userId, PDO::PARAM_STR, 50);
$sql->bindParam(2, $contactName, PDO::PARAM_STR, 50);
$sql->bindParam(3, $fruitOffName, PDO::PARAM_STR, 50);
$sql->bindParam(4, $offerDate, PDO::PARAM_STR, 10);
$sql->bindParam(5, $contactEmail, PDO::PARAM_STR, 50); #Could be coming across as null?
$sql->bindParam(6, $contactPhone, PDO::PARAM_STR, 12);
$sql->bindParam(7, $description, PDO::PARAM_STR, 10000);	

$sql -> execute();
$sql = null;
$pdo = null;
header("location: userPage.php")

?>