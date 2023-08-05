<html>
<head>
    <title>Profile</title>
    <link rel="stylesheet" href="css/style1.css">
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
    
    <h1 class="head-1">Profile <span class="pes">Pesantren</span><br> Al-Wibu</h1>
    <section class="sc-1">
        <img src="assets/ma'ruf-a.png" alt="photo1" class="photo-1">
       <div class="teks">
        <h1 class="ha-1">Selamat <span class="peach">datang</span> <br> di Web Resmi <br>
            <span class="peach">Pesantren</span> Al-wibu
        </h1>
        <p class="desk">
            Al-Wibu Islamic Boarding School is here to help your children <br>
            learn tahfidz Al-Qur'an and Ulum As-Syar'i with the best <br>
            facilities. Located in the beautiful and easy-to-reach <br>
            rural area of Cianjur, we ensure that your children will <br>
            experience a comfortable and conducive learning process.
        </p>
        </div>
        <img class="aksesoris-2" src="assets/akses4.png">
        <img class="aksesoris-3" src="assets/akses-bottom.png">
    </section>
    <section class="sc-2">
        <h1 class="judul">Bertemu <span class="peach">Dengan</span> Ustadz <span class="peach">Kami</span></h1>

        <img class="arrow-1" src="assets/arw-kanan.png">
        <div class="gallery">
            <div class="gallery-container">
                <img src="assets/uas.png" class="gallery-item "> 
                <img src="assets/uym.png" class="gallery-item1 ">
                <img src="assets/uas.png" class="gallery-item2 ">
            </div>
            <div class="gallery-controls"></div>
        </div>
       <img class="arrow-2" src="assets/arw-kiri.png" >
       
       <img class="orang-arab" src="assets/Union.png">
       <img class="banner-1" src="assets/bann1.png">
       <p class="foot-desk">“Arm your beloved sons and daughters with fundamental syar'i knowledge <br>
    for their future lives. Make sure they have the aqidah ahlussunnah wal jama'ah <br>
    and have good morals. And, make sure they become quality individuals <br>
    who are ready to compete in such a complex modern era.”</p>
    <p class="garis"></p>
    <h1 class="syekh">Syaikh Abdurrahman</h1>
    <h3 class="mudir">Mudir Pesantren</h3>
    </section>
    <footer id="foot" class="footer">
        <img class="logo-gede" src="assets/lggede.png" alt="">
        <h5 class="copy">Copyright &copy; 2022 Al-wibu</h5>
        </footer>
</body>
</html>
