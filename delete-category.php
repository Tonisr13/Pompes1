<?php
    include 'connection.php';

    $id = $_GET['id'];

    $query = "DELETE FROM categories WHERE id='$id' ";
    $hasil = mysqli_query($connection, $query);

    if(!$hasil){
        die ("gagal menghapus data: ".mysqli_errno($connection). " - " . mysqli_error($connection));
    } else {
        echo "<script>window.location='categories.php'</script>";
    }