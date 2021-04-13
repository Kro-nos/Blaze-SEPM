<?php
//LOGOUT.PHP

session_start();
unset($_SESSION["username"]);
unset($_SESSION["password"]);
//header("Location:user_login.php");
//// destroy all $_SESSION variables
session_destroy();
setcookie (session_name(), '', time()-3600);


echo "<script>alert('You have successfully logged out.')</script>";
echo "<script>window.open('index.php','_self')</script>";

?>
