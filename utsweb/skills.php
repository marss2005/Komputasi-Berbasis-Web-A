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
  <a class="navbar-brand" href="index.php">Corliss<span>.</span></a>

  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbars" aria-controls="navbars" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbars">
    <ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
      <li class="nav-item">
        <a class="nav-link" href="home.php">Beranda</a>
      </li>
      <li><a class="nav-link" href="about.php">Tentang Saya</a></li>
      <li class="active"><a class="nav-link" href="skills.php">Kemampuan</a></li>
      <li><a class="nav-link" href="activity.php">Kegiatan</a></li>
      <li><a class="nav-link" href="contact.php">Kontak</a></li>
    </ul>
  </div>
</div>
  
</nav>

  <!-- Start Program Section -->
  <div class="product-section">
    <div class="container">
      <div class="row">

          <div class="row my-5">
              <?php
            include 'connect.php';
            ?>
            <div class="col-6 col-md-6">
              <div class="feature">
                <div class="icon">
                  <img src="images/dance.jpg" alt="Adaptasi" class="img-fluid">
                </div>
                <?php
                    $data1 = "SELECT nama_kemampuan, deskripsi FROM kemampuan WHERE nama_kemampuan = 'Adaptasi'";
                    $hasil1 = $conn->query($data1);
        
                    if ($hasil1->num_rows > 0) {
                      while ($row = $hasil1->fetch_assoc()) {
                        echo '<h1>'.$row['nama_kemampuan'].'</h1>';
                        echo '<p class="mb-4">'.$row['deskripsi'].'</p>';
                      }
                    } else {
                      echo '<h1>Data tidak ditemukan</h1>';
                      echo '<p class="mb-4">Silakan periksa kembali data Anda.</p>';
                    }
                    ?>
              </div>
            </div>

            <div class="col-6 col-md-6">
              <div class="feature">
                <div class="icon">
                  <img src="images/hima1.JPG" alt="Komunikasi" class="img-fluid">
                </div>
                <?php
                    $data2 = "SELECT nama_kemampuan, deskripsi FROM kemampuan WHERE nama_kemampuan = 'Komunikasi'";
                    $hasil2 = $conn->query($data2);
        
                    if ($hasil2->num_rows > 0) {
                      while ($row = $hasil2->fetch_assoc()) {
                        echo '<h1>'.$row['nama_kemampuan'].'</h1>';
                        echo '<p class="mb-4">'.$row['deskripsi'].'</p>';
                      }
                    } else {
                      echo '<h1>Data tidak ditemukan</h1>';
                      echo '<p class="mb-4">Silakan periksa kembali data Anda.</p>';
                    }
                    ?>
              </div>
            </div>

            <div class="col-6 col-md-6">
              <div class="feature">
                <div class="icon">
                  <img src="images/hima2.JPG" alt="Problem-Solving" class="img-fluid">
                </div>
                <?php
                    $data3 = "SELECT nama_kemampuan, deskripsi FROM kemampuan WHERE nama_kemampuan = 'Problem-Solving'";
                    $hasil3 = $conn->query($data3);
        
                    if ($hasil3->num_rows > 0) {
                      while ($row = $hasil3->fetch_assoc()) {
                        echo '<h1>'.$row['nama_kemampuan'].'</h1>';
                        echo '<p class="mb-4">'.$row['deskripsi'].'</p>';
                      }
                    } else {
                      echo '<h1>Data tidak ditemukan</h1>';
                      echo '<p class="mb-4">Silakan periksa kembali data Anda.</p>';
                    }
                    ?>
              </div>
            </div>

            <div class="col-6 col-md-6">
              <div class="feature">
                <div class="icon">
                  <img src="images/talkshow.jpg" alt="Berpikir Kritis " class="img-fluid">
                </div>
                <?php
                    $data4 = "SELECT nama_kemampuan, deskripsi FROM kemampuan WHERE nama_kemampuan = 'Berpikir Kritis'";
                    $hasil4 = $conn->query($data4);
        
                    if ($hasil4->num_rows > 0) {
                      while ($row = $hasil4->fetch_assoc()) {
                        echo '<h1>'.$row['nama_kemampuan'].'</h1>';
                        echo '<p class="mb-4">'.$row['deskripsi'].'</p>';
                      }
                    } else {
                      echo '<h1>Data tidak ditemukan</h1>';
                      echo '<p class="mb-4">Silakan periksa kembali data Anda.</p>';
                    }
                    ?>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
  <!-- End Why Choose Us Section -->
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



