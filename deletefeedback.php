<!-- buang.php -->
<!-- To delete one particular data. -->

<?php

include("Database.php");

$idURL = $_GET['id'];

$query = "DELETE FROM feedback WHERE id = '$idURL'";
$result = mysql_query($query, $conn);

if($result)
{
 echo "<script type='text/javascript'>window.location='viewfeedback.php' </script>";
}
?>

