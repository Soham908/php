<?php
include('cart_connection.php');

$change1 = $_REQUEST['b1'];
$val = $_REQUEST['h1'];

$check_quantity = "select product_quantity from cart_tb where product_name = '$val';";
$result = mysqli_query($conn, $check_quantity);

while($row = mysqli_fetch_assoc($result))
{
  echo " quantity first ".$row['product_quantity']." "."<br>";
  $var = $row['product_quantity'];
}  



if($change1 === "2")
{
$sql = "update cart_tb set product_quantity = product_quantity+1 where product_name= '$val' ;";
 if(mysqli_query($conn,$sql))
 {
  header("location: cart_cart.php");
 }
}
else
if ($var>1)
{

{
$sql = "update cart_tb set product_quantity = product_quantity-1 where product_name='$val';";
 if(mysqli_query($conn,$sql))
 {
  header("location: cart_cart.php");
 }
}

}
else
header("location: cart_cart.php");


?>
