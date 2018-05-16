<?php
$_SESSION['logged']=false;
session_start();

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 KuantanBikeRental//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-KuantanBikeRental.dtd">
<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>About Us</title>

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
<div id="columnFull">

<h2>About Us</h2>

<div class="content">

<p>
As a tourist or backpacker, we always hope that we can rent a bicycle to visit the scenic spot. 
Teluk Cempedak is a scenic beach which located 5 kilometers east from the town center in Kuantan. 
The white sandy beach and the beautiful caesarians and pine trees line the coast, with some rocky promontories facing the incessant waves of the South China Sea. 
All these combined to make the beach serene and at the same time delightful.
We have provide several bicycle such as ride bicycle in Teluk Cempedak, mountain bike to Bukit Pelindung,
cruising bike to Taman Gelora or road bike to cycle around Kuantan.
</p>

<p><strong><label>Address: </label></strong></p>
<p><label>Kuantan Bike Rental </label></p>
<p><label>Jalan Teluk Cempedak </label></p>
<p><label>Kawasan Rekreasi Teluk Cempedak </label></p>
<p><label>25050 Kuantan </label></p>
<p><label>Pahang, Malaysia </label></p><br>

<style>

#map {
   	height: 400px;
        width: 100%;
       }
</style>


<p><label>Tel: 609-5677099  </label></p><br>

<body>
    <h3>Our Location</h3>
    <div id="map"></div>
    <script>
      function initMap() {
        var uluru = {lat: 3.812388, lng: 103.371582};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 4,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDRITRlh2KvXy-__CXmnvS7mI2qKAsRPD8&callback=initMap">
    </script>

</div>

<br>



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