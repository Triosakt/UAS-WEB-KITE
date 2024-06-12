<?php
session_start(); // Start the session

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header('Location: login.php'); // Redirect to the login page if not logged in
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Virtual Gallery - Gallery Single</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Cardo:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">

  <link href="assets/css/main.css" rel="stylesheet">

  <style>
    .image-container {
      display: flex;
      justify-content: center;
      align-items: center;
      margin-top: 100px; 
    }

    #gallery-single {
      padding-top: 30px; 
    }
  </style>

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid d-flex align-items-center justify-content-between">
      <a href="index.php" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="Logo" class="img-fluid logo-img">
        <h1 class="logo-text ms-2">Virtual Gallery</h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.php" class="active">Home</a></li>
          <li class="dropdown"><a href="#">Gallery <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="lukisan.php">Lukisan</a></li>
              <li><a href="patung.php">Patung</a></li>
              <li><a href="fotografi.php">Fotografi</a></li>
            </ul>
          </li>
          <li><a href="about.php">About</a></li>
          <li><a href="logout.php">Log out</a></li>
        </ul>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Gallery Single Section ======= -->
  <section id="gallery-single" class="gallery-single">
    <div class="container">

      <div class="image-container">
      <img src="./assets/img/pexels-xenofan-696995602-20612698.jpg" alt="Placeholder image" width="400" height="400">
      </div>

      <div class="row justify-content-between gy-4 mt-3 mb-4">

        <div class="col-lg-8">
          <div class="gallery-description text-dark">
            <h2>Fotografi Burung dan Bunga</h2>
            <p>
            Di sebuah sudut yang tenang di tepi danau, seekor burung raja udang yang menawan bertengger dengan anggun di atas keranjang bunga. Warna bulu biru cemerlang dan oranye menyala burung ini kontras indah dengan kelopak bunga yang beraneka warna di sekitarnya, menciptakan sebuah pemandangan yang penuh pesona. Keranjang anyaman sederhana yang dipenuhi dengan mawar merah, putih, dan bunga-bunga lainnya menjadi latar belakang yang sempurna, mempertegas keindahan alami dari burung tersebut. Dalam keheningan pagi, burung itu tampak seolah-olah menikmati momen istirahatnya, memberikan kesempatan bagi alam untuk menunjukkan harmoni dan keindahannya.
            </p>
            <p>
            Burung raja udang ini tidak hanya memikat dengan warnanya yang mencolok, tetapi juga dengan ketenangannya saat bertengger di atas keranjang. Mata kecilnya yang tajam memperhatikan sekeliling dengan waspada, sementara tubuhnya tetap tenang dan stabil. Kehadirannya membawa kehidupan dan dinamika ke dalam rangkaian bunga, yang seolah-olah berbicara tentang keajaiban alam yang sering tersembunyi di balik hiruk pikuk kehidupan sehari-hari. Bunga-bunga di sekitarnya, dengan kelopak yang lembut dan warna yang cerah, tampak lebih hidup dan menawan dengan burung tersebut sebagai pusat perhatian.
            </p>

            <div class="testimonial-item">
              <p>
                <i class="bi bi-quote quote-icon-left"></i>
                Pemandangan ini adalah pengingat betapa indahnya interaksi antara flora dan fauna di alam liar. Burung dan bunga, dua elemen alam yang sering kita temui secara terpisah, dalam gambar ini menyatu dalam sebuah komposisi yang sempurna. 
                <i class="bi bi-quote quote-icon-right"></i>
              </p>
              <div>
                <h3>Nick Brandt</h3>
                <img src="./assets/img/Screenshot 2024-06-12 160621.png" class="testimonial-img mb-3" alt="" width="200" height="200">
                <h4>Fotografer</h4>
              </div>
            </div>

            <p>
              Impedit ipsum quae et aliquid doloribus et voluptatem quasi. Perspiciatis occaecati earum et magnam animi. Quibusdam non qui ea vitae suscipit vitae sunt. Repudiandae incidunt cumque minus deserunt assumenda tempore. Delectus voluptas necessitatibus est.

            <p>
              Sunt voluptatum sapiente facilis quo odio aut ipsum repellat debitis. Molestiae et autem libero. Explicabo et quod necessitatibus similique quis dolor eum. Numquam eaque praesentium rem et qui nesciunt.
            </p>

          </div>
        </div>

        <div class="col-lg-3">
          <div class="gallery-info text-dark">
            <h3>Gallery information</h3>
            <ul>
              <li><strong>Kategori</strong> Fotografi</li>
              <li><strong>Tanggal Pembuatan</strong> 01 March, 2022</li>
              <li><a href="#" class="btn-visit align-self-start">Lokasi</a></li>
            </ul>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Gallery Single Section -->

  <!-- Footer -->
  <footer class="footer">
    <div class="container">
      <div class="footer-social-links">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
      </div>
      <small>&copy; 2024 Virtual Gallery. All Rights Reserved.</small>
    </div>
  </footer>

</body>

</html>
