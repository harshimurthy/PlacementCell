<?php
require '../core1.inc.php';
require '../connect1.inc.php';

	$id=$_SESSION['user_id'];
	
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
	$date=$_POST['Cdate'];
	$time=$_POST['CTime'];
	$otherdetails=$_POST['CothDetail'];
	$cdetails=$_POST['cstatus'];
	$visitstatus=$_POST['cvisitstatus'];
	$getusernamequery=mysql_query("select * from company where cid='$id'");
	$getuname=mysql_result($getusernamequery,0,'username');
	echo $getuname;
	$q="INSERT into `company` values('$id','$getuname','$name','$address','$website','$rounds','$procedure','$details','$profile','$c10','$c12','$cgpa','$intake','$salary','$saldetails','$Bond','$date','$time','$otherdetails','$cdetails','$visitstatus')"; 
		if($q_run=mysql_query($q))
		{
		echo "yuppie! New insertion successful!";}
		
		else
		{
			
			//$rep="REPLACE into company(cid,name,address,website,rounds,Procedure,Details,Profile,10th Percentage,12th Percentage,CGPA,intake,salary,salary detail,salary bond,Visting date,Viting Time,Other Details,company Status,visting status) values ('$id','$name','$address','$website','$rounds','$procedure','$details','$profile','$c10','$c12','$cgpa','$intake','$salary','$saldetails','$Bond','$date','$time','$otherdetails','$cdetails','$visitstatus')";
			$rep="REPLACE into `company` values('$id','$getuname','$name','$address','$website','$rounds','$procedure','$details','$profile','$c10','$c12','$cgpa','$intake','$salary','$saldetails','$Bond','$date','$time','$otherdetails','$cdetails','$visitstatus')"; 
			if($rep_run=mysql_query($rep))
			{
				echo "Succcccccccccccces!replacement";
			}
			else
				echo "Replacement unsuccessful";
		}
		//	$cname=$id.branch;
		//echo $cname;
		

	$branchrep="REPLACE into `companybranch` values('$id','$name','n','n','n','n','n','n','n','n','n','n','n','n','n','n','n','n','n','n','n','n')";
	if($branch_run=mysql_query($branchrep))
	{
		for($i=0;$i<sizeof($branches);$i++)
		{
			$branchname=$branches[$i];
			echo $branchname."<br/>";
			
			if($branchname=='allbe')
			{
				$branchrep1="update companybranch set civil='y', cse='y', eee='y', ece='y', it='y', ise='y', iem='y', mech='y', me='y', tce='y'";
				if($branch_run=mysql_query($branchrep1))
				{
					echo "all be successful";
				}
				else
					echo "all be unsuccessful";
			}
			
		
			if($branchname=='allmtech')
			{
				$branchrep2="update companybranch set mcse='y', vlsi='y', pe='y', dcn='y', se='y', md='y', cne='y', mtce='y'";
				if($branch_run=mysql_query($branchrep2))
				{
					echo "all mtech successful";
				}
				else
					echo "all mtech unsuccessful";
			}
			
			if($branchname!='allbe' || $branchname!='allmtech')
			{
				$checkboxquery="update companybranch set $branchname='y' ";
				if($q_run=mysql_query($checkboxquery))
					echo "checkbox success";
			}		
		} 
	}
	else
		echo "initial replacement failed";
	


?>

