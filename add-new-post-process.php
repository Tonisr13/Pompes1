<?php
// Koneksi ke database
include "connection.php";

// Memeriksa apakah form dikirim
if (isset($_POST["submit"])) {
    // Mengambil data dari form
    $title = $_POST["title"];
    $content = $_POST["contents"];
    $category = $_POST["categories"];

    // Mengambil file gambar
    $img_name = $_FILES["img"]["name"];
    $img_tmp_name = $_FILES["img"]["tmp_name"];

    // Mengambil waktu saat ini
    date_default_timezone_set('Asia/Jakarta');
    $date = date('Y-m-d H:i:s');

    // Memeriksa apakah gambar diunggah
    if ($img_name != "") {
        // Memindahkan gambar ke folder uploads
        $img_path = "uploads/" . $img_name;
        move_uploaded_file($img_tmp_name, $img_path);
    } else {
        $img_path = "";
    }

    // Menambahkan data ke database
    $query = "INSERT INTO articles (title, content, category, image, date)
              VALUES ('$title', '$content', '$category', '$img_path', '$date')";

    $result = mysqli_query($connection, $query);
    mysqli_close($connection);
    

    if (!$result) {
        die("Query Error" . mysqli_errno($connection) . " - " . mysqli_error($connection));
    }

    // Mengalihkan ke halaman utama
    header("location: index.php");
}
?>
