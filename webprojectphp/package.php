<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Coffee Shop</title>

    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper@7/swiper-bundle.min.css"
    />

    <!-- link font awesome cdn  -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    />

    <!-- link  css file   -->
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <!-- Mulai header   -->

    <section class="header">
      <a href="home.php" class="logo">Ngopi YOK</a>

      <nav class="navbar">
        <a href="home.php">Home</a>
        <a href="package.php">Coffee Shop</a>
        <a href="about.php">About</a>
        <a href="kontak.php">Contact Us</a>
      </nav>

      <div id="menu-btn" class="fas fa-bars"></div>
    </section>

    <!-- Mulai Heading-->

    <div class="heading" style="background: url(img/bambu.jpg) no-repeat">
      <h1>KOTA PONTIANAK</h1>
    </div>

    <!-- Mulai Paket  -->

    <section class="packages">
      <h1 class="heading-title">TEMPAT POPULER</h1>

      <div class="box-container">
        <div class="box">
          <div class="image">
            <img src="img/botani caffe.jpeg" alt="" />
          </div>
          <div class="content">
            <h3>Botani Caffe And Resto</h3>
            <a target="_self" href="assets/botani.html" class="btn">Detail</a>
          </div>
        </div>

        <div class="box">
          <div class="image">
            <img src="img/canopy center.jpeg" alt="" />
          </div>
          <div class="content">
            <h3>Canopy Center</h3>
            <a href="assets/canopy.html" class="btn">Detail</a>
          </div>
        </div>

        <div class="box">
          <div class="image">
            <img src="img/sosmed.jpeg" alt="" />
          </div>
          <div class="content">
            <h3>Sosmed And Lounge</h3>
            <a href="assets/sosmed.html" class="btn">Detail</a>
          </div>
        </div>

        <div class="box">
          <div class="image">
            <img src="img/hammock cafe.jpeg" alt="" />
          </div>
          <div class="content">
            <h3>Hammock Cafe</h3>
            <a href="assets/hammock.html" class="btn">Detail</a>
          </div>
        </div>

        <div class="box">
          <div class="image">
            <img src="img/the roof.jpeg" alt="" />
          </div>
          <div class="content">
            <h3>The roof cafe</h3>
            <a href="assets/roof.html" class="btn">Detail</a>
          </div>
        </div>

        <div class="box">
          <div class="image">
            <img src="img/tumbuh coffe.jpg" alt="" />
          </div>
          <div class="content">
            <h3>Tumbuh</h3>
            <a href="assets/tumbuh.html" class="btn">Detail</a>
          </div>
        </div>
      </div>
      <div class="load-more"><a href="home.php #kembali" class="btn">Kembali</a></div>
    </section>

    <!-- Mulai footer   -->

    <section class="footer">
      <div class="box-container">
        <div class="box">
          <h3>link Utama</h3>
          <a href="menu.php"> <i class="fas fa-angle-right"></i> Home</a>
          <a href="about.php"> <i class="fas fa-angle-right"></i> About</a>
          <a href="package.php"><i class="fas fa-angle-right"></i> Coffe Shop</a>
          <a href="book.php"> <i class="fas fa-angle-right"></i> Kontak</a>
        </div>

        <div class="box">
          <h3>Link Tambahan</h3>
          <a href="#"> <i class="fas fa-angle-right"></i> Semua Pertanyaan</a>
          <a href="#"> <i class="fas fa-angle-right"></i> about us</a>
          <a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>
          <a href="#"> <i class="fas fa-angle-right"></i> terms of use</a>
        </div>

        <div class="box">
          <h3>Informasi Kami</h3>
          <a href="#"> <i class="fas fa-phone"></i> +62811111223 </a>
          <a href="#"> <i class="fas fa-phone"></i> +628511112225</a>
          <a href="#"> <i class="fas fa-envelope"></i> ngopiyok@gmail.com </a>
          <a href="#"> <i class="fas fa-map"></i> Pontianak, Indonesia</a>
        </div>

        <div class="box">
          <h3>Semua Follow</h3>
          <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
          <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
          <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
          <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
        </div>
      </div>

      <div class="credit">Copyright <span>Ngopi YOK</span> 2023</div>
    </section>
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <script src="script.js"></script>
  </body>
</html>
