<?php
$_SESSION['logged']=false;
session_start();

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 kuantanbikerental//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-kuantanbikerental.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Kuantan Bike Rental- Road Bike</title>
<link href="StyleSheet.css" rel="stylesheet" type="text/css" />
<link href="Navigation.css" rel="stylesheet" type="text/css" />
</head>

<head>
<style>
div.img {
    margin: 5px;
    padding: 10px;
    text-align: center;
}

div.img img {
    display: inline;
    margin: 5px;
    border: 2px solid dark grey;
}

div.img a:hover img {
    border:1px solid black;
}

div.desc {   
    font-weight: normal;
    margin: 5px;
    font-size: 12px;
    text-align: justify;
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
	<div>
      	<img src="biketype/road1.jpg" width="980" height="350" alt=""/>
      	</div>
	
<div id="bodyContainer">	
<h4><strong>Road Bike</strong></h4>
<br>
  <div class="img"><table> 
     <tr>
      	<td>
	  <p><a href="roadbike1.php"><img src="biketype/road2.jpg" alt="polygon" height="210" width="210" class="frame"/></a></p>
            <h5>Polygon Helios C3 White</h5>
	    <p>Type - carbon ACX frame</p>
	    <p>Tyre - Schwalbe Lugano tyres</p>
	    
	    <p style="color: red;">RM90.00/day</p>
        </td>

   	<td>
       	 <p><a href="roadbike2.php"><img src="biketype/road3.jpg" alt="polygon2" height="210" width="210" class="frame"/></a></p>
         <h5>Polygon Stratos S2 Black</h5>
	 <p>Type -  frame with a carbon fiber fork</p>
	 <p>Tyre - Araya rims with Kenda Kontender</p>
	 
	 <p style="color: red;">RM110.00/day</p>
        </td>
   
	<td>
            <p><a href="roadbike3.php"><img src="biketype/road4.jpg" alt="polygon3" height="210" width="210" class="frame"/></a></p>
             <h5>Polygon Helios F5 Black</h5>
	     <p>Type - ALX alloy frame and carbon fork</p>
	     <p>Tyre - reliable skinny</p>
	     
	     <p style="color: red;">RM120.00/day</p>
           </td>

         <td>
            <p><a href="roadbike4.php"><img src="biketype/road5.png" alt="Polygon4" height="210" width="210" class="frame"/></a></p>
            <h5>Polygon Helios C6 </h5>
	    <p>Type - carbon ACX frame</p>
	    <p>Tyre - SCHWALBE DURANO BK, 700X25C</p>
	    
	    <p style="color: red;">RM135.00/day</p>
         </td>
           </tr>
            	<tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            	</tr>	
	</table>
</div></div>

<br>
<div id="bottom">
  <div id="bottomContainer">
    
    <div id="footer">
      <div id="footerInner">
        <p text align= "center">Copyright © 2017 <strong>Kuantan Bike Rental</strong>. All rights reserved.</p>
      </div>
    </div>
  </div>
</div>
</div>


</body>
</html>