<?php
    include 'connection.php';
    include 'login_session.php';

  $username = $_SESSION["username"];

	$query = "SELECT * FROM pengguna WHERE username = '$username'";
  $result = mysqli_query($connection, $query);
  $dt = mysqli_fetch_assoc($result);
    if(isset($_POST['submit'])){
        $title = strtolower(stripslashes($_POST["title"]));
        $content = stripslashes($_POST["contents"]);
        $date = date('Y-m-d H:i:s');
        $category = $_POST["categories"];
        $author = $_SESSION['name'];

        //upload gambar
        $foto = $_FILES['image']['name'];
        $ukuranFoto = $_FILES['image']['size'];
        $erorFoto = $_FILES['image']['error'];
        $tmpName = $_FILES['image']['tmp_name'];

        //cek apakah yang dimasukkan foto
        $ekstensiFotoValid = ['jpg','jpeg','png'];
        $ekstensiFoto = explode('.',$foto);

        if($ukuranFoto > 500000){
            echo "<script>
                alert('Ukuran File Gambar Terlalu Besar')
                document.location.href='create_post.php'
                </script>";
            return false;
        }

        //lolos pengecekan
        move_uploaded_file($tmpName, "image/".$foto);

        mysqli_query($connection, "INSERT INTO articles (title, content, category, image, date) VALUES ('$title', '$content', '$category', '$foto', '$date')");

        if(mysqli_affected_rows($connection) > 0){
            header('location:post-list.php');
            exit;
        } else {
            echo "<script>
                alert('Gagal Ditambahkan !')
                </script>";
        }			
    }
?>

<!DOCTYPE html>
<html>

<head>
    <title>Dashboard Admin | Create Post</title>
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
                        <a href="post-list.php">
                            <i class="bi bi-circle"></i><span>All Post</span>
                        </a>
                    </li>
                    <li>
                        <a href="create_post.php">
                            <i class="bi bi-circle"></i><span class="post-list">Create Post</span>
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
    <div class="container-fluid form-controls">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Add New Post</h1>
</div>

<!-- Content Row -->
<form method="post" action="create_post.php" enctype="multipart/form-data">
  <div class="row">
    <div class="col-md-9">
      <input class="form form-control" type="text" placeholder="Add Title" name="title">
      <div class="mt-5 ms-50">
        <textarea id="contents" rows="5"></textarea>
        <script>
          CKEDITOR.replace('contents');
        </script>
      </div>
    </div>
    <div class="col-md-3">
      <div class="accordion" id="accordionExample">
        <div class="card">

          <div id="collapseExample" class="collapse" aria-labelledby="headingOne"
            data-parent="#accordionExample">
            <div class="card-body d-flex justify-content-end ">
              <input type="submit" name="submit" value="Publish" class="btn btn-primary">
            </div>
          </div>
        </div>
        <div class="card mt-4">
          <div class="card-header bg-white" id="headingTwo">
            <h2 class="mb-0">
              <button class="btn btn-link btn-block text-left text-dark font-weight-bold" type="button"
              data-bs-toggle="collapse"
        data-bs-target="#collapseExamp"
        aria-expanded="true"
        aria-controls="collapseExamp">
                Categories
              </button>
            </h2>
          </div>
          <div id="collapseExamp" class="collapse" aria-labelledby="headingTwo"
            data-parent="#accordionExample">
            <div class="card-body d-flex justify-content-end ">
              <select type="text" name="categories" class="form form-control">
                <option selected>None</option>
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
        <div class="card mt-4">
          <div class="card-header bg-white" id="headingThree">
            <h2 class="mb-0">
              <button class="btn btn-link btn-block text-left text-dark font-weight-bold" type="button"
              data-bs-toggle="collapse"
        data-bs-target="#collapseExampl"
        aria-expanded="true"
        aria-controls="collapseExampl">
                Featured Image
              </button>
            </h2>
          </div>
          <div id="collapseExampl" class="collapse" aria-labelledby="headingThree"
            data-parent="#accordionExample">
            <div class="card-body justify-content-start">
              <a href="">Set Featured Image</a>
              <!-- <input type="text" name="image" class="form form-->

                            <input type="text" name="image" class="form form-control">
                            <input type="file" name="image" class="form form-control">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <input type="submit" name="submit" value="Publish" class="btn btn-primary">

</form>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
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