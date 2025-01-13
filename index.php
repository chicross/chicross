<?php
// dbconfig.php: Konfigurasi database
include('dbconfig.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penerimaan Mahasiswa Baru</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Penerimaan Mahasiswa Baru</h1>
        <p>Silakan isi formulir di bawah untuk mendaftar.</p>
        <form action="form-handler.php" method="post" id="registrationForm">
            <label for="name">Nama Lengkap:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="phone">Nomor Telepon:</label>
            <input type="text" id="phone" name="phone" required>

            <label for="program">Pilih Program Studi:</label>
            <select id="program" name="program" required>
                <option value="Informatika">Informatika</option>
                <option value="Teknik Elektro">Teknik Elektro</option>
                <option value="Manajemen">Manajemen</option>
            </select>

            <button type="submit">Kirim</button>
        </form>
    </div>
    <script src="assets/script.js"></script>
</body>
</html>
