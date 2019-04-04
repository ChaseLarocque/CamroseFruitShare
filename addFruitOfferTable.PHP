<?php
/**
	AUCSC401 - Hidden Harvests of Camrose (Camrose Fruit picking website)

	March 31, 2019

	addFruitOfferTable.php

	This php file contains SQL query code that is executed through HTML and will post a fruit offering to the fruit_offer table in the database
**/

require 'DBConnect.php'; //require the database - ensuring nothing is executed unless connection to DB is established

session_start();

//userId is pulled from the session as user is logged in
$userId = $_SESSION['id'];

//variables initialized through the form from the fruitOffer.php and connecting the variable to be put into the database
$contactName = $_POST['contactName'];
$fruitOffName = $_POST['fruitOffName'];
$offerDate = $_POST['offerDate'];
$contactEmail = $_POST['contactEmail'];
$contactPhone = $_POST['contactPhone'];
$description = $_POST['description'];

//SQL querry to be executed
$sql = $pdo-> prepare("INSERT INTO fruit_offer (userId, contactName, fruitOffName, offerDate, contactEmail, contactPhone, description)
		VALUES (?,?,?,?,?,?,?)");

//Bind parameters to ensure injected code will not be possible adding more security to the website
$sql->bindParam(1, $userId, PDO::PARAM_STR, 50);
$sql->bindParam(2, $contactName, PDO::PARAM_STR, 50);
$sql->bindParam(3, $fruitOffName, PDO::PARAM_STR, 50);
$sql->bindParam(4, $offerDate, PDO::PARAM_STR, 10);
$sql->bindParam(5, $contactEmail, PDO::PARAM_STR, 50);
$sql->bindParam(6, $contactPhone, PDO::PARAM_STR, 12);
$sql->bindParam(7, $description, PDO::PARAM_STR, 10000);	

//execute the SQL code
$sql -> execute();

//nullify $sql and $pdo to erase code from memory
$sql = null;
$pdo = null;

//redirect to the userPage
header("location: userPage.php")
?>
