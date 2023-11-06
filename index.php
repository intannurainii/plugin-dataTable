<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Intan</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <?php
                include 'koneksi.php';
                $query = mysqli_query($conn, "SELECT * from `product`;");
                ?>
               <center><h1><b>Data Produk Toko Mama:</b></h1> </center>
                <a class="btn btn-info" style="margin-bottom:5px" href="create.php"> tambah produk </a> 
                <table class="table table-striped table-bordered">
                    <tr>
                        <th>
                            ID
                        </th>
                        <th>
                            Nama Produk
                        </th>
                        <th>
                            Harga
                        </th>
                        <th>
                            Aksi
                        </th>
                    </tr>
                        <?php 
                        if(mysqli_num_rows($query)>0){ 
                        $no = 1;
                        while($data = mysqli_fetch_array($query)){
                        ?>
                        <tr>
                            <td> <?php echo $data["id"] ?> </td>
                            <td> <?php echo $data["name"] ?> </td>
                            <td> <?php echo $data["price"] ?></td>
                            <td> <a href="proses_delete.php?id=<?php echo $data["id"] ?>" class="label label-danger"> Delete </a> &nbsp; <a href="edit.php?id=<?php echo $data["id"] ?>" class="label label-warning"> Ubah </a></td>
                        </tr>
                        <?php } ?>
                        <?php } ?>
                </table>
            </div>
        </div>
    </div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</html>