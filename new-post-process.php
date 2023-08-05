<?php
include 'connection.php';

session_start();
if (isset($_POST["submit"])) {
    $title = $_POST['title'];
    $contents = $_POST['contents'];
    $categories = $_POST['categories'];
    $date = date('Y-m-d H:i:s');
    $img = addslashes(file_get_contents($_FILES['img']['tmp_name']));

    $query = "INSERT INTO articles (title, content, category, date, image) VALUES
                ('$title', '$contents', '$categories', '$date', '$img')";

$result = mysqli_query($connection, $query);
if (!$result) {
    die("Gagal menyimpan data: " . mysqli_error($connection));
} else {
    echo "<script>alert('Data Berhasil');window.location='post-list.php';</script>";
}
mysqli_close($connection);
}
?>
