<?php
/**
editFruitRequstTable.php
Alex Ho, Chase Larocque, Justin Ikenouye
AUCSC401 - Hidden Harvests of Camrose (Camrose Fruit picking website)
April 13, 2019

This php file contains SQL query code that is initialized through HTML executed through PHP and will edit (UPDATE) a fruit request in the fruit_request table in the database
**/

require 'DBConnect.php'; //require the database - ensuring nothing is executed unless connection to DB is established

session_start();

//userId is pulled from the session as user is logged in
$userId = $_SESSION['id'];

//variables initialized through the form from the editSubmissionPage.php and connecting the variable to be put into the database
$requestId = $_POST['requestId'];
$newRequestFruit = $_POST['requestFruit'];
$newRequestDate = $_POST['requestDate'];

//SQL querry to be executed
$sql = $pdo-> prepare("UPDATE fruit_request 
						SET 
							requestName = ?,
							requestDate = ?
						WHERE (userId = ? AND requestId = ?)"
					);

//Bind parameters to ensure injected code will not be possible adding more security to the website

$sql->bindParam(1, $newRequestFruit, PDO::PARAM_STR, 50);
$sql->bindParam(2, $newRequestDate, PDO::PARAM_STR, 10);
$sql->bindParam(3, $userId, PDO::PARAM_STR, 50);
$sql->bindParam(4, $requestId, PDO::PARAM_STR, 50);	

//execute the SQL code
$sql -> execute();

//nullify $sql and $pdo to erase code from memory
$sql = null;
$pdo = null;

//redirect to the userPage
header("location: userPage.php")
?>
