<?php

require "../connect1.inc.php";
require "../core1.inc.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<head><title>Dr.AIT Placement Cell</title>
<link rel="stylesheet" type="text/css" href="../student/commonstyle.css" />
<link rel="stylesheet" type="text/css" href="../student/menustyle.css" />
<link rel="stylesheet" type="text/css" href="../student/homestyle1.css" />
<link rel="stylesheet" type="text/css" href="cvstyle.css" />
<link rel="stylesheet" type="text/css" href="downstyle1.css" />
<script type="text/javascript" src="../common/showtime.js"></script>
</head>

<body>

	<div class="common">
		<img src="../common/pic.jpg" alt="Cannot display image" class="icon"/>
		
		<p class="collegename">
			Dr. Ambedkar Institute of Technology, Bangalore
		</p>

		<p class="department">
			Department of Training and Placement
		</p>

		<img src="../common/icon.jpg" alt="Cannot display image" class="collegeicon"/>
	</div>

		
	<div class="hello">
	Hello &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<script> timefn()</script>&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
	
 
	
<a href="../login/logout.php" class="logout">logout</a>

	</div> 

		<nav class="menubar">
		<ul>
 			<li><a href="../student/studenthome.html" class="menu">Home</a></li>
			<li><a href="#InfoBoard" class="menu">Info Board</a> 
				<ul>
					<li><a href="noticeboard.php">Notice Board</a></li> 
					<li><a href="downloads.php">Downloads</a></li>
					<li><a href="notifications.php">Notifications</a></li>

					
				</ul>
			</li> 
			<li><a href="#CV" class="menu">CV</a>
				<ul>
					<li><a href="../cv/cvret.php">View CV</a></li> 
					<li><a href="../cv/updatecv.html">Update CV</a></li>
					<li><a href="../cv/updatecv.html">Convert CV</a></li>
				
				</ul>
			</li>
  			<li><a href="#Company Info" class="menu">Company Info</a>	

			</li> 

			<li><a href="#Placementinfo" class="menu">Placement info</a> 
				<ul>
						<li><a href="#">My batch</a></li> 
						<li><a href="#">Placed Students</a></li> 
				</ul>
			</li>
			<li><a href="history.html" class="menu">Placement History</a> 

			</li> 
			<li><a href="#portal" class="menu">Students portal</a> 
				<ul>
					<li><a href="studenthome">FAQs</a></li> 
					
					<li><a href="../studentPortal/feedback.html">Give feedback</a></li>
					
				</ul>
			</li> 
 
  			<li><a href="#account" class="menu">Account</a> 
				<ul>
				
					<li><a href="password.php">Change password</a></li>
					
					<li><a href="security.php">Change Security Question</a></li>
					
					<li><a href="pic.php">Change Picture</a></li>
				</ul>
			</li> 
		</ul>
	</nav>
	</div>
	<div>
	<span class="name">Curriculum Vitae</span>
	</div>

<?php


$id=$_SESSION['user_id'];
$q="select * from `cv` where `id`='$id'";
$res=mysql_query($q);

	$row=mysql_fetch_array($res);
?>
<div class='middlebox1'>	
<table class='cvtable1'>	
<th>USN</th><td colspan=3> <? echo $row[2]; ?> </td></tr>	
<th>Name</th><td colspan=3> <? echo $row[1]; ?> </td></tr>	
<th>Course</th><td colspan=3> <? $branch=$row[3];
	if($branch=="civil")
			echo "(B.E)Civil Engineering <br/> ";
		if($branch=="cse")
			echo "(B.E)Computer Science and Engineering <br/>";
		if($branch=="eee")
			echo "(B.E)Electrical and Electronics Engineering <br/>";
		if($branch=="ece")
			echo "(B.E)Electronics and Communication Engineering <br/>";
		if($branch=="it")
			echo "(B.E)Instrumentation Technology <br/>";
		if($branch=="ise")
			echo "(B.E)Information Science and Engineering <br/>";
		if($branch=="iem")
			echo "(B.E)Industrial Engineering and Management <br/>";
		if($branch=="mech")
			echo "(B.E)Mechanical Engineering <br/>";
		if($branch=="me")
			echo "(B.E)Medical Electronics <br/>";
		if($branch=="tce")
			echo "(B.E)Telecommunication Engineering <br/>";
		if($branch=="mcse")
			echo "(M.tech)Computer Science & Engineering <br/>";
		if($branch=="eee")
			echo "(B.E)Electrical and Electronics Engineering <br/>";
		if($branch=="vlsi")
			echo "(M.tech)VLSI Design & Embedded Systems <br/> ";
		if($branch=="pe")
			echo "(M.tech)Power Electronics <br/> ";
		if($branch=="vlsi")
			echo "(M.tech)VLSI Design & Embedded Systems <br/> ";
		if($branch=="dcn")
			echo "(M.tech)Digital Communication & Networking <br/> ";
		if($branch=="se")
			echo "(M.tech)Structural Engineering <br/> ";
		if($branch=="md")
			echo "(M.tech)Machine Design <br/> ";
		if($branch=="cne")
			echo "(M.tech)Computer Network Engineering <br/> ";
		if($branch=="mtce")
			echo "(M.tech)Telecommunication Engineering <br/> ";
		if($branch=="mba")
			echo "M.B.A <br/> ";
		if($branch=="mca")
			echo "M.C.A <br/> "
		?> </td></tr>	
