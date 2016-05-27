<?php
require '../core1.inc.php';
require '../connect1.inc.php';

	$id=$_SESSION['user_id'];
	$txtcompany=$_POST['txtcompany'];
	$txtcgpa=$_POST['txtcgpa'];
	$radoselect=$_POST['radoselect'];
	$txtpackage=$_POST['txtpackage'];
	$txtrole=$_POST['txtrole'];
	$selection=$_POST['selection'];
	$prepbooks=$_POST['prepbooks'];
	$preponline=$_POST['preponline'];
	$prepvdo=$_POST['prepvdo'];
	
	$company = mysql_real_escape_string($_POST['company']);
	if ($company =='other')
	{
	$company = mysql_real_escape_string($_POST['company-other']);
	}

	
	$q="INSERT into `feedback` values('$id','$txtcompany','$txtcgpa','$radoselect','$txtpackage','$txtrole','$company','$selection','$prepbooks','$preponline','$prepvdo')"; 
		
		if($q_run=mysql_query($q))
		{
		echo "yuppie! New insertion successful!";
		}
		
		else
		{
			echo "Updation............. ";
			$rep="REPLACE into `feedback` values('$id','$txtcompany','$txtcgpa','$radoselect','$txtpackage','$txtrole','$company','$selection','$prepbooks','$preponline','$prepvdo')";
			if($rep_run=mysql_query($rep))
			{echo "Succcccccccccccces!replacement";}
			else
				echo "Replacement unsuccessful";
		}
	
	
	

	//,`USN`,`Course`,`Date of Birth`,'Gender','Father Name','Mother Name','Permanent Address','Branch')"

?>

