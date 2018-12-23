<?php

require 'config.php';
$query3="select * from cart";
print_r (mysqli_query($con,$query3));
$result3=mysqli_query($con,$query3);
print_r($result3);

while($row3=$result3->fetch_assoc())
{
//$row=mysqli_fetch_array($result);
echo $row3['index']."&nbsp;";
echo $row3['prodid']."&nbsp;";
echo $row3['subtotal']."&nbsp;";
echo $row3['price']."&nbsp;";
echo $row3['no'];
echo "<br>";
}
?>

