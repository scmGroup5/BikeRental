<?php

session_start();
$_SESSION['logged']=false;

?>




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 KuantanBikeRental//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-KuantanBikeRental.dtd">
<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link href="StyleSheet.css" rel="stylesheet" type="text/css" />
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
        <div id="columnLeft">
	<div class="example1">
          <marquee behavior="scroll" direction="left"><h1 class="first"><strong>Hello World</strong> to Kuantan Bike Rental</h1></marquee>
        </div>  
	
	<div class="content">
            <div style="float: left; width: 350px; font-size: 15px;">
              <p>Kenny from bustling metropolis to peaceful, laidback countryside. We have knowledgeable and friendly staff from all over the world to help you through the process and to get you on the right bike so you can enjoy your ride.</p>
              <p>Our commitment is to ensure that your ride  is fun and memorable. Our hope is for  you to return home with pleasant and fond memories after a getaway with us and  have made some new friends for life.</p>
              <p>Ride with us and &nbsp; <strong style="font-size: 17px; color: #4f81bd;">Turn Your Miles into Smiles!</strong></p>
	</div>

	<div id="videoPanel">
              <div class="content">
                <p>Check out the latest video below of kuantan ride!</p>
                <div class="preview youtube">
                  <div class="thumb">
                    <a href="https://www.youtube.com/embed/IpkEPrW4R-c?controls=1&autoplay=1" class="play fancyiframeyoutube"></a>
                    <img src="http://img.youtube.com/vi/LieSxaXzmuw/0.jpg" alt="" width="260" height="195" />
                  </div>
                </div>
                <br>
              </div>
            </div>
            <div class="clear"></div>
          </div>
	</div>

<div id="columnRight">
          <div id="columnRightInner">
      
	    <div id="reflections">Reflections - What they have experienced...</div>
            <div class='reflectionsContent'>
              <p>The entire weekend was a surprise and I am so happy to experienced it with all of you. Looking forward to the next trip.&rdquo;
              <span class='author'>~ Espen, Kari, Tor, Per Johansson, Johnny, Helga and Trond - Norway</span></p>
            </div><div class='reflectionsContent'>
              <p>Malaysia must be the most beautiful country I’ve ridden a bike, the roads are stunning and the professional service this company offer exceeds some European companies standards. &rdquo;
              <span class='author'>~ Larry Mc Kay - Scotland</span></p>
            </div><div class='reflectionsContent'>
              <p>MMG is a 1st class operation where you not only get to experience some fantastic touring roads on great bikes but you get wonderful scenery and some Malaysian food & culture as well.&rdquo;
              <span class='author'>~ Matt and Kym Hanna, Espen, Derek, Larry, Trond and Steinar</span></p>
            
		<p class="moreInfo"><a href="reflections.php" class="viewAll"></a></p>
	   </div>            
	  
          </div>		  		  
        </div>
        <div class="clear"></div>
      </div>
    </div>
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
