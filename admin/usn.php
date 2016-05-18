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
<link rel="stylesheet" type="text/css" href="usn.css" />
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

	
<div class="AutoDiv">
<form action="usn.php" method="post">
	<h2>Auto Generate Mode </h2>
	<h5>Use this only up to a range where the USN numbers are similar(Regular entry student)</h5>
	Select Branch<select name="branch">
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
	</select><br/>
	
	enter starting usn <input type="text" name="usnstart"/><br/>
	enter ending usn <input type="text" name="usnend"/><br/>
	<input type="submit" name="usnbutton" value="Generate Automatically"/>
	<hr/></form></div>
	<div class="ManualDiv">
	<form action="usn.php" method="post">
	<h2>Manually Enter USN</h2>
	<h5>Use this only for USNs which are different from the rest in the class<br/>(Ex: Lateral Entry students,Branch change)</h5>
	Select Branch<select name="branch">
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
	</select><br/>
	
	enter usn <input type="text" name="usn"/><br/>
	<input type="submit" name="usnbutton" value="Manual Entry"/>
	</form></div>
</body></html>
<div class="MsgDiv">

<h2>Message about updation</h2>
<?php
//For auto entry
if(isset($_POST['branch']) && isset($_POST['usnstart']) && isset($_POST['usnend']))
{
	if(($_POST['usnstart'])!=null && ($_POST['usnend']!=null) && ($_POST['branch'])!=null)
	{
	$start=$_POST['usnstart'];
	$end=$_POST['usnend'];
	$branch=$_POST['branch'];
	$startlen=strlen($start);
	$endlen=strlen($end);
	$commonusn="";
	$count=0;
	echo "<br/> BRANCH is :".$branch;
	echo "<br/> Starting USN is".$start;
	echo "<br/> Ending USN is".$end;
	
	for( $i = 0; $i <= $startlen; $i++ )
	{
		$char1 = substr( $start, $i, 1 );
		$char2 = substr( $end, $i, 1 );
		if($char1==$char2)
		{
			$commonusn=$commonusn.$char1;
		}
		else
			break;
	}
	echo "<br/> Common USN is " .$commonusn;
	echo "<br/> Inserted: ";
	
	for($j=$start;$j<=$end;$j++)
	{
		$pwd1=pwdgen();
		$pwd=md5($pwd1);
		
		$q="insert into `login` values ('','student','$j','$pwd','$branch')"; 

		
		if($q_run=mysql_query($q))
		{
			echo $j."        ";
			$count++;
					$getid=mysql_query("select * from login where `username`='$j'");
				$idno=mysql_result($getid,0,'id');
				echo $idno;
				mysql_query("insert into origpwd(id,username,pwd,branch) values ('$idno','$j','$pwd1','$branch')");
		}
	} 
	if($count==0)
	{
		echo "<br/>Error! Could not insert as the value already exists";
	}
	else{
	echo "<br/> Total Number of entries entered into branch ".$branch." is ".$count;
	}
	}
	else
		echo "Enter all values. Values cannout be null";
}

//for manual entry
else if(isset($_POST['branch']) && isset($_POST['usn']))
{
	if(($_POST['branch'])!=null && ($_POST['usn'])!=null)
	{
	$usn=$_POST['usn'];
	$branch=$_POST['branch'];
	$pwd1=pwdgen();
	$pwd=md5($pwd1);
	echo "<br/> BRANCH is : ".$branch;
	echo "<br/> USN is ".$usn;
	$q="insert into `login` values ('','student','$usn','$pwd','$branch')"; 
	
		if($q_run=mysql_query($q))
		{
			echo "<br/> Inserted : ".$usn." successfully to branch ".$branch;
			$getid=mysql_query("select * from login where `username`='$usn'");
				$idno=mysql_result($getid,0,'id');
				echo $idno;
				mysql_query("insert into origpwd(id,username,pwd,branch) values ('$idno','$usn','$pwd1','$branch')");
		}

	}
	else
		echo "Enter all values. Values cannot be null";
	
}

?>

</div>
<div class="EntriesDiv">
<h2>Entry Table Value</h2>
<?php

$q="SELECT `branch`,count(*) FROM `login`  group by `branch`";

if($query_run=mysql_query($q))
{	
			$query_num_rows=mysql_num_rows($query_run)-1; 
			echo "<br/>Total Number of Branches updated : ".$query_num_rows;
			echo '<br/><br/>Total Number of Students in each branch <br/>';
			    
			while($row = mysql_fetch_array($query_run))
			{
				echo "<br/>";
				for($j=0;$j<mysql_num_fields($query_run);$j++)
				{
					echo "  ".$row[$j];				
				}
			}
}
		
?>

</div>