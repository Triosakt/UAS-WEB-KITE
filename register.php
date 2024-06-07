<?php
include 'config.php'; // Sertakan file koneksi ke database

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Ambil data dari formulir
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Periksa apakah email valid
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<script>
                alert('Format email tidak valid.');
                window.location.href = 'registrasi.html';
              </script>";
        exit();
    }

    // Periksa apakah password dan konfirmasi password cocok
    if ($password !== $confirm_password) {
        echo "<script>
                alert('Konfirmasi password tidak sesuai.');
                window.location.href = 'registrasi.html';
              </script>";
        exit();
    }

    // Periksa apakah username sudah terdaftar
    $sql_check = "SELECT * FROM users WHERE username = ?";
    $stmt_check = $conn->prepare($sql_check);
    $stmt_check->bind_param("s", $username);
    $stmt_check->execute();
    $result_check = $stmt_check->get_result();

    if ($result_check->num_rows > 0) {
        // Username sudah terdaftar
        echo "<script>
                alert('Username sudah terdaftar, silakan pilih username lain.');
                window.location.href = 'registrasi.html';
              </script>";
        exit();
    }

    // Hash kata sandi menggunakan bcrypt
    $hashed_password = password_hash($password, PASSWORD_BCRYPT);

    // Simpan data ke dalam tabel users
    $sql = "INSERT INTO users (email, username, password) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $email, $username, $hashed_password);

    if ($stmt->execute()) {
        echo "<script>
                alert('Berhasil membuat akun.');
                window.location.href = 'login.html';
              </script>";
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    // Tutup koneksi
    $stmt->close();
    $stmt_check->close();
    $conn->close();
}
?>
