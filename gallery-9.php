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
      <img src="./assets/img/pexels-eberhardgross-2437286.jpg" alt="Placeholder image" width="400" height="400">
      </div>

      <div class="row justify-content-between gy-4 mt-3 mb-4">

        <div class="col-lg-8">
          <div class="gallery-description text-dark">
            <h2>Panorama Gunung yang Menakjubkan</h2>
            <p>
            Dalam potret ini, keagungan alam terpancar melalui panorama gunung yang menakjubkan. Gunung yang menjulang tinggi dengan puncaknya yang terbungkus awan tipis menciptakan pemandangan yang memukau. Lerengnya yang hijau dan berbatu menambah kesan kokoh dan megah, seolah-olah alam sedang memamerkan kebesarannya. Setiap detail dalam foto ini menggambarkan keindahan alami yang tak tertandingi, dari pepohonan yang tumbuh subur hingga langit biru yang membentang luas.
            </p>
            <p>
            Ketika mata mengikuti garis-garis tegas dari puncak gunung hingga ke lembah yang dalam, kita dapat merasakan kekuatan dan ketenangan yang ditawarkan oleh alam. Cahaya matahari yang lembut menyinari lereng gunung, menciptakan bayangan yang indah dan menambah dimensi pada pemandangan ini. Hembusan angin yang terasa sejuk dan segar menambah suasana damai, mengingatkan kita akan pentingnya meluangkan waktu untuk menikmati keindahan alam dan merasakan ketenangan yang hanya bisa ditemukan di tempat-tempat seperti ini.
            </p>

            <div class="testimonial-item">
              <p>
                <i class="bi bi-quote quote-icon-left"></i>
                Potret ini tidak hanya sekedar foto, tetapi juga sebuah pengingat akan keindahan dan keagungan alam yang sering kali terlupakan dalam kehidupan sehari-hari. Dengan melihat gambar ini, kita diajak untuk menghargai dan melestarikan alam, agar keindahan seperti ini dapat dinikmati oleh generasi mendatang. Keagungan gunung yang terekam dalam foto ini mengajarkan kita tentang kekuatan, ketenangan, dan ketahanan alam yang luar biasa.
                <i class="bi bi-quote quote-icon-right"></i>
              </p>
              <div>
                <h3>National Geographic</h3>
                <img src="./assets/img/nat-1575319915.webp" class="testimonial-img mb-3" alt="" width="200" height="200">
                <h4>Photografer</h4>
              </div>
            </div>

            <p>
            National Geographic adalah sebuah organisasi nirlaba global yang terkenal karena dedikasinya dalam mengeksplorasi, memahami, dan melindungi planet kita. Didirikan pada tahun 1888, organisasi ini telah menjadi salah satu sumber utama informasi ilmiah, pendidikan, dan budaya tentang dunia alami dan manusia.
            </p>
            <p>
            Majalah National Geographic, dengan foto-foto yang memukau dan artikel-artikel yang mendalam, telah menjadi ikon jurnalisme visual dan ilmiah. Setiap edisi majalah ini membawa pembaca dalam perjalanan ke berbagai belahan dunia, menampilkan keindahan alam, kehidupan liar, dan keanekaragaman budaya manusia.
            </p>

          </div>
        </div>

        <div class="col-lg-3">
          <div class="gallery-info text-dark">
            <h3>Gallery information</h3>
            <ul>
              <li><strong>Kategori</strong> fotografi</li>
              <li><strong>Tanggal Pembuatan</strong> 01 March, 2022</li>
              <li><a href="#" class="btn-visit align-self-start">Pegunungan </a></li>
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
