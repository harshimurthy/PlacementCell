	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<head><title>Dr.AIT Placement Cell</title>
<link rel="stylesheet" type="text/css" href="commonstyle1.css" />
<link rel="stylesheet" type="text/css" href="menustyle1.css" />
<link rel="stylesheet" type="text/css" href="homestyle1.css" />
<link rel="stylesheet" type="text/css" href="downstyle1.css" />
<link rel="stylesheet" type="text/css" href="details.css" />
<script type="text/javascript" src="showtime1.js"></script>

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
	Hello &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<a href="../login/logout.php" class="logout">logout</a>
	<script> timefn()</script>
	</div>

	<div class="menubar">
		<nav>
		<ul>
 			<li><a href="companyhome.html" class="menu">Home</a></li>

			<li><a href="#" class="menu">Add Information</a>
				<ul>
					<li><a href="downloadtry.php">Upload Document</a></li> 
					<li><a href="addcompanydetail.php">Add details/ eligibility criteria</a></li>
					<li><a href="companyret.php">View Details</a></li>
				</ul>
			</li>
  			<li><a href="selection.php" class="menu">Selection Process</a>	

			</li> 
			
	
			<li><a href="#Account" class="menu">Account</a> 
				<ul>
					<li><a href="password.php">Change password</a></li> 
					<li><a href="security.php">Change security question</a></li>
					
					<li><a href="phone.php">Change Phone Number</a></li>
					<li><a href="email.php">Change Email ID</a></li>
				</ul>
			</li>
		</ul>
	</nav>
	</div>

<?php
require '../core1.inc.php';
require '../connect1.inc.php';
echo "<div class='tabdiv1'>";
$id=$_SESSION['user_id'];
$q="select * from `company` where cid='$id'";
$res=mysql_query($q);
echo "<table class='viewtable1'>";

$name=mysql_result($res,0,'name');
$address=mysql_result($res,0,'address');
$website=mysql_result($res,0,'website');
$rounds=mysql_result($res,0,'rounds');
$Procedure=mysql_result($res,0,'Procedure');
$Details=mysql_result($res,0,'Details');
$Profile=mysql_result($res,0,'Profile');
$tenth=mysql_result($res,0,'tenth');
$twelve=mysql_result($res,0,'twelve');
$CGPA=mysql_result($res,0,'CGPA');
$intake=mysql_result($res,0,'intake');
$salary=mysql_result($res,0,'salary');
$salary_detail=mysql_result($res,0,'salary detail');
$salary_bond=mysql_result($res,0,'service bond');
$visiting_day=mysql_result($res,0,'visiting day');
$visiting_month=mysql_result($res,0,'visiting month');
$visiting_year=mysql_result($res,0,'visiting year');
$time=mysql_result($res,0,'time');
$Other_Details=mysql_result($res,0,'Other Details');
$company_Status=mysql_result($res,0,'company Status');
$visiting_status=mysql_result($res,0,'visiting status');

echo "<tr><th colspan='2'><h3>Company Profile</h3></th></tr>";
echo "<tr><td>Company Name</td><td>$name</td></tr>";
echo "<tr><td>Address</td><td>$address</td></tr>";
echo "<tr><td>Website</td><td>$website</td></tr>";

echo "<tr><th colspan='2'><h3>Procedure</h3></th></tr>";
echo "<tr><td>Selection Procedure</td><td>$Procedure</td></tr>";
echo "<tr><td>Number of Rounds</td><td>$rounds</td></tr>";

echo "<tr><th colspan='2'><h3>Company Details</h3></th></tr>";
echo "<tr><td>Details</td><td>$name</td></tr>";
echo "<tr><td>Job Profile</td><td>$Profile</td></tr>";

