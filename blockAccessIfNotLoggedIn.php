<?php
/*
blockAccessIfNotLoggedIn.php
Alex Ho, Chase Larocque, Justin Ikenouye
AUCSC401 - Hidden Harvests of Camrose (Camrose Fruit picking website)
March 27, 2019

Used in all pages for when a regular user is logged in to block those who are not logged in
*/

session_start();

if(!isset($_SESSION['username'])){
   header("Location:index.php");
}//if

?> 