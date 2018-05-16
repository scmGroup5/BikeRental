<?php
include("Database.php");// database connection details stored here


$query=mysql_query("SET  @num := 0");

$query=mysql_query("UPDATE feedback SET ID = @num := (@num+1)");

$query=mysql_query("ALTER TABLE feedback AUTO_INCREMENT =1");

header("location: viewfeedback.php");

?>
