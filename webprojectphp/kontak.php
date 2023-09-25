<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kontak</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

    <!--  css file  -->
    <link rel="stylesheet" href="css/kontak.css" />
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

    <!-- Mulai Heading -->
    </div>

    <!-- Mulai Pesanan  -->

    <section class="booking">
      <h1 class="heading-title">HUBUNGI KAMI!</h1>

      <form action="" method="post" class="book-form">
        <div class="flex">
          <div class="inputBox">
            <span>Nama:</span>
            <input type="text" placeholder="Masukan  Nama Anda" name="name" />
          </div>
          <div class="inputBox">
            <span>Email :</span>
            <input type="email" placeholder="Masukan Email Anda" name="email" />
          </div>
          <div class="inputBox">
            <span>Handphone :</span>
            <input type="number" placeholder="Masukan Nomor Anda" name="phone" />
          </div>
          <div class="inputBox">
            <span>Alamat:</span>
            <input type="text" placeholder="Masukan Alamat Anda" name="address" />
          </div>
        </div>

        <input type="submit" value="Kirim" class="btn" name="send" />
      </form>
    </section>

    <!--Mulai footer   -->

    <section class="footer">
      <div class="box-container">
        <div class="box">
          <h3>Link Utama</h3>
          <a href="home.html"> <i class="fas fa-angle-right"></i> Home</a>
          <a href="about.html"> <i class="fas fa-angle-right"></i> About Us</a>
          <a href="package.html"> <i class="fas fa-angle-right"></i> Caffe</a>
          <a href="kontak.html"> <i class="fas fa-angle-right"></i> Kontak</a>
        </div>

        <div class="box">
          <h3>Link Tambahan</h3>
          <a href="#"> <i class="fas fa-angle-right"></i> Semua Pertanyaan</a>
          <a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>
          <a href="#"> <i class="fas fa-angle-right"></i> terms of use</a>
          <a href="#"> <i class="fas fa-angle-right"></i> about us</a>
        </div>

        <div class="box">
          <h3>Info Kontak</h3>
          <a href="#"> <i class="fas fa-phone"></i> +628111112221 </a>
          <a href="#"> <i class="fas fa-phone"></i> +628511111333</a>
          <a href="#"> <i class="fas fa-envelope"></i> murahsenyum@gmail.com </a>
          <a href="#"> <i class="fas fa-map"></i> Solo, Indonesia </a>
        </div>

        <div class="box">
          <h3>Follow Semua</h3>
          <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
          <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
          <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
          <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
        </div>
      </div>

      <div class="credit">Copyright <span>Murah Senyum Coding</span> 2022</div>
    </section>

    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <script src="script.js"></script>
  </body>
</html>
