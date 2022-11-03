<?php

include('connection_file.php');

$sql = "truncate table cart_tb";

if(mysqli_query($conn,$sql))
{
header("location: login.php");
}
else
echo error;

?>