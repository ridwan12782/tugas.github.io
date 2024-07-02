<?php
// Sertakan file koneksi ke database
include 'db.php';

// Ambil data dari form pinjam perangkat
$device_id = $_POST['device_id'];
$borrower_name = $_POST['borrower_name'];
$borrow_date = $_POST['borrow_date'];
$return_date = $_POST['return_date'];

// Query SQL untuk menambahkan peminjaman perangkat ke database
$sql = "INSERT INTO borrowings (device_id, borrower_name, borrow_date, return_date)
        VALUES ('$device_id', '$borrower_name', '$borrow_date', '$return_date')";

if ($conn->query($sql) === TRUE) {
    echo "Peminjaman perangkat berhasil.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Tutup koneksi database
$conn->close();
?>
