    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php
        $nama=$_GET["nama"];
        $email=$_GET["email"];
        $kelamin=$_GET["kelamin"];
        $tanggal_lahir = $_GET["tanggal_lahir"];

        echo "<p>Nama: ".$nama . "</p>";
        echo "<p>Email: ".$email . "</p>";
        if ($kelamin == 'L') {
            echo "<p>Jenis Kelamin: Laki-laki</p>";
        } else {
            echo "<p>Jenis Kelamin: Perempuan</p>";
        }
        echo "<p>Tanggal Lahir: " . $tanggal_lahir . "</p>";
        ?> 
    </body>
    </html>
    <?php