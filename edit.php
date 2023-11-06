<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Page</title>
</head>
<body>
 
  <?php
    include 'koneksi.php';

    $product = mysqli_query($conn,"SELECT * from product where id='$_GET[id]'");

    while($p = mysqli_fetch_array($product)){
        $id = $p["id"];
        $name = $p["name"];
        $price = $p["price"];

    }
  ?>
  <form action="proses_edit.php?id=<?php echo $id ?>" method="post" enctype="multipart/form-data">
    <table>
       
        <tr>
            <td>ID</td>
            <td>:</td>
            <td><input type="number" name="id" disabled value="<?php echo $id ?>"></td>
        </tr>
        
        <tr>
            <td>Nama Produk</td>
            <td>:</td>
            <td><input type="text" name="name" id="name"></td>
        </tr>
        <tr>
            <td>Harga</td>
            <td>:</td>
            <td><input type="number" name="price" value="<?php echo $price ?>"></td>
        </tr>

    </table>
    <input type="submit" name="Submit" value="Simpan">
  </form>
</body>
</html>