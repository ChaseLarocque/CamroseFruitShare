<?php
/**
addFruitRequestTable.css
Alex Ho, Chase Larocque, Justin Ikenouye
AUCSC401 - Hidden Harvests of Camrose (Camrose Fruit picking website)
March 31, 2019

This php file contains SQL query code that is executed through PHP and initialized via HTML and will post a fruit request to the fruit_request table in the database
**/

require 'DBConnect.php'; //require the database - ensuring nothing is executed unless connection to DB is established

session_start();
//userId is pulled from the session as user is logged in
$userId = $_SESSION['id'];

//variables initialized through the form from the fruitRequest.php and connecting the variable to be put into the database
$requestName = $_POST['requestFruit1'];
$requestDate = $_POST['requestDate1'];

//SQL querry to be executed
$sql = $pdo-> prepare("INSERT INTO fruit_request (userId, requestName, requestDate)
		VALUES (?,?,?)");

//Bind parameters to ensure injected code will not be possible adding more security to the website
$sql->bindParam(1, $userId, PDO::PARAM_STR, 50);
$sql->bindParam(2, $requestName, PDO::PARAM_STR, 50);
$sql->bindParam(3, $requestDate, PDO::PARAM_STR, 10);

//execute the SQL code
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


//nullify $sql and $pdo to erase code from memory
$pdo = null;

//redirect to the userPage
header("location: userPage.php")
?>
