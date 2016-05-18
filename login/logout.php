 <?php
require ('../core1.inc.php'); 
unset($_SESSION['username']);
session_destroy();
header('location:login.html');
?>
