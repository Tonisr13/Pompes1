<?php
	include 'connection.php';
    include 'login_session.php';

    $username = $_SESSION["username"];
    $kelamin = $row['kelamin'];
  
      $query = "SELECT * FROM pengguna WHERE username = '$username'";
    $result = mysqli_query($connection, $query);
    $dt = mysqli_fetch_assoc($result);
	//memanggil id dari index.php
	
	$id = $_GET['id'];
	
	//memanggil function yang sudah di buat
	$mhs = query("SELECT * FROM articles WHERE id = $id")[0];
	
	if(isset($_POST['submit'])){
		$title = strtolower(stripslashes($_POST["title"]));
		$content = strtolower(stripslashes($_POST["content"]));
		$date = strtolower(stripslashes($_POST["date"]));
        $category = strtolower(stripslashes($_POST["category"]));
        $today = date("Y-m-d H:i:s");

		$sql = "UPDATE articles SET title = '$title', content = '$content' , date = '$today', category = '$category' WHERE id = '$id'";
		
		$result = mysqli_query($connection , $sql);
		
		if(mysqli_affected_rows($connection) > 0){
				echo"<script>
				alert('Data Berhasil Di Edit');
				</script>";
				header('location:post-list.php');
				exit;
					
		}else{
			echo "<script>
						alert('Data Gagal di ubah')
						document.location.href = 'user.php'
					</script>";
		}
	}



?>


<!-- file: index.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Admin</title>
  

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
    <a href="index.html" class="logo d-flex align-items-center">
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
        if ($kelamin == "Perempuan") {
          echo '<img src="assets/img/profile-perempuan.jpeg" alt="Profile" class="rounded-circle">';
        } else {
          echo '<img src="assets/img/profile-laki.jpeg" alt="Profile" class="rounded-circle">';
        }
        ?>
        <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo $username ?></span>
    </a>
    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
        <li class="dropdown-header">
            <h6><?php echo $username ?></h6>
            <span><?= $dt['kelamin']?></span>
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
        <ul id="forms-nav" class="nav-content " data-bs-parent="#sidebar-nav">
            <li>
                <a href="post-list.php">
                    <i class="bi bi-circle"></i><span class="post-list">All Post</span>
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
        <a class="nav-link collapsed" href="settings.php">
            <i class="bi bi-card-list"></i>
            <span>Settings</span>
        </a>
    </li><!-- End Register Page Nav -->

</ul>

</aside><!-- End Sidebar-->
<div class="container head-card w-100">
        <div class="col-lg-12">
        <section id="main-content">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="card">
                                <div class="card-body">
                                    <div class="form-validation">
                                        <form class="form-valide" action="#" method="post" enctype="multipart/form-data">
                                            <div class="form-group row">
                                                <div class="col-lg-8">
                                                <label for="val-username">Title <span class="text-danger">*</span></label>
													<input type="hidden" name="id">
                                                    <input type="text" class="form-control" id="val-username" name="title" placeholder="Enter Title" value="<?= $mhs['title']?>">
                                                </div>
                                                <div class="col-lg-8">
                                                <label for="val-username">Date<span class="text-danger">*</span></label>
                                                    <input type="date" class="form-control"  name="date" value="<?= $mhs['date']?>">
                                                </div>
                                                <label for="val-username">Content<span class="text-danger">*</span></label>
                                                <div class="col-lg-12">
                                                <textarea name="content"><?= $mhs['content']?></textarea>
                                                    <script>
                                                            CKEDITOR.replace( 'content' );
                                                    </script>
                                                </div>
                                                <div class="col-lg-8">
                                                <label for="val-username">Category<span class="text-danger">*</span></label>
                                                <select type="text" name="category" class="form form-control">
                <option selected><?= $mhs['category']?></option>
                <?php
                  $mengambil = "SELECT * FROM categories ORDER BY id ASC";
                  $hasil = mysqli_query($connection, $mengambil);
                  if (!$hasil) {
                      die("Hasil Error" . mysqli_errno($connection) . " - " . mysqli_error($connection));
                  }
                  while ($data = mysqli_fetch_assoc($hasil)) {
                ?>
                <option><?php echo $data['category']; ?></option>
                <?php
                  }
                ?>
              </select>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="form-validation">
                                        <label for="">Public</label>
                                        <div class="form-group row">  
                                            <button type="submit" class="btn btn-primary col-lg-12" name="submit">Public</button>
                                            <br>
                                            <br>
                                            
                                        </div>
                                    </div>
                                    <div class="form-validation">
                                        <label for="">Edit Image</label>
                                        <div class="form-group row">
                                    <button class="btn btn-primary col-lg-12"><a href="post-edit-image.php" class="text-light">Edit Image</a></button>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </form>
                </section>
</div>
<script>
        tinymce.init({
            selector: '#mytextarea',
            plugins: 'advlist autolink lists link image charmap print preview hr anchor pagebreak',
            toolbar_mode: 'floating',
            height: 500
        });
        </script>


        <!-- TinnyMCE Editor -->
        <script src="//cdn.tiny.cloud/1/saa6ca03cwk8vxdx8rs9tcug11a4x6pey1ooij16fzq2znjt/tinymce/5/tinymce.min.js"
            referrerpolicy="origin"></script>

        <!-- Core plugin JavaScript-->
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="js/sb-admin-2.min.js"></script>

        <!-- Page level plugins -->
        <script src="vendor/chart.js/Chart.min.js"></script>

        <!-- Page level custom scripts -->
        <script src="js/demo/chart-area-demo.js"></script>
        <script src="js/demo/chart-pie-demo.js"></script>
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