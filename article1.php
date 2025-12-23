<!DOCTYPE html>
<html>
<head>
    <title>Belajar Web dengan HTML + CSS3</title>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="wrapper">
    <div id="container">
        <header><img src="header.png"></header>
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

        <!-- KONTEN ARTIKEL -->
        <article>
            <div id="single">
                <h2>Belajar Web dengan HTML + CSS3</h2>
                <img src="article1.jpg" width="100%" style="border-radius:10px; margin:10px 0;">
                <p>
                    HTML dan CSS merupakan dua teknologi dasar yang wajib dipahami dalam pengembangan website. HTML (HyperText Markup Language) berfungsi sebagai kerangka atau struktur utama halaman web, sedangkan CSS (Cascading Style Sheets) digunakan untuk mengatur tampilan visual seperti warna, ukuran huruf, tata letak, dan desain keseluruhan halaman.
                </p>

                <p>
                    Dalam HTML, elemen-elemen seperti heading, paragraf, gambar, tautan, dan tabel digunakan untuk menyusun konten website. Struktur ini membantu browser memahami isi halaman serta memudahkan pengembang dalam mengelola konten. Sementara itu, CSS3 memberikan kontrol penuh terhadap tampilan halaman, termasuk penggunaan layout modern seperti flexbox dan grid.
                </p>

                <p>
                    Penggunaan CSS3 juga memungkinkan website menjadi lebih responsif, artinya tampilan dapat menyesuaikan dengan berbagai ukuran layar, baik di desktop maupun perangkat mobile. Dengan teknik responsive design, pengalaman pengguna dapat ditingkatkan secara signifikan.
                </p>

                <p>
                    Dengan mempelajari HTML dan CSS3, seorang pemula dapat membangun website statis yang profesional dan siap dikembangkan ke tahap yang lebih lanjut. Pengetahuan ini menjadi fondasi penting sebelum mempelajari JavaScript, PHP, maupun framework web modern.
                </p>

                <div id="more">
                    <a href="index.php">Kembali ke Beranda</a>
                </div>
            </div>
        </article>

        <!-- SIDEBAR -->
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

        <!-- FOOTER -->
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


