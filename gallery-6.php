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
      <img src="./assets/img/pexels-eduardo-romero-817034-1707640.jpg" alt="Placeholder image" width="400" height="400">
      </div>

      <div class="row justify-content-between gy-4 mt-3 mb-4">

        <div class="col-lg-8">
          <div class="gallery-description text-dark">
            <h2>Lukisan Wajah Manusia di Dinding</h2>
            <p>
            Gambar ini menampilkan lukisan wajah manusia yang terpajang megah di dinding. Dengan detail yang halus dan ekspresi yang kuat, lukisan ini menciptakan kesan yang mendalam dan memikat bagi para pengamatnya. Setiap goresan kuas yang terperinci menggambarkan kehidupan dan emosi yang terpancar dari wajah yang digambarkan.
            </p>
            <p>
            Melalui perpaduan warna-warna yang dramatis dan kontras, lukisan ini menampilkan keindahan dalam bentuk seni visual. Sorotan cahaya yang halus menambah dimensi pada lukisan, menciptakan efek dramatis dan menyoroti setiap detail dengan indah. Dinding yang menjadi latar belakang memberikan ruang yang sempurna bagi lukisan ini untuk bersinar dan menarik perhatian.
            </p>

            <div class="testimonial-item">
              <p>
                <i class="bi bi-quote quote-icon-left"></i>
                Dengan setiap goresan kuas yang terampil, lukisan ini mengajak penonton untuk terhubung dengan emosi yang terpancar dari wajah yang digambarkan. Keindahan dan kekuatan lukisan ini tidak hanya terletak pada teknik yang digunakan, tetapi juga pada kemampuannya untuk menyampaikan pesan dan merangsang imajinasi pengamatnya.
                <i class="bi bi-quote quote-icon-right"></i>
              </p>
              <div>
                <h3>Eduardo Romero</h3>
                <img src="./assets/img/eduardo-romero-620.jpeg" class="testimonial-img mb-3" alt="" width="200" height="200">
                <h4>Designer</h4>
              </div>
            </div>

            <p>
            Eduardo Romero adalah seorang seniman lukisan yang berbakat, dikenal karena karyanya yang realistis dan menyentuh. Dengan cermatnya detail dan kemampuannya menangkap ekspresi manusia, lukisan-lukisannya seringkali menginspirasi dan memikat hati para penontonnya. Dalam setiap karya, Eduardo menggambarkan kehidupan dan emosi manusia dengan kedalaman yang mengesankan. Gaya lukisannya yang sederhana namun kuat mampu menangkap esensi dari subjek yang digambarkannya.

            <p>
            Meskipun sedikit informasi yang tersedia tentang Eduardo, karyanya sendiri sudah cukup untuk menyampaikan pesan yang kuat dan menarik perhatian penontonnya.
            </p>

          </div>
        </div>

        <div class="col-lg-3">
          <div class="gallery-info text-dark">
            <h3>Gallery information</h3>
            <ul>
              <li><strong>Kategori</strong> Lukisan</li>
              <li><strong>Tanggal Pembuatan</strong> 20 Desember, 2018</li>
              <li><a href="#" class="btn-visit align-self-start">Chicago, IL, USA</a></li>
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
