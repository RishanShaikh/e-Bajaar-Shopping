<html>
<head>
<title>Webpage 4</title>
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
<?php
session_start();
if($_SESSION['userid']==NULL)
{
	header('Location:login.php');
}
else
{
//echo $_SESSION['userid'];
}
?>
<div class="content">
Hello
<div class="footer"><br><br><br><br><br><br><br><br><br>&copy;Rishan inc.</div>			
</div>

<script src="http://localhost/php/project1/myscript.js"></script>

</body>

</html>
