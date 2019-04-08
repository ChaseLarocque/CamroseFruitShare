<?php
/*
adminAddFruit.php
Alex Ho, Chase Larocque, Justin Ikenouye
AUCSC401 - Hidden Harvests of Camrose (Camrose Fruit picking website)

This file is for the admin to add fruit to the database
*/

include 'DBConnect.php';
session_start();

$newFruit = $_POST['addFruitToDB'];

$sql = $pdo-> prepare("INSERT INTO fruit (fruitName)
		VALUES (?)");

$sql->bindParam(1, $newFruit, PDO::PARAM_STR, 50);
$sql -> execute();

$pdo = null;
$sql = null;

header("location: adminPage.php")

?>