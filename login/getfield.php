<?php
require '../core1.inc.php';
require '../connect1.inc.php'; 
echo $_SESSION['user_id'];

function getfield($field)
{
	$query="SELECT `$field` FROM `login WHERE `id`='" .$_SESSION['user_id']."'";
	if($query_run=mysql_query($query))
	{
		return mysql_result($query);
	}
}

