<?php

include("Database.php");

extract ( $_POST );



$query = "UPDATE mountainbike SET Lerun1= '$quantity', Lerun2='$quantity2', Marin= '$quantity3', Polygon= '$quantity4' WHERE ID = '$id'";

$result = mysql_query($query, $conn) or die ("Could not execute query in database");
if($result)
{
 echo "<script type='text/javascript'>window.location='viewbikes.php' </script>";
}
?>