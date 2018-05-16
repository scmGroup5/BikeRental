<?php
$_SESSION['logged']=false;
session_start();

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 KuantanBikeRental//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-KuantanBikeRental.dtd">
<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>User Profile</title>

<link href="StyleSheet.css" rel="stylesheet" type="text/css" />
<link href="Navigation.css" rel="stylesheet" type="text/css" />

<script>
function sortTable(n) {
  var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
  table = document.getElementById("myTable");
  switching = true;
  
  dir = "asc"; 
  
  while (switching) {
   
    switching = false;
    rows = table.getElementsByTagName("TR");
    
    for (i = 1; i < (rows.length - 1); i++) {
      
      shouldSwitch = false;
     
      x = rows[i].getElementsByTagName("TD")[n];
      y = rows[i + 1].getElementsByTagName("TD")[n];
      
      if (dir == "asc") {
        if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
          
          shouldSwitch= true;
          break;
        }
      } else if (dir == "desc") {
        if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
          
          shouldSwitch= true;
          break;
        }
      }
    }
    if (shouldSwitch) {
     
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
     
      switchcount ++;      
    } else {
      
      if (switchcount == 0 && dir == "asc") {
        dir = "desc";
        switching = true;
      }
    }
  }
}
</script>

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

<td>
<br/>
<td>
<p> <h4>User Profile<br /></p></h4>
  <table border="1" table align="center">
     <tr bgcolor="#cccccc" style="margin-bottom:100px"; text align="center">
          <th width="232">Username</th>
	  <th width="248">Email</th>
	  <th width="248">Password</th>
	  <th width="112">Action</th>
     </tr>
			
         <?php
		include('config.php');
		$id=$_SESSION['SESS_MEMBER_ID'];
		$result3 = mysql_query("SELECT * FROM signup WHERE ID = '$id'");
		while($row3 = mysql_fetch_array($result3))
		{
			echo '<tr>';
			echo '<td text align="center">'.$row3['Username'].'</td>';
			echo '<td text align="center">'.$row3['Email'].'</td>';
			echo '<td text align="center">'.$row3['Password'].'</td>';
			echo '<td text align="center">';
			echo'<a rel="facebox" href=edituser.php?id=' . $row3["ID"] . '>' . 'Edit' . '</a>';
			echo '</td>';
			echo '</tr>';
							
		}
	?> 
  </table>

<p> <h4>Booking List<br /></p></h4>
  <table border="1" table align="center" id="myTable">
     <tr bgcolor="#cccccc" style="margin-bottom:100px"; text align="center">
	<th width="30" onclick="sortTable(0)">No</th>          
	<th width="200" onclick="sortTable(1)">Username</th>
	<th width="260" onclick="sortTable(2)">Type</th>
	<th width="248" onclick="sortTable(3)">Frame Size</th>
	<th width="248" onclick="sortTable(4)">Saddle Type</th>
	<th width="248" onclick="sortTable(5)">Tyre Size</th>
	<th width="248" onclick="sortTable(6)">Booking Date</th>
	<th width="248" onclick="sortTable(7)">Return Date</th>
	<th width="248" onclick="sortTable(8)">Days</th>
	<th width="248" onclick="sortTable(9)">Price (RM)</th>
	<th width="248" onclick="sortTable(10)">Quantity</th>
	<th width="112">Action</th>
     </tr>
			
         <?php
		include('config.php');
		$id=$_SESSION['SESS_MEMBER_ID'];
		$result1 = mysql_query("SELECT Username FROM signup WHERE ID = '$id'");
		$row1 = mysql_fetch_array($result1);
		$result2 = mysql_query("SELECT * FROM booking WHERE Username = '$row1[0]'");
		while($row2 = mysql_fetch_array($result2))
		{
			echo '<tr>';
			echo '<td text align="center">'.$row2['ID'].'</td>';
			echo '<td text align="center">'.$row2['Username'].'</td>';
			echo '<td text align="center">'.$row2['Type'].'</td>';
			echo '<td text align="center">'.$row2['FrameSize'].'</td>';
			echo '<td text align="center">'.$row2['SaddleType'].'</td>';
			echo '<td text align="center">'.$row2['TyreSize'].'</td>';
			echo '<td text align="center">'.$row2['BookingDate'].'</td>';
			echo '<td text align="center">'.$row2['ReturnDate'].'</td>';
			echo '<td text align="center">'.$row2['Days'].'</td>';
			echo '<td text align="center">'.$row2['Price'].'</td>';
			echo '<td text align="center">'.$row2['Quantity'].'</td>';
			echo '<td text align="center">';
			echo'<a rel="facebox" href=deletebooking.php?id=' . $row2["ID"] . '>' . 'Delete' . '</a>';
			echo '</td>';
			echo '</tr>';
							
		}
	?> 
  </table>

</td>
<br>
<form action="refresh4.php" method="POST" text align="center">
        <input type="submit" value="Refresh" />
    </form>
<br><br>
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