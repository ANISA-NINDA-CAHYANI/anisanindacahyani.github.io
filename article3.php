<!DOCTYPE html>
<html>
<head>
    <title>Desain Web Statis</title>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="wrapper">
    <div id="container">
        <header><img src="Header.png"></header>
		<nav>
		<ul>
			<li><a href="index.php">Beranda</a></li>

			<li>
				<a href="#">Artikel</a>
				<ul class="submenu">
					<li><a href="article1.php">Belajar Web dengan HTML + CSS3</a></li>
					<li><a href="article2.php">Perbedaan PHP dan HTML</a></li>
					<li><a href="article3.php">Desain Web Statis</a></li>
				</ul>
			</li>

			<li>
				<a href="#">Profil</a>
				<ul class="submenu">
					<li><a href="hub.php">Hub Kami</a></li>
					<li><a href="tentang.php">Tentang Kami</a></li>
				</ul>
			</li>
		</ul>
		</nav>


        <article>
            <div id="single">
                <h2>Desain Web Statis</h2>
                <img src="article3.png" width="100%" style="border-radius:10px; margin:10px 0;">

                <p>
                    Desain web statis adalah jenis website yang menampilkan konten tetap dan tidak berubah secara otomatis. Website statis biasanya dibangun menggunakan HTML dan CSS tanpa melibatkan database atau proses server yang kompleks.
                </p>

                <p>
                    Kelebihan utama web statis adalah kecepatan akses dan kemudahan dalam pengelolaan. Karena tidak memerlukan pemrosesan data di server, website statis cenderung lebih ringan dan aman. Jenis website ini cocok digunakan untuk profil perusahaan, blog sederhana, dan portofolio.
                </p>

                <p>
                    Dalam desain web statis, fokus utama adalah tata letak dan tampilan visual. Pemilihan warna, tipografi, serta struktur halaman yang rapi sangat berpengaruh terhadap kenyamanan pengguna dalam membaca informasi.
                </p>

                <p>
                    Meskipun saat ini banyak website dinamis yang berkembang, web statis tetap memiliki peran penting, terutama bagi pemula yang ingin memahami dasar-dasar pengembangan web sebelum beralih ke teknologi yang lebih kompleks.
                </p>

                <div id="more">
                    <a href="index.php">Kembali ke Beranda</a>
                </div>
            </div>
        </article>

        <aside>
            <li class="widget">
                <h2>Berita Populer</h2>
                <ul>
                    <li><a href="article1.php">Belajar Web dengan HTML+CSS3</a></li>
                    <li><a href="article2.php">Perbedaan PHP dan HTML</a></li>
                    <li><a href="article3.php">Desain Web Statis</a></li>
                </ul>
            </li>

            <li class="widget">
                <h2>Artikel Populer</h2>
                <ul>
                    <li><a href="#">Belajar Mengenal Bootstrap</a></li>
					<li><a href="#">Mengenal Apa Saja Framework CSS</a></li>
					<li><a href="#">PHP: Variabel dan Operator</a></li>
                </ul>
            </li>

            <li class="widget">
                <h2>Berita Selanjutnya</h2>
                <ul>
                    <li><a href="#">UINSU Ganti Logo</a></li>
                    <li><a href="#">RUSIA Damai</a></li>
                    <li><a href="#">Cuaca di Medan</a></li>
                </ul>
            </li>
        </aside>

        <footer>
            <div id="column">
                <h2>LAYANAN</h2>
                E-Mail<br>
                E-Learning<br>
                E-Ropository<br>
                E-Jurnal<br>
                Digital Library<br>
                Portal SIA<br>
                SI-Selma<br>
                SI-Dahlia
            </div> 

            <div id="column"> 
                <h2>Business Hour</h2> 
                Silahkan hubungi UINSU Telp 064123123 pada jam kerja atau email 
                <a href="#">pusbangnis@uinsu.ac.id</a>
            </div> 

            <div id="column"> 
                <h2>Head Office</h2> 
                Jl. Willem Iskandar, Pasar V, Medan Estate<br>
                Tel : +62-61-6615683<br>
                Email : <a href="#">humas@uinsu.ac.id</a>
            </div>
        </footer>

    </div>
</div>
</body>
</html>

