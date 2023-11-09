<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <script>
        function submitForm() {
            alert('Yeay successfully changed products !');
            window.location.href = 'index.php'; // Ganti dengan URL tujuan yang sesuai
        }
    </script>
</head>
<body>
  <?php
    include 'koneksi.php';
    $id = $_GET['id'];
    $product = mysqli_query($conn,"SELECT * from product WHERE id = $id");

    while($p = mysqli_fetch_array($product)){
        
        $name = $p["name"];
        $price = $p["price"];

    }
  ?>
  <form action="proses_edit.php?id=<?php echo $id ?>" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <td>ID</td>
            <td>:</td>
            <td><input type="number" name="id" disabled value="<?php echo $id ?>" ></td>
        </tr>
        
        <tr>
            <td>Nama Produk</td>
            <td>:</td>
            <td><input type="text" name="name" value="<?php echo $name ?>"></td>
        </tr>
        <tr>
            <td>Harga</td>
            <td>:</td>
            <td><input type="number" name="price" value="<?php echo $price ?>"></td>
        </tr>
    </table>
    <input type="submit" name="Submit" value="Simpan" onclick="submitForm()">
  </form>
</body>
</html>