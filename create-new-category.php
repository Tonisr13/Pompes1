<?php
include 'connection.php';

if (isset($_POST['add_category'])) { // cek apakah tombol submit ditekan
    $category = $_POST['category'];
    $parent = $_POST['parent'];
    $description = $_POST['description'];

    // query untuk menyimpan data kategori baru
    $query = "INSERT INTO categories (category, parent, description) 
              VALUES ('$category', '$parent', '$description')";
    $hasil = mysqli_query($connection, $query);
    if ($hasil) {
        // jika data berhasil disimpan, redirect ke halaman categories
        echo "<script>window.location='categories.php'</script>";
    } else {
        // jika terjadi error, tampilkan pesan error
        die("Error: " . mysqli_error($connection));
    }
}
?>
