<?php
echo "selamat datang di php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>kontak.html</title>
</head>
<body>
    <h1>Kontak Kami</h1>
    <p>masukkan!</p>
    <br>

    <section>
        <form action="konfirmasi.php" method="GET">
            <div class="form-group">
                <label for="name"><b>Name:</b></label>
                <input type="text" class="form-control" name="nama" id="nama">
              </div>
              <div class="form-group">
                <label for="email"><b>Email:</b></label>
                <input type="text" class="form-control" name="email" id="email">
              </div>
            <p><b>kelamin:</b></p>
            <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="Laki-laki" name="kelamin">L
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="Perempuan" name="kelamin">P
                </label>
            </div>
            <p><b>Tanggal Lahir:</b></p>
            <div>
                <input type="date" class="form-control" name="tanggal_lahir" required>
                </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-warning">Reset</button>
          </form>
    </section>
    
</body>
</html>