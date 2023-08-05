<?php
include 'connection.php';
?>

<!DOCTYPE html>
<html>

<head>
    <title>Dashboard Admin</title>
    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
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
                        <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
                        <span class="d-none d-md-block dropdown-toggle ps-2"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header">
                            <h6></h6>
                            <span></span>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                                <i class="bi bi-person"></i>
                                <span>My Profile</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                                <i class="bi bi-gear"></i>
                                <span>Account Settings</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                                <i class="bi bi-question-circle"></i>
                                <span>Need Help?</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
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

    </header>
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                <a class="nav-link " href="nganu.php">
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
                        <a href="post.php">
                            <i class="bi bi-circle"></i><span>All Post</span>
                        </a>
                    </li>
                    <li>
                        <a href="create_post.php">
                            <i class="bi bi-circle"></i><span>Create Post</span>
                        </a>
                    </li>
                    <li>
                        <a href="create_category.php">
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

    </aside>

    <div class="row markx">
    <div class="col-xl-4">
        <p class="text-dark font-weight-bold">Edit Category</p>
        <form method="post" action="update-category.php">
            <input type="hidden" name="id" value="<?php echo $category['id']; ?>">
            <div>
                <label class="text-dark">Name</label>
                <input type="text" name="name" class="form form-control" value="<?php echo $category['name']; ?>">
                <span style="font-size: 13px">The name is how it appears on your site.</span>
            </div>
            <div class="mt-3">
                <label class="text-dark">Slug</label>
                <input type="text" name="slug" class="form form-control" value="<?php echo $category['slug']; ?>">
                <span style="font-size: 13px">The “slug” is the URL-friendly
                    version of the name.
                    It
                    is usually all lowercase and contains only letters, numbers, and
                    hyphens.</span>
            </div>
            <div class="mt-3">
                <label class="text-dark">Parent Category</label>
                <select type="text" name="parent" class="form form-control">
                    <option selected>None</option>
                    <?php
                        $mengambil = "SELECT * FROM categories ORDER BY id ASC";
                        $hasil = mysqli_query($connection, $mengambil);

                        if (!$hasil) {
                            die("Hasil Error" . mysqli_errno($connection) . " - " . mysqli_error($connection));
                        }
                        while ($data = mysqli_fetch_assoc($hasil)) {
                    ?>
                    <option value="<?php echo $data['id']; ?>" <?php if($data['id'] == $category['parent_id']){echo 'selected';} ?>><?php echo $data['name']; ?></option>
                    <?php
                    }
                    ?>
                </select>
                <span style="font-size: 13px">Categories, unlike tags, can have a hierarchy. You
                    might have a Jazz category, and under that have children categories for
                    Bebop
                    and Big Band. Totally optional.</span>
            </div>
            <div class="mt-3">
                <label class="text-dark">Description</label>
                <textarea name="description" class="form form-control" rows="3"><?php echo $category['description']; ?></textarea>
                <span style="font-size: 13px">The description is not prominent by default;
                    however,
                    some themes may show it.</span>
            </div>
            <input name="update_category" type="submit" value="Update Category" class="btn btn-primary mt-3">
        </form>
    </div>
</div>

                            <div class="col-xl-8 col-lg-7">
                                <div class="card shadow mb-4">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th style=" width: 35%;">Name</th>
                                                <th style=" width: 35%;">Description</th>
                                                <th style=" width: 30%;">Slug</th>
                                                <td class="nav-item dropdown pe-3">

                    <a class="nav-link d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">Action
                    <span class="d-none d-md-block ps-2"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                                <i class="bi bi-trash3"></i>
                                <span>Delete All</span>
                            </a>
                        </li>
                    </ul>
                                        </td>
                                                <th><i class="fas fa-edit"></i></th>
                                                <th><i class="fas fa-trash-alt"></i></th>
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
       <td style="font-size: 15px"><?php echo $data['name']; ?></td>
       <td style="font-size: 15px"><?php echo $data['description']; ?></td>
       <td style="font-size: 15px"><?php echo $data['slug']; ?></td>
       <td class="nav-item dropdown pe-3">

                    <a class="nav-link d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                    <i class="bi bi-three-dots-vertical"><span class="d-none d-md-block ps-2"></span></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                        <a href="edit-category.php?id=<?php echo $data['id']; ?>" class="btn btn-primary">
        <i class="bi bi-pencil-square"></i>
        <span>Edit</span>
       </a>
                        </li>
                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                                <i class="bi bi-trash3"></i>
                                <span>Delete</span>
                            </a>
                        </li>
                    </ul>
                                        </td>
   </tr>
   <?php
       $no++;
   }
   ?>
</tbody>
                                    </table>
                                </div>
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
