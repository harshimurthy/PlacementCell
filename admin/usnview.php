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
<form action="usnview.php" method="post">
	<h2>Show</h2>
	

	Select Branch<select name="branch">
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
	</select><br/>
	
	<input type="submit" name="usnbutton" value="View "/>
	<hr/></form>
	
<?
if( isset($_POST['branch']) && isset($_POST['usnbutton']))
{

	$branch=$_POST['branch'];

	echo "<table><tr><th>user id</th><th>generated password</th><th>branch</th><th>phone</th><th>email</th></tr>";
	$q="select * from `origpwd` where `branch`='$branch'";
	if($query_run=mysql_query($q))
	{	
		$num=mysql_num_rows($query_run);
		if($num!=0)
		{
		for($i=0;$i<=mysql_num_rows($query_run);$i++)
				{
				$res1=mysql_result($query_run,$i,'pwdid');
				$res2=mysql_result($query_run,$i,'pwd');
				$res3=mysql_result($query_run,$i,'branch');
				$res4=mysql_result($query_run,$i,'phone');
				$res5=mysql_result($query_run,$i,'email');
				echo "<tr><td>".$res1."</td><td>".$res2."</td><td>" .$res3 ."</td><td>".$res4 ."</td><td>".$res5."</td></tr>";
			}
		}
		echo "</table>";
	}
}

?>