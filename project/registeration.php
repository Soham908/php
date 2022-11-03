<?php

include('connection_file.php');

$username = $_REQUEST['user1'];
$password = $_REQUEST['pass1'];

$query = "insert into login_info values('$username','$password')";

$sql = "select * from login_info where user_name = '$username' and password ='$password' ";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$count = mysqli_num_rows($result);

if ($count==1)
{
header("location: index.php");
}

elseif (mysqli_query($conn, $query))
{
header("location: login.php");
}



?>