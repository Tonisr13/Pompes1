<?php
	include 'connection.php';
	include 'login_session.php';
	//memanggil id dari index.php
	
	
	$mhs = query("SELECT * FROM homepage")[0];

	if(isset($_POST['submit'])){
		$section_1_heading = strtolower(stripslashes($_POST["section_1_heading"]));
		$section_1_desk = strtolower(stripslashes($_POST["section_1_desk"]));
		$section_2_heading = strtolower(stripslashes($_POST["section_2_heading"]));
		$section_2_desk = strtolower(stripslashes($_POST["section_2_desk"]));
		$section_2_desk_2 = strtolower(stripslashes($_POST["section_2_desk_2"]));
        $section_3_heading = strtolower(stripslashes($_POST["section_3_heading"]));
		$section_3_desk = strtolower(stripslashes($_POST["section_3_desk"]));
        $section_4_heading = strtolower(stripslashes($_POST["section_4_heading"]));
		$section_4_desk = strtolower(stripslashes($_POST["section_4_desk"]));
        $section_5_heading = strtolower(stripslashes($_POST["section_5_heading"]));
		$section_5_desk = strtolower(stripslashes($_POST["section_5_desk"]));
        $section_6_heading = strtolower(stripslashes($_POST["section_6_heading"]));
		$section_6_desk = strtolower(stripslashes($_POST["section_6_desk"]));
		

		$sql = "UPDATE homepage SET section_1_heading = '$section_1_heading',
                section_1_desk = '$section_1_desk',
                section_2_heading = '$section_2_heading',
                section_2_desk = '$section_2_desk',
                section_2_desk_2 = '$section_2_desk_2',
                section_3_heading = '$section_3_heading',
                section_3_desk = '$section_3_desk',
                section_4_heading = '$section_4_heading',
                section_4_desk = '$section_4_desk',
                section_5_heading = '$section_5_heading',
                section_5_desk = '$section_5_desk',
                section_6_heading = '$section_6_heading',
                section_6_desk = '$section_6_desk'";
		
		$result = mysqli_query($connection , $sql);
		
		if(mysqli_affected_rows($connection) > 0){
				echo"<script>
				alert('Data Berhasil Di Edit')
                document.location.href='edit-home.php'
				</script>";
		}else{
			echo "<script>
						alert('Data Gagal di ubah')
						document.location.href = 'edit-home.php'
					</script>";
		}
	}



?>
<!DOCTYPE html>
<html>

<head>
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
                <a class="nav-link " href="nganu.php">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li><!-- End Dashboard Nav -->


            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-journal-text"></i><span>Post</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
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
                <a class="nav-link collapsed" href="users-profile.html">
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
    <div class="container">

<?php
$postid=intval($_GET['pid']);
$query=mysqli_query($con,"select tblposts.id as postid,tblposts.PostImage,tblposts.PostTitle as title,tblposts.PostDetails,tblcategory.CategoryName as category,tblcategory.id as catid,tblsubcategory.SubCategoryId as subcatid,tblsubcategory.Subcategory as subcategory from tblposts left join tblcategory on tblcategory.id=tblposts.CategoryId left join tblsubcategory on tblsubcategory.SubCategoryId=tblposts.SubCategoryId where tblposts.id='$postid' and tblposts.Is_Active=1 ");
while($row=mysqli_fetch_array($query))
{
?>
<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <div class="p-6">
            <div class="">
                <form name="addpost" method="post">
<div class="form-group m-b-20">
<label for="exampleInputEmail1">Post Title</label>
<input type="text" class="form-control" id="posttitle" value="<?php echo htmlentities($row['title']);?>" name="posttitle" placeholder="Enter title" required>
</div>



<div class="form-group m-b-20">
<label for="exampleInputEmail1">Category</label>
<select class="form-control" name="category" id="category" onChange="getSubCat(this.value);" required>
<option value="<?php echo htmlentities($row['catid']);?>"><?php echo htmlentities($row['category']);?></option>
<?php
// Feching active categories
$ret=mysqli_query($con,"select id,CategoryName from  tblcategory where Is_Active=1");
while($result=mysqli_fetch_array($ret))
{    
?>
<option value="<?php echo htmlentities($result['id']);?>"><?php echo htmlentities($result['CategoryName']);?></option>
<?php } ?>

</select> 
</div>

<div class="form-group m-b-20">
<label for="exampleInputEmail1">Sub Category</label>
<select class="form-control" name="subcategory" id="subcategory" required>
<option value="<?php echo htmlentities($row['subcatid']);?>"><?php echo htmlentities($row['subcategory']);?></option>
</select> 
</div>


<div class="row">
<div class="col-sm-12">
<div class="card-box">
<h4 class="m-b-30 m-t-0 header-title"><b>Post Details</b></h4>
<textarea class="summernote" name="postdescription" required><?php echo htmlentities($row['PostDetails']);?></textarea>
</div>
</div>
</div>

<div class="row">
<div class="col-sm-12">
<div class="card-box">
<h4 class="m-b-30 m-t-0 header-title"><b>Post Image</b></h4>
<img src="postimages/<?php echo htmlentities($row['PostImage']);?>" width="300"/>
<br />
<a href="change-image.php?pid=<?php echo htmlentities($row['postid']);?>">Update Image</a>
</div>
</div>
</div>

<?php } ?>

<button type="submit" name="update" class="btn btn-success waves-effect waves-light">Update </button>

            </div>
        </div> <!-- end p-20 -->
    </div> <!-- end col -->
</div>
<!-- end row -->



</div> <!-- container -->
                
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
