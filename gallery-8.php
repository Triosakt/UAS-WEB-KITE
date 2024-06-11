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
      <img src="./assets/img/1571411017.webp" alt="Placeholder image" width="400" height="400">
      </div>

      <div class="row justify-content-between gy-4 mt-3 mb-4">

        <div class="col-lg-8">
          <div class="gallery-description text-dark">
            <h2>Lukisan Abstrak</h2>
            <p>
            Lukisan Abstrak karya Zen Relief adalah sebuah karya seni yang memukau dengan penafsiran yang unik tentang keindahan dan ekspresi. Dengan penggunaan warna-warna yang kuat dan berani, Zen Relief menghadirkan komposisi yang dinamis dan penuh energi.
            </p>
            <p>
            Melalui sapuan-sapuan kuas yang bebas dan spontan, lukisan ini mengajak penonton untuk merenung dan menafsirkan maknanya sendiri. Dengan kebebasan ekspresi yang ditampilkan, Zen Relief menawarkan pengalaman visual yang mendalam dan memikat.
            </p>

            <div class="testimonial-item">
              <p>
                <i class="bi bi-quote quote-icon-left"></i>
                Lukisan Abstrak ini memperlihatkan kedalaman pikiran dan emosi seniman, serta memberikan ruang bagi penonton untuk terhubung dengan karya tersebut melalui interpretasi pribadi mereka. Ini adalah sebuah karya yang tidak hanya memikat mata, tetapi juga menginspirasi dan memancing refleksi tentang dunia dan kehidupan.
                <i class="bi bi-quote quote-icon-right"></i>
              </p>
              <div>
                <h3>Zen Relief</h3>
                <img src="./assets/img/1678725180225.jpeg" class="testimonial-img mb-3" alt="" width="200" height="200">
                <h4>Designer</h4>
              </div>
            </div>

            <p>
            Lukman Zen adalah seorang seniman multitalenta yang menggabungkan kreativitas dalam berbagai bidang seperti seni visual, desain grafis, dan musik. Berbasis di Garut Kota, Jawa Barat, Indonesia, Lukman dikenal sebagai seorang Content Creator, Digital Marketer, dan Visual Artist yang berbakat. Dalam karirnya, Lukman telah menunjukkan keahlian dalam menciptakan karya-karya yang menginspirasi dan memikat. Dari desain grafis hingga seni visual, Lukman memiliki kemampuan untuk menyampaikan pesan-pesan yang kuat melalui karyanya.

            <p>
            Sebagai seorang Content Creator, Lukman menciptakan konten yang beragam, menggabungkan elemen-elemen visual dan musik untuk menghasilkan karya-karya yang menarik perhatian dan membangkitkan ide-ide baru. Dengan latar belakang pendidikan di Universitas Pendidikan Indonesia, Lukman telah mengasah bakat dan keahliannya dalam berbagai bidang seni. Setiap kali ia mengunggah desain dan karya seni, Lukman berharap agar karya-karyanya dapat dinikmati dengan bahagia dan damai bersama, serta dapat menghasilkan inspirasi baru bagi orang lain.
            </p>

          </div>
        </div>

        <div class="col-lg-3">
          <div class="gallery-info text-dark">
            <h3>Gallery information</h3>
            <ul>
              <li><strong>Kategori</strong> Lukisan</li>
              <li><strong>Tanggal Pembuatan</strong> 01 Maret, 2022</li>
              <li><a href="#" class="btn-visit align-self-start">Garut, Jawa Barat</a></li>
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
