<!-- buang.php -->
<!-- To delete one particular data. -->

<?php

include("Database.php");

$idURL = $_GET['id'];

$result1 = mysql_query("SELECT Quantity FROM booking WHERE id = '$idURL'");
$quantity = mysql_fetch_array($result1);

$result3 = mysql_query("SELECT Type FROM booking WHERE id = '$idURL'");
$type = mysql_fetch_array($result3);

$query = "DELETE FROM booking WHERE id = '$idURL'";
$result = mysql_query($query, $conn);

if ($type[0]=="Lerun Bonus Gent 24 Black Yellow")
{
	$result2 = mysql_query("SELECT Lerun1 FROM mountainbike");
	$row2 = mysql_fetch_array($result2);
	$new = $row2[0]+$quantity[0];
	$query = mysql_query("UPDATE mountainbike SET Lerun1 = '$new' ");
}
else if ($type[0]=="Lerun Bonus Gent 26 Blue Blue")
{
	$result2 = mysql_query("SELECT Lerun2 FROM mountainbike");
	$row2 = mysql_fetch_array($result2);
	$new = $row2[0]+$quantity[0];
	$query = mysql_query("UPDATE mountainbike SET Lerun2 = '$new' ");
}
else if ($type[0]=="Marin Bobcat Trail 27.5 Sky Blue")
{
	$result2 = mysql_query("SELECT Marin FROM mountainbike");
	$row2 = mysql_fetch_array($result2);
	$new = $row2[0]+$quantity[0];
	$query = mysql_query("UPDATE mountainbike SET Marin = '$new' ");
}
else if ($type[0]=="Polygon Siskiu Gent 29 Full Black")
{
	$result2 = mysql_query("SELECT Polygon FROM mountainbike");
	$row2 = mysql_fetch_array($result2);
	$new = $row2[0]+$quantity[0];
	$query = mysql_query("UPDATE mountainbike SET Polygon = '$new' ");
}
else if ($type[0]=="Polygon Helios C3 White")
{
	$result2 = mysql_query("SELECT Polygon1 FROM roadbike");
	$row2 = mysql_fetch_array($result2);
	$new = $row2[0]+$quantity[0];
	$query = mysql_query("UPDATE roadbike SET Polygon = '$new' ");
}
else if ($type[0]=="Polygon Stratos S2 Black")
{
	$result2 = mysql_query("SELECT Polygon2 FROM roadbike");
	$row2 = mysql_fetch_array($result2);
	$new = $row2[0]+$quantity[0];
	$query = mysql_query("UPDATE roadbike SET Polygon2 = '$new' ");
}
else if ($type[0]=="Polygon Helios F5 Black")
{
	$result2 = mysql_query("SELECT Polygon3 FROM roadbike");
	$row2 = mysql_fetch_array($result2);
	$new = $row2[0]+$quantity[0];
	$query = mysql_query("UPDATE roadbike SET Polygon3 = '$new' ");
}
else if ($type[0]=="Polygon Helios C6")
{
	$result2 = mysql_query("SELECT Polygon4 FROM roadbike");
	$row2 = mysql_fetch_array($result2);
	$new = $row2[0]+$quantity[0];
	$query = mysql_query("UPDATE roadbike SET Polygon4 = '$new' ");
}
else if ($type[0]=="Asogo Korean Style City Bike")
{
	$result2 = mysql_query("SELECT Asogo FROM cruishbike");
	$row2 = mysql_fetch_array($result2);
	$new = $row2[0]+$quantity[0];
	$query = mysql_query("UPDATE cruishbike SET Asogo = '$new' ");
}
else if ($type[0]=="Garion Korean Style City Bike")
{
	$result2 = mysql_query("SELECT Garion FROM cruishbike");
	$row2 = mysql_fetch_array($result2);
	$new = $row2[0]+$quantity[0];
	$query = mysql_query("UPDATE cruishbike SET Garion = '$new' ");
}
else if ($type[0]=="Electric Bicycle EBike - EB2")
{
	$result2 = mysql_query("SELECT Electric FROM cruishbike");
	$row2 = mysql_fetch_array($result2);
	$new = $row2[0]+$quantity[0];
	$query = mysql_query("UPDATE cruishbike SET Electric = '$new' ");
}
else if ($type[0]=="Apollo Nouveau 7 WS")
{
	$result2 = mysql_query("SELECT Apollo FROM cruishbike");
	$row2 = mysql_fetch_array($result2);
	$new = $row2[0]+$quantity[0];
	$query = mysql_query("UPDATE cruishbike SET Apollo = '$new' ");
}

if($result)
{
 echo "<script type='text/javascript'>window.location='viewbookings.php' </script>";
}
?>