<th>Date Of Birth</th><td colspan=3> <? echo $row[4].' '.$row[5]. ' '.$row[6]; ?> </td></tr>	
<th>Gender</th><td colspan=3> <? echo $row[7]; ?> </td></tr>	
<th>Father's Name</th><td colspan=3> <? echo $row[8]; ?> </td></tr>	
<th>Mother's Name</th><td colspan=3> <? echo $row[9]; ?> </td></tr>	
<th>Permanant Address</th><td colspan=3> <? echo $row[10]."<br/>".$row[11]."<br/>".$row[12]."<br/>".$row[13]."<br/>".$row[14]."<br/> Pincode: ".$row[15]; ?> </td></tr>	
<th>Present Address</th><td colspan=3> <? echo $row[16]."<br/>".$row[17]."<br/>".$row[18]."<br/>".$row[19]."<br/>".$row[20]."<br/> Pincode: ".$row[21]; ?> </td></tr>	
<th>E-mail Address</th><td colspan=3> <? echo $row[22]; ?> </td></tr>	
<th>Mobile Number</th><td colspan=3> <? echo '+91'.$row[23]; ?> </td></tr>	
<th>Phone Number</th><td colspan=3> <? echo $row[24]; ?> </td></tr>
<th>Spoken Languages</th><td colspan=3> <? echo $row[93]; ?> </td></tr>	
<th>Programming Languages/Platforms</th><td colspan=3> <? echo $row[94]; ?> </td></tr>		
<tr><td colspan=4 class="headingdesign" >Semester Wise Grade </td></tr>

<tr><th>Semester</th><th>SGPA</th><th>CGPA</th><th>Year Of passing</th></tr>
<tr><th>Semester I</th><td><? echo $row[25]?></td><td><? echo $row[26]?></td><td><? echo $row[27]?></td></tr>
<tr><th>Semester II</th><td><? echo $row[28]?></td><td><? echo $row[29]?></td><td><? echo $row[30]?></td></tr>
<tr><th>Semester III</th><td><? echo $row[31]?></td><td><? echo $row[32]?></td><td><? echo $row[33]?></td></tr>
<tr><th>Semester IV</th><td><? echo $row[34]?></td><td><? echo $row[35]?></td><td><? echo $row[36]?></td></tr>
<tr><th>Semester V</th><td><? echo $row[37]?></td><td><? echo $row[38]?></td><td><? echo $row[39]?></td></tr>
<tr><th>Semester VI</th><td><? echo $row[40]?></td><td><? echo $row[41]?></td><td><? echo $row[42]?></td></tr>
<tr><th>Semester VII</th><td><? echo $row[43]?></td><td><? echo $row[44]?></td><td><? echo $row[45]?></th></tr>
<tr><th>Semester VII</th><td><? echo $row[46]?></td><td><? echo $row[47]?></td><td><? echo $row[48]?></td></tr>			
			

