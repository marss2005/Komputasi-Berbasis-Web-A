<?php

$servername = "localhost"; 
$username = "jjsidydz_Magaretha"; 
$password = "h4rdworker15";
$dbname = "jjsidydz_profildb"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Koneksi tidak berhasil: " .$conn->connect_error);
}
else {
    echo "";
}
?>