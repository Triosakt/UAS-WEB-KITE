<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Ambil data dari formulir
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query untuk mencari user berdasarkan username
    $sql = "SELECT * FROM users WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        // User ditemukan, verifikasi password
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            // Password benar, buat session dan arahkan ke halaman selanjutnya
            session_start();
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['username'] = $row['username'];
            echo "<script>
            alert('login berhasil.');
            window.location.href = 'index.html';
          </script>";
            exit();
        } else {
            // Password salah
            echo "<script>
                    alert('Password yang Anda masukkan salah.');
                    window.location.href = 'login.html';
                  </script>";
        }
    } else {
        // User tidak ditemukan
        echo "<script>
                alert('Username yang Anda masukkan tidak terdaftar.');
                window.location.href = 'login.html';
              </script>";
    }

    // Tutup koneksi
    $stmt->close();
    $conn->close();
}
?>
