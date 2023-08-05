<?php
include 'connection.php';

$username = $_POST['username'];
$password = $_POST['password'];

// Query untuk mengambil data username dan jabatan dari database
$query = "SELECT username, kelamin FROM pengguna";
$result = mysqli_query($connection, $query);

// Memeriksa apakah query menghasilkan data
if(mysqli_num_rows($result) == 1) {
    // Mengambil data dari hasil query dan menyimpannya dalam variabel
    $row = mysqli_fetch_assoc($result);
    $username = $row['username'];
    $kelamin = $row['kelamin'];
} else {
    // Jika query tidak menghasilkan data, maka username diisi dengan string kosong
    $username = "";
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Dashboard Admin</title>
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <script src="https://cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script>
</head>

<body class="d-flex justify-content-start align-items-center">

<header id="header" class="header fixed-top d-flex align-items-center">
<div class="d-flex align-items-center justify-content-between">
            <a href="index.html" class="logo d-flex align-items-center">
                <img src="assets/img/logo.png" alt="">
                <span class="d-none d-lg-block">Al-Wibu</span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div><!-- End Logo -->

        <div class="search-bar">
            <form class="search-form d-flex align-items-center" method="POST" action="#">
                <input type="text" name="query" placeholder="Search" title="Enter search keyword">
                <button type="submit" title="Search"><i class="bi bi-search"></i></button>
            </form>
        </div><!-- End Search Bar -->

        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">

                <li class="nav-item d-block d-lg-none">
                    <a class="nav-link nav-icon search-bar-toggle " href="#">
                        <i class="bi bi-search"></i>
                    </a>
                </li><!-- End Search Icon-->


                <li class="nav-item dropdown pe-3">
    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
    <?php 
        if ($dt['kelamin'] == "Laki-Laki") {
            echo '<img src="assets/img/profile-laki.jpeg" alt="Profile" class="rounded-circle">';
        } else {
            echo '<img src="assets/img/profile-perempuan.jpeg" alt="Profile" class="rounded-circle">';
        }
        ?>
        <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo $username; ?></span>
    </a>
    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
        <li class="dropdown-header">
            <h6><?php echo $username; ?></h6>
            <span><?= $dt['kelamin']?></span>
        </li>
        <li>
            <a class="dropdown-item d-flex align-items-center" href="logout.php" onclick="return confirm('Apakah anda yakin ingin Logout')">
                <i class="bi bi-box-arrow-right"></i>
                <span>Log Out</span>
            </a>
        </li>
    </ul><!-- End Profile Dropdown Items -->
</li><!-- End Profile Nav -->

            </ul>
        </nav>
</header>

<div class="container-fluid">
    <div class="row">
        <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block sidebar collapse">
        <ul class="sidebar-nav" id="sidebar-nav">

<li class="nav-item">
    <a class="non" href="nganu.php">
        <i class="bi bi-grid"></i>
        <span>Dashboard</span>
    </a>
</li><!-- End Dashboard Nav -->


<li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-journal-text"></i><span>Post</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="forms-nav" class="nav-content " data-bs-parent="#sidebar-nav">
        <li>
            <a href="post.php">
                <i class="bi bi-circle"></i><span>All Post</span>
            </a>
        </li>
        <li>
            <a href="create_post.php">
                <i class="bi bi-circle"></i><span class="create">Create Post</span>
            </a>
        </li>
        <li>
            <a href="edit_post.php">
                <i class="bi bi-circle"></i><span>Edit Post</span>
            </a>
        </li>
    </ul>
</li><!-- End Forms Nav -->

<li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-file-earmark-minus"></i><span>Pages</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
            <a href="tables-general.html">
                <i class="bi bi-circle"></i><span>General Tables</span>
            </a>
        </li>
        <li>
            <a href="tables-data.html">
                <i class="bi bi-circle"></i><span>Data Tables</span>
            </a>
        </li>
    </ul>
</li><!-- End Tables Nav -->

<li class="nav-item">
    <a class="nav-link collapsed" href="#">
        <i class="bi bi-columns"></i><span>Media</span> </a>
    <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
    </ul>
</li><!-- End Charts Nav -->

<li class="nav-heading">Other</li>

<li class="nav-item">
    <a class="nav-link collapsed" href="users-profile.php">
        <i class="bi bi-person"></i>
        <span>Profile</span>
    </a>
</li><!-- End Profile Page Nav -->

<li class="nav-item">
    <a class="nav-link collapsed" href="pages-register.html">
        <i class="bi bi-card-list"></i>
        <span>Settings</span>
    </a>
</li><!-- End Register Page Nav -->

</ul>
        </nav>
        <main class="col-md-9 ms-sm-auto col-lg-8 px-md-4 main-create">
    <div class="card-body">
      <h2 class="card-title">Tambah Kategori</h2>
      <button class="btn btn-primary" name="add" type="submit">Tambah Kategori</button>
      <hr>
      <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <div class="form-group">
        <label for="category_name">Nama Kategori:</label>
        <input type="text" class="form-control" name="category" id="category" required>
    </div>
    <div class="form-group">
        <label for="parent">Kategori Induk:</label>
        <select class="form-control" name="parent" id="parent">
            <option value="">-- Tidak Ada Kategori Induk --</option>
            <?php
            $sql = "SELECT * FROM categories";
            $result = mysqli_query($connection, $sql);
            
            if (mysqli_num_rows($result) > 0) {
            }
            
            while ($row = mysqli_fetch_assoc($result)) {
            ?>
                
                <option value=""><?php echo $row['category']?></option>
            <?php
            }
            ?>
        </select>
    </div>
</form>
</div>
</main>
    </div>
</div>










































































    
    <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/chart.js/chart.umd.js"></script>
    <script src="assets/vendor/echarts/echarts.min.js"></script>
    <script src="assets/vendor/quill/quill.min.js"></script>
    <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    </body>
</html>