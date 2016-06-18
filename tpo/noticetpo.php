<?php

require '../connect1.inc.php'
require '../core1.inc.php'

?>

<div class="notice">
<?php

$q=mysql_query("select * from notice order by `date` asc");
if($q)
{
	if(mysql_num_rows($q)==0)
		echo "The notice board is empty";
	else
	{
		$i=1;
		echo "<table class='noticetable'><tr><th>sl no</th><th>notice</th><th>Date</th></tr>";
		while($row=mysql_fetch_array($q))
		{
			echo "<tr><td>".$i."</td><td>".$row['content']."</td><td>".$row['date']."</td></tr>";
			$i++;
		}
		echo "</table>";
		
	
	}
}
else
{
	echo "an error occured";
}
?>
</div>







<div class="delnotice">
<h2>delete information from  notice board</h2>



<?php


	<?php 
	$sql=mysql_query("SELECT * from notice order by `date` asc ");
	
	 while($row = mysql_fetch_assoc($sql))
	 {
		 echo "<option value=".$row['content'].">".$row['content']."</option>";
    }
	?>


?>



</div>


<div class="addnotice">
<h2>Add information to notice board</h2>


<form action="noticetpo.php" action="post">
Enter content to be displayed in the notice board<br/>
<input type=text maxlength="1000" size="50" name=info/>
<input type="submit" value="add content to notice board" name="note"/>
<br/>

<?php
if(isset($_POST['info'] && isset($_POST['note'])
{
	$info=$_POST['info'];
	$date1=date("d-m-Y H:i:s");
	
	if(!empty($info)
	{
		$q=mysql_query("insert into notice values('','$info','$date1')");
		if($q)
		{
			echo "Information successfully added to notice board";
		}
		



}
else
	echo "Note:Information cannot be blank";
}
else
	echo "An error occured! try again";
	
?>
	</div>