<?php
require ('../core1.inc.php'); 
require ('../connect1.inc.php');
		
if(isset($_POST['username'])&&isset($_POST['password']))
{
	$username=$_POST['username'];
	$password=$_POST['password'];
	$password_hash=md5($password);
	
	if(!empty($username)&& !empty($password))
	{
		
		$query="SELECT `id` FROM `login` WHERE `username`='$username' AND `password`='$password'";
		if($query_run=mysql_query($query))
		{	
			$query_num_rows=mysql_num_rows($query_run); 
			
			if($query_num_rows==0)
			{
				echo "Incorrect Username or Password";
			}
			else if($query_num_rows==1)
			{
				$user_id=mysql_result($query_run,0,'id');
				//$type=mysql_result($query_run,1,'logintype');
				$_SESSION['user_id']=$user_id;
				if($username=="admin")				
					header('Location:getfield.php');
				else if($username=="student")
					header('Location:../student/common.html');
				else if($username=="company")
					header('Location:../company/company.html'); 
			} 
			else
			{
				echo "Opps! Something went wrong during login. Try again";
			}
		}
	}
	else
	{
		echo "You must supply info";
	} 
}
?>


