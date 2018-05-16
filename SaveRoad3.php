<?php
$_SESSION['logged']=false;
session_start();

include("Database.php");// database connection details stored here
include('config.php');

$id=$_SESSION['SESS_MEMBER_ID'];
$result = mysql_query("SELECT Username FROM signup WHERE ID = '$id'");
$row = mysql_fetch_array($result);


$result3 = mysql_query("Select Polygon3 FROM roadbike");
$row3 = mysql_fetch_array($result3);


$type="Polygon Helios F5 Black";
$frame=$_POST['frame'];
$saddle=$_POST['saddle'];
$tyre=$_POST['tyre'];
$BookDate=$_POST['BookDate'];
$ReturnDate=$_POST['ReturnDate'];
$numdays=$_POST['numdays'];
$price=$_POST['price'];
$quantity=$_POST['quantity'];

if ($row3[0]==0 || $row3[0]<$quantity)
{
	echo '<script language="javascript">';
	echo 'alert("Quantity Bike reached maximum !")';
	echo '</script>';
	echo "<a href=\"javascript:history.go(-1)\">GO BACK</a>";
	
}

else{
$result2 = mysql_query("SELECT Polygon3 FROM roadbike");
$row2 = mysql_fetch_array($result2);

$new = $row2[0]-$quantity;

$query = mysql_query("UPDATE roadbike SET Polygon3= '$new' ");

$query=mysql_query("insert into booking(Type,FrameSize,SaddleType,TyreSize,BookingDate,ReturnDate,Days,Price,Quantity,Username)
 values('$type','$frame','$saddle','$tyre','$BookDate','$ReturnDate','$numdays','$price','$quantity','$row[0]')");

header("location: bookinglist.php");
}
?>
