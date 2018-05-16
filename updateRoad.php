<?php

include("Database.php");

extract ( $_POST );



$query = "UPDATE roadbike SET Polygon1= '$quantity', Polygon2='$quantity2', Polygon3= '$quantity3', Polygon4= '$quantity4' WHERE ID = '$id'";

$result = mysql_query($query, $conn) or die ("Could not execute query in database");
if($result)
{
 echo "<script type='text/javascript'>window.location='viewbikes.php' </script>";
}
?>