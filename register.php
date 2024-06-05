<?php
include 'config.php'; // Sertakan file koneksi ke database

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Ambil data dari formulir
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Hash kata sandi menggunakan bcrypt
    $hashed_password = password_hash($password, PASSWORD_BCRYPT);

    // Simpan data ke dalam tabel users
    $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $username, $hashed_password);

    if ($stmt->execute()) {
        echo "<script>
                alert('Data baru berhasil ditambahkan.');
                window.location.href = 'login.html';
              </script>";
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    // Tutup koneksi
    $stmt->close();
    $conn->close();
}
?>
