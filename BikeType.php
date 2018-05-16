<?php
$_SESSION['logged']=false;
session_start();

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 kuantanbikerental//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-kuantanbikerental.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Kuantan Bike Rental- Bicycle Type</title>
<link href="StyleSheet.css" rel="stylesheet" type="text/css" />
<link href="Navigation.css" rel="stylesheet" type="text/css" />
</head>

<head>
<style>
div.img {
    margin: 5px;
    padding: 10px;
    border: 0;
    height: auto;
    width: auto;
    float: center;
    text-align: center;
}

div.img img {
    display: inline;
    margin: 5px;
    border: 2px solid grey;
}

div.img a:hover img {
    border:2px solid black;
}

div.desc {
    font-size: 15px;
    text-align:justify;
    font-weight: normal;  
}

</style>
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
	
	
<h4><strong>Bicycle Type</strong></h4>
<div id="columnFull">   
<div class="img">
  <a href="Mountain.php">
    <img src="biketype/1.jpg" alt="mountain" width="400" height="300">
  </a>
  <div class="desc">
        <h3 style="text-align: center;">Mountain Bike</h3>
	<p>Mountain Bike is a bicycle designed for off-road cycling. Mountain bikes include suspension on the frame and fork, large knobby tires,
more durable heavy duty wheels, more powerful brakes, and lower gear rations needed for steep grades with poor traction. You can rent this mountain bike to Bukit Pelindung.</p>
<br>
</div>
</div>

<br>

<div class="img">
  <a href="Road.php">
    <img src="biketype/2.jpg" alt="road" width="400" height="300">	
  </a>
	<div class="desc"> <h3 style="text-align: center;">Road Bike</h3>
	<p>Road Bike is build for travelling at speed on paved roads. 
Road bike have narrow tires and the bike is of a lightweight construction. You can rent this bike to cycle around kuantan</p>
	<br>
</div>
 
</div>
<br>
<div class="img">
  <a href="Cruish.php">
    <img src="biketype/3.jpg" alt="cruise" width="400" height="300">
  </a>
  <div class="desc"><h3 style="text-align: center;">Cruising Bike</h3>
	<p >Cruising Bike is a bicycle that usually combines ballon tires, an upright seating posture, a single-speed drivetrain, and straightforward steel construction with expressive styling.
 You can rent this bike to Taman Gelora.</p>
	<br>
  </div>
</div>
<br>
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
</div>


</body>
</html>