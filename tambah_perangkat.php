<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Perangkat Baru</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <header>
            <h1>Tambah Perangkat Baru</h1>
        </header>
        <nav>
            <ul>
                <li><a href="index.php">Beranda</a></li>
                <li><a href="tambah_perangkat.php">Tambah Perangkat</a></li>
                <li><a href="pinjam_perangkat.php">Pinjam Perangkat</a></li>
            </ul>
        </nav>
        <main>
            <h2>Form Tambah Perangkat</h2>
            <form action="proses_tambah_perangkat.php" method="post">
                <label for="type">Jenis:</label>
                <input type="text" id="type" name="type" required><br><br>
                <label for="brand">Merek:</label>
                <input type="text" id="brand" name="brand" required><br><br>
                <label for="model">Model:</label>
                <input type="text" id="model" name="model" required><br><br>
                <label for="serial_number">Nomor Seri:</label>
                <input type="text" id="serial_number" name="serial_number" required><br><br>
                <label for="purchase_date">Tanggal Pembelian:</label>
                <input type="date" id="purchase_date" name="purchase_date" required><br><br>
                <label for="condition_status">Kondisi:</label>
                <input type="text" id="kondisi" name="condition_status" required><br><br>
                <label for="location">Lokasi:</label>
                <input type="text" id="lokasi" name="location" required><br><br>
                <button type="submit">Tambah Perangkat</button>
            </form>
        </main>
        <footer>
            <p>&copy; 2024 Inventaris Laboratorium Komputer</p>
        </footer>
    </div>
</body>
</html>
