<html lang="en">
<head>
<meta charset="utf-8">
<title>Shopping</title>
<link rel="stylesheet" href="C1.css">

</head>
<body>
<div class="menu">
<a href="shop.php"><div class="logo">e-बाजार</div></a>
<button id="4">Shop</button>
<button id="5">Cart</button>
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
<div class="content">TV<br><img src="images/TV/1.jpg" id="tv1"><img src="images/TV/2.jpg" id="tv2" ><img src="images/TV/3.jpg" id="tv3"><img src="images/TV/4.jpg" id="tv4"><img src="images/TV/5.jpg" id="tv5"><br>Mobile Phones<br><img src="images/phones/1.jpg" id="p1"><img src="images/phones/2.jpg" id="p2"><img src="images/phones/3.jpg" id="p3"><img src="images/phones/4.jpg" id="p4"><img src="images/phones/5.jpg" id="p5"><br>HeadPhones<br><img src="images/headphones/1.jpg" id="h1"><img src="images/headphones/2.jpg" id="h2"><img src="images/headphones/3.jpg" id="h3"><img src="images/headphones/4.jpg" id="h4"><img src="images/headphones/5.jpg" id="h5"><br>
<div class="footer"><br><br><br><br>&copy;Rishan inc.</div></div>
</body>
<script src="http://localhost/php/project1/myscript.js"></script>
<script src="http://localhost/php/project1/information.js"></script>
</html>
