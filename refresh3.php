<?php
include("Database.php");// database connection details stored here


$query=mysql_query("SET  @num := 0");

$query=mysql_query("UPDATE user SET ID = @num := (@num+1)");

$query=mysql_query("ALTER TABLE user AUTO_INCREMENT =1");

header("location: viewadmin.php");

?>
