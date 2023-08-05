<?php
    include 'connection.php';
    include 'login_session.php';

  $username = $_SESSION["username"];
  $kelamin = $row['kelamin'];

	$query = "SELECT * FROM pengguna WHERE username = '$username'";
  $result = mysqli_query($connection, $query);
  $dt = mysqli_fetch_assoc($result);

    //upload gambar
    if(isset($_POST['submit'])){
    
    $photo = $_FILES['photo']['name'];
    $ukuranFoto = $_FILES['photo']['size'];
    $erorFoto = $_FILES['photo']['error'];
    $tmpName = $_FILES['photo']['tmp_name'];

    //cek apakah yang dimasukkan foto
    $ekstensiFotoValid = ['jpg','jpeg','png'];
    $ekstensiFoto = explode('.',$photo);

    if($ukuranFoto > 500000){
        echo "<script>
            alert('Ukuran gambar terlalu besar')
            document.location.href='gallery.php'
            </script>";
        return false;
    }
    //lolos pengecekan
    move_uploaded_file($tmpName,"gallery/".$photo);

    mysqli_query($connection, "INSERT INTO gallery (photo) VALUES('$photo')");
    
    if(mysqli_affected_rows($connection) > 0 ){
        echo "<script>
            alert('Berhasil Di tambahkan')
           document.location.href='media.php'
        </script>";
        }else{
           echo "<script>
                alert('Gagal Ditambahkan')
                </script>";
        }
    }

    $data = query("SELECT * FROM gallery order by id desc");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Admin</title>
    <!-- Favicons -->

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">
        

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body class="d-flex justify-content-start align-items-center">
<header id="header" class="header fixed-top d-flex align-items-center">

<div class="d-flex align-items-center justify-content-between">
    <a href="index.php" class="logo d-flex align-items-center">
    <img src="assets/lggede.png" alt="" class="logss">
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
</nav><!-- End Icons Navigation -->

</header><!-- End Header -->
<aside id="sidebar" class="sidebar">

<ul class="sidebar-nav" id="sidebar-nav">

    <li class="nav-item">
        <a class="nav-link collapsed" href="nganu.php">
            <i class="bi bi-grid"></i>
            <span>Dashboard</span>
        </a>
    </li><!-- End Dashboard Nav -->


    <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-journal-text"></i><span>Post</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
            <li>
                <a href="post-list.php">
                    <i class="bi bi-circle"></i><span>All Post</span>
                </a>
            </li>
            <li>
                <a href="create_post.php">
                    <i class="bi bi-circle"></i><span>Create Post</span>
                </a>
            </li>
            <li>
                <a href="categories.php">
                    <i class="bi bi-circle"></i><span>Category</span>
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
                        <a href="edit-home.php">
                            <i class="bi bi-circle"></i><span>Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="tables-data.html">
                            <i class="bi bi-circle"></i><span>Profile</span>
                        </a>
                    </li>
                    <li>
                        <a href="tables-data.html">
                            <i class="bi bi-circle"></i><span>Blog</span>
                        </a>
                    </li>
                    <li>
                        <a href="tables-data.html">
                            <i class="bi bi-circle"></i><span>Contact</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Tables Nav -->

    <li class="nav-item">
        <a class="sidebar-nav nav-link" href="media.php">
            <i class="bi bi-columns"></i><span>Gallery</span> </a>
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
        <a class="nav-link collapsed" href="settings.php">
            <i class="bi bi-card-list"></i>
            <span>Settings</span>
        </a>
    </li><!-- End Register Page Nav -->

</ul>

</aside><!-- End Sidebar-->
    <div class="content-wrap" style="margin-top: 6em; margin-left: 23%;">
<button class="btn btn-primary" style="margin-bottom: 1em; width: 25%;" type="button" data-toggle="modal" data-target="#tambah">Tambah Gambar</button>
        <div class="main">
            <div class="container-fluid bg-t">
                <section id="main-content">
                    <div class="row">
                        <div class="modal fade" id="tambah" role="dialog">
                            <div class="modal-dialog">
                                <div class="modal-content border border-3">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Tambah Gambar</h4>  
                                        <button class="close" type="button" data-dismiss="modal">&times;</button>                                      
                                    </div>
                                    <div class="modal-body">
                                        <div class="col-lg-12 border border-3">
                                        <form action="" method="post" enctype="multipart/form-data">
                                            <label for="" class="form-label d-block">Masukkan Image</label>
                                            <input type="file" name="photo">
                                            <div class="modal-footer">
                                                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12" style="margin-right: 1em; display: grid;
                        grid-template-columns: repeat(3, 1fr);
                        grid-auto-rows: minmax(200px, auto);
                        grid-gap: 20px;">
                            <?php foreach($data as $row ) : ?>
                                <img src="gallery/<?php echo $row['photo']?>" alt="eror" style="width:265px">
                            <?php endforeach ; ?>
                        </div>
                    </div> 
                </section>
            </div>
        </div>
    </div>
                
    <!-- menghubungkan ke script Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
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
