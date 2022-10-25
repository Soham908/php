<?php

include('connection_file.php');

$username = $_REQUEST['user1'];
$password = $_REQUEST['pass1'];

$sql = "insert into login_info values('$username','$password')";

if(mysqli_query($conn, $sql))
{
header("location: login.php");
}



?>