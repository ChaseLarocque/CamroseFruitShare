<?php
/*
blockAccessToAdminPage.php
Alex Ho, Chase Larocque, Justin Ikenouye
AUCSC401 - Hidden Harvests of Camrose (Camrose Fruit picking website)
March 27, 2019

Blocks regular users from entering the admin page
*/

session_start();

if($_SESSION['username'] != 'chaselarocque@gmail.com'){
   header("Location:index.php");
}//if

?> 