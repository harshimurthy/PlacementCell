

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<head><title>Dr.AIT Placement Cell</title>
<link rel="stylesheet" type="text/css" href="commonstyle.css" />
<link rel="stylesheet" type="text/css" href="menustyle.css" />
<script type="text/javascript" src="showtime.js"></script>

</head>

<body>

	<div class="common">
		<p class="collegename">
			Dr. Ambedkar Institute of Technology, Bangalore
		</p>

		<p class="department">
			Department of Training and Placement
		</p>

		<img src="icon.jpg" alt="Cannot display image" class="collegeicon"/>
	</div>

		
	<div class="hello">
	Hello &nbsp
			<?php
require '../core1.inc.php';
require '../connect1.inc.php'; 
$uid=$_SESSION['user_id'];
	$query="SELECT `username` FROM `login` WHERE `id`=$uid";
	if($query_run=mysql_query($query))
	{
			echo (mysql_result($query_run, 0 , 'username'));
		 
	} ?>
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<script> timefn()</script>
	<a href="../login/logout.php" class="logout">logout</a>


	</div> 

		<nav class="menubar">
		<ul>
 			<li><a href="#home" class="menu">Home</a></li>
			<li><a href="#InfoBoard" class="menu">Info Board</a> 
				<ul>
					<li><a href="#">Notice Board</a></li> 
					<li><a href="#">Notifications</a></li>
					<li><a href="#">Downloads</a></li>
				</ul>
			</li> 
			<li><a href="#CV" class="menu">CV</a>
				<ul>
					<li><a href="#">View CV</a></li> 
					<li><a href="#">Update CV</a></li>
					<li><a href="#">Get CV in pdf</a></li>
				</ul>
			</li>
  			<li><a href="#Company Info" class="menu">Company Info</a>	
			<ul>
					<li><a href="#">All companies</a></li> 
					<li><a href="#">Company Pre-registration</a></li>
					<li><a href="#">Company Search</a></li>
				</ul>
			</li> 
			<li><a href="#Placementinfo" class="menu">Placement info</a> 
				<ul>
					<li><a href="#">Branch wise</a></li> 
					<li><a href="#">Company wise</a></li>
					<li><a href="#">Search Placed students</a></li>
					<li><a href="#">Search any student</a></li>
				</ul>
			</li>
			<li><a href="#history" class="menu">Placement History</a> 
				<ul>
					<li><a href="#">Branch wise</a></li> 
					<li><a href="#">Company wise</a></li>
					<li><a href="#">Placed students</a></li>
				</ul>
			</li> 
			<li><a href="#portal" class="menu">Students portal</a> 
				<ul>
					<li><a href="#">FAQs</a></li> 
					<li><a href="#">Write a mail</a></li>
					<li><a href="#">Give feedback</a></li>
					<li><a href="#">Alumnis feedback</a></li>
				</ul>
			</li> 
 
  			<li><a href="#account" class="menu">Account</a> 
				<ul>
					<li><a href="#">My batch</a></li> 
					<li><a href="#">Change password</a></li>
					<li><a href="#">Change password</a></li>
					<li><a href="#">Change Security Question</a></li>
				</ul>
			</li> 
		</ul>
	</nav>
	</div>



<div class="footer">
<p class="footertext">
<a href="http://www.google.com" class="footerdesign" >Home</a> |
<a href="http://www.dr-ait.org" class="footerdesign">www.dr-ait.org</a> |
<a href="http://www.google.com" class="footerdesign">Notice Board</a>| 
<a href="http://www.google.com" class="footerdesign">Companies</a>| 
<a href="http://www.google.com" class="footerdesign">Downloads</a>|
<a href="http://www.google.com" class="footerdesign">Account</a>|
<a href="http://www.google.com" class="footerdesign">Credits</a>|
<a href="http://www.google.com" class="footerdesign">Contact</a> |
<a href="../login/logout.php" class="footerdesign">logout</a>

  
</p>
</div>
		
</body>
</html>
