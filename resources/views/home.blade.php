<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alat Berat Terpercaya - Caterpillar</title>
    <link rel="stylesheet" href="styles.css">
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

        /* Carousel */
        .carousel {
            margin-top: 60px; /* Memberikan jarak dari header */
            position: relative;
            overflow: hidden; /* Menyembunyikan elemen yang melampaui batas */
            width: 100%; /* Lebar 100% dari viewport */
            height: 500px; /* Atur tinggi sesuai kebutuhan */
        }

        .carousel-item {
            display: none; /* Menyembunyikan semua item secara default */
            width: 100%; /* Lebar item 100% dari carousel */
            height: 100%; /* Tinggi item 100% dari carousel */
        }

        .carousel-item.active {
            display: block; /* Menampilkan item aktif */
        }

        .carousel img {
            width: 100%; /* Lebar gambar 100% dari item */
            height: 100%; /* Tinggi gambar 100% dari item */
            object-fit: cover; /* Memastikan gambar mengisi area tanpa merusak proporsi */
        }

        button.prev, button.next {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
            border: none;
            padding: 10px;
            cursor: pointer;
            z-index: 10; /* Memastikan tombol berada di atas gambar */
        }

        button.prev {
            left: 10px;
        }

        button.next {
            right: 10px;
        }

        /* Gaya untuk bagian Tentang Kami */
        .about {
            background-color: #f9f9f9; /* Warna latar belakang yang lembut */
            padding: 40px 20px; /* Padding untuk ruang di dalam */
            text-align: center; /* Menyelaraskan teks ke tengah */
        }

        .about .container {
            max-width: 800px; /* Lebar maksimum untuk konten */
            margin: 0 auto; /* Memusatkan konten */
        }

        .about h2 {
            font-size: 2em; /* Ukuran font untuk judul */
            margin-bottom: 20px; /* Jarak bawah judul */
            color: #333; /* Warna teks judul */
        }

        .about p {
            font-size: 1.2em; /* Ukuran font untuk paragraf */
            line-height: 1.6; /* Jarak antar baris */
            margin-bottom: 20px; /* Jarak bawah paragraf */
            color: #666; /* Warna teks paragraf */
        }

        .learn-more {
            background-color: #333; /* Warna latar belakang tombol */
            color: #fff; /* Warna teks tombol */
            border: none; /* Menghapus border */
            padding: 10px 20px; /* Padding untuk tombol */
            font-size: 1em; /* Ukuran font untuk tombol */
            cursor: pointer; /* Menunjukkan bahwa tombol dapat diklik */
            transition: background 0.3s; /* Efek transisi untuk hover */
        }

        .learn-more:hover {
            background-color: #555; /* Warna latar belakang saat hover */
        }

        /* Gaya untuk bagian Produk */
        .products {
            padding: 40px 20px; /* Padding untuk ruang di dalam */
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
            width: calc(20% - 20px); /* Lebar card 20% dari container, dikurangi margin */
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); /* Bayangan untuk efek kedalaman */
            transition: transform 0.3s; /* Efek transisi untuk hover */
        }

        .product-card:hover {
            transform: scale(1.05); /* Efek zoom saat hover */
        }

        .product-card img {
            width: 100%; /* Lebar gambar 100% dari card */
            height: 150px; /* Tinggi tetap untuk semua gambar */
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
            cursor: pointer; /* Menunjukkan bahwa tombol dapat diklik */
            transition: background 0.3s; /* Efek transisi untuk hover */
        }

        .product-card button:hover {
            background-color: #555; /* Warna latar belakang saat hover */
        }

        /* Gaya untuk bagian Testimoni */
        .testimonials {
            background-color: #f9f9f9; /* Warna latar belakang yang lembut */
            padding: 40px 20px; /* Padding untuk ruang di dalam */
            text-align: center; /* Menyelaraskan teks ke tengah */
        }

        .testimonials h2 {
            font-size: 2em; /* Ukuran font untuk judul */
            margin-bottom: 20px; /* Jarak bawah judul */
            color: #333; /* Warna teks judul */
        }

        .testimonial-container {
            display: flex; /* Menggunakan flexbox untuk tata letak */
            flex-wrap: wrap; /* Membungkus card ke baris berikutnya jika diperlukan */
            justify-content: space-between; /* Menyebar card secara merata */
            gap: 20px; /* Jarak antar card */
        }

        .testimonial-card {
            background-color: #fff; /* Warna latar belakang card */
            border: 1px solid #ccc; /* Border untuk card */
            border-radius: 5px; /* Sudut membulat */
            padding: 20px; /* Padding di dalam card */
            margin: 10px; /* Margin antar card */
            flex: 1 1 calc(25% - 20px); /* Lebar card 25% dari container, dikurangi margin */
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); /* Bayangan untuk efek kedalaman */
            min-width: 250px; /* Lebar minimum untuk card */
        }

        .testimonial-card p {
            font-size: 1.2em; /* Ukuran font untuk testimoni */
            margin-bottom: 10px; /* Jarak bawah testimoni */
            color: #666; /* Warna teks testimoni */
        }

        .testimonial-card cite {
            display: block; /* Menampilkan sebagai blok */
            font-size: 1em; /* Ukuran font untuk nama */
            color: #333; /* Warna teks untuk nama */
            margin-top: 10px; /* Jarak atas untuk nama */
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

    <!-- Carousel Gambar -->
    <section class="carousel">
        <div class="carousel-item active">
            <img src="https://www.moveelectric.com/sites/default/files/styles/article/public/2022-11/Caterpillar_Electric_Truck_4.jpg?itok=qwjrxu6D" alt="Alat Berat 1">
        </div>
        <div class="carousel-item">
            <img src="http://www.viequipmentltd.com/wp-content/uploads/2014/09/DSC_7346.jpg" alt="Alat Berat 2">
        </div>
        <div class="carousel-item">
            <img src="https://s7d2.scene7.com/is/image/Caterpillar/C833750" alt="Alat Berat 3">
        </div>
        <div class="carousel-item">
            <img src="https://mobilecrane.co.za/wp-content/uploads/2019/11/LTM1160-5.2-980x653.jpeg" alt="Alat Berat 4">
        </div>
        <button class="prev">❮</button>
        <button class="next">❯</button>
    </section>

    <!-- Tentang Kami -->
    <section id="tentang-kami" class="about">
        <div class="container">
            <h2>Tentang Kami</h2>
            <p>Kami adalah penyedia alat berat terpercaya dengan berbagai produk berkualitas tinggi dari Caterpillar. Misi kami adalah memberikan solusi terbaik untuk kebutuhan konstruksi Anda.</p>
            <p>Kami berkomitmen untuk memberikan layanan terbaik dan produk yang memenuhi standar tertinggi. Dengan pengalaman bertahun-tahun di industri ini, kami siap membantu Anda mencapai tujuan proyek Anda.</p>
            <button class="learn-more">Pelajari Lebih Lanjut</button>
        </div>
    </section>
    <!-- Produk -->
    <section id="produk" class="products">
        <h2>Produk Kami</h2>
        <div class="product-container">
            <div class="product-card">
                <h3>Excavator</h3>
                <img src="https://im-mining.com/site/wp-content/uploads/2020/05/Cat-next-generation-6060-hydraulic-shovel-in-pit-scaled.jpg" alt="Excavator Caterpillar">
                <p>Ini sebuah excavator.</p>
                <button>Pelajari Lebih Lanjut</button>
            </div>
            <div class="product-card">
                <h3>Bulldozer</h3>
                <img src="https://i.pinimg.com/originals/c2/ed/bd/c2edbd1623fd78b4beefeee8a0ee1b0f.jpg" alt="Bulldozer Caterpillar">
                <p>Ini sebuah bulldozer.</p>
                <button>Pelajari Lebih Lanjut</button>
            </div>
            <div class="product-card">
                <h3>Loader</h3>
                <img src="https://s7d2.scene7.com/is/image/Caterpillar/C10677722" alt="Loader Caterpillar">
                <p>Ini sebuah loader.</p>
                <button>Pelajari Lebih Lanjut</button>
            </div>
            <div class="product-card">
                <h3>Forklift</h3>
                <img src="https://media.machines4u.com.au/machinery/58/392258/Caterpillar-15-Tonne-Diesel-Multi-Directional-Forklift_18072936.h.jpg" alt="Forklift Caterpillar">
                <p>Ini sebuah forklift.</p>
                <button>Pelajari Lebih Lanjut</button>
            </div>
            <div class="product-card">
                <h3>Grader</h3>
                <img src="https://www.lectura-specs.com/models/renamed/orig/graders-16_m_3-caterpillar(2).jpg" alt="Grader Caterpillar">
                <p>Ini sebuah grader.</p>
                <button>Pelajari Lebih Lanjut</button>
            </div>
        </div>
    </section>

        <!-- Testimoni -->
    <section id="testimoni" class="testimonials">
        <div class="container">
            <h2>Apa Kata Mereka</h2>
            <div class="testimonial-container">
                <div class="testimonial-card">
                    <p>"Alat berat dari Caterpillar sangat handal dan efisien!"</p>
                    <cite>- Budi, Kontraktor</cite>
                </div>
                <div class="testimonial-card">
                    <p>"Pelayanan yang luar biasa dan produk berkualitas tinggi."</p>
                    <cite>- Siti, Pengusaha Konstruksi</cite>
                </div>
                <div class="testimonial-card">
                    <p>"Saya sangat puas dengan pengalaman berbelanja di sini."</p>
                    <cite>- Joko, Manajer Proyek</cite>
                </div>
                <div class="testimonial-card">
                    <p>"Produk yang ditawarkan sangat bermanfaat untuk proyek kami."</p>
                    <cite>- Rina, Arsitek</cite>
                </div>
                <div class="testimonial-card">
                    <p>"Nais ingfo kawan."</p>
                    <cite>- Faren, Tumbal proyek</cite>
                </div>
                <div class="testimonial-card">
                    <p>"Gacor kang."</p>
                    <cite>- Aul, kopling setum</cite>
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

    <script>
        // Mendapatkan elemen carousel
        const items = document.querySelectorAll('.carousel-item');
        const prevButton = document.querySelector('.prev');
        const nextButton = document.querySelector('.next');
        let currentIndex = 0;
    
        // Fungsi untuk menampilkan item carousel
        function showItem(index) {
            items.forEach((item, i) => {
                item.classList.remove('active'); // Menghapus kelas aktif dari semua item
                if (i === index) {
                    item.classList.add('active'); // Menambahkan kelas aktif ke item yang sesuai
                }
            });
        }
    
        // Fungsi untuk berpindah ke item sebelumnya
        function showPrev() {
            currentIndex = (currentIndex > 0) ? currentIndex - 1 : items.length - 1; // Mengatur indeks
            showItem(currentIndex); // Menampilkan item baru
        }
    
        // Fungsi untuk berpindah ke item berikutnya
        function showNext() {
            currentIndex = (currentIndex < items.length - 1) ? currentIndex + 1 : 0; // Mengatur indeks
            showItem(currentIndex); // Menampilkan item baru
        }
    
        // Menambahkan event listener untuk tombol
        prevButton.addEventListener('click', showPrev);
        nextButton.addEventListener('click', showNext);
    </script>
</body>
</html>