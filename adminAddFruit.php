<?php
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