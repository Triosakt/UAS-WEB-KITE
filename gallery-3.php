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
      <img src="./assets/img/Picsart_24-06-08_01-09-12-250.jpg" alt="Placeholder image" width="400" height="400">
      </div>

      <div class="row justify-content-between gy-4 mt-3 mb-4">

        <div class="col-lg-8">
          <div class="gallery-description text-dark">
            <h2>Patung Liberty</h2>
            <p>
            Patung Liberty adalah sebuah karya monumental seni pahat yang melambangkan kebebasan bagi seluruh dunia. Nama patung ini sebenarnya adalah “Liberty Enlightening the World” atau Liberty yang menyinari dunia. Patung ini di gambarkan sebagai seorang wanita yang sedang membebaskan diri dari belenggu tirani dengan tangan kanan yang memegang sebuah obor dengan api yang menyala, ini melambangkan kebebasan. Sementara tangan kirinya memegang sebuah buku dengan tulisan “July 4, 1776” (dengan angka Romawi), hari kemerdekaan Amerika. Dia mengenakan jubah yang menjuntai dan 7 bayangan dari paku besar pada mahkotanya melambangkan 7 samudra dan benua.
            </p>
            <p>
            Patung Liberty memiliki tinggi kurang leih 46 m (151 ft)b. Jika di hitung dari dasar, patung ini memiliki tinggi sampai 93 m (305 ft). Lapisan patung ini terbuat dari lempengan tembaga tempa debnan ketebalan 2.4 mm (0.01 in) yang di pasang pada rangka besi. Rangka besinya di buat oleh Insinyur Perancis, Gustave Alexandre Eiffel, yang juga pembuat menara Eiffel di Paris. Alas patung ini di desain menggunakan beton dan granit oleh arsitek Amerika, Richard Morris Hunt. Sebuah dinding berbentuk bintang mengelilingi alas setinggi 47-m (154-ft) ini. Dinding ini adalah bagian dari Fort Wood, tembok yang di bangun awal abad 19 untuk mempertahankan kota New York selama berlangsungnya perang 1812 (1812-1815).
            </p>
            <div class="testimonial-item">
              <p>
                <i class="bi bi-quote quote-icon-left"></i>
                Patung ini pertamakali di pamerkan di Paris, kemudian di bongkar dan di kirimkan ke New York, dan di pasang ulang seperti saat ini. Patung ini di resikan. Patung Dewi kemerdekaan tersebut dipersembahkan oleh rakyat Prancis kepada rakyat Amerika, sebagai hadiah ulang tahun kemerdekaan Amerika yang ke-100. 
                <i class="bi bi-quote quote-icon-right"></i>
              </p>
              <div>
                <h3>Frédéric Auguste Bartholdi</h3>
                <img src="./assets/img/images (2).jpeg" class="testimonial-img mb-3" alt="" width="200" height="200">
                <h4>Designer</h4>
              </div>
            </div>

            <p>
            Frédéric Auguste Bartholdi adalah seorang seniman dan pemahat Prancis yang hidup pada abad ke-19. Ia lahir pada tanggal 2 Agustus 1834, di Colmar, Alsace, Prancis (sekarang bagian dari Prancis). Bartholdi dikenal karena karyanya yang paling terkenal, yaitu Patung Liberty yang terletak di Pelabuhan New York City.
            <p>
            Karya Bartholdi, termasuk Patung Liberty, sering memperlihatkan keahlian dan detail yang luar biasa dalam pahatan dan desain. Patung Liberty sendiri merupakan simbol yang sangat penting bagi Amerika Serikat, mewakili nilai-nilai kebebasan, demokrasi, dan persahabatan antara Prancis dan Amerika Serikat.
            </p>

          </div>
        </div>

        <div class="col-lg-3">
          <div class="gallery-info text-dark">
            <h3>Gallery information</h3>
            <ul>
              <li><strong>Kategori</strong> Patung</li>
              <li><strong>Tanggal Pembuatan</strong> 28 Oktober 1886</li>
              <li><a href="#" class="btn-visit align-self-start">New York, Amerika Serikat.</a></li>
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