<tr><td colspan=4 class="headingdesign" >Previous Degrees </td></tr>
<tr><td colspan=4><table class="Dclass">
		<tr><th>Degree Name</th><th>Enrolling Year</th><th>Passing Year</th><th>Board</th><th>School/college</th><th>Marks</th></tr>
		<tr><td>Secondary School(10th)</td><td><? echo $row[49]?> </td><td><? echo $row[50]?> </td><td><? echo $row[51]?> </td><td>
		<? echo $row[53]?> </td><td><? echo $row[52]?> </td></tr>
		<? if ($row[58]!=null)
		{
			?><tr><td>Senior Secondary School(12th)</td><td><? echo $row[54]?> </td><td><? echo $row[55]?> </td><td><? echo $row[56]?> </td><td><? echo $row[58]?> </td><td><? echo $row[57]?> </td></tr>
			
		<? }?>
		
		</table></td></tr>
		
		<? if ($row[78]!=null || $row[78]!=0)
		{?>
	
	<tr><td colspan=4><table class="Dclass">
		<tr><td colspan=4 class="headingdesign" style="color:#4b37df;font-size:25px;"><? echo $row[73]?> </td></tr>	
		
			<tr><th>Degree Name</th><td><? echo $row[73]?></td>
			<th>Marks</th><th>Enrolling Year</th><th>Passing Year</th></tr>
			<tr><th>Branch</th><td><? echo $row[74]?></td>
			<td><? echo $row[79]?></td><td><? echo $row[75]?></td><td><? echo $row[76]?></td></tr>
			<tr><th>University</th><td> <? echo $row[77]?></td><th>College</th><td colspan=2><? echo $row[78]?> </td></tr>
			
	</table></td></tr>
			
		<? } ?>
		
		<?php if ($row[64]!=null || $row[64]!=0)
		{?>
			<tr><td colspan=4><table class='Dclass'>	<tr><td colspan=5 class='headingdesign' style='color:#4b37df;font-size:25px;'>
			<?echo $row[59]?></td></tr>		
		
			<tr><th>Degree Name</th><td><? echo $row[59]?></td>
			<th>Marks</th><th>Enrolling Year</th><th>Passing Year</th></tr>
			<tr><th>Branch</th><td><?php echo $row[60]?></td>
			<td><? echo $row[65]?></td><td><? echo $row[61] ?></td><td><? echo $row[62] ?></td></tr>
			<tr><th>University</th><td> <? echo $row[63]?></td><th>College</th><td colspan=2><? echo $row[64]?></td></tr>
	</table></td></tr>
			
	<? } ?>
	 
	<?php if ($row[71]!=null || $row[71]!=0)
		{?>
	<tr><td colspan=4><table class="Dclass">
	<tr><td colspan=5 class="headingdesign" style="color:#4b37df;font-size:25px;"><? echo $row[66]?> </td></tr>		
		
			<tr><th>Degree Name</th><td><? echo $row[66]?></td>
			<th>Marks</th><th>Enrolling Year</th><th>Passing Year</th></tr>
			<tr><th>Branch</th><td><? echo $row[67]?></td>
			<td><? echo $row[72]?></td><td><? echo $row[68]?></td><td><? echo $row[69]?></td></tr>
			<tr><th>University</th><td> <? echo $row[70]?></td><th>College</th><td colspan=2><? echo $row[71] ?></td></tr>
			
	</table></td></tr>
		<? } ?>	
	<tr><td colspan=4 class="headingdesign" >Co-Curricular Activities </td></tr>	
	<tr><td colspan=4><? echo $row[95] ?></td></tr>
	<tr><td colspan=4 class="headingdesign" >Extra Curricular Activities </td></tr>	
	<tr><td colspan=4 style="background-color:#d0f0d5"><? echo $row[80] ?></td></tr>
	<tr><td colspan=4 class="headingdesign" >About Myself </td></tr>	
	<tr><td colspan=4><? echo $row[81] ?></td></tr>
<tr><td colspan=4 class="headingdesign" >Objectives </td></tr>	
	<tr><td colspan=4 style="background-color:#d0f0d5"><? echo $row[82] ?></td></tr>


	<tr><td colspan=4 class="headingdesign" >References </td></tr>	
	<tr><td colspan=4>
	<table >
	<tr><th >Reference 1</th><td><? echo $row[83]."<br/>".$row[84]."<br/>". $row[85]."<br/>". $row[86]."<br/>". $row[87] ?></td></tr>
	<tr><th> Reference 2</th><td><?  echo $row[88]."<br/>". $row[89]."<br/>". $row[90]."<br/>". $row[91]."<br/>". $row[92] ?></td></tr>
	</tr>
	</table>
	<br/><br/><br/><br/>
	</td></tr>
</table></div>





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
<a href="http://www.google.com" class="footerdesign">Logout</a> 
  
</p>
</div>
		
</body>
