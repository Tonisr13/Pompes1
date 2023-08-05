<?php
    // Membuat koneksi ke database
    $connection = mysqli_connect("localhost", "fuua", "zzz", "ujian");

    // Mengecek apakah koneksi berhasil terhubung atau tidak
    if (!$connection) {
        die("Koneksi ke database gagal: " . mysqli_connect_error());
    }

    function query($query){
        global $connection;
        $result = mysqli_query($connection, $query);
        if (!$result) {
            die("Query gagal dijalankan: " . mysqli_error($connection));
        }
        $rows = [];
        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $rows[] = $row;
        }
        return $rows;
    }
?>