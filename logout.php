  <?php

    if(!isset($_SESSION['username'])) {
        // Jika user sudah login, maka hapus session dan redirect ke halaman login
        session_start();
        session_destroy(); // Hapus semua session
        header('location:login.php');
        echo "<script>alert('Selamat anda telah logout')window.document.location.href='login.php'</script>"; // Redirect ke halaman login
    }
?>