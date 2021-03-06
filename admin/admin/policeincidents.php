<?php
	require_once('../auth.php');
?>
<html>
<head>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="febe/style.css" type="text/css" media="screen" charset="utf-8">
<script src="argiepolicarpio.js" type="text/javascript" charset="utf-8"></script>
<script src="js/application.js" type="text/javascript" charset="utf-8"></script>	
<!--sa poip up-->
<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
   <script src="lib/jquery.js" type="text/javascript"></script>
  <script src="src/facebox.js" type="text/javascript"></script>
  <script type="text/javascript">
    jQuery(document).ready(function($) {
      $('a[rel*=facebox]').facebox({
        loadingImage : 'src/loading.gif',
        closeImage   : 'src/closelabel.png'
      })
    })
  </script>
  <html>
  <head>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="febe/style.css" type="text/css" media="screen" charset="utf-8">
<script src="argiepolicarpio.js" type="text/javascript" charset="utf-8"></script>
<script src="js/application.js" type="text/javascript" charset="utf-8"></script>	
<title>SafePal - Admin Dashboard</title>
</head>
<body>
	<div id="container">
		<div id="adminbar-outer" class="radius-bottom">
			<div id="adminbar" class="radius-bottom" style="margin-top:0.9%">
				<a id="logo" href="dashboard.php"></a>
				<div id="details">
					<a class="avatar" href="javascript: void(0)">
					<img width="36" height="36" alt="avatar" src="img/avatar.jpg">
					</a>
					<div class="tcenter" style="margin-left:-20%">
					Hi
					<strong>Admin:<?php echo $_SESSION['fname']; ?></strong>
					!
					<br>
					<a class="alightred" href="../index.php">Logout</a>
					</div>
				</div>
			</div>
		</div>
		<div id="panel-outer" class="radius" style="opacity: 1" style="margin-top:10%">
			<div id="panel" class="radius" >
				<ul class="radius-top clearfix" id="main-menu">
					<li>
						<a class="active" href="dashboard.php">
							<img alt="Dashboard" src="img/m-dashboard.png" title='Home'>
							<span>Dashboard</span>
						</a>
					</li>
					<li>
						<a href="user.php">
							<img alt="Users" src="img/m-users.png" title='manage users'>
							<span>Users</span>
							<span class="submenu-arrow"></span>
						</a>
					</li>
					
					
					<li>
						<a href="levels.php">
							<img alt="Statistics" src="img/add.png" title='manage user levels'>
							<span>User Groups</span>
						</a>
					</li>
					<li>
						<a href="incidents.php">
							<img alt="Statistics" src="img/re.png" title='manage course units'>
							<span>Incidents</span>
						</a>
					</li>
					<li>
					<a href="cso.php">
							<img alt="Statistics" src="img/m-statistics.png" title='manage CSOs'>
							<span>CSO</span>
						</a>
					</li> 
					<li>
						<a href="assignments.php">
							<img alt="Statistics" src="img/pr.png" title='view personal load'>
							<span>Reports</span>
						</a>
					</li>
					<li>
						<a href="followup.php">
							<img alt="Dashboard" src="img/cont.png" title='view teaching log books'>
							<span>Incident Followup</span>
						</a>
					</li>
					<li>
						<a href="notifications.php">
							<img alt="Newsletter" src="img/m-newsletter.png" title='view students messages'>
							<span>Notifications</span>
						</a>
					</li> 
					<li>
						<a href="webreport.php">
							<img alt="Articles" src="img/m-articles.png" title='view students assesments'>
							<span>ReportIncidence</span>
							<span class="submenu-arrow"></span>
						</a>
					</li>
					<div class="clearfix"></div>
				</ul>
				<div id="content" class="clearfix">
					<label for="filter">Filter</label> <input type="text" name="filter" value="" id="filter" />
					<a href="">Report an Incidence</a>
					<table cellpadding="1" cellspacing="1" id="resultTable">
						<thead>
							<tr>
							     <th> Unique Number </th>
								<th> Name </th>
								<th> Sex</th>
								<th> Age </th>
								<th> Reporter </th>
								<th> District</th>
								<th> Village</th>
								<th> Details </th>
							
								<th> Date</th>
								<th> Status</th>
								
								<th> ToDo Actions </th>
								
							</tr>
						</thead>
						<tbody>
						<?php
							include('connect.php');
							$result = mysql_query("SELECT * FROM incident_report_details where authority='Police'");
							while($row = mysql_fetch_array($result))
								{
									echo '<tr class="record">';
										echo '<td><div align="left">SFPINC'.$row['incident_report_id'].'</div></td>';
										echo '<td><div align="left">'.$row['survivor_name'].'</div></td>';
									echo '<td><div align="left">'.$row['survivor_gender'].'</div></td>';
									echo '<td><div align="left">'.$row['perpetrator_estimated_age'].'</div></td>'; 
									echo '<td><div align="left">'.$row['incident_reported_by'].'</div></td>';
									echo '<td><div align="left">'.$row['incident_location'].'</div></td>';
									echo '<td><div align="left">'.$row['incident_location'].'</div></td>'; 
									echo '<td><div align="left">'.$row['incident_description'].'</div></td>';
								
									echo '<td><div align="left">'.$row['incident_date_and_time'].'</div></td>';
									echo '<td><div align="left">'.$row['status'].'</div></td>';
									
									
									
									echo '<td><div align="center"><a rel="facebox" href="incidencedetails.php?id='.$row['incident_report_id'].'">Details</a></div></td>';
									echo '</tr>';
								}
							?> 
						</tbody>
					</table>
				</div>
				<div id="footer" class="radius-bottom">
					2016 �
					<a class="afooter-link" href="">Admin Panel - SafePal</a>
					by
					<a class="afooter-link" href="">UNFPA</a>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>
	</div>
	<script src="js/jquery.js"></script>
  <script type="text/javascript">
$(function() {


$(".delbutton").click(function(){

//Save the link in a variable called element
var element = $(this);

//Find the id of the link that was clicked
var del_id = element.attr("id");

//Built a url to send
var info = 'id=' + del_id;
 if(confirm("Sure you want to delete this update? There is NO undo!"))
		  {

 $.ajax({
   type: "GET",
   url: "deleteroom.php",
   data: info,
   success: function(){
   
   }
 });
         $(this).parents(".record").animate({ backgroundColor: "#fbc7c7" }, "fast")
		.animate({ opacity: "hide" }, "slow");

 }

return false;

});

});
</script>
</body>
</html>