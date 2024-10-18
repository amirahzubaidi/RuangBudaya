<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Books</title>
    <style>
        body { 
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
        }
        .search-section {
            display: flex;
            flex-direction: column;
        }
        .search-tabs {
            display: flex;
            list-style: none;
            padding: 0;
        }
        .search-tabs li {
            padding: 10px 20px;
            background-color: #eaeaea;
            margin-right: 5px;
            cursor: pointer;
        }
        .search-tabs li.active {
            background-color: #ddd;
            font-weight: bold;
        }
        .search-input {
            width: 100%;
            padding: 15px;
            margin-top: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .search-options {
            margin-top: 10px;
        }
        .search-options a {
            color: #007bff;
            text-decoration: none;
        }
        .share-section {
            margin: 20px 0;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .share-section .social-icons a {
            margin-left: 10px;
            color: #007bff;
            text-decoration: none;
        }
        h2 {
            margin-bottom: 20px;
            font-size: 24px;
            color: #333;
        }
        .book-gallery {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
        }
        .book {
            background-color: #fff;
            padding: 15px;
            width: 18%;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            margin-bottom: 20px;
        }
        .book img {
            width: 100%;
            height: auto;
            display: block;
            margin-bottom: 10px;
        }
        .book p {
            font-size: 16px;
            color: #333;
        }
        @media (max-width: 768px) {
            .book {
                width: 45%;
            }
        }
        @media (max-width: 480px) {
            .book {
                width: 100%;
            }
        }
    </style>
</head>
<body>

<div class="container">
    <!-- Pencarian Section -->
   <!-- <div class="search-section">
        <ul class="search-tabs">
            <li class="active">Pencarian Umum</li>
            <li>Pencarian Fulltext</li>
        </ul>-->
        <input type="text" class="search-input" placeholder="Pencarian berdasarkan judul, nama penulis, ISBN, penerbit, md5..">
        <div class="search-options">
           <!-- <a href="#">Parameter pencarian</a> -->
        </div>
    </div>

    <!-- Bagikan Section -->
    <div class="share-section">
        <span>Bagikan kepada pengguna lain</span>
        <div class="social-icons">
            <a href="#">Facebook</a>
            <a href="#">Twitter</a>
            <a href="#">WhatsApp</a>
            <a href="#">Telegram</a>
            <a href="#">LinkedIn</a>
            <a href="#">Copy Link</a>
        </div>
    </div>

    <!-- Buku Populer Section -->
    <h2>Yang paling populer</h2>
    <div class="book-gallery">
        <div class="book">
            <img src="image/gusdur.png" alt="Gusdur">
            <p>Gusdur the Authorized Biography of Abdurahman Wahid</p>
            <a href="book1.php">Read More</a>
        </div>
        <div class="book">
            <img src="image/keanekaragaman.png" alt="">
            <p>Keanekaragaman Budaya, Bahasa, dan Kearifan Lokal Masyarakat Indonesia</p>
            <a href="book2.php">Read More</a>
        </div>
        <div class="book">
            <img src="image/anekabatik.png" alt="Batik">
            <p>Mengenal Aneka Batik</p><br><br>
            <a href="book3.php">Read More</a>
        </div>
        <div class="book">
            <img src="image/kecak.png" alt="">
            <p>2012 YEARBOOR FOR TRADITIONAL MUSIC</p><br>
            <a href="book4.html">Read More</a>
        </div>
        <div class="book">
            <img src="image/keris.png" alt="">
            <p>Ensiklopedia Keris</p><br><br>
            <a href="book5.html">Read More</a>
        </div>
        <div class="book">
            <img src="image/gamelan.png" alt="">
            <p>GAMELAN The Traditional Sounds of Indonesia</p><br>
            <a href="book6.html">Read More</a>
        </div>
        <div class="book">
            <img src="image/papua.png" alt="">
            <p>Buku Mulok : Kebudayaan Papua</p><br>
            <a href="book7.html">Read More</a>
        </div>
        <div class="book">
            <img src="image/tradisiagama.png" alt="">
            <p>Antara Tradisi dan Agama</p><br><br>
            <a href="book8.html">Read More</a>
        </div>
    </div>
</div>

</body>
</html>
