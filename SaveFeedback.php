<?php
include("Database.php");// database connection details stored here


$name=$_POST['name'];
$contact=$_POST['phone'];
$email=$_POST['email'];
$feedback=$_POST['feedback'];

$query=mysql_query("insert into feedback(name,contact,email,feedback)
 values('$name','$contact','$email','$feedback')");


?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 KuantanBikeRental//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-KuantanBikeRental.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    	<title>Thank You</title>
<link href="stylesheet.css" rel="stylesheet" type="text/css" />
<link href="Navigation.css" rel="stylesheet" type="text/css" />

</head>

<body>
<div id="fb-root"></div>
<a id="top"></a><div id="base">
<div id="baseContainer">
    <div id="baseContainerInner">
      <div id="header">
        <a href="index.php" id="logo"></a>
	<div id="headerTop">
          <div id="headerTopInner">
            
              <a href="adminindex.php"><span id="login">Admin Login</span></a>					          
          </div>
        </div>
	<div id="nav">
          <div id="navInner">
            <ul id="sfNav">
              <li><a href="index.php" id="tab0" class="current">Home</a></li>
              <li><a href="BikeType.php" id="tab1">Bicycle Type</a>
                <ul id="sfTab1">
                  <li><a href="Mountain.php">Mountain Bike</a>
                  <li><a href="Road.php">Road Bike</a></li>
                  <li><a href="Cruish.php">Cruising Bike</a></li>
                </ul>
              </li>
              <li><a href="about.php" id="tab2">About Us</a></li>
              <li><a href="contact.php" id="tab3">Contact Us</a></li>
              <li><a href="SignUp.php" id="tab4">Sign Up</a></li>
	      <li><a href="userlogin.php" id="tab5">User Login</a></li>
            </ul>
          </div>
        </div>


<style>
.slideBanner {position:relative; height:350px; width:990px; margin:0 auto;}
.slideBanner img { position:absolute;  }
</style> 

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script>
$(function(){
	$('.slideBanner img:gt(0)').hide();
	setInterval(function(){$('.slideBanner :first-child').fadeOut().next('img').fadeIn().end().appendTo('.slideBanner');}, 3000);
});
</script>

	<div class="slideBanner">
      	<img src="image/1.jpg" width="980" height="350" alt=""/>
        <img src="image/2.jpg" width="980" height="350" alt=""/>
        <img src="image/3.jpg" width="980" height="350" alt=""/>
        <img src="image/4.jpg" width="980" height="350" alt=""/>
        <img src="image/5.jpg" width="980" height="350" alt=""/>
        <img src="image/6.jpg" width="980" height="350" alt=""/>
      	</div>


<div id="bodyContainer">

<div id="columnFull">

<form class="smart-green">
<h1>Thank You For Your Feedback</h1>

<label><b>Name:</b></label>
<br>
<label><?php echo  $_POST["name"];?></label>
<br>

<label><b>Phone Number:</b></label>
<br>
<label><?php echo  $_POST["phone"];?></label>
<br>


<label><b>Email:</b></label>
<br>
<label><?php echo  $_POST["email"];?></label>
<br>


<label><b>Feedback:</b></label>
<br>
<label><?php echo  $_POST["feedback"];?></label>
<br>


</form>
</div>
</div>
</div>
<div id="bottom">
  <div id="bottomContainer">
    
    <div id="footer">
      <div id="footerInner">
        <p>Copyright © 2017 <strong>Kuantan Bike Rental</strong>. All rights reserved.</p>
      </div>
    </div>
  </div>
</div>
</body>
</html>