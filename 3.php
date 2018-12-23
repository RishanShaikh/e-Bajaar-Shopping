<?php
require 'config.php';
$a= mysqli_real_escape_string($con,$_GET['e1']);
$b=mysqli_real_escape_string($con,$_GET['p1']);
$uinfo=mysqli_query($con,"select * from users WHERE email='$a' and password='$b'"); 
if(mysqli_num_rows($uinfo)>0)
{
	session_start();
	$row = mysqli_fetch_row($uinfo);
	echo "Hello ".$row[1]." ".$row[2];
	$_SESSION['userid']=$row[0];
	echo $_SESSION['userid'];
	header('Location:shop.php');
}
else
{
	header('Location: login.php');
}
?>