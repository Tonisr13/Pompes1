<?php
    // Informasi database
    $host = "localhost";
    $username = "fuua";
    $password = "zzz";
    $database = "ujian";

    // Membuat koneksi ke database
    $connection = mysqli_connect($host, $username, $password, $database);

    
    // Cek apakah koneksi berhasil atau tidak
    if (!$connection) {
        die("Koneksi gagal: " . mysqli_connect_error());
    }
?>
