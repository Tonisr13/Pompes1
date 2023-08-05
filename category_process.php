<?php
include 'connection.php';
// Menambah kategori baru
if (isset($_POST['add_category'])) {
    $category_name = $_POST['category_name'];
    $category_slug = $_POST['category_slug'];
    $parent_category = $_POST['parent_category'];

    $sql = "INSERT INTO categories (name, slug, parent_id) VALUES ('$category_name', '$category_slug', '$parent_category')";

    if (mysqli_query($conn, $sql)) {
        echo "Kategori berhasil ditambahkan";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

// Menampilkan daftar kategori
$sql = "SELECT * FROM categories";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo $row['name'] . " - " . $row['slug'] . "<br>";
    }
} else {
    echo "Tidak ada kategori";
}

?>
