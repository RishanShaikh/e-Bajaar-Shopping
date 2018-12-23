<?php
session_start();
require 'config.php';
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$a=$_GET["n1"];
$b=$_GET["s1"];
$c=$_GET["e1"];
$d=$_GET["p1"];
$query="insert into users(fname,lname,email,password) values('".$a."','".$b."','".$c."','".$d."')";
$result=mysqli_query($con,$query);
header('Location:login.php')
?>
