<html>
<head>
<title>Webpage 5</title>
<link rel="stylesheet" href="C1.css" />
</head>
<div class="menu">
<div class="logo">ASK FOLKS</div>
<button id="4">Home</button>
<button id="5">Cart</button>
<div class="search">
<button id="logout">logout</button>
</div>
</div>
<body>
<div class="content">
<?php
session_start();
if($_SESSION['userid']==NULL)
{
	header('Location:login.php');
}
else
{
require 'config.php';
$query="select * from users where uid='".$_SESSION['userid']."'";
$result=mysqli_query($con,$query);
$row=mysqli_fetch_row($result);
echo "Name : ".$row[1]." ".$row[2]."<br>";
echo "Email : ".$row[3];
}
?>
<script src="http://localhost/php/project1/myscript.js"></script>
<br>
<div class="footer"><br><br><br><br>&copy;Rishan inc.</div>
</div>
</body>
</html>
