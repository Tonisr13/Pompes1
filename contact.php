<html>
    <head>
        <title>Kontak</title>
        <link rel="stylesheet" href="css/style4.css">
    </head>
    <body>
    <div class="navbar">
        <nav>
            <div class="lgkecil">
            <img src="assets/lgkecil.png" alt="lgkecil">
            </div>
            <ul>
        <div class="nbr">
        <li class="dropdown">
        	<a href="index.php#home" class="home">Home </a>
			<ul class="isi-dropdown">
				<li><a href="index.php#hwa">Why us ?</a></li>
				<li><a href="index.php#lulusan">SKL</a></li>
				<li><a href="#foot">Footer</a></li>
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
        <header>
        <img src="assets/upper.png" class="upper">
        <h1 class="head-text">Kontak <span class="each"> Pesantren </span> <br> Al - wibu</h1>    
        <img src="assets/part.png" class="hiasan">
        </header>
        <section class="sect-1">
            <img src="assets/bangunan.png" class="bangunan">
            <img src="assets/part-1.png" class="part-1">
            <img src="assets/trans.png" class="trans">
        <h1 class="gureen">Welcome <span class="to-board">to Boarding</span> School</h1>
        <p class="guren">Pondok <span class="griin">Al-Wibu</span> Main <span class="griin">Office</span></p>
        <div class="buled">
        <img src="assets/buled.png" class="b">
        <img src="assets/buled.png" class="b-0">
        <img src="assets/buled.png" class="b-1">
        </div>
        <div class="buled">
            <img src="assets/buled.png">
            <img src="assets/buled.png">
            <img src="assets/buled.png">
        </div>
        <div class="tex">
        <p class="texx">Email : rk@example.com</p>
        <p class="texx">Phone : 0123-456-7890</p>
        <p class="texx">Contact Person : Tim Office</p>
            <div class="penerimaan">
                <h1>Penerimaan <span style="color: #D19980; font-weight: 400;">Santri</span></h1>
                <div class="buled1">
                    <img src="assets/buled.png">
                    <img src="assets/buled.png">
                    <img src="assets/buled.png">
                </div>
                <div class="texts">
                    <p class="texx1">Email : rk@example.com</p>
                    <p class="texx2">Phone : 0123-456-7890</p>
                    <p class="texx3">Contact Person : Tim Office</p>
                </div>
            </div>
        </div>
        <div class="play">
            <img src="assets/playbt.png">
            <img src="assets/playbt.png">
            <img src="assets/playbt.png">
        </div>
        <p class="jam-kerja">Jam <span class="kerja">Kerja</span></p>

        <div class="jadwal">
        <p>Senin - Kamis</p>
        <p>Jum'at</p>
        <p>Sabtu - Ahad</p>
        </div>
        <div class="jam-jadwal">
        <p>08:00 - 21:00</p>
        <p>14:00 - 16:00</p>
        <p>08:00 - 21:00</p>
        </div>
        <img src="assets/kard.png" class="kard">
        <img src="assets/trans-0.png" class="trans-0">
        <p class="komen">Kontak Kami <span class="sepan">Hari Ini</span> </p>
        <p class="deskripsi-kontak">Pelajari lebih lanjut tentang kami, lengkapi formulir pertanyaan online.</p>
        <div class="tutup">
        <input type="text" class="pesan-kamu" placeholder="Pesan Kamu"></input>
        </div>
          <input type="text" class="nama-kamu" placeholder="Nama Kamu"></input>    
                  <input type="text" class="email-kamu" placeholder="Email Kamu"></input>  
    
<a href="contact.php" class="submitt">Kirim Pesan</a>
        </section>
    <map>
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15814.283590098703!2d110.4228713!3d-7.729101!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd648398dc4db70c6!2sPondok%20Informatika%20Al-Madinah%20-%20Pondok%20IT!5e0!3m2!1sid!2sid!4v1673423457612!5m2!1sid!2sid" width="25%" height="50%" class="maps" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </map>
    
    <div class="lokasi">
    <a href="https://goo.gl/maps/9wiGfvSipkm6JLww6">    
    <img src="assets/get-loc.png" class="get-loc">
    <p class="dap-loc">Dapatkan Lokasi</p>  
    </a>
    </div>

    <a href="daftar.php"><img src="assets/daftar-skrg.png" class="daftar">
    <p class="daftar-0">Daftar Sekarang</p>
</a>
    <img src="assets/lggede.png" class="logo-foot">
    <h5 class="copy">Copyright &copy; 2022 Al-wibu</h5>
    </body>
    </html>
