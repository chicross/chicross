<?php
include('dbconfig.php');

// Validasi data POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $program = htmlspecialchars($_POST['program']);

    // Simpan data ke database
    $sql = "INSERT INTO mahasiswa (name, email, phone, program) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $name, $email, $phone, $program);

    if ($stmt->execute()) {
        echo "Pendaftaran berhasil! Terima kasih, $name.";
    } else {
        echo "Terjadi kesalahan: " . $stmt->error;
    }
    $stmt->close();
    $conn->close();
}
?>
