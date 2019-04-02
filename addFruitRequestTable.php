<?php
include 'DBConnect.php';
session_start();

$userId = $_SESSION['id'];
$requestName = $_POST['requestFruit1'];
$requestDate = $_POST['requestDate1'];

$sql = $pdo-> prepare("INSERT INTO fruit_request (userId, requestName, requestDate)
		VALUES (?,?,?)");

$sql->bindParam(1, $userId, PDO::PARAM_STR, 50);
$sql->bindParam(2, $requestName, PDO::PARAM_STR, 50);
$sql->bindParam(3, $requestDate, PDO::PARAM_STR, 10);
$sql -> execute();
$sql = null;


if($_POST['requestFruit2'] != NULL && $_POST['requestDate2'] != NULL){
	$requestName = $_POST['requestFruit2'];
	$requestDate = $_POST['requestDate2'];

	$sql = $pdo-> prepare("INSERT INTO fruit_request (userId, requestName, requestDate)
			VALUES (?,?,?)");

	$sql->bindParam(1, $userId, PDO::PARAM_STR, 50);
	$sql->bindParam(2, $requestName, PDO::PARAM_STR, 50);
	$sql->bindParam(3, $requestDate, PDO::PARAM_STR, 10);
	$sql -> execute();
	$sql = null;
}

if($_POST['requestFruit3'] != NULL && $_POST['requestDate3'] != NULL){
	$requestName = $_POST['requestFruit3'];
	$requestDate = $_POST['requestDate3'];

	$sql = $pdo-> prepare("INSERT INTO fruit_request (userId, requestName, requestDate)
			VALUES (?,?,?)");

	$sql->bindParam(1, $userId, PDO::PARAM_STR, 50);
	$sql->bindParam(2, $requestName, PDO::PARAM_STR, 50);
	$sql->bindParam(3, $requestDate, PDO::PARAM_STR, 10);
	$sql -> execute();
	$sql = null;
}


$pdo = null;

header("location: userPage.php")

?>
