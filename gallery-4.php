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
      <img src="./assets/img/Picsart_24-06-08_01-06-48-423.jpg" alt="Placeholder image" width="400" height="400">
      </div>

      <div class="row justify-content-between gy-4 mt-3 mb-4">

        <div class="col-lg-8">
          <div class="gallery-description text-dark">
            <h2>Patung Yunani</h2>
            <p>
            Patung Yunani memainkan peran penting dalam sejarah seni dunia, mencerminkan keterampilan artistik dan memberikan wawasan tentang budaya, agama, dan filosofi Yunani kuno. Bermula dari periode Geometrik (sekitar 900-700 SM) dengan bentuk geometris sederhana, seni patung berkembang menjadi lebih realistis pada periode Arkais (sekitar 700-480 SM) dengan patung Kouros dan Kore yang meski masih kaku, mulai menunjukkan anatomi manusia. Pada periode Klasik (sekitar 480-323 SM), patung Yunani mencapai puncak idealisme dan realisme, dengan karya terkenal seperti Diskobolos oleh Myron dan Doryphoros oleh Polykleitos yang menampilkan proporsi tubuh sempurna dan pose alami. Seni patung semakin dramatis dan ekspresif pada periode Hellenistik (sekitar 323-31 SM), seperti terlihat pada Laocoön dan Putra-Putranya serta Nike dari Samothrace. 
            </p>
            <p>
            Patung-patung ini dibuat dari marmer, perunggu, gading, dan emas, menggunakan teknik pahat langsung dan penuangan perunggu dengan metode lost-wax casting. Pengaruh seni patung Yunani meluas ke seni Romawi dan Renaisans Eropa, dengan estetika dan teknik yang tetap dihargai dan dipelajari hingga hari ini.
            </p>

            <div class="testimonial-item">
              <p>
                <i class="bi bi-quote quote-icon-left"></i>
                Patung Yunani memiliki sejumlah fakta unik yang menarik. Patung-patung dari periode Arkais sering menampilkan "senyum arkais," senyum khas yang tidak mencerminkan emosi tetapi mungkin dimaksudkan untuk memberi kesan kehidupan pada patung tersebut. Polykleitos, seorang pemahat terkenal dari periode Klasik, menulis sebuah risalah yang disebut "Kanon," yang menjelaskan proporsi ideal tubuh manusia, dan patungnya, Doryphoros (Pembawa Tombak), adalah perwujudan dari prinsip-prinsip ini. Selain itu, banyak patung perunggu Yunani dibuat dengan teknik penuangan "lost-wax" (cire perdue), yang memungkinkan detail halus dan keseimbangan sempurna dalam karya mereka. Patung-patung ini tidak hanya menggambarkan manusia tetapi juga dewa-dewa dan pahlawan mitologi, mencerminkan nilai-nilai budaya dan spiritual Yunani kuno.
                <i class="bi bi-quote quote-icon-right"></i>
              </p>
              <div>
                <h3>Phidias</h3>
                <img src="./assets/img/3121856.jpg " class="testimonial-img mb-3" alt="" width="200" height="200">
                <h4>Designer</h4>
              </div>
            </div>

            <p>
            Phidias adalah salah satu seniman paling terkenal dan dihormati dari periode Klasik dalam sejarah Yunani kuno, yang hidup sekitar 480-430 SM. Ia dikenal terutama karena karya-karya patung besar yang menonjolkan keagungan dan keindahan dewa-dewa Yunani. Berikut adalah beberapa aspek penting tentang Phidias dan karyanya:

            <p>
            Phidias dianggap sebagai pemahat terbesar dari zaman Klasik Yunani, dan karyanya terus dihormati sebagai puncak dari seni patung Yunani kuno. Karya-karya monumental yang ia ciptakan tidak hanya menunjukkan keahlian teknis yang luar biasa tetapi juga mampu menyampaikan kekuatan spiritual dan simbolis yang mendalam.
            </p>

          </div>
        </div>

        <div class="col-lg-3">
          <div class="gallery-info text-dark">
            <h3>Gallery information</h3>
            <ul>
              <li><strong>Kategori</strong> Patung</li>
              <li><strong>Tanggal Pembuatan</strong> abad ke-8 SM hingga abad ke-1 SM</li>
              <li><a href="#" class="btn-visit align-self-start">Yunani </a></li>
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
