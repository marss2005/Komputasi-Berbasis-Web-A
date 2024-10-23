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

<nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="navigation bar">

<div class="container">
  <a class="navbar-brand" href="home.php">Corliss<span>.</span></a>

  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbars" aria-controls="navbars" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbars">
    <ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Beranda</a>
      </li>
      <li><a class="nav-link" href="about.php">Tentang Saya</a></li>
      <li><a class="nav-link" href="skills.php">Kemampuan</a></li>
      <li class="active"><a class="nav-link" href="activity.php">Kegiatan</a></li>
      <li><a class="nav-link" href="contact.php">Kontak</a></li>
    </ul>
  </div>
</div>
  
</nav>

  <!-- Start Program Section -->
  <div class="product-section">
    <div class="container">
      <div class="row">
            <?php
            include 'connect.php';
            ?>
        <!-- Start Column 1 -->
        <div class="col-12 col-md-4 col-lg-4 mb-5 mb-md-0">
          <a class="product-item" href="#">
            <img src="images/dance.jpg" class="img-fluid product-thumbnail" alt="Ibadah Remaja">
            
            <?php
                $data1 = "SELECT nama_kegiatan, deskripsi FROM kegiatan WHERE nama_kegiatan = 'Organisasi Gereja'";
                    $hasil1 = $conn->query($data1);
                
                if ($hasil1->num_rows > 0) {
                  while ($row = $hasil1->fetch_assoc()) {
                    echo '<h3 class="product-title">'.$row['nama_kegiatan'].'</h3>';
                    echo '<p>'.$row['deskripsi'].'</p>';
                  }
                } else {
                  echo '<h3 class="product-title">Data tidak ditemukan</h3>';
                  echo '<p>Silakan periksa kembali data Anda.</p>';
                }
                ?>

          </a>
        </div> 
        <!-- End Column 1 -->

        <!-- Start Column 2 -->
        <div class="col-12 col-md-4 col-lg-4 mb-5 mb-md-0">
          <a class="product-item" href="#">
            <img src="images/hima.png" class="img-fluid product-thumbnail" alt="Acara HIMA">
            <?php
                $data2 = "SELECT nama_kegiatan, deskripsi FROM kegiatan WHERE nama_kegiatan = 'Organisasi HIMA'";
                    $hasil2 = $conn->query($data2);
                
                if ($hasil2->num_rows > 0) {
                  while ($row = $hasil2->fetch_assoc()) {
                    echo '<h3 class="product-title">'.$row['nama_kegiatan'].'</h3>';
                    echo '<p>'.$row['deskripsi'].'</p>';
                  }
                } else {
                  echo '<h3 class="product-title">Data tidak ditemukan</h3>';
                  echo '<p>Silakan periksa kembali data Anda.</p>';
                }
                ?>
          </a>
        </div> 
        <!-- End Column 2 -->

        <!-- Start Column 3 -->
        <div class="col-12 col-md-4 col-lg-4 mb-5 mb-md-0">
          <a class="product-item" href="#">
            <img src="images/kspm.png" class="img-fluid product-thumbnail" alt="Lomba KSPM">
            <?php
                $data3 = "SELECT nama_kegiatan, deskripsi FROM kegiatan WHERE nama_kegiatan = 'Organisasi KSPM'";
                    $hasil3 = $conn->query($data3);
                
                if ($hasil3->num_rows > 0) {
                  while ($row = $hasil3->fetch_assoc()) {
                    echo '<h3 class="product-title">'.$row['nama_kegiatan'].'</h3>';
                    echo '<p>'.$row['deskripsi'].'</p>';
                  }
                } else {
                  echo '<h3 class="product-title">Data tidak ditemukan</h3>';
                  echo '<p>Silakan periksa kembali data Anda.</p>';
                }
                ?>
          </a>
        </div>
        <!-- End Column 3 -->

      </div>
    </div>
  </div>
  <!-- End Program Section -->
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>
</body>
</html>




