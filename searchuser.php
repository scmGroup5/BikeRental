<?php
	require_once('authadmin.php');
    mysql_connect("localhost", "root", "") or die("Error connecting to database: ".mysql_error()); 
    mysql_select_db("Database") or die(mysql_error());
    /* tutorial_search is the name of database we've created */
?>
 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 KuantanBikeRental//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-KuantanBikeRental.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<title>Search Results</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="StyleSheet.css" rel="stylesheet" type="text/css" />
<link href="Navigation.css" rel="stylesheet" type="text/css" />


</head>

<body>
<div id="fb-root"></div>
<a id="top"></a><div id="base">
<div id="baseContainer">
    <div id="baseContainerInner">
      <div id="header">
        <a href="admin_panel.php" id="logo"></a>
	<div id="headerTop">
          <div id="headerTopInner">
            
              <a href="index.php"><span id="login">Log Out</span></a>
            				          
          </div>
        </div>
	<div id="nav">
          <div id="navInner">
            <ul id="sfNav">
              <li><a href="viewcustomer.php" id="tab0" class="current">View Users</a></li>
              <li><a href="viewbookings.php" id="tab1">View Bookings</a></li>
              <li><a href="viewfeedback.php" id="tab2">View Feedbacks</a></li>
              <li><a href="viewbikes.php" id="tab3">View Bike</a>
		<ul id="sfTab1">
                  <li><a href="MountainBike.php">Mountain Bike</a></li>
                  <li><a href="RoadBike.php">Road Bike</a></li>
                  <li><a href="CruishBike.php">Cruising Bike</a></li>
                </ul>
              <li><a href="viewadmin.php" id="tab4">View Admin</a></li>
	      
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

<?php 
  include('config.php');
  $id=$_SESSION['SESS_MEMBER_ID'];
  
  $resulta = mysql_query("SELECT * FROM user WHERE id = '$id'");

			while($row = mysql_fetch_array($resulta))
			{
			echo "Admin = ",$row['username'];
			}
  
?>

<br>
<br/>
<td>
<form text align="center">
        <h4> Search Result </h4>
    </form>

<br>
  <table border="1" table align="center">
     <tr bgcolor="#cccccc" style="margin-bottom:100px";text align="center"; >
          <th width="20" >No</th>
	  <th width="232">Username</th>
	  <th width="250">Email</th>
	  <th width="200">Password</th>
	  <th width="112">Action</th>
     </tr>

<?php

    include('config.php');
    $query = $_POST['query'];  
         
        $query = htmlspecialchars($query); 
        
         
        $query = mysql_real_escape_string($query);
       
         
        $raw_results = mysql_query("SELECT * FROM signup WHERE (`Username` LIKE '%".$query."%')");
      
        while($row3 = mysql_fetch_array($raw_results))
	    {	
		
			echo '<tr>';
			echo '<td text align = "center">'.$row3['ID'].'</td>';
			echo '<td text align = "center">'.$row3['Username'].'</td>';
			echo '<td text align = "center">'.$row3['Email'].'</td>';
			echo '<td text align = "center">'.$row3['Password'].'</td>';
			echo '<td text align = "center">';
			echo'<a href=edituser.php?id=' . $row3['ID'] . '>' . 'Edit' . '</a>';
			echo ' | ';
			echo'<a href=deleteuser.php?id=' . $row3['ID'] . '>' . 'Delete' . '</a>';
			echo '</td>';
			echo '</tr>';
        }
		?>
		

     
</table>
</td>

</div>
     <form action="viewcustomer.php" method="POST" text align="center">
        <input type="submit" value="Back" />
    </form>
<br><br><br><br><br>
<div id="bottom">
  <div id="bottomContainer">
    
    <div id="footer">
      <div id="footerInner">
        <p text align="center">Copyright @ 2017 <strong>Kuantan Bike Rental</strong>. All rights reserved.</p>
      </div>
    </div>
  </div>
</div>
</body>
</html>