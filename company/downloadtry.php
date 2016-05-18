
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<head><title>Dr.AIT Placement Cell</title>
<link rel="stylesheet" type="text/css" href="commonstyle1.css" />
<link rel="stylesheet" type="text/css" href="menustyle1.css" />
<link rel="stylesheet" type="text/css" href="homestyle1.css" />
<link rel="stylesheet" type="text/css" href="downstyle1.css" />
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
					<li><a href="addcompanydetail.html">Add details/ eligibility criteria</a></li>
					<li><a href="companyret.php">View Details</a></li>
				</ul>
			</li>
  			<li><a href="#" class="menu">Search</a>	
			<ul>
					<li><a href="history.html">Previously placed students</a></li> 
					<li><a href="process.php">Eligible Students</a></li>
					
				</ul>
			</li> 
			
	
			<li><a href="#Account" class="menu">Account</a> 
				<ul>
					<li><a href="password.php">Change password</a></li> 
					<li><a href="security.php">Change security question</a></li>
		
					<li><a href="phone.php">Change Phone Number</a></li>
					<li><a href="email.php">Change Email ID</a></li>
				</ul>
			</li>
		</ul>
	</nav>
	</div>
	

<?php
require ('../core1.inc.php'); 
$mysql_host='localhost';
$mysql_user='root';
$mysql_password='';

$mysql_db='testdb';
$conn_error='could not connect to db';

// Create connection
$conn = new mysqli($mysql_host,$mysql_user,$mysql_password, $mysql_db);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$id=$_SESSION['user_id'];

$query="select `username` from `login` where `id`='$id'";
if($q_run=$conn->query($query))
{
	$row=$q_run->fetch_assoc();
	$username=$row['username'];
	//

}

?>


<div class="uploaddiv">

<h1 align="center">Upload File</h1>
<form action="downloadtry.php" method="post" enctype="multipart/form-data">
    Select file to upload:
    <input type="file" name="fileToUpload" id="fileToUpload"/>
	
    <input type="submit" value="Upload " name="submit" align="center"/>
</form>


<?php

 

if(isset($_POST["submit"]) && isset($_FILES["fileToUpload"]) )
{
	if($_FILES["fileToUpload"]!=null)
	{
			$target_dir = "../uploads/";
			$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
			$uploadOk = 1;
			$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
			
			// Check if file already exists
			if (file_exists($target_file)) {
				echo "Sorry, file already exists.";
				$uploadOk = 0;
			}
			//Check file size
					if ($_FILES["fileToUpload"]["size"] > 500000) {
				echo "Sorry, your file is too large.";
				$uploadOk = 0;
			}
			// Allow certain file formats
			if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "pdf"
			&& $imageFileType != "gif" && $imageFileType != "jpeg" && $imageFileType != "docx" && $imageFileType != "doc" && $imageFileType != "ppt" && $imageFileType != "pptx")
			{
				echo "Sorry, only JPG, JPEG, PNG, GIF, JPEG, PDF, DOC, DOCX, PPT, PPTX files are allowed.";
				$uploadOk = 0;
			}
			// Check if $uploadOk is set to 0 by an error
			if ($uploadOk == 0) {
				echo "Sorry, your file was not uploaded.";
			// if everything is ok, try to upload file
			}
			else
			{
				if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
					echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
								$date1=date("d-m-Y H:i:s");
			// Database entry
			$sql="INSERT into file_uploads (file_path,username,Time) values ('".basename( $_FILES['fileToUpload']['name'])."','$username','$date1')";
			if ($conn->query($sql) === TRUE) {
				echo "<br/>File uploaded successfully";
			} else {
				echo "Error creating entry: " . $conn->error;
			}
				} 
				else {
					echo "Sorry, there was an error uploading your file.";
				}
			}


}
}
?>
</div>
<div class="deletediv">

<h1 align="center">Delete File</h1>
<form action="downloadtry.php" method="post" enctype="multipart/form-data">
    Select file to Delete:
	<select name="deletefile">
	<?php 
	$sql="SELECT * from file_uploads where `username`='$username' order by `Time` asc ";
	$result = $conn->query($sql);
	 while($row = $result->fetch_assoc())
	 {
		 echo "<option value=".$row['file_path'].">".$row['file_path']."</option>";
    }
	?>
	</select>&nbsp;&nbsp;
	<input type="submit" value="Delete" name="submitdel"/>
</form>

<?php

if(isset($_POST['submitdel']) && isset($_POST['deletefile']))
{
	$filename=$_POST['deletefile'];
	$delquery="delete from file_uploads where `file_path`='$filename'";
	if($del_run=$conn->query($delquery))
	{
		if(file_exists("../uploads/$filename"))
		{
			unlink("../uploads/$filename");
			echo "successfully deleted";
		}
	}
	else
	echo "could not delete table entry";
	
	
	
}


?>
</div>
	<div class="downbox">
<?php
$sql="SELECT * from file_uploads where `username`='$username' order by `Time` asc ";
$result = $conn->query($sql);
$i=1;
echo "<h1 align='center'>Uploaded Documents</h1>";
echo "<h3 align='center'>".$username."</h3>";
if ($result->num_rows > 0) {
	echo "<table class='viewtable'><tr><th>Sl No.</th><th>Uploaded file</th>";
echo "<th>Uploaded by</th><th>Uploaded on</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
		echo "<tr><td>".$i."</td><td>";
        echo "<a href='../uploads/".$row["file_path"]."'>".$row["file_path"]. "</a>";
		echo "</td><td>".$row['username']."</td><td>";
		echo $row['Time']."</td></tr>";
		$i++;
    }
echo "</table>";

	
	
} else {
    echo " 0 uploads";
}

?>
</div>
<?
$conn->close();


?>



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