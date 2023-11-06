<?php 
include 'koneksi.php';

$id = $_POST["id"];
$name = $_POST["name"];
$price = $_POST["price"];

$result = mysqli_query($conn, "INSERT INTO `product` (`id`, `name`, `price`) VALUES ('$id', '$name', '$price' );");

header("Location:index.php");

?>