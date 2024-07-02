<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Perangkat - Inventaris Laboratorium Komputer</title>
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
            <section id="devices">
                <h2>Daftar Perangkat</h2>
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Jenis</th>
                            <th>Merek</th>
                            <th>Model</th>
                            <th>Nomor Seri</th>
                            <th>Tanggal Pembelian</th>
                            <th>Kondisi</th>
                            <th>Lokasi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // Sertakan file koneksi ke database
                        include 'db.php';

                        // Query SQL untuk mengambil data perangkat
                        $sql = "SELECT * FROM devices";
                        $result = $conn->query($sql);

                        // Periksa apakah hasilnya ada
                        if ($result->num_rows > 0) {
                            // Loop untuk menampilkan data perangkat dalam tabel
                            while ($row = $result->fetch_assoc()) {
                                echo "<tr>";
                                echo "<td>" . $row["id"] . "</td>";
                                echo "<td>" . $row["type"] . "</td>";
                                echo "<td>" . $row["brand"] . "</td>";
                                echo "<td>" . $row["model"] . "</td>";
                                echo "<td>" . $row["serial_number"] . "</td>";
                                echo "<td>" . $row["purchase_date"] . "</td>";
                                echo "<td>" . $row["condition_status"] . "</td>";
                                echo "<td>" . $row["location"] . "</td>";
                                echo "</tr>";
                            }
                        } else {
                            echo "<tr><td colspan='8'>Belum ada data perangkat.</td></tr>";
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
