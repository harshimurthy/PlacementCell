<?php


require ('../core1.inc.php'); 
require ('../connect1.inc.php');
?>

<html>
<head>
	<title>SEARCH</title>
	<link rel="stylesheet" type="text/css" href="../cv/cvstyle.css" />
	<link rel="stylesheet" type="text/css" href="SearchPlaced.css" />
	</style>
</head>
<body>	
<div class="SearchDiv">
<h2>Search previous year placed student</h2><hr/>
	<form action="searchPlaced.php" method="post">
		
		<h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Select company:
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<select name="company">
			<option value="any">any</option>
			<option value="facebook">facebook</option>
			<option value="TCS">TCS</option>
			<option value="google">google</option>
			<option value="Mindtree">Mindtree</option>
			<option value="amazon">AMAZon</option>
			<option value="honey">honeey</option>
			
		</select></h3>
		<hr class="smallhr"/>

		<ul><h3>Select branch:</h3>
		<div class="BranchBox">
		<li><input type="radio" name="branch" value="all"> ALL</li>
		<li><input type="radio" name="branch" value="ise"> ISE </li>
		<li><input type="radio" name="branch" value="cse"> CSE </li>
		<li><input type="radio" name="branch" value="tc"> TC </li>
		<li><input type="radio" name="branch" value="mech"> MECH</li>
		<li><input type="radio" name="branch" value="me"> ME </li>
		</div></ul>
		<hr/>
		<input type="submit" value="Search Placed Students" class="SearchButton" />
	</form>



<?php 
		
if(isset($_POST['company'])&&isset($_POST['branch']))
{
	$branch=$_POST['branch'];
	$company=$_POST['company'];
	if($branch=="all" && $company=="any" )
			$query="SELECT * FROM `searcht`";
	else if($branch!="all" && $company=="any")
		  $query="SELECT * FROM `searcht` WHERE `branch`='$branch' ";
	else if($company!="any" && $branch=="all" )
		$query="SELECT * FROM `searcht` WHERE (`company1`='$company' OR `company2`='$company' OR  `company3`='$company')";
	else
		$query="SELECT * FROM `searcht` WHERE `branch`='$branch' AND(`company1`='$company' OR `company2`='$company' OR  `company3`='$company')";
	
		if($query_run=mysql_query($query))
		{	
			$query_num_rows=mysql_num_rows($query_run); 
			echo "<div class='msg'>". "Found ";
			echo $query_num_rows ;
			echo " Records</div> </div>";
			if($query_num_rows!=0)
			{
				echo "<div class='ResultDiv'>";
				echo "<table class='Resulttable'>";
				echo "<tr><th>Sl. No</th><th>NAME</th><th>USN</th><th>COURSE</th><th>COMPANY PLACED IN</th></tr>";
				for($i=0;$i<$query_num_rows;$i++)
				{
					$sl=$i+1;
					echo "<tr><td>$sl</td>";	
					$name=mysql_result($query_run,$i,'name');
					$usn=mysql_result($query_run,$i,'usn');
					$branch=mysql_result($query_run,$i,'branch');
					$company1=mysql_result($query_run,$i,'company1');
					$company2=mysql_result($query_run,$i,'company2');
					$company3=mysql_result($query_run,$i,'company3');
					echo "<td>$name</td>";
					echo "<td>$usn</td>";
					echo "<td>$branch</td>";
					echo "<td>$company1 </br> $company2 </br/> $company3</td></tr>";
				}
				echo "</table></div>";
			} 
		}
}
else
{
	echo "<div class='msg'> Kindly select an option </div>";
}

?>