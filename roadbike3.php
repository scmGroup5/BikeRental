<?php
$_SESSION['logged']=false;
session_start();

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 kuantanbikerental//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-kuantanbikerental.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Polygon Helios F5 Black</title>
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

</style>

<script >
function myFunction()
{
alert("Booking in process");
};
</script >



<script >
	
	
function calculation()
	{
		var quantity = parseInt (document.getElementById("quantity").value);
		var dropdt = new Date(document.getElementById("ReturnDate").value);
                var pickdt = new Date(document.getElementById("BookingDate").value);
                return parseInt((((dropdt - pickdt)/ (24 * 3600 * 1000))+1)*120*quantity);
	}
	
	function getcalculation(){
	
		document.getElementById("price").value = calculation();
		
	}
</script >

<script type="text/javascript">

	

        function GetDays(){
                var dropdt = new Date(document.getElementById("ReturnDate").value);
                var pickdt = new Date(document.getElementById("BookingDate").value);
                return parseInt(((dropdt - pickdt) / (24 * 3600 * 1000))+1);
		
        	}

        function cal(){
        if(document.getElementById("ReturnDate")){
            document.getElementById("numdays2").value=GetDays();
		if (GetDays()<=0)
		{
		alert("Wrong Input Date");
		document.getElementById("Submit").disabled = true;
		}
		else
		{
		document.getElementById("Submit").disabled = false;
		}
        }  
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
	
<br>
<br><br>
<h1 align="center"><strong>Polygon Helios F5 Black</strong></h1>
<hr></hr>
<div id="bodyContainer">
<br>
<form action="SaveRoad3.php" method="post" enctype="multipart/form-data" name="form1" onsubmit="return myFunction()">
  <div class="img">
  <table style="width:100%">
		
    <tr>
      <td rowspan="10" style="width:40%">
	  <p><img src="biketype/road4.jpg" alt="road3" height="320" width="320" class="frame"/></a></p>      
      </td>
      <td align="left">
         
	  <h3 style="color: red;">RM120.00/day</h3>
      </td>
    </tr>
    <tr> 
      <td>
	  <p align="left">Type - ALX alloy frame and carbon fork</p>	  
      </td>
    </tr>
	<tr>
      <td>
	  <p align="left">Tyre - reliable skinny</p>	  
      </td>
    </tr>
    <tr>
      <td>
	  <p align="left">Frame Size -  
	<select name="frame" required>
	<option value=""></option>
  	<option value="Big">Big</option>
  	<option value="Medium">Medium</option>
  	<option value="Small">Small</option>
	</select>
	</p>	  	  
      </td>
<td>
	  <p align="left">
  		Booking Date:
  		<input type="date"  id= "BookingDate" name="BookDate" onchange="getcalculation();cal()" required>
	</p>	  	  
      </td>
    </tr>
    
    <tr>
      <td>
	  <p align="left">Saddle Type - 
	<select name="saddle" required>
	<option value=""></option>
  	<option value="Comfort">Comfort</option>
  	<option value="Racing">Racing</option>
  	<option value="Cruiser">Cruiser</option>
	</select>
	</p>	  
      </td>
<td>
	  <p align="left">
  		Return Date:
  		<input type="date" id= "ReturnDate" name="ReturnDate" onchange="getcalculation();cal()" required>
	</p>	  	  
      </td>
    </tr>
    <tr>
      <td>
	  <p align="left">Tyre Size - 
	<select name="tyre" required>
	<option value=""></option>
  	<option value="670mm">670mm</option>
  	<option value="700mm">700mm</option>
  	<option value="736mm">736mm</option>
	</select>
	</p>	  	  
      </td>
<td>
	  <p align="left">
	  Number of days:
  		<input type="text" name="numdays" id="numdays2" onchange="getcalculation()" READONLY/>
	</p>	  	  
      </td>
    </tr>
	<tr>
      
    </tr>

	<tr>
      
    </tr>
	<tr>
      <td>
	  <p align="left">
	  Quantity:
  		<input type="number" id="quantity" name="quantity" size="1" min="1" max="3" onchange="getcalculation()" required>
	 
	</p>	
 	  
      </td>

<td>
	  <p align="left">
	  Price (RM) :
  		<input type="text" id="price" name="price" READONLY/>
	</p>	  	  
      </td>
    </tr>

<tr>
      
    </tr>



  </table>
  
</div>





<tr>
      <td>
	  <p align="center">
  		<?php 
  if($_SESSION['logged']==true)
    { 
      echo "<input type='submit' name='submit' value='Submit'>";
    }
  elseif($_SESSION['logged']==false)
    {
     echo '<a href="SignUp.php" >Please Sign Up and Login</a>';	
    }
  	?>
	</p>	  	  
      </td>
    </tr></div>
	</form>
<br>
<br>
<br>
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