echo "<tr><th colspan='2'><h3>Eligibility Criteria</h3></th></tr>";
echo "<tr><td>Minimum 10th Percentage</td><td>$tenth%</td></tr>";
echo "<tr><td>Minimum 12th(Equivalent) Percentage</td><td>$twelve%</td></tr>";
echo "<tr><td>Minimum CGPA</td><td>$CGPA</td></tr>";
echo "<tr><td>Allowed Branches</td><td>";
$branchq=mysql_query("select * from companybranch where cid='$id'");
$i=2;
while($row=mysql_fetch_array($branchq))
{
	for($i=2;$i<mysql_num_fields($branchq);$i++)
	{
	$name=mysql_field_name($branchq,$i);
	if($row[$i]=='y')
	{
		if($name=="civil")
			echo "(B.E)Civil Engineering <br/> ";
		if($name=="cse")
			echo "(B.E)Computer Science and Engineering <br/>";
		if($name=="eee")
			echo "(B.E)Electrical and Electronics Engineering <br/>";
		if($name=="ece")
			echo "(B.E)Electronics and Communication Engineering <br/>";
		if($name=="it")
			echo "(B.E)Instrumentation Technology <br/>";
		if($name=="ise")
			echo "(B.E)Information Science and Engineering <br/>";
		if($name=="iem")
			echo "(B.E)Industrial Engineering and Management <br/>";
		if($name=="mech")
			echo "(B.E)Mechanical Engineering <br/>";
		if($name=="me")
			echo "(B.E)Medical Electronics <br/>";
		if($name=="tce")
			echo "(B.E)Telecommunication Engineering <br/>";
		if($name=="mcse")
			echo "(M.tech)Computer Science & Engineering <br/>";
		if($name=="eee")
			echo "(B.E)Electrical and Electronics Engineering <br/>";
		if($name=="vlsi")
			echo "(M.tech)VLSI Design & Embedded Systems <br/> ";
		if($name=="pe")
			echo "(M.tech)Power Electronics <br/> ";
		if($name=="vlsi")
			echo "(M.tech)VLSI Design & Embedded Systems <br/> ";
		if($name=="dcn")
			echo "(M.tech)Digital Communication & Networking <br/> ";
		if($name=="se")
			echo "(M.tech)Structural Engineering <br/> ";
		if($name=="md")
			echo "(M.tech)Machine Design <br/> ";
		if($name=="cne")
			echo "(M.tech)Computer Network Engineering <br/> ";
		if($name=="mtce")
			echo "(M.tech)Telecommunication Engineering <br/> ";
		if($name=="mba")
			echo "M.B.A <br/> ";
		if($name=="mca")
			echo "M.C.A <br/> ";
	}
		
	}

}
echo "</td></tr>";

echo "<tr><th colspan='2'><h3>Other Details</h3></th></tr>";
echo "<tr><td>Expected Intake/td><td>$intake</td></tr>";
echo "<tr><td>Salary</td><td>$salary</td></tr>";
echo "<tr><td>Salary Detail</td><td>$salary_detail</td></tr>";
echo "<tr><td>Service Bond</td><td>$salary_bond</td></tr>";
echo "<tr><td>Visiting Date</td><td>$visiting_day $visiting_month $visiting_year</td></tr>";
echo "<tr><td>Visiting Time</td><td>$time</td></tr>";
echo "<tr><td>Other Details</td><td>$Other_Details</td></tr>";
echo "<tr><td>Company Status</td><td>$company_Status</td></tr>";
echo "<tr><td>Visiting Status</td><td>$visiting_status</td></tr>";


echo "</table> <br/>
<br/>
<br/></div>";



?>


	<div class="footer">
<p class="footertext">
<a href="companyhome.html" class="footerdesign" >Home</a> |
<a href="http://www.dr-ait.org" class="footerdesign">www.dr-ait.org</a> |
<a href="../login/credits.html" class="footerdesign">Credits</a>|
<a href="../login/contact.html" class="footerdesign">Contact</a> |
<a href="../login/logout.php" class="footerdesign">Logout</a> 
  
</p>
</div>
		
</body>
</html>
		