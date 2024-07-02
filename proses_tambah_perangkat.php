<?php
// Sertakan file koneksi ke database
include 'db.php';

// Ambil data dari form tambah perangkat
$type = $_POST['type'];
$brand = $_POST['brand'];
$model = $_POST['model'];
$serial_number = $_POST['serial_number'];
$purchase_date = $_POST['purchase_date'];
$condition_status = $_POST['condition_status'];
$location = $_POST['location'];

// Query SQL untuk menambahkan perangkat ke database
$sql = "INSERT INTO devices (type, brand, model, serial_number, purchase_date, condition_status, location)
        VALUES ('$type', '$brand', '$model', '$serial_number', '$purchase_date', '$condition_status', '$location')";

if ($conn->query($sql) === TRUE) {
    echo "Perangkat berhasil ditambahkan.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Tutup koneksi database
$conn->close();
?>
