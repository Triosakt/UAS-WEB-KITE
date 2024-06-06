<?php
session_start(); // Start the session to store user data

include 'config.php'; // Include the database connection file

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get data from the form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query to find user by username
    $sql = "SELECT * FROM users WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        // User found, verify password
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            // Password is correct, save user data to session
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['username'] = $row['username'];
            $_SESSION['loggedin'] = true;
            echo "<script>
                    alert('Login berhasil.');
                    window.location.href = 'index.php';
                  </script>";
            exit();
        } else {
            // Incorrect password
            echo "<script>
                    alert('Password yang Anda masukkan salah.');
                    window.location.href = 'login.html';
                  </script>";
        }
    } else {
        // User not found
        echo "<script>
                alert('Username yang Anda masukkan tidak terdaftar.');
                window.location.href = 'login.html';
              </script>";
    }

    // Close connection
    $stmt->close();
    $conn->close();
}
?>
