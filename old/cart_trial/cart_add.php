<?php

include('cart_connection.php');

$name = $_REQUEST['pro_name'];
$price = $_REQUEST['pro_price'];
$quantity = 1;

echo "$name <br>";
$check = "select *from cart_tb where product_name = '$name'";
$check2 = mysqli_query($conn,$check);
print_r($check2);

if(mysqli_num_rows($check2)==0){

$query = "insert into cart_tb values('$name','$price','$quantity')";
$result = mysqli_query($conn,$query);
header("location: cart_main.php");
}
else 
{
header("location: cart_main.php");
echo "<br> already added";
}


?>