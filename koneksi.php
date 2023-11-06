<?php
$hostName = "127.0.0.1";    
$userName = "root";         
$password = "";             
$dbName   = "mbkm"; 
$conn = new mysqli($hostName, $userName, $password,$dbName);    
if ($conn->connect_errno) {
    die("Connection failed: " . $conn->connect_error);
} else {
    
}


?>