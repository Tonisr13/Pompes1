<?php
    // Informasi database
    $host = "localhost";
    $username = "fuua";
    $password = "zzz";
    $database = "frontpage";

    // Membuat koneksi ke database
    $con = mysqli_connect($host, $username, $password, $database);

    
    // Cek apakah koneksi berhasil atau tidak
    if (!$con) {
        die("Koneksi gagal: " . mysqli_connect_error());
    }
?>

