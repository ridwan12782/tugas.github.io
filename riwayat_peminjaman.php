<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riwayat Peminjaman - Inventaris Laboratorium Komputer</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="container">
            <h1>Inventaris Laboratorium Komputer</h1>
            <nav>
                <ul>
                    <li><a href="index.php">Daftar Perangkat</a></li>
                    <li><a href="riwayat_peminjaman.php">Riwayat Peminjaman</a></li>
                    <li><a href="tambah_perangkat.php">Tambah Perangkat</a></li>
                    <li><a href="pinjam_perangkat.php">Pinjam Perangkat</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main>
        <div class="container">
            <section id="borrowings">
                <h2>Riwayat Peminjaman</h2>
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>ID Perangkat</th>
                            <th>Nama Peminjam</th>
                            <th>Tanggal Pinjam</th>
                            <th>Tanggal Kembali</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // Sertakan file koneksi ke database
                        include 'db.php';

                        // Query SQL untuk mengambil data riwayat peminjaman
                        $sql = "SELECT * FROM borrowings";
                        $result = $conn->query($sql);

                        // Periksa apakah hasilnya ada
                        if ($result->num_rows > 0) {
                            // Loop untuk menampilkan data riwayat peminjaman dalam tabel
                            while ($row = $result->fetch_assoc()) {
                                echo "<tr>";
                                echo "<td>" . $row["id"] . "</td>";
                                echo "<td>" . $row["device_id"] . "</td>";
                                echo "<td>" . $row["borrower_name"] . "</td>";
                                echo "<td>" . $row["borrow_date"] . "</td>";
                                echo "<td>" . $row["return_date"] . "</td>";
                                echo "</tr>";
                            }
                        } else {
                            echo "<tr><td colspan='5'>Belum ada riwayat peminjaman.</td></tr>";
                        }
                        // Tutup koneksi database
                        $conn->close();
                        ?>
                    </tbody>
                </table>
            </section>
        </div>
    </main>
    <footer>
        <div class="container">
            <p>&copy; 2024 Inventaris Laboratorium Komputer. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
