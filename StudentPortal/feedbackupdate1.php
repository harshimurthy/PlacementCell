<?php
require '../core1.inc.php';
require '../connect1.inc.php';
if(isset($_POST['txtcompany'])&&
	isset($_POST['selection'])&&
	isset($_POST['prepbooks'])&&
	isset($_POST['company']))
	{
	$id=$_SESSION['user_id'];
	$txtcompany=$_POST['txtcompany'];
	$selection=$_POST['selection'];
	$prepbooks=$_POST['prepbooks'];

	
	$company = mysql_real_escape_string($_POST['company']);
	if ($company =='other')
	{
	$company = mysql_real_escape_string($_POST['company-other']);
	}

	
	$q="INSERT into `feedtrial` values('$id','$txtcompany','$selection','$prepbooks','$company')"; 
		
		if($q_run=mysql_query($q))
		{
		echo "yuppie! New insertion successful!";
		}
		
		else
		{
			echo "Updation............. ";
			$rep="REPLACE into `feedtrial` values('$id','$txtcompany','$selection','$prepbooks','$company')";
			if($rep_run=mysql_query($rep))
			{echo "Succcccccccccccces!replacement";}
			else
				echo "Replacement unsuccessful";
		}
	}

?>

