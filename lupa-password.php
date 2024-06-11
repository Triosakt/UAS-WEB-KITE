<?php
include 'config.php'; // Include the database connection file

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];

    // Query to find user by username
    $sql = "SELECT * FROM users WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        // User found, redirect to reset password page
        $row = $result->fetch_assoc();
        $user_id = $row['id'];
        echo "<script>
                alert('Username ditemukan. Silakan reset password Anda.');
                window.location.href = 'reset-password.php?user_id=$user_id';
              </script>";
    } else {
        echo "<script>
                alert('Username tidak ditemukan.');
                window.location.href = 'lupa-password.php';
              </script>";
    }

    // Close connection
    $stmt->close();
    $conn->close();
}
?>

<!doctype html>
<html lang="en">
<head>
  <title>Lupa Password</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="assets/css/login.css" rel="stylesheet">
</head>
<body>
    <div class="login-box">
        <div class="form">
          <h2>Lupa Password</h2>
          <form class="login-form" action="lupa-password.php" method="post">
            <input type="text" name="username" placeholder="username" required/>
            <button type="submit">Kirim</button>
            <p class="message"><a href="login.php">Kembali ke login</a></p>
          </form>
        </div>
      </div>
</body>
</html>
