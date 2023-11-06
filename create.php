<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>create page</title>
</head>
<body>
<?php
include 'koneksi.php';
?>

  <form action="proses_create.php" method="post">
    <table>
        <tr>
            <td>ID</td>
            <td>:</td>
            <td><input type="number" name="id"></td>
        </tr>
        <tr>
            <td>Nama Produk</td>
            <td>:</td>
            <td><input type="text" name="name"></td>
        </tr>
        <tr>
            <td>Harga</td>
            <td>:</td>
            <td><input type="number" name="price"></td>
        </tr>
    </table>
    <input type="submit" name="Submit" value="Simpan">
  </form>
</body>
</html>