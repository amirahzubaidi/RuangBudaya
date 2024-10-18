<?php 
    session_start();
    require "../ruangbudayacopy/session.php";  

    $no_wa = 6282162951010;
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="css/all.min.css">

    <!-- Google Font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
    <!--Poppins font-->
    <link rel="stylesheet" href="<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">">

    <!-- Custom CSS-->
    <link rel="stylesheet" href="css/style.css">

    <title>RuangBudaya</title>
</head>
<body>
<!-- Start Navigation-->
<nav class="navbar navbar-expand-sm navbar-dark bg-dark pl-5 fixed-top">
  <a class="navbar-brand" href="index.php">RuangBudaya</a>
  <span class="navbar-text">Preserve Culture</span>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <ul class="navbar-nav custom-nav pl-5">
        <li class="nav-item custom-nav-item"><a href="index.php" class="nav-link">Home</a></li>
        <li class="nav-item custom-nav-item"><a href="librarybooks.php" class="nav-link">Books</a></li>
        <li class="nav-item custom-nav-item"><a href="forum/forum.php" class="nav-link">Forum</a></li>
        <li class="nav-item custom-nav-item"><a href="#" class="nav-link">Education</a></li>
        <li class="nav-item custom-nav-item"><a href="logout.php" class="nav-link">Log Out</a></li>
        <li class="nav-item custom-nav-item"><a href="signup.php" class="nav-link" >Signup</a></li>
        <li class="nav-item custom-nav-item"><a href="https://wa.me/<?php echo $no_wa?>?text=Hello, Selamat datang di RuangBudaya" target="_black" class="nav-link">Contact</a></li>
    </ul>
  </div>
</nav>
<!-- End Navigation-->

<!-- Start Video Background-->
<div class="container-fluid remove-vid-marg">
    <div class="vid-parent">
        <video playsinline autoplay muted loop> 
            <source src="video/video_borobudur.mp4" >
        </video> 
        <div class="vid-overlay"></div>
    </div>
    <div class="vid-content">
        <h1 class="my-content">Selamat Datang di Ruang Budaya </h1>
        <small class="my-content">Mengenal dan Melestarikan Budaya Indonesia</small><br><br>
        <a href="login.php" class="btn btn-primary" >Mulai</a>
    </div>
</div>
<!-- End Video Background-->

<!-- Start Books-->
<div class="container mt-5">
    <span><center>Popular Indonesian Books</center></span>
    <h1 class="text-center">Buku</h1>
    <!-- Start Books 1st Card Deck-->
     <div class="card-deck mt-4">
        <a href="book9.html" class="btn" style="text-align: left; padding:0px; margin:0px;">
            <div class="card">
                <img src="image/kebudayaanindonesia.png" width="400px" height="600px" class="card-img-top" alt="" />
                <div class="card-body">
                    <h5 class="card-title">Kebudayaan Indonesia</h5>
                    <p class="card-text">Kebudayaan sangat erat hubungannya dengan masyarakat. Melville J. Herskovits dan Bronislaw Malinowski mengemukakan bahwa segala sesuatu yang terdapat...</p>
                    <small>Jan 2021</small>
                </div> 
                <div class="card-footer">
                    <p class="card-text d-inline"><small><del></del></small> <span class="font-weight-bolder"></span></p>
                    <a class="btn btn-primary text-white font-weight-bolder float-right" href="book9.html">Read More</a>
                </div>

            </div>
        </a>
        <a href="book10.html" class="btn" style="text-align: left; padding:0px; margin:0px;">
            <div class="card">
                <img src="image/kearifanlokal.png" width="400px" height="600px" class="card-img-top" alt="" />
                <div class="card-body">
                    <h5 class="card-title">Kearifan Lokal Indonesia</h5>
                    <p class="card-text">Kearifan lokal adalah identitas atau kepribadian budaya sebuah bangsa yang menyebabkan bangsa tersebut mampu menyerap, bahkan mengolah kebudayaan yang...</p>
                    <small>Oct 2023</small>
                </div> 
                <div class="card-footer">
                    <p class="card-text d-inline"><small><del></del></small> <span class="font-weight-bolder"></span></p>
                    <a class="btn btn-primary text-white font-weight-bolder float-right" href="book10.html">Read More</a>
                </div>
            </div>
        </a>
        <a href="book11.html" class="btn" style="text-align: left; padding:0px; margin:0px;">
            <div class="card">
                <img src="image/filsafat.png" width="400px" height="600px" class="card-img-top" alt="" />
                <div class="card-body">
                    <h5 class="card-title">Filsafat Kebudayaan</h5>
                    <p class="card-text">Manusia merupakan makhluk Tuhan yang diliputi nuansa misteri dan karenanya sejak zaman silam hingga masa sekarang manusia selalu bertanya akan keberadaan dirinya...</p>
                    <small>Apr 2024</small>
                </div> 
                <div class="card-footer">
                    <p class="card-text d-inline"><small><del></del></small> <span class="font-weight-bolder"></span></p>
                    <a class="btn btn-primary text-white font-weight-bolder float-right" href="book11.html">Read More</a>
                </div>
            </div>
        </a>
     </div>
    <!-- End Books 1st Card Deck-->

     <div class="text-center m-2">
        <a class="btn btn-danger btn-sm" href="librarybooks.php">View All</a>
     </div>
