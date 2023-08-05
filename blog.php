<html>
	<head>
	
		<title>Blog</title>
		
		<link href="css/style2.css" rel="stylesheet">
		
	</head>
	<body>
		<img class="banner" src="assets/bann.png" alt="">
		<img src="assets/akses3.png" alt="" class="aksesoris">
		<div class="navbar">
			<nav>
				<div class="lgkecil">
					<img src="assets/lgkecil.png" alt="lgkecil">
				</div>
				<div class="navbar">
					<nav>
						<div class="lgkecil">
							<img src="assets/lgkecil.png" alt="lgkecil">
						</div>
						<ul>
							<div class="nbr">
								<li class="dropdown">
									<a href="index.php" class="home">Home</a>
									<ul class="isi-dropdown">
										<li><a href="index.php#hwa">Why us ?</a></li>
										<li><a href="index.php#lulusan">SKL</a></li>
										<li><a href="index.php#foot">Footer</a></li>
									</ul>
								</li>
								<li><a class="ab" href="profile.php">Profile</a></li>
								<li><a class="ac" href="blog.php">Blog</a></li>
								<li><a class="ad" href="contact.php">Contact</a></li>
								<li><a class="ae" href="daftar.php">Pendaftaran</a></li>
							</div>
							<li class="but">
							<?php 
						session_start();
						if(!isset($_SESSION['username'])):?>
                    		<a class="singup" href="singup.php"> Sign Up </a>
							<a class="singin" href="login.php"> Login </a>
						<?php else:?>
							<a href="nganu.php" class="singin">Dashboard</a>
						<?php endif;?>
							</li>
						</ul>
					</nav>
				</div>
			</nav>
		</div>
		<h1 class="blog">Blog <span class="p">Pesantren</span> <br> Al-wibu</h1>
		<section class="section" >
			<img src="assets/aksesoris-01.png" alt="" class="aksesoris-01" href="blog1.php">
			<a href="blog1.php"><img src="assets/anak2.png" class="anak2"></a>
			<img src="assets/insta.png" class="instagram">
			<h1 class="socmed">Instagram</h1>
			<p class="line"></p>
			<a href="https://www.instagram.com/pondokinformatika/" class="follow" >Follow on Instagram</a>
			<h1 class="tv">Al-wibu TV</h1>
			<p class="line-1"></p>
			<iframe class="youtube" width="270" height="140" src="https://www.youtube.com/embed/HNNmxm22xE0"
				title="Santri Jago IT & Hafal Alquran - Pondok Informatika Almadinah" frameborder="0"
				allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
				allowfullscreen></iframe>
				<h1 class="pos">Pos - pos <br>Terbaru</h1>
				<p class="line-2"></p>
				<div class="isi-pos">
					<p class="pos-1">Together with Sukarobot <br>
					Academy, the extracurricular <br>
					division held the Al-Ma'tuq <br>
					Robotic Competition</p>
					<br>
					<p class="pos-2">Awarding of Sanad Al-Qur'an <br>
					30 Juz Certificates to Two of <br>
					the Best Graduates from <br>
					Markaz Al-Bassam</p>
					<br>
					<p class="pos-3"> Messages "BERANI" and <br>
					"SMART" in the Opening <br>
					Ceremony of Odd PAS, <br>
					Provision of Santri to Face <br>
					Exams</p>
					<br>
					<p class="pos-4">Yogyakarta YP-KIPMI <br> 
					Gathering at Al-wibu <br>
					Sukabumi Islamic Boarding <br>
					School</p>
					<br>
					<p class="pos-5">1st Place in STQN Karawang <br>
					Regency Level 20 Juz Men's <br>
					Branch</p>
				</div>
				
				
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-8">
						<a href="blog1.php"><div class="artikel">
							<h1 class="judul-artikel">Santri Belajar <span class="pelajaran">Pelajaran</span> Umum</h1>
							<p class="date-create">by adminpodok / January 01, 2023 </p>
							<p class="desk-artikel">Roin bibendum nibhsds. Nuncsdsd fermdada msit ametadasd consequat. Praes <br>
							porr nulla sit amet dui lobortis, id venenatis nibh accums. Proin lobortis <br>
							tempus odio eget venenatis. Proin fermentum ut massa at bibendum. Proin <br> 
							bibendum non est quis egestas. Pellentesque at enim id enim tempus placerat. <br>
							Etiam tempus gravida leo, et gravida justo bibendum non. Suspendisse vitae <br>
							fermentum sapien.......</p>
						</div></a>
						<div class="detail-blog">
						<a href="blog1.php" class="read-more">Read More</a>
					<img src="assets/merdeka.png" class="merdeka-img">
					<h1 class="tag-merdeka">Gerakan <span class="pie">Santri</span> Merdeka</h1>
					<p class="publish">by adminpondok / January 01, 2023</p>
					<p class="isi-merdeka">Together with Sukarobot Academy, the <br>
					extracurricular division held the Al-Ma'tuq <br>
					Robotic Competition, Awarding of Sanad <br>
					Al-Qur'an 30 Juz Certificates to Two of <br>
					the Best Graduates from Markaz Al-Bassam</p>
					<a href="#" class="remore">Read More</a>
					
					<img src="assets/ngaji.png" class="ngaji-img">
					<h1 class="tag-ngaji">Santri <span class="piye">Mengaji</span></h1>
					<p class="publish-1">by adminpondok / January 01, 2023</p>
					<p class="isi-ngaji">Together with Sukarobot Academy, the <br>
					extracurricular division held the Al-Ma'tuq <br>
					Robotic Competition, Awarding of Sanad <br>
					Al-Qur'an 30 Juz Certificates to Two of <br>
					the Best Graduates from Markaz Al-Bassam</p>
					<a href="#" class="remore-1">Read More</a>
					
					<img src="assets/ngaji.png" class="ngaji-img-1">
					<h1 class="tag-ngaji-1">Santri <span class="piye-1">Mengaji</span></h1>
					<p class="publish-2">by adminpondok / January 01, 2023</p>
					<p class="isi-ngaji-1">Together with Sukarobot Academy, the <br>
					extracurricular division held the Al-Ma'tuq <br>
					Robotic Competition, Awarding of Sanad <br>
					Al-Qur'an 30 Juz Certificates to Two of <br>
					the Best Graduates from Markaz Al-Bassam</p>
					<a href="#" class="remore-2">Read More</a>
					
					<img src="assets/merdeka.png" class="merdeka-img-0">
					<h1 class="tag-merdeka-0">Gerakan <span class="pie-0">Santri</span> Merdeka</h1>
					<p class="publish-0">by adminpondok / January 01, 2023</p>
					<p class="isi-merdeka-0">Together with Sukarobot Academy, the <br>
					extracurricular division held the Al-Ma'tuq <br>
					Robotic Competition, Awarding of Sanad <br>
					Al-Qur'an 30 Juz Certificates to Two of <br>
					the Best Graduates from Markaz Al-Bassam</p>
					<a href="#" class="remore-0">Read More</a>
					</div>
				</div>
			</div>
		</section>
		<footer>
		<img src="assets/lggede.png" class="logo-footer">
		<h5 class="copy">Copyright &copy; 2022 Al-wibu</h5>
		</footer>
	</body>
			</html>
