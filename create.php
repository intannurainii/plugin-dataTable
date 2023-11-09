<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>create page</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
<?php
include 'koneksi.php';
?>

  <form id="myForm" action="proses_create.php" method="post">
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
    <input type="submit" id="submitBtn" value="Simpan" disabled>
</form>
<script>
    $(document).ready(function () {
        $('#myForm input').on('input', function () {
            var allFilled = true;
            $('#myForm input').each(function () {
                if ($(this).val() === '') {
                    allFilled = false;
                    return false; // Exit the loop if any field is empty
                }
            });

            if (allFilled) {
                $('#submitBtn').prop('disabled', false);
            } else {
                $('#submitBtn').prop('disabled', true);
            }
        });
    });
</script>

</body>
</html>