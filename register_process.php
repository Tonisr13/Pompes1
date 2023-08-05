<?php
    include 'connection.php';
    
    
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $kelamin = $_POST['kelamin'];
    if ($kelamin == "Laki-Laki") {
        $foto_profil = "laki.png";
    } else {
        $foto_profil = "perempuan.png";
    }
    
    $query = "INSERT INTO pengguna (username, email, password, kelamin) VALUES ('$username', '$email', '$password', '$kelamin')";
    
    $result = mysqli_query($connection, $query);
    
    // Validasi password
    if (!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/', $password)) {
        echo '<script>alert("Password tidak memenuhi persyaratan Masukkan minimal 1 Huruf kecil, Huruf besar, dan 1 angka"); window.location.href = "register.php";</script>';
        exit();
    }

    if($result) {
        header('location:login.php');
    }
?>