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
      <img src="./assets/img/pexels-digitalbuggu-165792.jpg" alt="Placeholder image" width="400" height="400">
      </div>

      <div class="row justify-content-between gy-4 mt-3 mb-4">

        <div class="col-lg-8">
          <div class="gallery-description text-dark">
            <h2>Lukisan Wajah Harimau</h2>
            <p>
            Lukisan ini menampilkan wajah harimau yang megah dan mengagumkan. Dengan detail yang cermat dan ekspresi yang kuat, lukisan ini memancarkan kekuatan dan keanggunan karakteristik harimau.
            </p>
            <p>
            Warna-warna yang hidup dan kontras yang digunakan dalam lukisan ini menambah dimensi dan kedalaman pada wajah harimau. Setiap goresan kuas yang terperinci membawa karakteristik unik harimau, seperti keanggunan dan kekuatan yang melekat pada binatang ini.
            </p>

            <div class="testimonial-item">
              <p>
                <i class="bi bi-quote quote-icon-left"></i>
                Melalui lukisan ini, seniman berhasil menangkap esensi dari keindahan dan kekuatan alam liar yang terwakili oleh harimau. Lukisan ini tidak hanya menghibur mata, tetapi juga merangsang imajinasi dan emosi penontonnya.
                <i class="bi bi-quote quote-icon-right"></i>
              </p>
              <div>
                <h3>Digital Buggu</h3>
                <img src="./assets/img/ram-711.jpeg" class="testimonial-img mb-3" alt="" width="200" height="200">
                <h4>Designer</h4>
              </div>
            </div>

            <p>
            Digital Buggu adalah seorang seniman digital yang mahir dalam menciptakan lukisan realistis. Karya-karyanya dikenal karena ketelitian detailnya dan kemampuannya untuk menangkap esensi alam dan kehidupan liar. Dalam lukisan wajah harimau ini, Digital Buggu berhasil menggambarkan keanggunan dan kekuatan harimau dengan sangat baik. Dengan menggunakan teknik digital, ia berhasil menciptakan gambaran yang hidup dan mendalam tentang karakter unik harimau.

            <p>
              
            </p>

          </div>
        </div>

        <div class="col-lg-3">
          <div class="gallery-info text-dark">
            <h3>Gallery information</h3>
            <ul>
              <li><strong>Kategori</strong> Lukisan</li>
              <li><strong>Tanggal Pembuatan</strong> 02 September, 2016</li>
              <li><a href="#" class="btn-visit align-self-start">New Delhi, India</a></li>
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
