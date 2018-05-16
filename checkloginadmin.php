<?php

session_start();

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="Database"; // Database name 
$tbl_name="user" ; // Table name 
 



$errflag = false;

if($_POST['username'] == '')
{
	$errmsg_arr[] = 'Login ID missing';
	$errflag = true;
}

if($_POST['password'] == '') 
{
	$errmsg_arr[] = 'Password missing';
	$errflag = true;
}

//If there are input validations, redirect back to the login form
if($errflag)
{
	$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
	session_write_close();
	header("location: admin_panel.php");
	exit();
}
// Connect to server and select databse.
$conn = mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("Database", $conn)or die("cannot select DB");

// username and password sent from form 
$myusername=$_POST['username']; 
$mypassword=$_POST['password']; 


// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);
$sql="SELECT * FROM $tbl_name WHERE username='$myusername' and password='$mypassword'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
//if($count==1){

// Register $myusername, $mypassword and redirect to file "login_success.php"
//session_register("username");
//session_register("password"); 
//header("location:login_success.php");

if(isset($result)){
  if(mysql_num_rows($result) == 1){
    session_regenerate_id();
    $member = mysql_fetch_assoc($result);
    $_SESSION['SESS_MEMBER_ID'] = $member['id'];
    $_SESSION['SESS_FIRST_NAME'] = $member['firstname'];
    $_SESSION['SESS_LAST_NAME'] = $member['lastname'];
    $_SESSION['STATUS'] = true;
    session_write_close();
    header("location: admin_panel.php");
    exit();
  
  }
  else
  { header("location: loginerroradmin.php");
	 
	  exit();
	  }
  }
else {
 header("location: loginerroradmin.php");
}
?>