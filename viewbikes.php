<?php
	require_once('authadmin.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 KuantanBikeRental//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-KuantanBikeRental.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<title>View Bikes</title>
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
              <li><a href="viewbikes.php" id="tab3">View Bike</a></li>
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

<h4><strong>Mountain Bike</strong></h4>
  <table border="1" table align="center">
     <tr bgcolor="#cccccc" style="margin-bottom:100px";text align="center"; >
          <th width="200" >Quantity of Lerun1</th>
	  <th width="200">Quantity of Lerun2</th>
	  <th width="200">Quantity of Marin</th>
	  <th width="200">Quantity of Polygon</th>
	  <th width="50">Action</th>
     </tr>
			
         <?php
		include('config.php');
		$result3 = mysql_query("SELECT * FROM mountainbike");
		while($row3 = mysql_fetch_array($result3))
		{
			echo '<tr>';
			echo '<td text align="center">'.$row3['Lerun1'].'</td>';
			echo '<td text align="center">'.$row3['Lerun2'].'</td>';
			echo '<td text align="center">'.$row3['Marin'].'</td>';
			echo '<td text align="center">'.$row3['Polygon'].'</td>';
			echo '<td text align="center">';
			echo'<a href=editMountain.php?id=' . $row3["ID"] . '>' . 'Edit' . '</a>';
			echo '</td>';
			echo '</tr>';
							
		}
	?> 
  </table>
</td>
<br>
<td>

<h4><strong>Road Bike</strong></h4>
  <table border="1" table align="center">
     <tr bgcolor="#cccccc" style="margin-bottom:100px";text align="center"; >
          <th width="200" >Quantity of Polygon1</th>
	  <th width="200">Quantity of Polygon2</th>
	  <th width="200">Quantity of Polygon3</th>
	  <th width="200">Quantity of Polygon4</th>
	  <th width="50">Action</th>
     </tr>
			
         <?php
		include('config.php');
		$result3 = mysql_query("SELECT * FROM roadbike");
		while($row3 = mysql_fetch_array($result3))
		{
			echo '<tr>';
			echo '<td text align="center">'.$row3['Polygon1'].'</td>';
			echo '<td text align="center">'.$row3['Polygon2'].'</td>';
			echo '<td text align="center">'.$row3['Polygon3'].'</td>';
			echo '<td text align="center">'.$row3['Polygon4'].'</td>';
			echo '<td text align="center">';
			echo'<a href=editRoad.php?id=' . $row3["ID"] . '>' . 'Edit' . '</a>';
			echo '</td>';
			echo '</tr>';
							
		}
	?> 
  </table>
</td>
<br>
<td>

<h4><strong>Cruish Bike</strong></h4>
  <table border="1" table align="center">
     <tr bgcolor="#cccccc" style="margin-bottom:100px";text align="center"; >
          <th width="200" >Quantity of Asogo</th>
	  <th width="200">Quantity of Garion</th>
	  <th width="200">Quantity of Electric</th>
	  <th width="200">Quantity of Apollo</th>
	  <th width="50">Action</th>
     </tr>
			
         <?php
		include('config.php');
		$result3 = mysql_query("SELECT * FROM cruishbike");
		while($row3 = mysql_fetch_array($result3))
		{
			echo '<tr>';
			echo '<td text align="center">'.$row3['Asogo'].'</td>';
			echo '<td text align="center">'.$row3['Garion'].'</td>';
			echo '<td text align="center">'.$row3['Electric'].'</td>';
			echo '<td text align="center">'.$row3['Apollo'].'</td>';
			echo '<td text align="center">';
			echo'<a href=editCruish.php?id=' . $row3["ID"] . '>' . 'Edit' . '</a>';
			echo '</td>';
			echo '</tr>';
							
		}
	?> 
  </table>
</td>

<br><br>


</div>      
<br><br>
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

