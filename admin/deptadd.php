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
<link rel="stylesheet" type="text/css" href="dept.css" />
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

	<div class="deptdiv">
	<h2 align="center">Add a department Coordinator</h2>
	<form action="deptadd.php" method="post">
	Select Branch&nbsp;&nbsp;&nbsp;<select name="branch">&nbsp;
	<option value="civil">(B.E)Civil Engineering</option>
	<option value="cse">(B.E)Computer Science and Engineering</option>
	<option value="eee">(B.E)Electrical and Electronics Engineering</option>
	<option value="ece">(B.E)Electronics and Communication Engineering</option>
	<option value="it">(B.E)Instrumentation Technology</option>
	<option value="ise">(B.E)Information Science and Engineering</option>
	<option value="iem">(B.E)Industrial Engineering and Management</option>
	<option value="mech">(B.E)Mechanical Engineering</option>
	<option value="me">(B.E)Medical Electronics</option>
	<option value="tce">(B.E)Telecommunication Engineering</option>
	<option value="me">(B.E)Medical Electronics</option>
	<option value="mba">M.B.A</option>
	<option value="mca">M.C.A</option>
	<option value="mcse">(M.tech)Computer Science & Engineering</option>
	<option value="vlsi">(M.tech)VLSI Design & Embedded Systems</option>
	<option value="pe">(M.tech)Power Electronics</option>
	<option value="dcn">(M.tech)Digital Communication & Networking</option>
	<option value="se">(M.tech)Structural Engineering</option>
	<option value="md">(M.tech)Machine Design</option>
	<option value="cne">(M.tech)Computer Network Engineering</option>
	<option value="mtce">(M.tech)Telecommunication Engineering</option>
	</select><br/><br/>
	
	enter userid &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="usn"/><br/><br/>
	<input type="submit" name="usnbutton" value="Add entry"/><hr/>
	</form>
	
<?php

if(isset($_POST['branch']) && isset($_POST['usn']))
{
	$usn=$_POST['usn'];
	$branch=$_POST['branch']."coord";
	$pwd1=pwdgen();
	$pwd=md5($pwd1);
	
	echo "<br/> USN is ".$usn;
	$q="insert into `login` values ('','dept','$usn','$pwd','$branch')"; 
	
		if($q_run=mysql_query($q))
		{
								$getid=mysql_query("select * from login where `username`='$usn'");
				$idno=mysql_result($getid,0,'id');
				echo $idno;
				mysql_query("insert into origpwd(id,username,pwd,branch) values ('$idno','$usn','$pwd1','$branch')");
			echo "<br/> Inserted : ".$usn;
		}
		$get=mysql_query("select * from `login` where username='$usn'");
		$id=mysql_result($get,0,'id');
		mysql_query("insert into origpwd(id,username,pwd,branch) values ('$id','$usn','$pwd1','$branch')");
}

?>
</div>