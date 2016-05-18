<?php

require "../connect1.inc.php";
require "../core1.inc.php";

?>
<head><title>Dr.AIT Placement Cell</title>
<link rel="stylesheet" type="text/css" href="commonstyle2.css" />
<link rel="stylesheet" type="text/css" href="menustyle2.css" />
<link rel="stylesheet" type="text/css" href="homestyle2.css" />
<link rel="stylesheet" type="text/css" href="staff.css" />
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

	
<div class="Staffdiv">
<form action="staffview.php" method="post">
	<h2 align=center>Display Executive Staff Details</h2>
	<table class="delbox">
	<tr><td >Enter user id</td><td> <input type="text" name="usn"/></td></tr>
	
	<tr><td></td><td colspan=2 >
	<input type="submit" name="usnbutton" value="View" /></td></table>
	<hr/></form>
	
<?php
if(isset($_POST['usn']) && isset($_POST['usnbutton']))
{

	$usn=$_POST['usn'];

	echo "User ID: ".$usn."<br/>";
	$result="select * from `origpwd` where `username`='$usn'";
	if($res_run=mysql_query($result))
	{
		$num=mysql_num_rows($res_run);
		if($num==0)
		{
			echo "\n Entry does not exist";
		}
		else
		{
			$username=mysql_result($res_run,0,'username');
			$pwd=mysql_result($res_run,0,'pwd');
			$phone=mysql_result($res_run,0,'phone');
			$email=mysql_result($res_run,0,'email');
			echo "<br/> USERNAME:  ".$username."<br/> ORIGINAL PASSWORD:  ".$pwd;
			echo "<br/> PHONE:  ".$phone."<br/> EMAIL ID:  ".$email;
		}
			
	}
}
else
	echo "ADD ALL DETAILS";
?>

</div>

<div class="tabdiv">
<table class="viewtable"><tr> <td colspan=4>ALL EXECUTIVE STAFF ENTRIES</td></tr>
<tr><th>USERNAME</th><th>ORIGINAL PASSWORD</th><th>PHONE NUMBER</th><th>EMAIL ID</th></tr>

<?

$q="select * from `origpwd` where `branch`='staff'";
if($res_run=mysql_query($q))
{
	for($i=0;$i<mysql_num_rows($res_run);$i++)
	{
			$username=mysql_result($res_run,$i,'username');
			$pwd=mysql_result($res_run,$i,'pwd');
			$phone=mysql_result($res_run,$i,'phone');
			$email=mysql_result($res_run,$i,'email');
			echo "<tr><td> ".$username."</td><td>".$pwd;
			echo "</td><td>  ".$phone."</td><td>  ".$email,"</td></tr>";
		
		
		
	}
	echo "</table>";
}


?>