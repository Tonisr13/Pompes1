<?php
    session_start();
    include 'connection.php';
    
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = "SELECT * FROM pengguna WHERE username='$username' AND password='$password'";
    $result = mysqli_query($connection, $query);
    
    if(mysqli_num_rows($result) > 0){
        // Jika data pengguna ditemukan, maka izinkan pengguna untuk masuk ke halaman utama
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        header("Location: index.php");
    } else{
        // Jika data pengguna tidak ditemukan, maka tampilkan pesan kesalahan
        echo '<script>alert("Password atau Username Salah"); window.location.href="login.php";</script>;';
    }
?>