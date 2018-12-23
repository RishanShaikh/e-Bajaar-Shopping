<html lang="en">
<head>
  <meta charset="utf-8">
<title>Payment Gateway</title>
<link rel="stylesheet" href="C1.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
<div class="menu">
<a href="shop.php"><div class="logo">e-बाजार</div></a>
<button id="4">Shop</button>
<button id="5">Cart <i class="fa fa-shopping-cart" style="font-size:18px"></i></button>
<div class="search">
<button id="logout">logout</button>
</div>
</div>
<div class="content">
<?php session_start(); if($_SESSION['userid']==NULL){header('Location:login.php');} echo "Amount to be paid : ".$_SESSION['total']."<br>"; ?>
<form action="confirm.php" method="get"><input type="text" name="amount"><button type="submit">Pay</button></form>
<div class="footer"><br><br><br><br>&copy;Rishan inc.</div></div>
</body>
</html>
