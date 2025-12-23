<!DOCTYPE html>
<html>
<head>
	<title>Beranda</title>
	<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="wrapper">
	<div id="container">
		<header><img src="images/Header.png"></header>
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
				<div id="t-images" style="background:url(images/article1.jpg)">&nbsp;</div>
				<h2>Belajar Web dengan HTML+CSS3</h2>
				HTML dan CSS merupakan dua teknologi dasar yang wajib dipahami dalam pengembangan website. HTML (HyperText Markup Language) berfungsi sebagai kerangka atau struktur utama halaman web, sedangkan CSS (Cascading Style Sheets) digunakan untuk mengatur tampilan visual seperti warna, ukuran huruf, tata letak, dan desain keseluruhan halaman. Dengan kombinasi HTML dan CSS3, sebuah website dapat dibuat lebih terstruktur, menarik, dan mudah digunakan oleh pengguna.<div id="more"><a href="article1.php">Baca Selengkapnya</a></div>
			</div>
			<div id="single">
				<div id="t-images" style="background:url(images/article2.jpg)">&nbsp;</div>
				<h2>Perbedaan PHP dan HTML</h2>
				HTML dan PHP merupakan dua teknologi yang sering digunakan dalam pengembangan website, namun keduanya memiliki fungsi dan peran yang berbeda. HTML (HyperText Markup Language) adalah bahasa markup yang digunakan untuk membangun struktur dasar halaman web, sedangkan PHP (Hypertext Preprocessor) merupakan bahasa pemrograman server-side yang digunakan untuk mengolah data dan menghasilkan halaman web secara dinamis.<div id="more"><a href="article2.php">Baca Selengkapnya</a></div>
			</div>
			<div id="single">
				<div id="t-images" style="background:url(images/article3.png)">&nbsp;</div>
				<h2>Desain Web Statis</h2>
				Desain web statis adalah jenis website yang menampilkan konten tetap dan tidak berubah secara otomatis berdasarkan interaksi pengguna. Website statis umumnya dibangun menggunakan HTML dan CSS tanpa melibatkan pemrosesan data di sisi server. Konten pada web statis hanya dapat diubah dengan mengedit langsung file sumbernya.<div id="more"><a href="article3.php">Baca Selengkapnya</a></div>
			</div>
		</article>
		
		<aside>
			<li class="widget">
				<h2>Berita Populer</h2>
					<ul>
						<li><a href="article1.php">Belajar Web dengan HTML + CSS3</a></li>
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
					<ul>
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
                Silahkan hubungi UINSU Telp 064123123 pada jam kerja atau email <a href="#">pusbangnis@uinsu.ac.id </a>
            </div> 
            <div id="column"> 
                <h2>Head Office</h2> 
                Jl. Willem Iskandar, Pasar V, Medan Estate
				Tel :+62-61-6615683
				Email : <a href="#">humas@uinsu.ac.id </a>
            </div>
		</footer>
	</div>
</div>
</body>
</html>