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
          <li><a href="index.html">Home</a></li>
          <li><a href="about.html">About</a></li>
          <li class="dropdown"><a href="#"><span>Gallery</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
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
        <img src="./assets/img/tulang-bawang.jpg" alt="Placeholder image">
      </div>

      <div class="row justify-content-between gy-4 mt-3 mb-4">

        <div class="col-lg-8">
          <div class="gallery-description text-dark">
            <h2>Patung Empat Marga Tulang Bawang Barat</h2>
            <p>
            Patung Empat Marga atau disebut juga Megow Pak merupakan salah satu ikon yang sangat penting bagi masyarakat setempat yang menjadi spot selfies favorit yang ada di Tulang Bawang Barat Sejarah Patung empat marga ini dimulai pada tahun 2018 saat Bupati Tulang Bawang Barat merencanakan patung yang menggambarkan keberagaman suku bangsa daerah Tulang Bawang Barat, yang mana patung ini menyimbolkan persatuan dan kesatuan masyarakat Tulang Bawang Barat. Dengan melalui proses yang sangat panjang, pada tahun 2019 akhirnya dimulai pembangunan patung ini dan selesai pada tahun 2021.
            <p>
            Patung ini memiliki tinggi sekitar 20 meter, dengan ciri khas yang menggambarkan keunikan setiap suku bangsa. Terdiri dari tiga pria, satu wanita, dan terdiri dengan empat suku bangsa, yaitu Jawa, Lampung, Sunda, dan Tionghoa. Patung Jawa menggambarkan keanggunan dan kehalusan budaya Jawa. Patung Lampung menggambarkan keberanian dan keindahan alam Lampung. Patung Sunda menggambarkan keindahan seni dan kearifan lokal Sunda. Dan patung Tionghoa menggambarkan kekayaan budaya Tionghoa dan bersemangat berbisnis.
            </p>

            <div class="testimonial-item">
              <p>
                <i class="bi bi-quote quote-icon-left"></i>
                Patung Empat Marga ini didesain sangat detail untuk memperlihatkan setiap elemen yang dilengkapi dengan aksesoris dan atribut dari ciri khas empat suku bangsa tersebut. Seperti patung Jawa dilengkapi dengan wayang dan gamelan, patung Lampung dilengkapi dengan pakaian adat dan keris, patung Sunda dilengkapi dengan angklung  dan kebaya, dan patung Tionghoa dilengkapi dengan naga dan kipas. 
              </p>
              <div>
                <h3>I Nyoman Nuarta</h3>
                <img src="./assets/img/images (1).jpeg" class="testimonial-img mb-3" alt="" height="200" width="200">
                <h4>Designer</h4>
              </div>
            </div>

            <p>
            Pencipta patung ini adalah I Nyoman Nuarta, seorang seniman patung ternama asal Bali yang juga dikenal sebagai pencipta Garuda Wisnu Kencana di Bali. Patung Empat Marga ini tidak hanya menjadi ikon Tubaba tetapi juga simbol persatuan dan kekayaan budaya Lampung.
            <p>
            I Nyoman Nuarta adalah salah satu seniman patung terkemuka di Indonesia, lahir pada tanggal 14 November 1951 di Tabanan, Bali. Ia dikenal luas karena karya-karya monumental dan inovatifnya dalam seni patung yang sering kali menggabungkan unsur-unsur budaya Indonesia dengan teknik modern.
            </p>

          </div>
        </div>

        <div class="col-lg-3">
          <div class="gallery-info text-dark">
            <h3>Gallery information</h3>
            <ul>
              <li><strong>Kategori</strong> Patung</li>
              <li><strong>Tanggal Pembuatan</strong> 04 Januari, 2016</li>
              <li><a href="#" class="btn-visit align-self-start">Tulang Bawang Barat, Lampung</a></li>
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
