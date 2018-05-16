<?php

include("Database.php");



$username=$_POST['username'];
$password=$_POST['password'];



header("location: viewadmin.php");



$query=mysql_query("insert into user(username,password) values('$username','$password')");


?>

