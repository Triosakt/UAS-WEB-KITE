<?php
include 'config.php'; // Include the database connection file

// Inisialisasi variabel $user_id
$user_id = '';

// Jika method request adalah POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user_id = $_POST['user_id'];
    $old_password = $_POST['old_password'];
    $new_password = $_POST['new_password'];

    // Query untuk mencari user berdasarkan user_id
    $sql = "SELECT password FROM users WHERE id = ?";
    $stmt = $conn->prepare($sql);
    if (!$stmt) {
        echo "Prepare failed: (" . $conn->errno . ") " . $conn->error;
    }
    $stmt->bind_param("i", $user_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        // Verifikasi password lama
        if (password_verify($old_password, $row['password'])) {
            // Update password
            $hashed_password = password_hash($new_password, PASSWORD_BCRYPT);
            $update_sql = "UPDATE users SET password = ? WHERE id = ?";
            $update_stmt = $conn->prepare($update_sql);
            if (!$update_stmt) {
                echo "Prepare failed: (" . $conn->errno . ") " . $conn->error;
            }
            $update_stmt->bind_param("si", $hashed_password, $user_id);
            $update_stmt->execute();

            echo "<script>
                    alert('Password berhasil diubah.');
                    window.location.href = 'login.php';
                  </script>";

            // Tutup koneksi
            $update_stmt->close();
        } else {
            echo "<script>
                    alert('Password lama salah.');
                  </script>";
        }
    } else {
        echo "<script>
                alert('User tidak ditemukan.');
              </script>";
    }

    // Tutup koneksi
    $stmt->close();
    $conn->close();
}

// Jika ada parameter user_id dari GET, gunakan nilai tersebut
if (isset($_GET['user_id'])) {
    $user_id = $_GET['user_id'];
} else {
    // Jika tidak, redirect ke halaman lupa-password.php atau sesuaikan dengan logika Anda
    header("Location: lupa-password.php");
    exit();
}
?>

<!doctype html>
<html lang="en">
<head>
  <title>Reset Password</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="assets/css/login.css" rel="stylesheet">
</head>
<body>
    <div class="login-box">
        <div class="form">
          <h2>Reset Password</h2>
          <form class="login-form" action="" method="post"> <!-- Mengubah action menjadi "" -->
            <input type="hidden" name="user_id" value="<?php echo $user_id; ?>"/>
            <input type="password" name="old_password" placeholder="password lama" required/>
            <input type="password" name="new_password" placeholder="password baru" required/>
            <input type="password" name="new_password" placeholder="konfirmasi password baru" required/>
            <button type="submit">Kirim</button>
          </form>
        </div>
      </div>
</body>
</html>
