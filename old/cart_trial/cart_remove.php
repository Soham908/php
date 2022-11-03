<?php
include('cart_connection.php');
$var = $_REQUEST['r1'];

$sql = "delete from cart_tb where product_name = '$var'";
$result = mysqli_query($conn,$sql);

header("location: cart_cart.php");


?>