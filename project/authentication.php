<?php

include('connection_file.php');
$username = $_POST['user'];
$password = $_POST['pass'];

$username = stripcslashes($username);  
$password = stripcslashes($password);  
	  

$sql = "select * from login_info where user_name = '$username' and password ='$password' ";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$count = mysqli_num_rows($result);

if ($count==1)
{
header("location: homepage.php");
}
else
{
echo "login failed try again";
}


?>