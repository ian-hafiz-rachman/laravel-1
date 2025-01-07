<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hubungi Kami</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html, body {
            height: 100%;
        }

        body {
            display: flex;
            flex-direction: column;
            font-family: Arial, sans-serif;
            line-height: 1.6;
            background-color: #f4f4f4;
            color: #333;
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


        .contact-section {
            margin-top: 100px;
            padding: 40px 20px;
            background: #ffffff;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            max-width: 800px;
            margin-left: auto;
            margin-right: auto;
            border-radius: 10px;
            overflow: hidden; /* Membatasi konten agar tidak keluar kotak */
            flex-grow: 1; /* Mengisi ruang kosong */
        }

        .contact-section h2 {
            font-size: 2em;
            margin-bottom: 20px;
            color: #333;
            text-align: center;
        }

        .contact-section p {
            font-size: 1.2em;
            margin-bottom: 30px;
            text-align: center;
            color: #666;
        }

        .contact-form {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .contact-form input, .contact-form textarea {
            width: 100%;
            max-width: 100%; /* Membatasi lebar maksimum */
            padding: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 1em;
            transition: border-color 0.3s;
        }

        .contact-form input:focus, .contact-form textarea:focus {
            border-color: #FFC300;
            outline: none;
        }

        .contact-form button {
            padding: 15px;
            border: none;
            background-color: #FFC300;
            color: #fff;
            font-size: 1em;
            font-weight: bold;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s;
        }

        .contact-form button:hover {
            background-color: #e0a800;
        }

        footer {
            background: #333;
            color: #fff;
            text-align: center;
            padding: 10px 0;
            margin-top: auto;
            width: 100%;
        }

        footer ul {
            list-style: none;
            padding: 0;
        }

        footer ul li {
            display: inline;
            margin: 0 10px;
        }

        footer ul li a {
            color: #fff;
            text-decoration: none;
        }

        footer ul li a:hover {
            text-decoration: underline;
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

    <section class="contact-section">
        <h2>Hubungi Kami</h2>
        <p>Kami sangat ingin mendengar dari Anda. Silakan isi formulir di bawah untuk menghubungi kami.</p>
        <form class="contact-form">
            <input type="text" placeholder="Nama Anda" required>
            <input type="email" placeholder="Email Anda" required>
            <textarea placeholder="Pesan Anda" rows="5" required></textarea>
            <button type="submit">Kirim Pesan</button>
        </form>
    </section>

    <!-- Footer -->
    <footer>
        <div class="footer-content">
            <p>&copy; 2023 Alat Berat Caterpillar. Semua hak dilindungi.</p>
        </div>
    </footer>
</body>
</html>
