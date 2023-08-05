<?php
    session_start();    
    include 'connection.php';
    
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Load Bootstrap CSS -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
</head>

<body style="background-color: #FFE6CD;" class="d-flex justify-content-center align-items-center mt-5">
    <div class="caa">
      <div class="card-header text-center">
        Login
      </div>
      <form action="login_process.php" method="POST" class="card-body">
        <label class="card-title text-dark">Username : </label>
        <p class="card-text">
          <input type="text" class="form-control" name="username" id="username">
        </p>
        <label class="card-title text-dark">Password : </label>
        <p class="card-text">
          <input type="password" class="form-control" name="password" id="password">
        </p>
        <input type="hidden" value="user" name="role">
        <button type="submit" class="btn btn-block w-100 text-light" style="background-color: #5DBFB0;">Login</button>
      </form>
      <!--<p style="margin-top: 10px; text-align: center;">Belum punya akun? <a href="register.php">Daftar</a></p>-->
    </div>
    <!-- Load Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>

</html>