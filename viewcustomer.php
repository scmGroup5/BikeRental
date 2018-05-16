<?php
	require_once('authadmin.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 KuantanBikeRental//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-KuantanBikeRental.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<title>View Users</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
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
<form action="searchuser.php" method="POST" text align="center">
        <input type="text" name="query" required/>
        <input type="submit" value="Search Username" />
    </form>
<br>
  <table border="1" table align="center" id="myTable">
     <tr bgcolor="#cccccc" style="margin-bottom:100px";text align="center"; >
          <th width="20" onclick="sortTable(0)">No</th>
	  <th width="232" onclick="sortTable(1)">Username</th>
	  <th width="250" onclick="sortTable(2)">Email</th>
	  <th width="200" onclick="sortTable(3)">Password</th>
	  <th width="112">Action</th>
     </tr>
			
         <?php
		include('config.php');
		$result3 = mysql_query("SELECT * FROM signup");
		while($row3 = mysql_fetch_array($result3))
		{
			echo '<tr>';
			echo '<td text align="center">'.$row3['ID'].'</td>';
			echo '<td text align="center">'.$row3['Username'].'</td>';
			echo '<td text align="center">'.$row3['Email'].'</td>';
			echo '<td text align="center">'.$row3['Password'].'</td>';
			echo '<td text align="center">';
			echo'<a href=edituser.php?id=' . $row3["ID"] . '>' . 'Edit' . '</a>';
			echo ' | ';
			echo'<a href=deleteuser.php?id=' . $row3["ID"] . '>' . 'Delete' . '</a>';
			echo '</td>';
			echo '</tr>';
							
		}
	?> 
  </table>
</td>

<br><br>
<form action="refresh.php" method="POST" text align="center">
        <input type="submit" value="Refresh" />
    </form>
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

