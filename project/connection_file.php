<?php

$servername = "localhost";
$user = "root";
$pass = "";
$db_name = "grocery_db";

$conn = new mysqli($servername,$user,$pass,$db_name);

if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  

?>