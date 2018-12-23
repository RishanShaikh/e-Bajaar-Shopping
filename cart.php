<html lang="en">
<head>
<meta charset="utf-8">
<title>Your Cart</title>
<link rel="stylesheet" href="C1.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="menu">

<a href="shop.php"><div class="logo">e-बाजार</div></a>
<button id="4">Shop</button>
<button id="5">Cart <i class="fa fa-shopping-cart" style="font-size:18px"></i></button> 
<div class='search'>
  <?php session_start(); if(isset($_SESSION['userid']))
  {
  echo "<button id='logout'>logout</button>";
  }
  else {
    echo "<button id='logout'>login</button>";
  }?>
</div>
</div>


<?php
require 'config.php';
error_reporting(0);
$prodid=$_SESSION['prodid'];

$no=$_GET['no'];
$query="select price from products where prodid='$prodid'";
$result=mysqli_query($con,$query);
$row=mysqli_fetch_row($result);
$price=$row[0];
$subtotal=$price*$no;
if($no!=0)
{
$query2="insert into cart(prodid,price,no,subtotal) values ('$prodid','$price','$no','$subtotal') ";
mysqli_query($con,$query2);
}
$query3="select * from cart";
//print_r (mysqli_query($con,$query3));
$result3=mysqli_query($con,$query3);
//print_r($result3);
$total=0;

echo "<div class='content'>";
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
echo $total." to be paid<br>";
$_SESSION['total']=$total;

?>
<br>
<form action="payment.php">
<button>Pay</button>
</form>

<a href="shop.php">Back to shopping</a>
<div class="footer"><br><br><br><br>&copy;Rishan inc.</div></div>
</body>
<script src="http://localhost/php/project1/myscript.js"></script>
<script src="http://localhost/php/project1/information.js"></script>

</html>
