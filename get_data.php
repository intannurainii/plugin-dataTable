<?php
// Koneksi ke database (ganti dengan informasi koneksi Anda)
$servername = "127.0.0.1";    
$username = "root";         
$password = "";             
$dbname   = "mbkm"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query untuk mengambil data dari database (ganti dengan query sesuai struktur tabel Anda)
$query = "SELECT id, name, price FROM product";
$result = $conn->query($query);


// Format data menjadi array yang dapat dimengerti oleh DataTables
$data = array();
while ($row = $result->fetch_assoc()) {
    // Create the edit and delete buttons with href attributes
    $editButton = '<a href="edit.php?id=' . $row['id'] . '" class="label label-warning" onclick="myFunction()">Edit</a>';
    $deleteButton = '<a href="proses_delete.php?id=' . $row['id'] . '" class="label label-danger" onclick="myFunction()">Delete</a>';

    // Add data to the array
    $data[] = array(
        'id' => $row['id'],
        'name' => $row['name'],
        'price' => $row['price'],
        'actions' => $editButton . '  ' . $deleteButton
    );
}

// Tutup koneksi
$conn->close();

// Keluarkan data dalam format JSON
echo json_encode(array("data" => $data));
?>
