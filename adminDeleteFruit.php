<?php
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