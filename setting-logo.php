<?php
    include 'koneksi.php';

    if(isset($_POST['submit'])){
        $logo = $_FILES['logo']['name'];
        $ukuranFoto = $_FILES['logo']['size'];
        $erorFoto = $_FILES['logo']['error'];
        $tmpName = $_FILES['logo']['tmp_name'];

        //cek apakah yang dimasukkan foto
        $ekstensiFotoValid = ['png'];
        $ekstensiFoto = explode('.',$logo);

        if($ukuranFoto > 1000000){
            echo "<script>
                alert('Ukuran gambar kebesaran')
                document.location.href='setting.php'
                </script>";
            return false;
        }
        //lolos pengecekan
        move_uploaded_file($tmpName,"logo/".$logo);

        $result = mysqli_query($conn,"UPDATE setting SET logo = '$logo'");

        if(mysqli_affected_rows($conn) > 0){
            echo "<script>
                alert('Logo Berhasil Diubah')
                document.location.href='setting.php'
                </script>";
        }else{
            echo "<script>
            alert('Logo Gagal Diubah')
            document.location.href='setting-logo.php'
            </script>";
        }
    }
    $data = query("SELECT * FROM setting order by id desc")[0];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- theme meta -->
    <meta name="theme-name" content="focus" />
    <title>Gabby Cake</title>
    <!-- Styles -->
    <link href="css/lib/chartist/chartist.min.css" rel="stylesheet">
    <link href="css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="css/lib/themify-icons.css" rel="stylesheet">
    <link href="css/lib/owl.carousel.min.css" rel="stylesheet" />
    <link href="css/lib/owl.theme.default.min.css" rel="stylesheet" />
    <link href="css/lib/weather-icons.css" rel="stylesheet" />
    <link href="css/lib/menubar/sidebar.css" rel="stylesheet">
    <link href="css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="css/lib/helper.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="sidebar sidebar-hide-to-small sidebar-shrink ">
        <div class="nano">
            <div class="nano-content">
                <ul>
                    <div class="logo"><a href="index.html">
                            <img src="images/assets/logo-html.png" alt="" />
                            <span>Gabby Cake</span>
                        </a>
                    </div>
                    <li><a class="sidebar-sub-toggle"><i class="ti-home"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="post.php">
                        <i class="ti-file"></i> Post 
                            <span
                                class="sidebar-collapse-icon ti-angle-down">
                            </span>
                        </a>
                        <ul>
                            <li><a href="post.php">All Post</a></li>
                            <li><a href="post-new.php">Add New</a></li>
                            <li><a href="category.php">Category</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="pages.php">
                        <i class="ti-layout-grid2-alt"></i> Pages 
                            <span
                                class="sidebar-collapse-icon ti-angle-down">
                            </span>
                        </a>
                        <ul>
                            <li><a href="chart-flot.html">Flot</a></li>
                            <li><a href="chart-morris.html">Morris</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="komentar.php">
                        <i class="ti-email"></i> Comentar 
                            <span
                                class="sidebar-collapse-icon ti-angle-down">
                            </span>
                        </a>
                        <ul>
                            <li><a href="chart-morris.html">All Coment</a></li>
                            <li><a href="chart-flot.html">Add New</a></li>
                        </ul>
                    </li>
                    <li><a href="app-email.html"><i class="ti-email"></i> Settings</a></li>
                    <li>
                        <a href="pages.php">
                        <i class="ti-view-list-alt"></i> Setting 
                            <span
                                class="sidebar-collapse-icon ti-angle-down">
                            </span>
                        </a>
                        <ul>
                            <li><a href="setting.php">Footer / Link</a></li>
                            <li><a href="edit-home.php">Home</a></li>
                            <li><a href="edit-personal.php">Personal</a></li>
                            <li><a href="edit-blog.php">Blog</a></li>
                            <li><a href="edit-contact.php">Contact</a></li>
                            
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!--content-->
    <div class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="float-right">
                        <div class="dropdown dib">
                            <div class="header-icon" data-toggle="dropdown">
                                <div class="drop-down dropdown-profile dropdown-menu dropdown-menu-right">
                                    <div class="dropdown-content-heading">
                                        <span class="text-left">Upgrade Now</span>
                                        <p class="trial-day">30 Days Trail</p>
                                    </div>
                                    <div class="dropdown-content-body">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <i class="ti-user"></i>
                                                    <span>Profile</span>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="#">
                                                    <i class="ti-email"></i>
                                                    <span>Inbox</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="ti-settings"></i>
                                                    <span>Setting</span>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="#">
                                                    <i class="ti-lock"></i>
                                                    <span>Lock Screen</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="ti-power-off"></i>
                                                    <span>Logout</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content-wrap">
        <div class="main">
            <dic class="container-fluid">
                <section id="main-content">
                    <div class="row col-12">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                        <form action="" method="post" enctype="multipart/form-data">
                                        <div class="col-lg-6">
                                                <label for="" class="d-block">Edit Logo</label>
                                                <input type="file" name="logo">
                                        </div>
                                        <div class="col-lg-6">
                                                <button type="submit" class="btn btn-primary" name="submit">Edit Logo</button>
                                        </div>
                                        <div class="col-lg-12">
                                            
                                                <img src="logo/<?php echo $data['logo']?>" alt="eror" style="width:265px">
                                            
                                        </div>
                                        </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </dic>
        </div>
    </div>
 <!-- jquery vendor -->
 <script src="js/lib/jquery.min.js"></script>
    <script src="js/lib/jquery.nanoscroller.min.js"></script>
    <!-- nano scroller -->
    <script src="js/lib/menubar/sidebar.js"></script>
    <script src="js/lib/preloader/pace.min.js"></script>
    <!-- sidebar -->

    <script src="js/lib/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
    <!-- bootstrap -->

    <script src="js/lib/calendar-2/moment.latest.min.js"></script>
    <script src="js/lib/calendar-2/pignose.calendar.min.js"></script>
    <script src="js/lib/calendar-2/pignose.init.js"></script>


    <script src="js/lib/weather/jquery.simpleWeather.min.js"></script>
    <script src="js/lib/weather/weather-init.js"></script>
    <script src="js/lib/circle-progress/circle-progress.min.js"></script>
    <script src="js/lib/circle-progress/circle-progress-init.js"></script>
    <script src="js/lib/chartist/chartist.min.js"></script>
    <script src="js/lib/sparklinechart/jquery.sparkline.min.js"></script>
    <script src="js/lib/sparklinechart/sparkline.init.js"></script>
    <script src="js/lib/owl-carousel/owl.carousel.min.js"></script>
    <script src="js/lib/owl-carousel/owl.carousel-init.js"></script>
    <!-- scripit init-->
    <script src="js/dashboard2.js"></script>
</body>

</html>