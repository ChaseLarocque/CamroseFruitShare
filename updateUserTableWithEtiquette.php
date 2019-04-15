<!--
updateUserTableWithEtiquette.php
Alex Ho, Chase Larocque, Justin Ikenouye
AUCSC401 - Hidden Harvests of Camrose (Camrose Fruit picking website)
February 01, 2019


This file is for updating the entry in the user table when the user agrees to the etiquette
-->


<?php

if($_SERVER["REQUEST_METHOD"] === "POST"){
	session_start();

	if(isset($_SESSION['username'])){
		$userNameToEdit = $_SESSION['username'];
	}else{
		$userNameToEdit = $_SESSION['userNameCheck'];
	}

	$sql = "UPDATE users SET agreed_to_etiquette = 1 WHERE username = :username";

	if($stmt = $pdo->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bindParam(":username", $userNameToEdit, PDO::PARAM_STR);
	}
	if($stmt->execute()){
		$_SESSION['agreed_to_etiquette'] = 1;
	}else{
		echo "Oops! Something went wrong. Please try again later.";
	}//else	
	unset($stmt);
	unset($pdo);
	header("location: userPage.php");

}

?>