</div>
<!-- End books-->
<br>
 <!-- Start Sejarah Kebudayaan-->
    <div class="news-heading">
        <span>What will you explore today?</span>
        <h3>Sejarah Kebudayaan</h3>
    </div>

<div class="news-container">

    <!--Start box-1-->
    <div class="news-box">
        <!--image-->
        <div class="">
            <img src="image/arsitekturbali.png" width="349px" height="300px" alt="">
        </div>

        <!--text-->
        <div class="news-text">
            <span>Warisan Budaya : Arsitektur Tradisional</span>
            <a href="sejarah1.html" class="news-title">Mengenal Konsep dan Arsitektur Bali</a>
            <p>Arsitektur Bali adalah salah satu seni bangunan tradisional yang dipengaruhi oleh budaya Hindu dan Bali, serta memadukan elemen-elemen alam yang ada di sekitarnya...</p>
            <a href="sejarah1.html">Read More</a>
        </div>
    </div>
    <!--End box-1-->

    <!--Start box-2-->
    <div class="news-box">
        <!--image-->
        <div class="">
            <img src="image/wayang.png" width="349px" height="300px" alt="">
        </div>

        <!--text-->
        <div class="news-text">
            <span>Warisan Budaya : Takbenda</span>
            <a href="sejarah2.html" class="news-title">WAYANG KULIT
            Mahakarya Seni Pertunjukan Jawa</a>
            <p>Malam di Yogyakarta akan terasa hidup jika anda melewatkannya dengan melihat wayang kulit. Irama gamelan yang rancak berpadu dengan suara merdu para sinden takkan...</p>
            <a href="sejarah2.html">Read More</a>
        </div>
    </div>
    <!--End box-2-->

    <!--Start box-3-->
    <div class="news-box">
        <!--image-->
        <div class="">
            <img src="image/kulinerindonesia.jpg" width="349px" height="300px" alt="">
        </div>

        <!--text-->
        <div class="news-text">
            <span>Warisan Budaya : Kuliner Tradisional</span>
            <a href="sejarah3.html" class="news-title">Memahami Peran Kuliner dalam Budaya Lokal</a>
            <p>Makanan telah lama menjadi bagian tak terpisahkan dari kehidupan manusia. Selain memenuhi kebutuhan nutrisi, makanan juga memiliki peran khusus dalam aspek...</p>
            <a href="sejarah3.html">Read More</a>
        </div>
    </div>
    <!--End box-3-->

 </div>
<!-- End Sejarah Kebudayaan-->

