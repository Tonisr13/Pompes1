<?php
    session_start();
	include 'connection.php';
	
	//memanggil id dari index.php
	
	$id = $_GET['id'];
	
	//memanggil function yang sudah di buat
	$mhs = query("SELECT * FROM pengguna WHERE id = '$id'")[0];
	
	if(isset($_POST['submit'])){
		$username = strtolower(stripslashes($_POST["username"]));
		$email = strtolower(stripslashes($_POST["email"]));
        $phone = strtolower(stripslashes($_POST["phone"]));
		
		$sql = "UPDATE pengguna SET username = '$username', email = '$email' WHERE id = '$id'";
		
		$result = mysqli_query($connection , $sql);
		
		if(mysqli_affected_rows($connection) > 0){
				echo"<script>
				alert('Data Berhasil Di Edit')
                document.location.href='login.php'
				</script>";
		}
	}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
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
                <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
                <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo $username ?></span>
            </a>
            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                <li class="dropdown-header">
                    <h6><?php echo $username ?></h6>
                    <span><?php echo $kelamin?></span>
                </li>
                <li>
                    <a class="dropdown-item d-flex align-items-center" href="logout.php">
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
        <a class="nav-link collapsed" href="media.php">
            <i class="bi bi-columns"></i><span>Gallery</span> </a>
        <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        </ul>
    </li><!-- End Charts Nav -->

    <li class="nav-heading">Other</li>

    <li class="nav-item">
        <a class="sidebar-nav nav-link" href="users-profile.html">
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

</aside><!-- End Sidebar-->
    <div class="content-wrap" style="margin-top: 7em; margin-left: 19em;">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>Edit Your Profile</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /# row -->
                <section id="main-content">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="form-validation">
                                        <form class="form-valide" action="#" method="post" enctype="multipart/form-data">
                                            <div class="form-group row">
                                                <div class="col-lg-8">
                                                    <label for="val-username">Name <span class="text-danger">*</span></label>
                                                    <input type="hidden" class="form-control" id="val-username" name="id">
                                                    <input type="text" class="form-control" id="val-username" name="username" placeholder="Enter New Username" value="<?= $mhs['username']?>">
                                                </div>
                                                <div class="col-lg-8">
                                                    <label for="val-username">Email <span class="text-danger">*</span></label>
                                                    <input type="email" class="form-control"  name="email" placeholder="Enter New Email" value="<?= $mhs['email']?>">
                                                </div>
                                                <div class="col-lg-8">
                                                <label for="val-username">Address<span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control"  name="kelamin" placeholder="Enter Kelamin" value="<?= $mhs['kelamin']?>">
                                                </div>
                                                <div class="col-lg-5 d-flex">
                                                <button name="submit" type="submit" class="btn btn-primary w-50"><a class="text-light" href="users-profiles.php">Back</a></button>
                                                <button name="submit" type="submit" class="btn btn-danger w-50">Edit</button>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </section>
                
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
