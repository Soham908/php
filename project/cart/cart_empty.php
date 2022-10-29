<?php

include('cart_connection.php');

$sql = "truncate table cart_tb";

if(mysqli_query($conn,$sql))
{
header("location: cart_cart.php");
}
else
echo error;

?>