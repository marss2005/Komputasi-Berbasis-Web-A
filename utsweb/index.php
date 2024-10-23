<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <link href="css/tiny-slider.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <title>Corliss</title>
</head>

<body>

<nav class="custom-navbar navbar navbar-expand-md navbar-dark bg-dark" aria-label="navigation bar">
  <div class="container">
    <a class="navbar-brand" href="home.php">Corliss<span>.</span></a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbars" aria-controls="navbars" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbars">
      <ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Beranda</a>
        </li>
        <li><a class="nav-link" href="about.php">Tentang Saya</a></li>
        <li><a class="nav-link" href="skills.php">Kemampuan</a></li>
        <li><a class="nav-link" href="activity.php">Kegiatan</a></li>
        <li><a class="nav-link" href="contact.php">Kontak</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Start Hero Section -->
<div class="hero">
    <div class="container">
      <div class="row justify-content-between">
        <div class="col-lg-5">
          <div class="intro-excerpt">
            <?php
            include 'connect.php';

            $data = 'SELECT judul, deskripsi FROM beranda';
            $hasil = $conn->query($data);

            if ($hasil->num_rows > 0) {
              while ($row = $hasil->fetch_assoc()) {
                echo '<h1>'.$row['judul'].'</h1>';
                echo '<p class="mb-4">'.$row['deskripsi'].'</p>';
              }
            } else {
              echo '<h1>Data tidak ditemukan</h1>';
              echo '<p class="mb-4">Silakan periksa kembali data Anda.</p>';
            }
            ?>
            <p><a href="about.php" class="btn btn-secondary me-2">Lebih banyak tentang saya</a><a href="contact.php" class="btn btn-white-outline">Kontak Saya</a></p>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="hero-img-wrap">
            <img src="images/cor_1.png" class="img-fluid" alt="Corliss">
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Hero Section -->

<footer class="footer-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <p class="mb-2">Copyright &copy;<script>document.write(new Date().getFullYear());</script>. Semua Hak Dilindungi. <br> Dibuat dengan cinta oleh Magaretha Corliss</p>
      </div>
    </div>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4
