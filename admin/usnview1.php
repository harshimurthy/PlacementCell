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

	
<div class="StudentDeldiv">
<form action="usnview1.php" method="post">
	<h2 align=center>Display Student Details</h2>
	<table class="delbox">
	<tr><td >Enter user id</td><td> <input type="text" name="usn"/></td></tr>
	<tr><td colspan=2>OR</td></tr>
	<tr><td>
	Select Branch</td><td><select name="branch">
	<option value="">none</option>
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
	<input type="submit" name="usnbutton" value="View" /></td></table>
	<hr/></form>
	
<?php
if(isset($_POST['usn']) && isset($_POST['usnbutton']) && $_POST['usn']!=null)
{
	$usn=$_POST['usn'];
	$branch=$_POST['branch'];
	$result="select * from `origpwd` where `username`='$usn' or `branch`='$branch' order by `username` ASC";
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
			$branch=mysql_result($res_run,0,'branch');
			
			
			echo "<table><tr><td> USERNAME: </td><td> ".$username."</td></tr><tr><td> ORIGINAL PASSWORD: </td><td>".$pwd;
			echo "</td></tr><tr><td> BRANCH: </td><td> ".$branch."</td></tr><tr><td>PHONE: </td><td> ".$phone."</td></tr><tr><td> EMAIL ID:  </td><td>".$email;
			echo "</td></tr></table>";
			
		}
			
	}
}
else if( isset($_POST['branch'])  && isset($_POST['usnbutton']) && $_POST['branch']!=null) 
{
	echo "
	</div>

	<div class='tabdiv'>
	<table class='viewtable'><tr> <td colspan=5>STUDENT ENTRIES</td></tr>
	<tr><th>USERNAME</th><th>ORIGINAL PASSWORD</th><th>BRANCH</th><th>PHONE NUMBER</th><th>EMAIL ID</th></tr>";


		$branch=$_POST['branch'];
		$q="select * from `origpwd` where `branch`= '$branch' order by `username` ASC";
	if($res_run=mysql_query($q))
	{
		for($i=0;$i<mysql_num_rows($res_run);$i++)
		{
				$username=mysql_result($res_run,$i,'username');
				$pwd=mysql_result($res_run,$i,'pwd');
				$phone=mysql_result($res_run,$i,'phone');
				$email=mysql_result($res_run,$i,'email');
				$branch=mysql_result($res_run,0,'branch');
				
				echo "<tr><td> ".$username."</td><td>".$pwd."</td><td> ".$branch;
				echo "</td><td>  ".$phone."</td><td>  ".$email,"</td></tr>";
			
			
			
		}
		echo "</table>";
	}
}
	
	

else
	echo "ADD ALL DETAILS";
?>


<?

