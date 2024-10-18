<?php
    $con = mysqli_connect("localhost","root","","register") or die ('mysqli_error');

    if(mysqli_connect_errno()) {
        echo "Failed to connect to MYSQL:" .mysqli_connect_error();
        exit();
    }


// Membuat koneksi
$connection = new mysqli("localhost", "root","", "register");

// Cek koneksi
if ($connection->connect_error) {
    die("Koneksi gagal: " . $connection->connect_error);
}

?>

