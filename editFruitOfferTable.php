<?php
/**
editFruitOfferTable.php
Alex Ho, Chase Larocque, Justin Ikenouye
AUCSC401 - Hidden Harvests of Camrose (Camrose Fruit picking website)
April 11, 2019

This php file contains SQL query code that is initialized through HTML executed through PHP and will edit (UPDATE) a fruit offering in the fruit_offer table in the database
**/

require 'DBConnect.php'; //require the database - ensuring nothing is executed unless connection to DB is established

session_start();

//userId is pulled from the session as user is logged in
$userId = $_SESSION['id'];

//variables initialized through the form from the editSubmissionPage.php and connecting the variable to be put into the database
$offerId = $_POST['offerId'];
$newContactName = $_POST['contactName'];
$newFruitOffName = $_POST['fruitOffName'];
$newOfferDate = $_POST['offerDate'];
$newContactEmail = $_POST['contactEmail'];
$newContactPhone = $_POST['contactPhone'];
$newDescription = $_POST['description'];

//SQL querry to be executed
$sql = $pdo-> prepare("UPDATE fruit_offer 
						SET 
							contactName = ?,
							fruitOffName = ?,
							offerDate = ?,
							contactEmail = ?,
							contactPhone = ?,
							description = ?
						WHERE (userId = ? AND offerId = ?)
					");

//Bind parameters to ensure injected code will not be possible adding more security to the website
$sql->bindParam(1, $newContactName, PDO::PARAM_STR, 50);
$sql->bindParam(2, $newFruitOffName, PDO::PARAM_STR, 50);
$sql->bindParam(3, $newOfferDate, PDO::PARAM_STR, 10);
$sql->bindParam(4, $newContactEmail, PDO::PARAM_STR, 50);
$sql->bindParam(5, $newContactPhone, PDO::PARAM_STR, 12);
$sql->bindParam(6, $newDescription, PDO::PARAM_STR, 10000);
$sql->bindParam(7, $userId, PDO::PARAM_STR, 50);
$sql->bindParam(8, $offerId, PDO::PARAM_STR, 50);	

//execute the SQL code
$sql -> execute();

//nullify $sql and $pdo to erase code from memory
$sql = null;
$pdo = null;

//redirect to the userPage
header("location: userPage.php")
?>
