<?php

require "../connect1.inc.php";
require "../core1.inc.php";

?>
<head><title>Dr.AIT Placement Cell</title>
<link rel="stylesheet" type="text/css" href="commonstyle2.css" />
<link rel="stylesheet" type="text/css" href="menustyle2.css" />
<link rel="stylesheet" type="text/css" href="homestyle2.css" />
<link rel="stylesheet" type="text/css" href="usn.css" />
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

	
<div class="StudentDelDiv">
<form action="usndel.php" method="post">
	<h2>Delete Entry</h2>
	<table class="delbox">
	<tr><td>Enter user id</td><td> <input type="text" name="usn"/></td></tr>
	<tr><td>
	Select Branch</td><td><select name="branch">
	<option value="civil">(B.E)Civil Engineering</option>
	<option value="cse">(B.E)Computer Science and Engineering</option>
	<option value="eee">(B.E)Electrical and Electronics Engineering</option>
	<option value="ece">(B.E)Electronics and Communication Engineering</option>
	<option value="it">(B.E)Instrumentation Technology</option>
	<option value="ise">(B.E)Information Science and Engineering</option>
	<option value="iem">(B.E)Industrial Engineering and Management</option>
	<option value="mech">(B.E)Mechanical Engineering</option>
	<option value="me">(B.E)Medical Electronics</option>
	<option value="tce">(B.E)Telecommunication Engineering</option>
	<option value="me">(B.E)Medical Electronics</option>
	<option value="mba">M.B.A</option>
	<option value="mca">M.C.A</option>
	<option value="mcse">(M.tech)Computer Science & Engineering</option>
	<option value="vlsi">(M.tech)VLSI Design & Embedded Systems</option>
	<option value="pe">(M.tech)Power Electronics</option>
	<option value="dcn">(M.tech)Digital Communication & Networking</option>
	<option value="se">(M.tech)Structural Engineering</option>
	<option value="md">(M.tech)Machine Design</option>
	<option value="cne">(M.tech)Computer Network Engineering</option>
	<option value="mtce">(M.tech)Telecommunication Engineering</option>
	</select></td></tr>
	<tr><td></td><td colspan=2 >
	<input type="submit" name="usnbutton" value="Delete Student" /></td></table>
	<hr/></form>
	
<?
if(isset($_POST['usn']) && isset($_POST['branch']) && isset($_POST['usnbutton']))
{
	echo "<table class=delbox>";
	$usn=$_POST['usn'];
	$branch=$_POST['branch'];
	echo "<tr><td>User ID:</td><td> ".$usn." \t</tr></td>";
	echo "<tr><td>Branch:</td><td> ".$branch."\t</tr></td></table><br/><br/>";
	$result="select id from `login` where `username`='$usn' and `branch`='$branch'";
	if($res_run=mysql_query($result))
	{
		$num=mysql_num_rows($res_run);
		if($num==0)
		{
			echo "\n Entry does not exist";
		}
		else
		{
			$q="delete FROM `login` where `branch`='$branch' and `username`='$usn'";
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