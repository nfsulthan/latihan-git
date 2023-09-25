<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Nongki YOK</title>

    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper@7/swiper-bundle.min.css"
    />

    <!--link font awesome cdn   -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    />

    <!--link  css file  -->
    <link rel="stylesheet" href="css/home.css" />
  </head>

  <body>
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

    <!-- home section starts  -->

    <section class="home">
      <div class="swiper home-slider">
        <div class="swiper-wrapper">
          <div
            class="swiper-slide slide"
            style="background: url(img/tumbuh\ coffe.jpg) no-repeat"
          >
            <div class="content">
              <span>Ngopi Sambil Ngoding</span>
              <h3>PONTIANAK, TUMBUH</h3>
              <a href="assets/tumbuh.html" class="btn">Selengkapnya</a>
            </div>
          </div>

          <div
            class="swiper-slide slide"
            style="background: url(img/cw\ coffe.png) no-repeat"
          >
            <div class="content">
              <span>Ngopi Sambil Ngoding</span>
              <h3>PONTIANAK, CW COFFEE</h3>
              <a href="assets/cw.html" class="btn">Selengkapnya</a>
            </div>
          </div>

          <div
            class="swiper-slide slide"
            style="background: url(img/asgm.jpg) no-repeat"
          >
            <div class="content">
              <span>Ngopi Sambil Ngoding</span>
              <h3>PONTIANAK, Asiang</h3>
              <a href="assets/asiang.html" class="btn">Selengkapnya</a>
            </div>
          </div>
          <div
            class="swiper-slide slide"
            style="background: url(img/aming\ coffe.jpg) no-repeat"
          >
            <div class="content">
              <span>Ngopi Sambil Ngoding</span>
              <h3>PONTINAK, AMING COFFEE</h3>
              <a href="assets/aming.html" class="btn">Selengkapnya</a>
            </div>
          </div>
        </div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
      </div>
    </section>

    <!-- Mulai services -->

    <section class="services">
      <h1 class="heading-title">Kualitas Cafe Pontianak</h1>

      <div class="box-container">
        <div class="box">
          <img src="img/trust.png" alt="" />
          <h3>Tepercaya</h3>
        </div>

        <div class="box">
          <img src="img/harga.png" alt="" />
          <h3>Harga Terjangkau</h3>
        </div>

        <div class="box">
          <img src="img/terenak.png" alt="" />
          <h3>Kualitas Terbaik</h3>
        </div>

        <div class="box">
          <img src="img/terverifikasi.png" alt="" />
          <h3>Terverifikasi</h3>
        </div>

        <div class="box">
          <img src="img/halal.png" alt="" />
          <h3>Halal</h3>
        </div>
      </div>
    </section>

    <!-- Mulai home   -->

    <section class="home-about">
      <div class="image">
        <img src="img/kopi.jpg" alt="" />
      </div>

      <div class="content">
        <h3>kopikers</h3>
        <p>
          sobat kopikers wajib tahu sebuah tempat yang cozy untuk nongkrong,
          berbincang-bicang bersama teman/sahabat/keluarga sembari menikmati
          minuman dan makanan serta bermain game dengan kecepatan internet yang
          stabil
        </p>
        <a href="package.html" class="btn">Lihat Semua</a>
      </div>
    </section>
    <!-- Mulai home informasi  -->

    <section class="home-packages" id="kembali">
      <h1 class="heading-title">Coffee Shop</h1>

      <div class="box-container">
        <div class="box">
          <div class="image">
            <img src="img/cw 1.jpg" alt="" />
          </div>
          <div class="content">
            <h3>CW Coffee</h3>
            <a target="_blank" href="assets/cw.html" class="btn">Detail</a>
          </div>
        </div>

        <div class="box">
          <div class="image">
            <img src="img/asgm.jpg" alt="" />
          </div>
          <div class="content">
            <h3>Asiang</h3>
            <a target="_blank" href="assets/asiang.html" class="btn">Detail</a>
          </div>
        </div>

        <div class="box">
          <div class="image">
            <img src="img/aming coffe.jpg" alt="" />
          </div>
          <div class="content">
            <h3>Aming Coffee</h3>
            <a target="_blank" href="assets/aming.html" class="btn">Detail</a>
          </div>
        </div>
      </div>
      <div class="load-more">
        <a href="package.php" class="btn">Lihat Semua</a>
      </div>
    </section>

    <!-- Mulai home offer  -->

    <section class="home-offer">
      <div class="content">
        <h3>Kontak!</h3>
        <p></p>
        <a href="kontak.php" class="btn"> Detail</a>
      </div>
    </section>

    <!-- footer section starts  -->

    <section class="footer">
      <div class="box-container">
        <div class="box">
          <h3>link Utama</h3>
          <a href="home.php"> <i class="fas fa-angle-right"></i> Home</a>
          <a href="about.php"> <i class="fas fa-angle-right"></i> About</a>
          <a href="package.php"><i class="fas fa-angle-right"></i> Coffe Shop</a>
          <a href="kontak.php"> <i class="fas fa-angle-right"></i> Kontak</a>
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
