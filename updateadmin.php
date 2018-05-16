<?php

include("Database.php");

extract ( $_POST );



$query = "UPDATE user SET username= '$username',password= '$password' WHERE id = '$id'";

$result = mysql_query($query, $conn) or die ("Could not execute query in updateadmin.php");
if($result)
{
 echo "<script type='text/javascript'>window.location='viewusers.php' </script>";
}
?>