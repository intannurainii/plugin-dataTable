<?php 
include 'koneksi.php';

$id = $_POST["id"];
$name = $_POST["name"];
$price = $_POST["price"];

$result = mysqli_query($conn, "UPDATE `product` set  `name` = '$name', `price` = '$price' where `id` = '$_GET[id]'");

header("Location:index.php");

?>