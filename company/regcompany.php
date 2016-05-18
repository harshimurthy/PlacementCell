<?php

require "../connect1.inc.php";
require "../core1.inc.php";

$eligibility="select * from eligible where id=1";
if($eligible_run=mysql_query($eligibility))
{
	$branch=mysql_result($eligible_run,0,'branch');
	$tenth=mysql_result($eligible_run,0,'10th Percentage');
	$puc=mysql_result($eligible_run,0,'12th Percentage');
	$cgpa=mysql_result($eligible_run,0,'CGPA');
	$bachelor=mysql_result($eligible_run,0,'Bachelors');
	echo $branch."<br/>".$tenth."<br/>".$puc."<br/>".$cgpa."<br/>".$bachelor."<br/>";
	$branches="select `company name` from `companybranch` where $branch='y'";
	if($branch_run=mysql_query($branches))
	{
		if($bachelor!=null)
		{
			echo "be";
			$markseligible="select `name` from `company` where `12th Percentage`<=$puc and `10th Percentage`<=$tenth  ";
		}
		else
		{
			echo "masters";
			$markseligible="select `name` from `company` where `12th Percentage`<=$puc and `10th Percentage`<=$tenth and 'Bachelors<=$bachelor ";
		}
		if($markseligible_run=mysql_query($markseligible))
		{
			$num_companies=mysql_num_rows($markseligible_run); 
			echo $num_companies;
			echo "<select name='BRANCH'>";
			echo "<option value='none'>none</option>";
			while($row=mysql_fetch_array($markseligible_run))
			{
				for($i=0;$i<=mysql_num_rows($branch_run);$i++)
				{	
					$compname=mysql_result($branch_run,$i,'company name');
					if($compname==$row['name'])
							echo "<option value={$row['name']}> {$row['name']}</option>";
				}
			}
			echo "</select>";
		}
	}
}


/**
$company="select `company name` from `companybranch` where $branch='y' and $tenth>='companybranch.10th Percentage'";
	if($company_run=mysql_query($company))
	{
		$elig10
		
	}
$result="select `company name` from company where 
if($result_run=mysql_query($result))
{
	echo "yes!";
	$branch_num=mysql_num_rows($result_run);
	echo $branch_num;
	
	
	
}
$query="select `branch` from `login` where `id`='5'";

echo "According to the requirements of the companies, you are eligible to register for the following companies";
if($query_run=mysql_query($query))
{
			$branch=mysql_result($query_run,0,'branch');
			echo $branch;
			$company="select `company name` from `companybranch` where $branch='y'";
			
			if($company_run=mysql_query($company))
			{
				$num_companies=mysql_num_rows($company_run); 
				echo $num_companies;
				echo "<select name='BRANCH'>";
				echo "<option value='none'>none</option>";
				while($row=mysql_fetch_array($company_run))
				echo "<option value={$row['company name']}> {$row['company name']}</option>";
				echo "</select>";	
				
			}
}
/**
for($i=0;i<$num_companies;$i++)
				{   
					echo $
				}
$query_num_rows=mysql_num_rows($query_run); 
			
			if($query_num_rows==0)
			{
				echo "Incorrect Username or Password";
			}
			else if($query_num_rows==1)
			{
				$user_id=mysql_result($query_run,0,'id');
				$type=mysql_result($query_run,0,'logintype');
				$_SESSION['user_id']=$user_id;
				if($type=="admin")				
					header('Location:getfield.php');
				else if($type=="student")
					header('Location:../student/common.html');
				else if($type=="company")
					header(			
 $companies="select * from companybranch where "
<select name="BRANCH">
									<option value="civil">echo Civil Engineering</option>
									<option value="cse">Computer Science and Engineering</option>
									<option value="eee">Electrical and Electronics Engineering</option>
									<option value="ece">Electronics and Communication Engineering</option>
									<option value="it">Instrumentation Technology</option>
									<option value="ise">Information Science and Engineering</option>
									<option value="iem">Industrial Engineering and Management</option>
									<option value="mech">Mechanical Engineering</option>
									<option value="me">Medical Electronics</option>
									<option value="te">Telecommunication Engineering</option>
									
									
*/

?>