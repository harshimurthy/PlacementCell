<?php

require "../connect1.inc.php";
require "../core1.inc.php";

?>
<head><title>Dr.AIT Placement Cell</title>
<link rel="stylesheet" type="text/css" href="commonstyle2.css" />
<link rel="stylesheet" type="text/css" href="menustyle2.css" />
<link rel="stylesheet" type="text/css" href="homestyle2.css" />
<link rel="stylesheet" type="text/css" href="dept.css" />
<script type="text/javascript" src="showtime2.js"></script>

</head>

<body>
	<div class="common">
	<img src="pic.jpg" alt="Cannot display image" class="icon"/>
		<p class="collegename">
			Dr. Ambedkar Institute of Technology, Bangalore
		</p>

		<p class="department">
			Department of Training and Placement
		</p>

		<img src="icon.jpg" alt="Cannot display image" class="collegeicon"/>
	</div>

		
	<div class="hello">
	<a href="adminhome.html" class="logout">Home</a> 
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<script> timefn()</script>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<a href="../login/logout.php" class="logout">logout</a>
	</div>

	
<div class="deptDiv">
<form action="deptdel.php" method="post">
	<h2 align=center>Delete A department Coordinator</h2>
	<table class="delbox">
	<tr><td >Enter user id</td><td> <input type="text" name="usn"/></td></tr>
	
	<tr><td></td><td colspan=2 >
	<input type="submit" name="usnbutton" value="Delete Entry" /></td></table>
	<hr/></form>
	
<?
if(isset($_POST['usn']) && isset($_POST['usnbutton']))
{

	$usn=$_POST['usn'];

	echo "User ID: ".$usn."<br/>";
	$result="select id from `login` where `username`='$usn'";
	if($res_run=mysql_query($result))
	{
		$num=mysql_num_rows($res_run);
		if($num==0)
		{
			echo "\n Entry does not exist";
		}
		else
		{
			$q="delete FROM `login` where `username`='$usn'";
			if($query_run=mysql_query($q))
			{	
					echo "Deleted Successfully";
			}
			else
				echo "	Could not Delete.";
		}
		mysql_query("delete from `origpwd` where `username`='$usn'");
	}
}
else
	echo "ADD ALL DETAILS";
?>

</div>