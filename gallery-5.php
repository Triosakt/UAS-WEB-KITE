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
      <img src="./assets/img/pexels-daniel-ape-795693.jpg" alt="Placeholder image" width="400" height="400">
      </div>

      <div class="row justify-content-between gy-4 mt-3 mb-4">

        <div class="col-lg-8">
          <div class="gallery-description text-dark">
            <h2>Fotografi Siluet Hutan</h2>
            <p>
            Gambar ini menampilkan keanggunan alam yang memukau dalam bentuk siluet hutan yang megah. Dengan sorotan cahaya senja yang lembut merayap di antara rimbunnya pepohonan, gambar ini menawarkan pemandangan yang memukau dan mempesona. Pepohonan yang menjulang tinggi terhadap langit senja memberikan kesan dramatis dan menambah nuansa keajaiban alam yang hadir dalam gambar ini.
            </p>
            <p>
            Di balik keheningan dan kegelapan, gambar ini mengungkapkan keindahan alam yang alami dan mengundang pengamat untuk merenung. Siluet hutan yang gelap memberikan sentuhan misteri dan keanggunan yang melampaui kata-kata. Seperti lukisan alam yang hidup, gambar ini menjadi sumber inspirasi bagi mereka yang mencari kedamaian dan keindahan dalam alam.
            </p>

            <div class="testimonial-item">
              <p>
                <i class="bi bi-quote quote-icon-left"></i>
                Dari harmoni warna-warna senja hingga komposisi yang indah antara cahaya dan bayangan, gambar ini membangkitkan rasa kagum terhadap keindahan alam yang tiada tara. Dengan setiap detilnya yang terperinci, gambar ini mengajak penonton untuk terhubung dengan alam dan menghargai kebesaran ciptaan ini.
                <i class="bi bi-quote quote-icon-right"></i>
              </p>
              <div>
                <h3>Daniel Ape</h3>
                <img src="./assets/img/daniel-ap-856.jpg" class="testimonial-img mb-3" alt="" width="200" height="200">
                <h4>Designer</h4>
              </div>
            </div>

            <p>
            Daniel Ape adalah seorang desainer berbakat yang aktif mengunggah karyanya di platform online. Dikenal karena kepiawaiannya dalam menggabungkan elemen desain yang beragam, Daniel Ape membagikan karya-karya desainnya yang menarik perhatian dengan keunikan dan kreativitasnya. Dari desain grafis hingga ilustrasi, karya-karya Daniel Ape memancarkan kecerdasan dan visi artistiknya yang khas.

            <p>
              
            </p>

          </div>
        </div>

        <div class="col-lg-3">
          <div class="gallery-info text-dark">
            <h3>Gallery information</h3>
            <ul>
              <li><strong>Kategori</strong> Lukisan</li>
              <li><strong>Tanggal Pembuatan</strong> 09 Januari, 2017</li>
              <li><a href="#" class="btn-visit align-self-start">Probolinggo, Jawa Timur</a></li>
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
