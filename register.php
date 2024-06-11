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
                window.location.href = 'register.php';
              </script>";
        exit();
    }

    // Periksa apakah password dan konfirmasi password cocok
    if ($password !== $confirm_password) {
        echo "<script>
                alert('Konfirmasi password tidak sesuai.');
                window.location.href = 'register.php';
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
                window.location.href = 'register.php';
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
                window.location.href = 'login.php';
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

<!doctype html>
<html lang="en">
<head>
  <title>Registrasi</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="assets/css/login.css" rel="stylesheet">
</head>
<body>
    <div class="login-box">
        <div class="form">
          <h2>Registrasi</h2>
          <form class="register-form" action="register.php" method="post">
            <input type="email" name="email" placeholder="Email" required>
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="password" name="confirm_password" placeholder="Konfirmasi Password" required>
            <button type="submit">Kirim</button>
            <p class="message">Sudah terdaftar? <a href="login.php">Masuk</a></p>
          </form>
        </div>
    </div>
</body>
</html>


