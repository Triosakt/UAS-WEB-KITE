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
      <img src="./assets/img/pexels-knownasovan-194930.jpg" alt="Placeholder image" width="400" height="400">
      </div>

      <div class="row justify-content-between gy-4 mt-3 mb-4">

        <div class="col-lg-8">
          <div class="gallery-description text-dark">
            <h2>Suasana Hari Ulang Tahun Kemerdekaan Indonesia</h2>
            <p>
            Gambar ini menangkap suasana pasar yang ramai di salah satu kota besar pada saat perayaan ulang tahun kemerdekaan Indonesia. Terlihat berbagai spanduk dan bendera merah putih yang menggantung di atas jalan, mempromosikan berbagai merek terkenal seperti SHARP dan Doraemon. Foto ini menggambarkan kesibukan sehari-hari di area komersial dengan toko-toko elektronik di kedua sisi jalan. Tanda-tanda dari merek terkenal seperti Toshiba, Panasonic, dan banyak lainnya menambah keaslian suasana pasar ini. Bayangan seseorang di latar depan menambah dimensi hidup pada foto ini, seolah mengajak penonton untuk ikut merasakan keramaian dan hiruk-pikuk pasar yang lebih meriah karena suasana perayaan kemerdekaan.
            </p>
            <p>
            Selain menampilkan aspek komersial, foto ini juga mencerminkan rasa kebersamaan dan semangat nasionalisme yang tinggi di kalangan masyarakat. Hiasan-hiasan berwarna merah putih yang menggantung di sepanjang jalan tidak hanya memperindah suasana tetapi juga mengingatkan kita akan pentingnya persatuan dan kesatuan bangsa. Orang-orang yang lalu lalang di bawah dekorasi kemerdekaan ini menciptakan pemandangan yang kontras namun harmonis antara modernitas kota dan tradisi perayaan nasional. Eduardo Romero berhasil menangkap momen ini dengan sempurna, menunjukkan bagaimana elemen-elemen kecil dalam kehidupan sehari-hari dapat berkontribusi pada rasa kebanggaan nasional dan kebersamaan.
            </p>

            <div class="testimonial-item">
              <p>
                <i class="bi bi-quote quote-icon-left"></i>
                Gambar ini juga menampilkan sisi lain dari pasar yang menjadi saksi sejarah perjalanan bangsa. Orang-orang yang beraktivitas di pasar ini seolah tak hanya sedang bertransaksi, tetapi juga merayakan identitas dan kebanggaan sebagai bagian dari masyarakat Indonesia. Kehadiran dekorasi kemerdekaan di tempat-tempat umum seperti ini menunjukkan bagaimana semangat perayaan nasional meresap hingga ke sudut-sudut kehidupan sehari-hari, mempererat rasa solidaritas dan kebanggaan akan kemerdekaan yang telah diperjuangkan bersama.
                <i class="bi bi-quote quote-icon-right"></i>
              </p>
              <div>
                <h3>Ovan</h3>
                <img src="./assets/img/ovan-455.jpeg" class="testimonial-img mb-3" alt="" width="200" height="200">
                <h4>Designer</h4>
              </div>
            </div>

            <p>
            Ovan adalah seorang fotografer dan desainer visual yang karyanya sering mengabadikan kehidupan perkotaan dan suasana sehari-hari. Dengan keahlian dalam menangkap momen autentik, Eduardo berhasil menggambarkan esensi kehidupan urban melalui lensanya. Karyanya mencakup berbagai aspek dari kehidupan perkotaan, mulai dari keramaian pasar hingga keheningan lorong-lorong kota. Eduardo sering menggunakan media fotografi untuk bercerita, mengajak penontonnya merasakan atmosfer dan dinamika tempat yang ia abadikan.

            <p>
              
            </p>

          </div>
        </div>

        <div class="col-lg-3">
          <div class="gallery-info text-dark">
            <h3>Gallery information</h3>
            <ul>
              <li><strong>Kategori</strong> Fotografi</li>
              <li><strong>Tanggal Pembuatan</strong> 17 Desember, 2016</li>
              <li><a href="#" class="btn-visit align-self-start">Sumur Bandung, Jawa Barat</a></li>
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
