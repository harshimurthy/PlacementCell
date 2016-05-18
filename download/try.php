<?php


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


$sql="SELECT * from file_uploads";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<a href='uploads/".$row["file_path"]."'>".$row["file_path"]. "</a><br>";
    }
} else {
    echo "0 uploads";
}
?>
<br><br><br><br>
<hr>
<br><br><br><br>




<!DOCTYPE html>
<html>
<body>

<form action="upload.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>

</body>
</html>

