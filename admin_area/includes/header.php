
<?php
session_start();
include("include/db.php");
if(!isset($_SESSION['admin_email'])){
	echo "<script>window.open('login.php','_self')</script>";
	
}else{
	
	


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>First_project</title>
    <link rel="stylesheet" href="css/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>