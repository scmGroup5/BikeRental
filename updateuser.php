<?php

include("Database.php");

extract ( $_POST );



$query = "UPDATE signup SET Username= '$username', Email='$email', Password= '$password' WHERE ID = '$id'";

$result = mysql_query($query, $conn) or die ("Could not execute query in updateuser.php");
if($result)
{
 echo "<script type='text/javascript'>window.location='bookinglist.php' </script>";
}
?>