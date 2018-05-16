<?php
$_SESSION['logged']=false;
session_start();

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 KuantanBikeRental//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-KuantanBikeRental.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Contact Us</title>
<link href="StyleSheet.css" rel="stylesheet" type="text/css" />
<link href="Navigation.css" rel="stylesheet" type="text/css" />

<script >
function myFunction()
{
alert("Thank you. Your feedback have been recorded!");
}
</script >

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
              <li>              
<?php 
  if($_SESSION['logged']==true)
    { 
      echo '<a href="bookinglist.php" id="tab4">User Profile</a></li>';
    }
  elseif($_SESSION['logged']==false)
    {
     echo '<a href="SignUp.php" id="tab4">Sign Up</a></li>';		
    }
?></li>

<li>              
<?php 
  if($_SESSION['logged']==true)
    { 
      echo '<a href="logout.php" id="tab5">Logout</a></li>';
    }
  elseif($_SESSION['logged']==false)
    {		
     echo '<a href="userlogin.php" id="tab5">User Login</a></li>';
    }

  ?></li>
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

<form action="SaveFeedback.php" method="post" enctype="multipart/form-data" name="form1" class="smart-green" onsubmit="return myFunction()">

<h1>Send Us Feedback</h1>

<label>Name:</label>
<input type="text" name="name" id="name" required>
<br>
<br>

<label>Phone Number:</label>
<input type="number" name="phone" id="phone" required>
<br>
<br>

<label>E-mail:</label>
<input type="email" name="email" id="email" required>
<br>
<br>

<td><label>FeedBack:</label>
<textarea name="feedback" id="feedback" rows="5" cols="36" required></textarea>
<br>
<br>


<input type="submit" value="Submit"><input type="reset" value="Reset">
</form>




<p><label>Tel: 609-5677099  </label></p><br>



    
 </div>


</div>
<div id="bottom">
  <div id="bottomContainer">
    
    <div id="footer">
      <div id="footerInner">
        <p text align="center">Copyright © 2017 <strong>Kuantan Bike Rental</strong>. All rights reserved.</p>
      </div>
    </div>
  </div>
</div>
</body>
</html>