<?php
	include 'connection.php';
	
	//memanggil id dari index.php
	
	$id = $_GET['id'];
	
	//memanggil function yang sudah di buat
	$mhs = query("SELECT * FROM admin WHERE id = $id")[0];
	
    
	if(isset($_POST['submit'])){
		//upload gambar
        $foto = $_FILES['foto']['name'];
		$ukuranFoto = $_FILES['foto']['size'];
		$erorFoto = $_FILES['foto']['error'];
		$tmpName = $_FILES['foto']['tmp_name'];

		//cek apakah yang dimasukkan foto
		$ekstensiFotoValid = ['jpg','jpeg','png'];
		$ekstensiFoto = explode('.',$foto);

		if($ukuranFoto > 1000000){
			echo "<script>
				alert('Ukuran gambar kebesaran')
				document.location.href='post-new.php'
				</script>";
			return false;
		}
		//lolos pengecekan
		move_uploaded_file($tmpName,"test/".$foto);
		

		$sql = "UPDATE admin SET foto = '$foto' WHERE id = '$id'";
		
		$result = mysqli_query($conn , $sql);
		
		if(mysqli_affected_rows($conn) > 0){
				echo"<script>
				alert('Data Berhasil Di Edit')
				</script>";
				header('location:profile.php');
				exit;
					
		}
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
    <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
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
                    <li><a href="index.php"><i class="ti-home"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="#">
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
                    <li><a href="app-email.html"><i class="ti-email"></i> Settings</a></li>
                    <li><a href="profile.php"><i class="ti-user"></i> Profile</a></li>
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
                                <span class="user-avatar me-5">John
                                    <i class="ti-angle-down f-s-10"></i>
                                </span>
                                <div class="drop-down dropdown-profile dropdown-menu dropdown-menu-right">
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
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>Form Post</h1>
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
                                                <label for="val-username">Image <span class="text-danger">*</span></label>
                                                    <input type="file" class="form-control"  name="foto" placeholder="Enter Image" value="<?= $mhs['foto']?>">
                                                </div>
                                                <div class="col-lg-5">
                                                    <button name="submit" type="submit" class="btn btn-primary w-50">Edit</button>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </section>
                
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
