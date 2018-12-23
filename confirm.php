<html lang="en">
<head>
<meta charset="utf-8">
<title>Payment Status</title>
<link rel="stylesheet" href="C1.css">
</head>
<body>
<div class="menu">
<a href="shop.php"><div class="logo">e-बाजार</div></a>
<div class="search">
<button id='logout'>logout</button>
<script> var buttonlogout = document.getElementById('logout');
buttonlogout.addEventListener('click', function(event){window.location.href = 'http://localhost/php/Project1/login.php';});
</script>
</div>
</div>
<div class="content">
<?php
session_start();
$amount=$_GET['amount'];
if($amount==$_SESSION['total'])
{
	require 'config.php';
	echo "Payment Successful";
	echo "<br>Your Bill :";
	$query3="select * from cart";
	//print_r (mysqli_query($con,$query3));
	$result3=mysqli_query($con,$query3);
	//print_r($result3);
	$total=0;
	echo "<table>";
	echo "<tr><th>Product Id</th><th>Total Item</th><th>Price</th><th>Subtotal</th></tr>";
	while($row3=$result3->fetch_assoc())
	{
	//echo "<tr><td>".$row3['index']."</td>";
	echo "<td>".$row3['prodid']."</td>";
	echo "<td>".$row3['no']."</td>";
	echo "<td>".$row3['price']."</td>";
	echo "<td>".$row3['subtotal']."</td></tr>";
	$total=$total+$row3['subtotal'];
	}
	echo"</table>";
	echo "paid Ammount : ".$total."<br>";
	require 'config.php';
	$query="delete from cart";
	mysqli_query($con,$query);
	echo "<a href='http://localhost/php/Project1/shop.php'>Go to home</a>";
	$_SESSION['total']=0;
	$_SESSION['prodid']=NULL;
}
else
{
	echo "Payment Unsuccessful";
	echo "<a href='http://localhost/php/Project1/payment.php'>Try again.</a>";
}
?>
<div class="footer"><br><br><br><br>&copy;Rishan inc.</div></div>
</body>
</html>
