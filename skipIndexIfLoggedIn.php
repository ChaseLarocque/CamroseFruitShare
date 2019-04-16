<?php
/*
skippedIndexIfLoggedIn.php
Alex Ho, Chase Larocque, Justin Ikenouye
AUCSC401 - Hidden Harvests of Camrose (Camrose Fruit picking website)
March 27, 2019

Takes users to userPage.php from index.php if they are already logged in
*/

session_start();

if(isset($_SESSION["loggedin"])){
    header("location: userPage.php");
}//if

?>