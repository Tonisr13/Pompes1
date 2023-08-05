<?php 

    include 'koneksi.php';

	
	//memanggil function yang sudah di buat
	$mhs = query("SELECT * FROM setting")[0];

    if(isset($_POST['submit'])){
        $title = $_POST['title'];
        $phone = $_POST['phone'];
        $whatshap = $_POST['whatshap'];
        $istagram_title = $_POST['istagram_title'];
        $istagram = $_POST['istagram'];
        $facebook_title = $_POST['facebook_title'];
        $facebook = $_POST['facebook'];

        $data = query("SELECT * FROM setting");

        $sql = "UPDATE setting SET title = '$title', phone = '$phone' , whatshap = '$whatshap' , istagram = '$istagram' , istagram_title = '$istagram_title' , facebook = '$facebook' , facebook_title = '$facebook_title'";
		
		$result = mysqli_query($conn , $sql);
		
		if(mysqli_affected_rows($conn) > 0){
				echo"<script>
				alert('Data Berhasil Di Edit')
				</script>";
					
		}else{
			echo "<script>
						alert('Data Gagal di ubah')
						
					</script>";
		}
    }
    $page = query("SELECT * FROM page");

    if(isset($_POST['submit'])){
        

    }
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
                        <a href="menu.php">
                        <i class="ti-map"></i> Menu 
                            <span
                                class="sidebar-collapse-icon ti-angle-down">
                            </span>
                        </a>
                        <ul>
                            <li><a href="menu.php">All Post</a></li>
                            <li><a href="menu-new.php">Add New</a></li>
                        </ul>
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
                                                <h4>Setting Footer</h4>
                                                <label for="" class="d-block">Edit Logo</label>
                                                <a href="setting-logo.php" class="btn btn-primary">Edit Logo</a>
                                            </div>
                                            <div class="col-lg-6">
                                                <label for="">Site Title</label>
                                                <input type="text" class="form-control" name="title" value="<?= $mhs['title']?>">
                                            </div>
                                            <div class="col-lg-6">
                                                <label for="">Number Phone</label>
                                                <input type="number" class="form-control" name="phone" value="<?= $mhs['phone']?>">
                                            </div>
                                            <div class="col-lg-6">
                                                <label for="">Number Whatshap</label>
                                                <input type="number" class="form-control" name="whatshap" value="<?= $mhs['whatshap']?>">
                                            </div>
                                            <div class="col-lg-6">
                                                <label for="">Instagram Title</label>
                                                <input type="text" class="form-control" name="istagram_title" value="<?= $mhs['istagram_title']?>">
                                            </div>
                                            <div class="col-lg-6">
                                                <label for="">Instagram URL</label>
                                                <input type="url" class="form-control" name="istagram" value="<?= $mhs['istagram']?>">
                                            </div>
                                            <div class="col-lg-6">
                                                <label for="">Facebook Title</label>
                                                <input type="text" class="form-control" name="facebook_title" value="<?= $mhs['facebook_title']?>">
                                            </div>
                                            <div class="col-lg-6">
                                                <label for="">Facebook URL</label>
                                                <input type="url" class="form-control" name="facebook" value="<?= $mhs['facebook']?>">
                                            </div>
                                            <div class="col-lg-6">
                                                <button class="btn btn-primary" type="submit" name="submit">Submit</button>
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