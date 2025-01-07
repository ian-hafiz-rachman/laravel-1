<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Produk - Alat Berat Caterpillar</title>
    <link rel="stylesheet" href="styles.css"> <!-- Link ke file CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
                * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
        }

        /* Gaya untuk header dan navbar */
        header {
            background: #ffffff;
            color: #fff;
            padding: 10px 20px;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            display: flex;
            justify-content: space-between; /* Memisahkan logo dan menu */
            align-items: center; /* Menyelaraskan item secara vertikal */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Menambahkan bayangan */
        }

        header .logo img {
            height: 50px; /* Atur tinggi gambar sesuai kebutuhan */
            width: auto; /* Memastikan lebar otomatis untuk menjaga proporsi */
        }

        nav ul {
            list-style: none;
            display: flex; /* Mengatur menu menjadi flexbox */
            margin: 0; /* Menghapus margin */
            padding: 0; /* Menghapus padding */
        }

        nav ul li {
            margin-left: 20px; /* Jarak antar item menu */
            position: relative; /* Memungkinkan posisi absolut untuk pseudo-element */
        }

        nav ul li a {
            color: black; /* Warna teks hitam */
            text-decoration: none;
            padding: 10px 15px; /* Menambahkan padding untuk area klik yang lebih besar */
            font-weight: bold; /* Membuat teks menjadi bold */
            transition: color 0.3s; /* Efek transisi untuk hover */
        }

        nav ul li a::after {
            content: ""; /* Membuat pseudo-element */
            display: block; /* Menampilkan sebagai blok */
            width: 0; /* Lebar awal 0 */
            height: 2px; /* Tinggi garis */
            background: #FFC300; /* Warna garis */
            transition: width 0.3s; /* Efek transisi untuk lebar */
            position: absolute; /* Memposisikan garis secara absolut */
            left: 50%; /* Memposisikan garis di tengah */
            bottom: -5px; /* Jarak dari teks */
            transform: translateX(-50%); /* Menggeser garis ke kiri untuk memusatkan */
        }

        nav ul li a:hover {
            color: #FFC300; /* Warna teks kuning saat hover */
        }

        nav ul li a:hover::after {
            width: 100%; /* Lebar garis saat hover */
        }

        /* Gaya untuk bagian Tentang Kami */
        .about {
            padding: 80px 20px 40px; /* Padding untuk ruang di dalam, dengan padding atas untuk menghindari header */
            text-align: center; /* Menyelaraskan teks ke tengah */
            background-color: #fff; /* Warna latar belakang putih untuk bagian ini */
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); /* Bayangan untuk efek kedalaman */
        }

        .about h2 {
            font-size: 2.5em; /* Ukuran font untuk judul */
            margin-bottom: 20px; /* Jarak bawah judul */
            color: #333; /* Warna teks judul */
        }

        .about p {
            font-size: 1.2em; /* Ukuran font untuk paragraf */
            margin-bottom: 20px; /* Jarak bawah paragraf */
            color: #666; /* Warna teks paragraf */
        }

        .about h3 {
            font-size: 1.8em; /* Ukuran font untuk sub-judul */
            margin-top: 30px; /* Jarak atas untuk sub-judul */
            color: #333; /* Warna teks sub-judul */
        }

        /* Gaya untuk Tim */
        .team-container {
            display: flex; /* Menggunakan flexbox untuk tata letak tim */
            justify-content: space-around; /* Menyebar anggota tim secara merata */
            flex-wrap: wrap; /* Membungkus anggota tim ke baris berikutnya jika diperlukan */
            margin-top: 40px; /* Jarak atas untuk container tim */
        }

        .team-member {
            background-color: #f9f9f9; /* Warna latar belakang untuk anggota tim */
            border: 1px solid #ccc; /* Border untuk anggota tim */
            border-radius: 5px; /* Sudut membulat */
            padding: 20px; /* Padding di dalam anggota tim */
            margin: 10px; /* Margin antar anggota tim */
            width: calc(30% - 20px); /* Lebar anggota tim 30% dari container, dikurangi margin */
            text-align: center; /* Menyelaraskan teks ke tengah */
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); /* Bayangan untuk efek kedalaman */
        }

        .team-member img {
            width: 100%; /* Lebar gambar 100% dari anggota tim */
            height: auto; /* Tinggi otomatis untuk menjaga proporsi */
            border-radius: 50%; /* Membuat gambar anggota tim menjadi bulat */
        }

        /* Footer */
        footer {
            background: #333;
            color: #fff;
            text-align: center;
            padding: 10px 0;
            position: relative;
            bottom: 0;
            width: 100%;
        }

        footer ul {
            list-style: none;
        }

        footer ul li {
            display: inline;
            margin: 0 10px;
        }

        footer ul li a {
            color: #fff;
            text-decoration: none;
        }
    </style>
</head>
<body>
        <!-- Header -->
        <header>
            <div class="logo">
                <img src="https://purepng.com/public/uploads/large/purepng.com-caterpillar-logologobrand-logoiconslogos-251519939158mkwt8.png" alt="Logo" />
            </div>
            <nav>
                <ul>
                    <li><a href="/">Beranda</a></li>
                    <li><a href="/product">Produk</a></li>
                    <li><a href="/about">Tentang Kami</a></li>
                    <li><a href="/contact">Kontak</a></li>
                </ul>
            </nav>
        </header>
                    <!-- Halaman Tentang Kami -->
        <section id="tentang" class="about">
            <div class="container">
                <h2>Tentang Kami</h2>
                <p>Kami adalah penyedia alat berat terpercaya dengan berbagai produk berkualitas tinggi dari Caterpillar. Dengan pengalaman bertahun-tahun di industri ini, kami berkomitmen untuk memberikan solusi terbaik untuk kebutuhan konstruksi Anda.</p>
                
                <h3>Misi Kami</h3>
                <p>Misi kami adalah menyediakan alat berat yang handal dan efisien untuk membantu pelanggan kami mencapai tujuan proyek mereka dengan sukses.</p>
                
                <h3>Visi Kami</h3>
                <p>Menjadi pemimpin dalam penyediaan alat berat di Indonesia dengan fokus pada inovasi, kualitas, dan layanan pelanggan yang luar biasa.</p>
                
                <h3>Tim Kami</h3>
                <div class="team-container">
                    <div class="team-member">
                        <img src="https://www.profilebakery.com/wp-content/uploads/2023/04/Profile-Image-AI.jpg" alt="Anggota Tim 1">
                        <h4>John Doe</h4>
                        <p>CEO</p>
                    </div>
                    <div class="team-member">
                        <img src="https://d2v5dzhdg4zhx3.cloudfront.net/web-assets/images/storypages/short/linkedin-profile-picture-maker/dummy_image/thumb/004.webp" alt="Anggota Tim 2">
                        <h4>Jane Smith</h4>
                        <p>Manajer Operasional</p>
                    </div>
                    <div class="team-member">
                        <img src="https://www.profilebakery.com/wp-content/uploads/2023/04/LINKEDIN-Profile-Picture-AI.jpg" alt="Anggota Tim 3">
                        <h4>Michael Johnson</h4>
                        <p>Manajer Pemasaran</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer -->
        <footer>
            <div class="footer-content">
                <p>&copy; 2023 Alat Berat Caterpillar. Semua hak dilindungi.</p>
            </div>
        </footer>
</body>
</html>