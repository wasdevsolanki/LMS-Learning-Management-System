<?php  
session_start();
unset($_SESSION['first_name']);
unset($_SESSION['last_name']);
unset($_SESSION['user_id']);
unset($_SESSION['user_role_id']);

header("location:login.php");

?>