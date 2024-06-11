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
      <img src="./assets/img/Picsart_24-06-08_01-03-05-713.jpg" alt="Placeholder image" width="400" height="400">
      </div>

      <div class="row justify-content-between gy-4 mt-3 mb-4">

        <div class="col-lg-8">
          <div class="gallery-description text-dark">
            <h2>Patung Gajah Mada</h2>
            <p>
            Patung Gajah Mada adalah sebuah monumen yang menggambarkan sosok Gajah Mada, seorang panglima perang dan tokoh militer legendaris dari Kerajaan Majapahit di Nusantara. Dikenal luas karena Sumpah Palapa-nya, di mana ia berjanji untuk tidak menikmati kenikmatan duniawi sebelum berhasil menyatukan Nusantara di bawah kekuasaan Majapahit, Gajah Mada menjadi simbol persatuan dan kekuatan nasional. Patung ini sering digambarkan dalam pose heroik, biasanya menunggang kuda, lengkap dengan pakaian zirah dan senjata, mencerminkan keberanian dan kepemimpinannya yang luar biasa
            </p>
            <p>
            Sejarah Gajah Mada sendiri sangat erat kaitannya dengan kejayaan Kerajaan Majapahit pada abad ke-14. Sebagai Mahapatih, ia memimpin berbagai ekspedisi militer yang sukses memperluas wilayah Majapahit hingga mencakup hampir seluruh kepulauan Nusantara, termasuk bagian dari Malaysia, Filipina, dan Timor Leste.
            </p>

            <div class="testimonial-item">
              <p>
                <i class="bi bi-quote quote-icon-left"></i>
                Patung ini tidak hanya menjadi penghormatan atas kontribusi besar Gajah Mada terhadap sejarah Indonesia, tetapi juga menjadi simbol semangat persatuan dan kesatuan bangsa. Banyak patung Gajah Mada yang didirikan di berbagai tempat di Indonesia, baik di museum, alun-alun kota, maupun di lokasi bersejarah lainnya, sebagai pengingat akan warisan budaya dan sejarah yang kaya dari Nusantara.
                <i class="bi bi-quote quote-icon-right"></i>
              </p>
              <div>
                <h3>I Nyoman Nuarta</h3>
                <img src="./assets/img/images (1).jpeg" class="testimonial-img mb-3" alt="" width="200" height="200">
                <h4>Designer</h4>
              </div>
            </div>

            <p>
            I Nyoman Nuarta menciptakan patung ini sebagai bagian dari upaya untuk memperingati dan menghormati jasa Gajah Mada dalam sejarah Indonesia.

            <p>
            Dengan detail yang sangat halus dan presisi yang tinggi, patung ini menggambarkan Gajah Mada dalam pose heroik, mencerminkan keberanian dan semangat kepemimpinannya yang legendaris. Patung ini tidak hanya menjadi simbol kebanggaan nasional, tetapi juga menjadi inspirasi bagi generasi muda untuk menghargai dan memahami pentingnya persatuan dan kesatuan bangsa.
            </p>

          </div>
        </div>

        <div class="col-lg-3">
          <div class="gallery-info text-dark">
            <h3>Gallery information</h3>
            <ul>
              <li><strong>Kategori</strong> Patung</li>
              <li><strong>Tanggal Pembuatan</strong> 19 Desember 2013</li>
              <li><a href="#" class="btn-visit align-self-start">Bundaran HI, Jakarta</a></li>
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
