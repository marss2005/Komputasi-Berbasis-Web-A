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
      <li><a class="nav-link" href="activity.php">Kegiatan</a></li>
      <li  class="active"><a class="nav-link" href="contact.php">Kontak</a></li>
    </ul>
  </div>
</div>
  
</nav>

		<!-- Start Contact Form -->
		<div class="untree_co-section">
      <div class="container">

        <div class="block">
          <div class="row justify-content-center">


            <div class="col-md-8 col-lg-8 pb-4">


              <div class="row mb-5">
        <section id="contact">
            <div class="container contact-container">
                <h2>Kontak</h2>
                <form action="contact.php" method="post">
                    <div class="form-group">
                        <label class="text-black" for="first-name">Nama Depan</label>
                        <input type="text" class="form-control" id="first-name" name="first-name" required>
                    </div>
                    <div class="form-group">
                        <label class="text-black" for="last-name">Nama Belakang</label>
                        <input type="text" class="form-control" id="last-name" name="last-name" required>
                    </div>
                    <div class="form-group">
                        <label class="text-black" for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label class="text-black" for="message">Pesan</label>
                        <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary-hover-outline">Kirim</button>
                </form>
            </div>
        </section>

            </div>

          </div>

        </div>

      </div>


    </div>
  </div>

  <!-- End Contact Form -->
  <footer class="footer-section">
    <div class="container">
      <div class="row">
      <div class="col-lg-12 text-center">
        <p class="mb-2">Copyright &copy;<script>document.write(new Date().getFullYear());</script>. Semua Hak Dilindungi. <br> Dibuat dengan cinta oleh Magaretha Corliss</p>
      </div>
      </div>
    </div>
    </footer>
    <?php
    include 'connect.php';
    $fname =  $_POST['first-name'];
        $lname = $_POST['last-name'];
        $email = $_POST['email'];
        $msg = $_POST['message'];


        $data = "INSERT INTO contact(first_name,last_name,email,message) Values('$fname', '$lname', '$email', '$msg')";

        if ($conn->query($data) === TRUE) {
            echo "New record created successfully";
          } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
          }
          $conn->close();
    ?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>

  <!-- Start Footer Section -->
  
    <!-- End Footer Section -->



