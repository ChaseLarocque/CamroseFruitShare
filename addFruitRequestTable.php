<?php
include 'DBConnect.php';
session_start();

$userId = $_SESSION['id'];
$fruitOffName = $_POST['fruitOffName'];
$reqDate = $_POST['reqDate'];

$sth = $pdo-> prepare("INSERT INTO fruit_request (userId, fruitReqName, offerDate)
		VALUES (?,?)");

$sth -> execute();
$pdo = null;
$sth = null:

header("location: userPage.php")

?>