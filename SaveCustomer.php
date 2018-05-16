<?php
include("Database.php");// database connection details stored here


$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];


$query=mysql_query("insert into signup(Username,Email,Password)
 values('$username','$email','$password')");

header("location: index.php");

?>
