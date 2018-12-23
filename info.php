<html lang="en">
<head>
<meta charset="utf-8">
<title>Products Information</title>
<link rel="stylesheet" href="C1.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="menu">
<a href="shop.php"><div class="logo">e-बाजार</div></a>
<button id="4">Shop</button>
<button id="5">Cart <i class="fa fa-shopping-cart" style="font-size:18px"></i></button>
<div class="search">
  <?php session_start(); if(isset($_SESSION['userid']))
  {
  echo "<button id='logout'>logout</button>";
  }
  else {
    echo "<button id='logout'>login</button>";
  }
  ?>
</div>
</div>
<div class="content">
<br>
INFORMATION
<br>
<?php
require 'config.php';
$id=$_GET['id'];
$_SESSION['prodid']=$id;
$query="select * from products where prodid='$id'";
$result=mysqli_query($con,$query);
$row=mysqli_fetch_row($result);
$address=$row[1];
$price=$row[2];
echo "<img src='".$address."'>";
echo "<br>";
echo "Price : ".$price;
?>
<form action="cart.php" method="get">
<br>Add Number of items<br><input type="text" name="no"><br><br>
<button id='add' type="submit">Add to cart</button>
</form>

<a href="shop.php">Go back to shop</a>
<div class="footer"><br><br><br><br>&copy;Rishan inc.</div></div>
</body>
<script src="http://localhost/php/project1/myscript.js"></script>
<script src="http://localhost/php/project1/information.js"></script>

</html>
