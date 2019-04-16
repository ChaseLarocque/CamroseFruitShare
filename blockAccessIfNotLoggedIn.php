<?php
/*
blockAccessIfNotLoggedIn.php
Alex Ho, Chase Larocque, Justin Ikenouye
AUCSC401 - Hidden Harvests of Camrose (Camrose Fruit picking website)
March 27, 2019

Used in all pages for when a regular user is logged in to block those who are not logged in
*/
if(!isset($_SESSION)){ 
    session_start(); 
} 

if(!isset($_SESSION['username'])){
   header("Location:login.php");

}else if($_SESSION['agreed_to_etiquette'] == 0){
	header("Location: etiquette.php");
}
?> 