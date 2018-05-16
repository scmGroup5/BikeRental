<?php

include("Database.php");

extract ( $_POST );



$query = "UPDATE cruishbike SET Asogo= '$quantity', Garion='$quantity2', Electric= '$quantity3', Apollo= '$quantity4' WHERE ID = '$id'";

$result = mysql_query($query, $conn) or die ("Could not execute query in database");
if($result)
{
 echo "<script type='text/javascript'>window.location='viewbikes.php' </script>";
}
?>