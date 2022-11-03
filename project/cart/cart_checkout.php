<?php

$type = $_REQUEST['r1'];
	

if($type=="cash")
{
header("location: ..\order_placed.php");
}
else
$err = "error";
header("location: cart_checkout_details.php");

?>