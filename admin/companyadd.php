<?php

require "../connect1.inc.php";
require "../core1.inc.php";
function pwdgen()
{
$chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    $count = mb_strlen($chars);

    for ($i = 0, $result = ''; $i < 8; $i++) {
        $index = rand(0, $count - 1);
        $result .= mb_substr($chars, $index, 1);
    }
	return $result;
}
?>
<head><title>Dr.AIT Placement Cell</title>
<link rel="stylesheet" type="text/css" href="commonstyle2.css" />
<link rel="stylesheet" type="text/css" href="menustyle2.css" />
<link rel="stylesheet" type="text/css" href="homestyle2.css" />
<link rel="stylesheet" type="text/css" href="company.css" />

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
	<div class="companydiv">
	<form action="companyadd.php" method="post">
	<h2 align=center> Add a Company </h2>
	<label> Enter a username</label>
	<input type="text" name="username"/><br/><br/>
	<input type="submit" name="select" value="ADD AN ENTRY"/><br/><hr/><br/>
	</form>
<?php
	//for manual entry
 if(isset($_POST['username']) )
{
	
	$username=$_POST['username'];
	$pwd1=pwdgen();
	$pwd=md5($pwd1);
	echo "<br/> User name is ";
	echo $username;
	if($_POST['username']!=null)
	{
		$result="select id from `login` where `username`='$username'" ;
		if($res_run=mysql_query($result))
		{
			$num=mysql_num_rows($res_run);
			if($num!=0)
			{
				echo "<br/><br/>Try another username. Username already exists";
			}
			else
			{
				$q="insert into `login` values ('','company','$username','$pwd','company')"; 
		
				if($q_run=mysql_query($q))
				{
						$getid=mysql_query("select * from login where `username`='$username'");
						$idno=mysql_result($getid,0,'id');
						echo $idno;
						mysql_query("insert into origpwd(id,username,pwd,branch) values ('$idno','$username','$pwd1','company')");
										$res="insert into company(cid,username) values('$idno','$username')";
							$res_run=mysql_query($res);
					
							$creation="CREATE TABLE IF NOT EXISTS $username ( eligible varchar(30))";
						if($creation_run=mysql_query($creation))
						{
							echo "<br/>Added successfully";
						}
						else
						{
							echo "<br/>Could not Add the company. An error occurred!";
						}
				} 		
			}
		}
	}
	else
	{
		echo "<br/> Username cannot be null";
	}
}
else
{
	echo "Enter username";
}
?>