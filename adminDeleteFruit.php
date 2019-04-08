<?php
/*
adminAddFruit.php
Alex Ho, Chase Larocque, Justin Ikenouye
AUCSC401 - Hidden Harvests of Camrose (Camrose Fruit picking website)

This file is for the admin to delete fruit to the database
*/

include 'DBConnect.php';
session_start();
$deleteFruit = $_POST['deleteFruitDB'];


$sql = $pdo-> prepare("DELETE FROM fruit WHERE fruitName = ?");
$sql -> bindParam(1, $deleteFruit, PDO::PARAM_STR, 50);
$sql -> execute();

$pdo = null;
$sql = null;

header("location: adminPage.php");
?>