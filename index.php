<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Intan</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
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
                <a class="btn btn-info" style="margin-bottom:5px" href="create.php" onclick="myFunction()"> tambah produk </a> 
                <table id="dataTable" class="display">
                    <thead><tr>
                        <th>ID</th>
                        <th>Nama Produk</th>
                        <th>Harga</th>
                        <th>Aksi</th>
                    </tr></thead>
                    <tbody>
        <!-- Data will be dynamically loaded here -->
    </tbody>
                        <!-- <?php 
                        if(mysqli_num_rows($query)>0){ 
                        $no = 1;
                        while($data = mysqli_fetch_array($query)){
                        ?>
                        <tr>
                            <td> <?php echo $data["id"] ?> </td>
                            <td> <?php echo $data["name"] ?> </td>
                            <td> <?php echo $data["price"] ?></td>
                            <td> <?php echo $data["actions"] ?></td>
                        </tr>
                        <?php } ?> -->
                        <?php } ?>
                </table>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function() {
        $('#dataTable').DataTable({
            "ajax": {
                "url": "get_data.php", // File PHP untuk mengambil data dari database
                "type": "POST"
                
            },
            "columns": [
                { "data": "id" },
                { "data": "name" },
                { "data": "price" },
                { "data": "actions" }
            ]
        });
    });
</script>
</body>
</html>