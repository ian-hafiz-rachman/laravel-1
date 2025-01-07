<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Produk - Alat Berat Caterpillar</title>
    <link rel="stylesheet" href="styles.css"> <!-- Link ke file CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> <!-- Link ke Font Awesome untuk ikon sosial -->
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
        /* Gaya untuk bagian Produk */
        .products {
            padding: 80px 20px 40px; /* Padding untuk ruang di dalam, dengan padding atas untuk menghindari header */
            text-align: center; /* Menyelaraskan teks ke tengah */
        }

        .products h2 {
            font-size: 2em; /* Ukuran font untuk judul */
            margin-bottom: 20px; /* Jarak bawah judul */
            color: #333; /* Warna teks judul */
        }

        .product-container {
            display: flex; /* Menggunakan flexbox untuk tata letak */
            flex-wrap: wrap; /* Membungkus card ke baris berikutnya jika diperlukan */
            justify-content: space-between; /* Menyebar card secara merata */
        }

        .product-card {
            background-color: #fff; /* Warna latar belakang card */
            border: 1px solid #ccc; /* Border untuk card */
            border-radius: 5px; /* Sudut membulat */
            padding: 20px; /* Padding di dalam card */
            margin: 10px; /* Margin antar card */
            width: calc(30% - 20px); /* Lebar card 30% dari container, dikurangi margin */
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); /* Bayangan untuk efek kedalaman */
            transition: transform 0.3s; /* Efek transisi untuk hover */
        }

        .product-card:hover {
            transform: scale(1.05); /* Efek zoom saat hover */
        }

        .product-card img {
            width: 100%; /* Lebar gambar 100% dari card */
            height: 200px; /* Tinggi tetap untuk semua gambar */
            object-fit: cover; /* Memastikan gambar mengisi area tanpa merusak proporsi */
            border-radius: 5px; /* Sudut membulat untuk gambar */
        }

        .product-card h3 {
            font-size: 1.5em; /* Ukuran font untuk nama produk */
            margin-bottom: 10px; /* Jarak bawah nama produk */
        }

        .product-card p {
            font-size: 1em; /* Ukuran font untuk deskripsi */
            margin-bottom: 15px; /* Jarak bawah deskripsi */
        }

        .product-card button {
            background-color: #333; /* Warna latar belakang tombol */
            color: #fff; /* Warna teks tombol */
            border: none; /* Menghapus border */
            padding: 10px 15px; /* Padding untuk tombol */
            cursor: pointer; /* Menunjukkan bahwa tombol dapat dik lik */
            transition: background 0.3s; /* Efek transisi untuk hover tombol */
        }

        .product-card button:hover {
            background-color: #555; /* Warna latar belakang tombol saat hover */
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

    <!-- Halaman Produk -->
    <section id="produk" class="products">
        <h2>Produk Kami</h2>
        <div class="product-container">
            <div class="product-card">
                <h3>Excavator Caterpillar</h3>
                <img src="https://s7d2.scene7.com/is/image/Caterpillar/CM20200902-133f5-390aa" alt="Excavator Caterpillar">
                <p>Deskripsi singkat tentang excavator.</p>
                <button>Pelajari Lebih Lanjut</button>
            </div>
            <div class="product-card">
                <h3>Bulldozer Caterpillar</h3>
                <img src="https://images8.alphacoders.com/436/436955.jpg" alt="Bulldozer Caterpillar">
                <p>Deskripsi singkat tentang bulldozer.</p>
                <button>Pelajari Lebih Lanjut</button>
            </div>
            <div class="product-card">
                <h3>Loader Caterpillar</h3>
                <img src="http://s7d2.scene7.com/is/image/Caterpillar/C10676364" alt="Loader Caterpillar">
                <p>Deskripsi singkat tentang loader.</p>
                <button>Pelajari Lebih Lanjut</button>
            </div>
            <div class="product-card">
                <h3>Forklift Caterpillar</h3>
                <img src="https://www.catlifttruck.com/sites/default/files/CCDP70NAE2008F.jpg">
                <p>Deskripsi singkat tentang forklift.</p>
                <button>Pelajari Lebih Lanjut</button>
            </div>
            <div class="product-card">
                <h3>Grader Caterpillar</h3>
                <img src="https://www.lectura-specs.com/models/renamed/orig/graders-16_m_3-caterpillar(2).jpg" alt="Grader Caterpillar">
                <p>Deskripsi singkat tentang grader.</p>
                <button>Pelajari Lebih Lanjut</button>
            </div>
            <div class="product-card">
                <h3>Dump Truck Caterpillar</h3>
                <img src="https://images7.alphacoders.com/933/933715.jpg" alt="Dump Truck Caterpillar">
                <p>Deskripsi singkat tentang dump truck.</p>
                <button>Pelajari Lebih Lanjut</button>
            </div>
            <div class="product-card">
                <h3>Skid Steer Loader Caterpillar</h3>
                <img src="https://www.zieglercat.com/wp-content/plugins/ziegler_cat_flyout_menu/images/skid-steer-2022.png" alt="Skid Steer Loader Caterpillar">
                <p>Deskripsi singkat tentang skid steer loader.</p>
                <button>Pelajari Lebih Lanjut</button>
            </div>
            <div class="product-card">
                <h3>Telehandler Caterpillar</h3>
                <img src="https://2.bp.blogspot.com/-JAfLQs46kFw/WQey2IULuPI/AAAAAAAAHZ8/GgxunEYGus4zpOG4l9mHILgGThqtoihPACLcB/s1600/003.JPG" alt="Forklift Caterpillar" alt="Telehandler Caterpillar">
                <p>Deskripsi singkat tentang telehandler.</p>
                <button>Pelajari Lebih Lanjut</button>
            </div>
            <div class="product-card">
                <h3>Compactor Caterpillar</h3>
                <img src="https://s7d2.scene7.com/is/image/Caterpillar/CM20201211-f6ee7-376a4" alt="Compactor Caterpillar">
                <p>Deskripsi singkat tentang compactor.</p>
                <button>Pelajari Lebih Lanjut</button>
            </div>
            <div class="product-card">
                <h3>Asphalt Paver Caterpillar</h3>
                <img src="https://tse3.mm.bing.net/th?id=OIP._pAI5XJ2dOvtDnYZDy1RJwHaE7&pid=Api&P=0&h=220" alt="Asphalt Paver Caterpillar">
                <p>Deskripsi singkat tentang asphalt paver.</p>
                <button>Pelajari Lebih Lanjut</button>
            </div>
        <div class="product-card">
                <h3>Concrete Mixer Caterpillar</h3>
                <img src="https://tse2.mm.bing.net/th?id=OIP.KTMpodEpx-g4S_UEyBtdfAHaE9&pid=Api&P=0&h=220" alt="Concrete Mixer Caterpillar">
                <p>Deskripsi singkat tentang concrete mixer.</p>
                <button>Pelajari Lebih Lanjut</button>
            </div>
            <div class="product-card">
                <h3>Road Roller Caterpillar</h3>
                <img src="http://s7d2.scene7.com/is/image/Caterpillar/CM20161130-43788-26077" alt="Road Roller Caterpillar">
                <p>Deskripsi singkat tentang road roller.</p>
                <button>Pelajari Lebih Lanjut</button>
            </div>
            <div class="product-card">
                <h3>Backhoe Loader Caterpillar</h3>
                <img src="https://s7d2.scene7.com/is/image/Caterpillar/CM20170613-51122-33638" alt="Backhoe Loader Caterpillar">
                <p>Deskripsi singkat tentang backhoe loader.</p>
                <button>Pelajari Lebih Lanjut</button>
            </div>
            <div class="product-card">
                <h3>Mini Excavator Caterpillar</h3>
                <img src="http://s7d2.scene7.com/is/image/Caterpillar/CM20180619-57172-04323" alt="Mini Excavator Caterpillar">
                <p>Deskripsi singkat tentang mini excavator.</p>
                <button>Pelajari Lebih Lanjut</button>
            </div>
            <div class="product-card">
                <h3>Articulated Truck Caterpillar</h3>
                <img src="https://img.forconstructionpros.com/files/base/acbm/fcp/image/2018/10/16x9/Caterpillar_740_GC_articulated_dump_truck_side.5bbe674d36de6.png?auto=format&fit=max&w=1440" alt="Articulated Truck Caterpillar">
                <p>Deskripsi singkat tentang articulated truck.</p>
                <button>Pelajari Lebih Lanjut</button>
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