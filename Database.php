<!-- Database.php -->
<!-- To connect between php scripting and database.-->
<?php

define("DATABASE_HOST", "localhost");
define("DATABASE_USER", "root");
define("DATABASE_PASSWORD", "");

// To establish a connection to database and save in $conn
$conn = mysql_connect(DATABASE_HOST, DATABASE_USER, DATABASE_PASSWORD);

// If connection failed the display mysql error
if (!$conn) {
 die( "Could not connect to database" );
}

// To select one particular database to be used
mysql_select_db("Database", $conn) or die( "Could not open products database" );

// set the default time zone to use in Malaysia
date_default_timezone_set('Asia/Kuala_Lumpur');


?>