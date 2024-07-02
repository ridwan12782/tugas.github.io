<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Pinjam Perangkat</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <header>
            <h1>Pinjam Perangkat</h1>
        </header>
        <nav>
            <ul>
                <li><a href="index.php">Beranda</a></li>
                <li><a href="tambah_perangkat.php">Tambah Perangkat</a></li>
                <li><a href="pinjam_perangkat.php">Pinjam Perangkat</a></li>
            </ul>
        </nav>
        <main>
            <h2>Form Pinjam Perangkat</h2>
            <form action="proses_pinjam_perangkat.php" method="post">
                <label for="device_id">Pilih Perangkat:</label>
                <select id="device_id" name="device_id" required>
                    <option value="">Pilih Perangkat</option>
                    <?php
                    include 'db.php';
                    $sql = "SELECT id, type, brand, model FROM devices";
                    $result = $conn->query($sql);
                    while ($row = $result->fetch_assoc()) {
                        echo "<option value='" . $row['id'] . "'>" . $row['type'] . " - " . $row['brand'] . " - " . $row['model'] . "</option>";
                    }
                    $conn->close();
                    ?>
                </select><br><br>
                <label for="borrower_name">Nama Peminjam:</label>
                <input type="text" id="borrower_name" name="borrower_name" required><br><br>
                <label for="borrow_date">Tanggal Pinjam:</label>
                <input type="date" id="borrow_date" name="borrow_date" required><br><br>
                <label for="return_date">Tanggal Kembali:</label>
                <input type="date" id="return_date" name="return_date" required><br><br>
                <button type="submit">Pinjam Perangkat</button>
            </form>
        </main>
        <footer>
            <p>&copy; 2024 Inventaris Laboratorium Komputer</p>
        </footer>
    </div>
</body>
</html>
