<?php
    include 'connection.php';

?>
<html>
<head>
    <title>Ujian Ku</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>
<body>
    <img  id="home" class ="bgutama" src="assets/bgutama.png" alt="bgutama">
    <div>
    <img class ="akses"  src="assets/akses.png" alt="akses">
    <img class="arab" src="assets/arab.png" alt="arab">
    <img class="over1" src="assets/over1.png" alt="">
    </div>
    <div class="navbar">
        <nav>
            <div class="lgkecil">
            <img src="assets/lgkecil.png" alt="lgkecil">
            </div>
            <ul>
        <div class="nbr">
        <li class="dropdown">
        	<a href="#home" class="home">Home</a>
			<ul class="isi-dropdown">
				<li><a href="#hwa">Why us ?</a></li>
				<li><a href="#lulusan">SKL</a></li>
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
    <div>
        <h1 class="teks" id=""><span class="psat"> Bersama </span> <span class="past"> Santri </span> <br> <span class="psat"> Membangun </span> <br> <span class="past"> Indonesia </span></h1>
        
        <p class="desk" id="section_1_desk">
            Creating a generation of Qur'anic technology,<br>
            becoming an IT expert who is monotheistic,<br>
            has noble character, and is ready <br>
            to be dedicated to da'wah and the Islamic Ummah
        </p>
            <a class="getstart" href="#home"> Get Started </a>
    </div>
    <section class="sc1">
        <img class="akses1" src="assets/akses1.png" alt="akses1">
        <img class="mejid" src="assets/mejid.png" alt="">
        <h1 class="hwa" id="section_2_heading" data-aos="fade-right" data-aos-duration="1000">Selamat <span class="dat"> datang </span> <br> di Web Resmi <br> <span class="dat">Pesantren</span> Al-Wibu </h1>
        <a class="learn" href="profile.php">Learn More</a>
    </section>
    <section  id="hwa" class="sc2">
        <div class="bunkus-1">
        <h1 class="hwa2" id="section_2_desk_2">Lebih <span class="dat2">dari</span> pesantren <span class="dat2">biasa</span></h1>
        <p class="desk1" id="section_2_desk">We understand that religious knowledge alone is not enough.<br>
        Therefore, we also equip your children with general knowledge to support their success in the future.</p>
        </div>
        <div>
            <img class="cards" src="assets/cards.png">

            <img class="quran" src="assets/quran.png">
            
            <h1 class="bot" id="section_desk_01">Ilmu Syar'i</h1>
            <p class="lipsum" id="section_desk_001">Lorem ipsum dolor sit amet,<br>
            consectetur adipiscing elit. <br>
            Nam enim nunc, eleifend non <br>
            faucibus a, vehicula <br>
            vel augue. Nam</p>

            <img class="anak" src="assets/anak.png">
            
                <h1 class="bot1" id="section_desk_02">Jenjang SMP & SMA</h1>
                <p class="lipsum1" id="section_desk_002">Lorem ipsum dolor sit amet,<br>
                    consectetur adipiscing elit. <br>
                    Nam enim nunc, eleifend non <br>
                    faucibus a, vehicula <br>
                    vel augue. Nam</p>
            
            <img class="bpck" src="assets/bpck.png">
                    
                <h1 class="bot2" id="section_desk_03">Ijazah Resmi</h1>
                <p class="lipsum2" id="section_desk_003">Lorem ipsum dolor sit amet,<br>
                    consectetur adipiscing elit. <br>
                    Nam enim nunc, eleifend non <br>
                    faucibus a, vehicula <br>
                    vel augue. Nam</p>
        </div>
        <img class="ban" src="assets/bgkecil.png" alt="">
        <img class="over2" src="assets/over2.png" alt="">
        <h1 class="bant"><span class="banx">Dibuka</span> Pendaftaran <br> Santri baru <span class="banx">2023</span></h1>
        <p class="dex">Register yourself soon, before it's too late. Click the button below</p>
        
        <a  id="lulusan" class="gets" href="daftar.php">Get Started</a>
    </section>
        <section>
            <h1 class="bot3">Kompetensi <span class="kll">Lulusan</span></h1>
            <p class="dexs">Later, your children will graduate from Al-wibu <br>
            Islamic Boarding School with these competencies:</p>
            <img class="kotak" src="assets/kotak.png" alt="kotak">
            <div class="iss">
            <div class="haff">
                <h1 class="hafalan"> Hafalan</h1>
                <br>
                <p class="hafaland">Memorize at least <br> 10 Juz Al-Qur'an</p>
            </div>
            <div class="aq">
                <h1 class="aqidah"> Aqidah</h1>
                <br>
                <p class="aqidah1">Understanding the <br>
                Ahlussunnah wal jama'a <br>
                Aqidah is in accordance <br>
                with the understanding <br>
                of salafushshalih.</p>
            </div>
            <div class="isy">
                <h1 class="isy1">Ilmu Syar'i</h1>
                <br>
                <p class="isy2">Understanding syar'i <br>
                sciences is in accordance <br>
                with the understanding <br>
                of salafushshalih.</p>
            </div>
            <div class="pdt">
                <h1 class="pdt1">Pidato</h1>
                <br>
                <p class="pdt2">Able to give <br>
                speeches in Arabic <br>
                and English.</p>
            </div>
            <div class="komun">
                <h1 class="komun1">Komunikasi</h1>
                <br>
                <p class="komun2">Able to communicate <br>
                well in Arabic <br>
                and English.</p>
            </div>
            <div class="it">
                <h1 class="it1">Ilmu Teknologi</h1>
                <br>
                <p class="it2">Mastering the basics <br>
                of information <br>
                technology science.</p>
            </div>
            </div>
            <img class="ban2" src="assets/bgkecil.png" alt="">
            <img class="over3" src="assets/over3.png" alt="over3">
            <h1 class="daftar">Dibuka <span class="ijo">Pendaftaran <br> 
            Santri baru </span> 2023</h1>
            <p class="reg">Register yourself soon, before it's too  <br> 
            late. Click the button below</p>
            <a class="akhir" href="login.php">Get Started</a>
        </section>
        <footer id="foot" class="footer">
        <img class="logo-gede" src="assets/lggede.png" alt="">
        <h5 class="copy">Copyright &copy; 2022 Al-wibu</h5>
        </footer>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
  </script>
</body>
</html>
