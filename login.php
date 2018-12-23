<html lang="en">
<head>
  <meta charset="utf-8">
<link rel="stylesheet" href="C1.css" />
<title>Login Page</title>
</head>
<body>
<?php session_start(); session_destroy();?>
<div class="menu">
<a href="shop.php"><div class="logo">e-बाजार</div></a>
<div class="search">
<button id="signup">Sign Up</button>
</div>
</div>
<div class="content">
<div class="login">
<form action="3.php" method="get">
<input type="text" id="email" name="e1" placeholder="Email"><br><br>
<input type="password" id="pass" name="p1" placeholder="Password"><br>
<input type="submit" value="Login">
</form>
</div>
<div class="footer"><br><br><br><br>&copy;Rishan inc.</div>
</div>

 <script src="http://localhost/php/project1/myscript.js"></script>
<script>var buttonsignup = document.getElementById('signup');
buttonsignup.addEventListener('click', function(event){window.location.href = 'http://localhost/php/Project1/signup.php';});
</script>
</body>
</html>
