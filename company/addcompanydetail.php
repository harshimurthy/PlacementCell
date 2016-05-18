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
					<li><a href="image.php">Change icon</a></li>
					<li><a href="phone.php">Change Phone Number</a></li>
					<li><a href="email.php">Change Email ID</a></li>
				</ul>
			</li>
		</ul>
	</nav>
	</div>
	<div>
	<span class="name">Update Company Profile</span>
	</div>
	<div class="updatediv">
	
	<form method="Post" action="addcompanydetail.php">
		<table>
					<?php
		
		require '../core1.inc.php';
		require '../connect1.inc.php';
		$id=$_SESSION['user_id'];
		$order="select * from company where cid='$id'";
		$res=mysql_query($order);
		$row=mysql_fetch_array($res);
		
		?>

				<tr><th colspan="2"><h3>Company Profile</h3></th></tr>
			<tr><td>Company Name</td><td><input type="text" name="Cname" value="<?php echo $row['name'] ?>"/></td></tr>
			<tr><td>Company Address</td><td><input type="text" name="CAddress" value="<?php echo $row['address'] ?>"/></td></tr>
			<tr><td>Company Website</td><td><input type="url" name="CWebsite" value="<?php echo $row['website'] ?>"/></td></tr>
			
				<tr><th colspan="2"><h3>Selection Procedure</h3> </th></tr>
			<tr><td colspan="2"><textarea rows="10" cols="100" name="cProcedure"  ><?php echo $row['Procedure'] ?></textarea> </td></tr>
			<tr><td>Number of rounds</td><td><input type="number" name="Crounds" value="<?php echo $row['rounds'] ?>"/></td></tr>
			
				<tr><th colspan="2"><h3>Company Details </h3></th></tr>
			<tr><td colspan="2"><textarea rows="10" cols="100" name="cDetails" ><?php echo $row['Details'] ?></textarea> </td></tr>
			
				<tr><th colspan="2"><h3>Job Profile</h3></th></tr>
			<tr><td colspan="2"><textarea rows="3" cols="100" name="cProfile" ><?php echo $row['Profile'] ?></textarea> </td></tr>
			
				<tr><th colspan="2"><h3>Eligibility Criteria</h3></th></tr>
			<tr><td>minimum 10th percentage</td><td><input type="number" name="C10" value="<?php echo $row['tenth'] ?>"/></td></tr>
			<tr><td>minimum 12th percentage</td><td><input type="text" name="C12" value="<?php echo $row['twelve'] ?>"/></td></tr>
			<tr><td>CGPA(B.E)</td><td><input type="text" name="Ccgpa" value="<?php echo $row['CGPA'] ?>"/></td></tr>
			
			<tr><td>Allowed Courses</td><td>	
					<table><tr><td>
					<?php
					$checkquery=mysql_query("select * from companybranch where cid='$id'");
					$value=mysql_fetch_array($checkquery);
					?>
					<input type="checkbox" name="branches[]"  value="allbe" />ALL B.E Courses<br/>
					<input type="checkbox" name="branches[]"  value="civil" <? if($value['civil']=='y') echo 'checked="checked"'; ?>/>(B.E)Civil Engineering<br/>
					<input type="checkbox" name="branches[]"  value="cse" <? if($value['cse']=='y') echo 'checked="checked"'; ?>/>(B.E)Computer Science and Engineering<br/>
					<input type="checkbox" name="branches[]"  value="eee" <? if($value['eee']=='y') echo 'checked="checked"'; ?>/>(B.E)Electrical and Electronics Engineering<br/>
					<input type="checkbox" name="branches[]"  value="ece" <? if($value['ece']=='y') echo 'checked="checked"'; ?>/>(B.E)Electronics and Communication Engineering<br/>
					<input type="checkbox" name="branches[]"  value="it" <? if($value['it']=='y') echo 'checked="checked"'; ?>/>(B.E)Instrumentation Technology<br/>
					<input type="checkbox" name="branches[]"  value="ise" <? if($value['ise']=='y') echo 'checked="checked"'; ?>/>(B.E)Information Science and Engineering<br/>
					<input type="checkbox" name="branches[]"  value="iem" <? if($value['iem']=='y') echo 'checked="checked"'; ?>/>(B.E)Industrial Engineering and Management<br/>
					<input type="checkbox" name="branches[]"  value="mech" <? if($value['mech']=='y') echo 'checked="checked"'; ?>/>(B.E)Mechanical Engineering<br/>
					<input type="checkbox" name="branches[]"  value="me" <? if($value['me']=='y') echo 'checked="checked"'; ?>/>(B.E)Medical Electronics<br/>
					<input type="checkbox" name="branches[]"  value="tce" <? if($value['tce']=='y') echo 'checked="checked"'; ?>/>(B.E)Telecommunication Engineering<br/>
					</td><td>
					<input type="checkbox" name="branches[]"  value="allmtech"/>ALL Mtech Courses<br/>
					<input type="checkbox" name="branches[]"  value="mcse" <? if($value['mcse']=='y') echo 'checked="checked"'; ?>/>(M.tech)Computer Science & Engineering<br/>
					<input type="checkbox" name="branches[]"  value="vlsi" <? if($value['vlsi']=='y') echo 'checked="checked"'; ?>/>(M.tech)VLSI Design & Embedded Systems<br/>
					<input type="checkbox" name="branches[]"  value="pe" <? if($value['pe']=='y') echo 'checked="checked"'; ?>/>(M.tech)Power Electronics<br/>
					<input type="checkbox" name="branches[]"  value="dcn" <? if($value['dcn']=='y') echo 'checked="checked"'; ?>/>(M.tech)Digital Communication & Networking<br/>
					<input type="checkbox" name="branches[]"  value="se" <? if($value['se']=='y') echo 'checked="checked"'; ?>/>(M.tech)Structural Engineering<br/>
					<input type="checkbox" name="branches[]"  value="md" <? if($value['md']=='y') echo 'checked="checked"'; ?>/>(M.tech)Machine Design<br/>
					<input type="checkbox" name="branches[]"  value="cne" <? if($value['cne']=='y') echo 'checked="checked"'; ?>/>(M.tech)Computer Network Engineering<br/>
					<input type="checkbox" name="branches[]"  value="mtce" <? if($value['mtce']=='y') echo 'checked="checked"'; ?>/>(M.tech)Telecommunication Engineering<br/>
					<input type="checkbox" name="branches[]"  value="mba" <? if($value['mba']=='y') echo 'checked="checked"'; ?>/>M.B.A<br/>
					<input type="checkbox" name="branches[]"  value="mca" <? if($value['mca']=='y') echo 'checked="checked"'; ?>/>M.C.A<br/>
					<td></tr></table>
					</td></tr>
					
					<tr><th colspan="2"><h3>Other Details </h3></th></tr>
			<tr><td>Expected Intake</td><td><input type="text" name="Cintake" value="<?php echo $row['intake'] ?>"/></td></tr>
			<tr><td>Salary</td><td><input type="text" name="CSalary" value="<?php echo $row['salary'] ?>"/></td></tr>
			<tr><td>Salary Detail</td><td><input type="text" name="CsDetail" value="<?php echo $row['salary detail'] ?>"/></td></tr>
			<tr><td>Service Bond</td><td><input type="text" name="CBond" value="<?php echo $row['service bond'] ?>"/></td></tr>
			<tr><td>Visiting Date</td><td>
			
			
			<select name="vday">
			<option value="1" <?php if($row['visiting day']=="1") echo 'selected="selected"'; ?>>1</option>
			<option value="2" <?php if($row['visiting day']=="2") echo 'selected="selected"'; ?>>2</option>
			<option value="3" <?php if($row['visiting day']=="3") echo 'selected="selected"'; ?>>3</option>
			<option value="4" <?php if($row['visiting day']=="4") echo 'selected="selected"'; ?>>4</option>
			<option value="5" <?php if($row['visiting day']=="5") echo 'selected="selected"'; ?>>5</option>
			</select>
			
			Month <select name="vmonth">
					
						<option value="none"  <?php if($row['visiting month']=="none") echo 'selected="selected"'; ?>>none</option>
						
						<option value="January"  <?php if($row['visiting month']=="January") echo 'selected="selected"'; ?>>January</option>
						<option value="February"  <?php  if($row['visiting month']=="February") echo 'selected="selected"'; ?>>February</option>
						<option value="March"  <?php if($row['visiting month']=="March") echo 'selected="selected"'; ?>>March</option>
						<option value="April"  <?php if($row['visiting month']=="April") echo 'selected="selected"'; ?>>April</option>
						<option value="May"  <?php if($row['visiting month']=="May") echo 'selected="selected"'; ?>>May</option>
						<option value="June"  <?php if($row['visiting month']=="June") echo 'selected="selected"'; ?>>June</option>
						<option value="July"  <?php if($row['visiting month']=="July") echo 'selected="selected"'; ?>>July</option>
						<option value="August"  <?php if($row['visiting month']=="August") echo 'selected="selected"'; ?>>August</option>
						<option value="September"  <?php if($row['visiting month']=="September") echo 'selected="selected"'; ?>>September</option>
						<option value="October"  <?php if($row['visiting month']=="October") echo 'selected="selected"'; ?>>October</option>
						<option value="November"  <?php if($row['visiting month']=="November") echo 'selected="selected"'; ?>>November</option>
						<option value="December"  <?php if($row['visiting month']=="December") echo 'selected="selected"'; ?>>December</option>

						</select>
	
			Year <select name="vyear">
					<option value="none" <?php if($row['visiting year']=="none") echo 'selected="selected"'; ?>>None</option>
				
						<?php
						
						for($i=2010;$i<=2050;$i++)	
						{
							echo "<option value='$i'";
							if($row['visiting year']==$i) echo 'selected="selected"';
							echo ">".$i."</option>";
						}
						?>
					
						
						
						</select>
			
			</td></tr>
			<tr><td>Visiting Time</td><td><input type="time" name="CTime"  value="<?php echo $row['time'] ?>"/></td></tr>
			<tr><td>Other Details</td><td><input type="text" name="CothDetail"  value="<?php echo $row['Other Details'] ?>"/></td></tr>

			<tr><td>Company Status</td><td>
					<select name="cstatus">
					<option value="Not available" <?php if($row['company Status']=="Not available") echo 'selected="selected"'; ?>>None</option>
					<option value="Confirmed" <?php if($row['company Status']=="Confirmed") echo 'selected="selected"'; ?>>Confirmed</option>
					<option value="Not confirmed" <?php if($row['company Status']=="Not confirmed") echo 'selected="selected"'; ?>>Yet to be confirmed</option>
					<option value="Cancelled" <?php if($row['company Status']=="Cancelled") echo 'selected="selected"'; ?>>Cancelled</option>
					</select></td></tr>
			<tr><td>Visiting Status</td><td>
					<select name="cvisitstatus">
					<option value="Not available" <?php if($row['visiting status']=="Not available") echo 'selected="selected"'; ?>>None</option>
					<option value="Visited" <?php if($row['visiting status']=="Visited") echo 'selected="selected"'; ?>>Visited</option>
					<option value="Yet to Visit" <?php if($row['visiting status']=="Yet to Visit") echo 'selected="selected"'; ?>>Yet to Visit</option>
					<option value="Cancelled" <?php if($row['visiting status']=="Cancelled") echo 'selected="selected"'; ?>>Cancelled</option>
					</select></td></tr>			
			</table>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="submit" value="Submit" name="submit"/>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="button" value="Cancel" name="cancel"/>
	</form>
	
	<?php

	if(isset($_POST['submit']))
	{
	$name=$_POST['Cname'];
	$address=$_POST['CAddress'];
	$website=$_POST['CWebsite'];
	$rounds=$_POST['Crounds'];
	$procedure=$_POST['cProcedure'];
	$details=$_POST['cDetails'];
	$profile=$_POST['cProfile'];
	$c10=$_POST['C10'];
	$c12=$_POST['C12'];
	$cgpa=$_POST['Ccgpa'];
	$branches=$_POST['branches'];
	$intake=$_POST['Cintake'];
	$salary=$_POST['CSalary'];
	$saldetails=$_POST['CsDetail'];
	$Bond=$_POST['CBond'];
	$vday=$_POST['vday'];
	$vmonth=$_POST['vmonth'];
	$vyear=$_POST['vyear'];
	$time=$_POST['CTime'];
	$otherdetails=$_POST['CothDetail'];
	$cdetails=$_POST['cstatus'];
	$visitstatus=$_POST['cvisitstatus'];
	$getusernamequery=mysql_query("select * from company where cid='$id'");
	$getuname=mysql_result($getusernamequery,0,'username');

	$q="INSERT into `company` values('$id','$getuname','$name','$address','$website','$rounds','$procedure','$details','$profile','$c10','$c12','$cgpa','$intake','$salary','$saldetails','$Bond','$vday','$vmonth','$vyear','$time','$otherdetails','$cdetails','$visitstatus')"; 
		if($q_run=mysql_query($q))
		{
		echo "yuppie! New insertion successful!";}
		
		else
		{
					$rep="REPLACE into `company` values('$id','$getuname','$name','$address','$website','$rounds','$procedure','$details','$profile','$c10','$c12','$cgpa','$intake','$salary','$saldetails','$Bond','$vday','$vmonth','$vyear','$time','$otherdetails','$cdetails','$visitstatus') "; 
		$rep_run=mysql_query($rep);
		
		}
		//	$cname=$id.branch;
		//echo $cname;
		

	$branchrep="REPLACE into `companybranch` values('$id','$name','n','n','n','n','n','n','n','n','n','n','n','n','n','n','n','n','n','n','n','n')";
	if($branch_run=mysql_query($branchrep))
	{
		for($i=0;$i<sizeof($branches);$i++)
		{
			$branchname=$branches[$i];
			//echo $branchname."<br/>";
			
			if($branchname=='allbe')
			{
				$branchrep1="update companybranch set civil='y', cse='y', eee='y', ece='y', it='y', ise='y', iem='y', mech='y', me='y', tce='y'";
				$branch_run=mysql_query($branchrep1);

			}
			
		
			if($branchname=='allmtech')
			{
				$branchrep2="update companybranch set mcse='y', vlsi='y', pe='y', dcn='y', se='y', md='y', cne='y', mtce='y'";
				$branch_run=mysql_query($branchrep2);
;
			}
			
			if($branchname!='allbe' || $branchname!='allmtech')
			{
				$checkboxquery="update companybranch set $branchname='y' ";
				$q_run=mysql_query($checkboxquery);

			}		
		} 
	}
	else
		echo "initial replacement failed";
	
	}

?>


	
	
	
	
	
	</div>
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
		
