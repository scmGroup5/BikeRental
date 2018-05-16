<?php
include("Database.php");// database connection details stored here


$query=mysql_query("SET  @num := 0");

$query=mysql_query("UPDATE booking SET ID = @num := (@num+1)");

$query=mysql_query("ALTER TABLE booking AUTO_INCREMENT =1");

header("location: viewbookings.php");

?>