<!--Start news--> 
    <div class="news-heading">
        <span>The Recent Posts</span>
        <h3>Berita Terkini</h3>
    </div>

 <!-- Start News Container-->
 <div class="news-container">

    <!--Start box-1-->
    <div class="news-box">
        <!--image-->
        <div class="">
            <img src="image/jaranan.png" width="349px" height="300px" alt="">
        </div>

        <!--text-->
        <div class="news-text">
            <span>20 September 2024</span>
            <a href="news1.php" class="news-title">Permainan Tradisional Jaranan dari Jawa</a>
            <p>Jaranan merupakan permainan tradisional yang berkembang di tengah masyarakat Jawa. Permainan tradisional ini umumnya berkembang di daerah Yogyakarta, Jawa Tengah...</p>
            <a href="news1.php">Read More</a>
        </div>
    </div>
    <!--End box-1-->

    <!--Start box-2-->
    <div class="news-box">
        <!--image-->
        <div class="">
            <img src="image/maestro.png" width="349px" height="300px" alt="">
        </div>

        <!--text-->
        <div class="news-text">
            <span>26 Juni 2024</span>
            <a href="news2.php" class="news-title">Menjaga Maestro, Seni Tradisional</a>
            <p>Panggung Maestro adalah panggung penghargaan bagi para maestro yang telah mendedikasikan hidup mereka dalam menjaga dan merawat kesenian tradisional, sehingga budaya bangsa... </p>
            <a href="news2.php">Read More</a>
        </div>
    </div>
    <!--End box-2-->

    <!--Start box-3-->
    <div class="news-box">
        <!--image-->
        <div class="">
            <img src="image/mamiri.png" width="349px" height="300px" alt="">
        </div>

        <!--text-->
        <div class="news-text">
            <span>02 September 2024</span>
            <a href="news3.php" class="news-title">Angin Mamiri, Lagu Daerah Simbol Kearifan Lokal</a>
            <p>Lagu daerah merupakan bagian penting dari warisan budaya Indonesia yang mencerminkan nilai-nilai, tradisi, dan kearifan lokal masyarakat di setiap daerah...</p>
            <a href="news3.php">Read More</a>
        </div>
    </div>
    <!--End box-3-->

 </div>
<!-- End News-->

    <!--Start Social Media Follow-->
    <div class="container-fluid bg-dark">
        <div class="row text-white text-center p-1">
            <div class="col-sm">
                <a class="text-white social-hover" href="#"><i class="fab fa-facebook-f"></i> Facebook</a>
            </div>
            <div class="col-sm">
                <a class="text-white social-hover" href="#"><i class="fab fa-twitter"></i> Twitter</a>
            </div>
            <div class="col-sm">
                <a class="text-white social-hover" href="https://wa.me/<?php echo $no_wa?>?text=Hello, Selamat datang di RuangBudaya" target="_black"><i class="fab fa-whatsapp"></i> Whatsapp</a>
            </div>
            <div class="col-sm">
                <a class="text-white social-hover" href="#"><i class="fab fa-instagram"></i> Instagram</a>
            </div>
        </div>
    </div>
<!--End Social Media Follow-->

<!--Start About Section-->
<div class="container-fluid p-4" style="background-color: darkgray;">
    <div class="container" style="background-color: darkgray;">
        <div class="row text-center">
            <div class="col-sm">
                <h5>About Us</h5>
                    <p>We are dedicated to preserving and promoting Indonesia's rich cultural heritage. Our mission is to celebrate and share the diverse traditions, arts, and values of local communities, connecting people through the beauty and depth of Indonesian culture.</p>
            </div>
            <div class="col-sm">
                <h5>Indonesian Features</h5>
                <a class="text-dark" href="#">Tradisi</a><br />
                <a class="text-dark" href="#">Kuliner</a><br />
                <a class="text-dark" href="#">Pariwisata</a><br />
                <a class="text-dark" href="#">Tokoh Indonesia</a><br />
                <a class="text-dark" href="#">Kesenian</a><br />
            </div>
            <div class="col-sm">
                <h5>Contact Us</h5>
                <p>RuangBudaya Ltd <br> Near Central Park <br> Enggang Street <br> 20229 </p>
            </div>
        </div>
    </div>
</div>
<!--End About Section-->

<!--Start Footer-->
<footer class="container-fluid bg-dark text-center p-2">
    <small class="text-white">Copyright &copy; 2024 || Designed By RuangBudaya </small>
</footer>
<!--End Footer-->

<!-- Jquery bootstrap javascript-->
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<!-- Font Awesome JS -->
<script src="js/all.min.js"></script>


</body>
</html>