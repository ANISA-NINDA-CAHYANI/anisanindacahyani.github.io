<!DOCTYPE html>
<html>
<head>
    <title>Perbedaan PHP dan HTML</title>
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
                <h2>Perbedaan PHP dan HTML</h2>
                <img src="images/article2.jpg" width="100%" style="border-radius:10px; margin:10px 0;">

                <p>
                    HTML dan PHP merupakan dua teknologi penting dalam pengembangan website, namun keduanya memiliki fungsi yang berbeda. HTML (HyperText Markup Language) digunakan untuk membangun struktur dan tampilan dasar halaman web, sedangkan PHP (Hypertext Preprocessor) merupakan bahasa pemrograman server-side yang digunakan untuk mengolah data.
                </p>

                <p>
                    HTML bersifat statis dan dijalankan langsung oleh browser. Konten yang dibuat dengan HTML akan selalu tampil sama kecuali file tersebut diubah secara manual. HTML digunakan untuk membuat elemen seperti judul, paragraf, tabel, gambar, dan tautan yang menjadi kerangka halaman web.
                </p>

                <p>
                    PHP bekerja di sisi server, sehingga kode PHP tidak terlihat oleh pengguna. PHP diproses terlebih dahulu oleh server, kemudian hasilnya dikirim ke browser dalam bentuk HTML. Dengan PHP, website dapat menampilkan data yang dinamis, seperti sistem login, pengolahan form, dan pengambilan data dari database.
                </p>

                <p>
                    Dalam praktiknya, HTML dan PHP saling melengkapi. PHP berfungsi mengatur logika dan proses, sedangkan HTML bertugas menampilkan hasilnya ke pengguna. Dengan memahami perbedaan ini, pengembang dapat membangun website yang lebih interaktif dan efisien.
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
