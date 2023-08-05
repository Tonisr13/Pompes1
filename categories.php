<?php
include 'connection.php';
include 'login_session.php';

$username = $_SESSION["username"];

  $query = "SELECT * FROM pengguna WHERE username = '$username'";
$result = mysqli_query($connection, $query);
$dt = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Dashboard Admin | Categories</title>
    <!-- Favicons -->
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

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
                <img src="assets/lggede.png" alt="" class="logs">
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

    </header>
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                <a class="nav-link collapsed " href="nganu.php">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li><!-- End Dashboard Nav -->


            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-journal-text"></i><span>Post</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="forms-nav" class="nav-content" data-bs-parent="#sidebar-nav">
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
                        <a href="create_category.php" >
                            <i class="bi bi-circle"></i><span class="post-list">Category</span>
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

    </aside>

    <div class="row markx">
    <div class="col-xl-4">
        <p class="text-dark font-weight-bold">Add New Category</p>
        <form method="post" action="create-new-category.php">
            <div>
                <label class="text-dark">Name</label>
                <input type="text" class="form-control" name="category" id="category" required>
                <span style="font-size: 13px">The name is how it appears on your site.</span>
            </div>
            <div class="mt-3">
                <label class="text-dark">Parent Category</label>
                <select name="parent" class="form-control">
                    <option value="">None</option>
                    <?php
                    $mengambil = "SELECT * FROM categories ORDER BY id ASC";
                    $hasil = mysqli_query($connection, $mengambil);

                    if (!$hasil) {
                        die("Hasil Error" . mysqli_errno($connection) . " - " . mysqli_error($connection));
                    }

                    while ($data = mysqli_fetch_assoc($hasil)) {
                        echo '<option value="' . $data['id'] . '">' . $data['category'] . '</option>';
                    }
                    ?>
                </select>
                <span style="font-size: 13px">Categories, unlike tags, can have a hierarchy. You might have a Jazz category, and under that have children categories for Bebop and Big Band. Totally optional.</span>
            </div>
            <div class="mt-3">
                <label class="text-dark">Description</label>
                <textarea name="description" class="form-control" rows="3"></textarea>
                <span style="font-size: 13px">The description is not prominent by default; however, some themes may show it.</span>
            </div>
            <input type="submit" name="add_category" value="Add New Category" class="btn btn-primary mt-3">
        </form>
    </div>
    <div class="col-xl-8 col-lg-7">
        <div class="card shadow mb-4">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th style="width: 35%;">Name</th>
                        <th style="width: 15%;">Parent</th>
                        <th style="width: 35%;">Description</th>
                        <th style="width: 15%;">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $mengambil = "SELECT * FROM categories ORDER BY id ASC";
                    $hasil = mysqli_query($connection, $mengambil);

                    if (!$hasil) {
                        die("Hasil Error" . mysqli_errno($connection) . " - " . mysqli_error($connection));
                    }

                    $no = 1;

                    while ($data = mysqli_fetch_assoc($hasil)) {
                        ?>
                        <tr>
                        <td><?php echo $no; ?></td>
                        <td style="font-size: 15px"><?= $data['category']; ?></td>
                        <td style="font-size: 15px"><?= $data['parent']; ?></td>
                        <td style="font-size: 15px"><?= $data['description']; ?></td>
                        <td><a href="delete-category.php?id=<?= $data['id']; ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this category?')">Delete</a></td>
                    <?php
                    $no++;
                }
                ?>
                    </tr>
            </tbody>
        </table>
    </div>
</div>
</div>
</div>
</div>
</body>
</html>


        
       
	
	
	
	
	
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
