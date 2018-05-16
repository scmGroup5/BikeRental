<?php
	//Start session
	session_start();
	
	//Unset the variables stored in session
	unset($_SESSION['SESS_MEMBER_ID']);
	unset($_SESSION['SESS_FIRST_NAME']);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 KuantanBikeRental//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-KuantanBikeRental.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <form id="form1" name="login" method="post" action="checkloginadmin.php" onsubmit="return validateForm()">
<title>Admin Login</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />


</head>

<body>
<div style="width:300px; margin:0 auto; position:relative; border:3px solid rgba(0,0,0,0); -webkit-border-radius:5px; -moz-border-radius:5px; border-radius:5px; -webkit-box-shadow:0 0 18px rgba(0,0,0,0.4); -moz-box-shadow:0 0 18px rgba(0,0,0,0.4); box-shadow:0 0 18px rgba(0,0,0,0.4); margin-top:10%;">

  <div style="background-color:gray; height:40px; margin-bottom:10px; 
  font-family:Arial, Helvetica, sans-serif; color:#000000; padding:5px; height:22px;"> 
 
 
 <div style="float:left;color:white;"><strong>Administrator Login</strong></div>
 <div style="float:right; margin-right:20px; background-color:#cccccc; width:25px; text-align:center; height:22px;"><a href="index.php">X</a></div>
 
 
 </div>
  <table width="286" align="center">
  <tr>
    <td colspan="2">
	
	
	
	</td>
  </tr>
  <tr>
    <td width="92"><div align="right">Username</div></td>
    <td width="178"><input type="text" name="username" required /></td>
  </tr>
  <tr>
    <td><div align="right">Password:</div></td>
    <td>
      <input type="password" name="password" required/>
    </td>
  </tr>

  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="Submit" value="Login" /></td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
  </tr>
</table>
    
  </form>
</div>
</body>
</html>
