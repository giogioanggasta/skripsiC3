<!DOCTYPE html>

  <head>
  <title>Home</title>
  <?php include_once './_partials/Header.php'; ?>
  <style>
    * {
      box-sizing: border-box
    }

    /* Slideshow container */
    .slideshow-container {
      max-width: 1000px;
      position: relative;
      margin: auto;
    }

    /* Hide the images by default */
    .mySlides {
      display: none;
    }

    /* Next & previous buttons */
    .prev,
    .next {
      cursor: pointer;
      position: absolute;
      top: 50%;
      width: auto;
      margin-top: -22px;
      padding: 16px;
      color: white;
      font-weight: bold;
      font-size: 18px;
      transition: 0.6s ease;
      border-radius: 0 3px 3px 0;
      user-select: none;
    }

    /* Position the "next button" to the right */
    .next {
      right: 0;
      border-radius: 3px 0 0 3px;
    }

    /* On hover, add a black background color with a little bit see-through */
    .prev:hover,
    .next:hover {
      background-color: rgba(0, 0, 0, 0.8);
    }

    /* Caption text */
    .text {
      color: #f2f2f2;
      font-size: 15px;
      padding: 8px 12px;
      position: absolute;
      bottom: 8px;
      width: 100%;
      text-align: center;
    }

    /* Number text (1/3 etc) */
    .numbertext {
      color: #f2f2f2;
      font-size: 12px;
      padding: 8px 12px;
      position: absolute;
      top: 0;
    }

    /* The dots/bullets/indicators */
    .dot {
      cursor: pointer;
      height: 15px;
      width: 15px;
      margin: 0 2px;
      background-color: #bbb;
      border-radius: 50%;
      display: inline-block;
      transition: background-color 0.6s ease;
    }

    .active,
    .dot:hover {
      background-color: #717171;
    }

    /* Fading animation */
    .fade {
      -webkit-animation-name: fade;
      -webkit-animation-duration: 1.5s;
      animation-name: fade;
      animation-duration: 1.5s;
    }

    @-webkit-keyframes fade {
      from {
        opacity: .4
      }

      to {
        opacity: 1
      }
    }

    @keyframes fade {
      from {
        opacity: .4
      }

      to {
        opacity: 1
      }
    }

    h5 {
      text-align: center;

    }

    #alamat {
      float: right;
    }

    .imgTable {
      width: 50%;
      height: auto;
      text-align: center;
    }

    table {
      border: none;
    }

    @font-face {
      font-family: header;
      src: url("../fonts/Ailerons-Typeface.otf");
    }

    @font-face {
      font-family: texts;
      src: url("../fonts/Renner_ 400 Book.ttf");
    }

    @font-face {
      font-family: navBarFont;
      src: url("../fonts/Kiona-Regular.ttf");
      font-style: bold;
    }

    h1 {
      font-family: header;
      font-size: 70px;
      color: #373737;
    }

    a {
      font-family: navBarFont;
      font-size: 25px;
      color: #868B8E;
      font-style: bold;
    }


    h2 {
      font-family: navBarFont;
      font-size: 30px;
      color: white;
      margin-top: 40px;
      margin-bottom: 40px;
    }

    h5 {
      font-family: navBarFont;
      font-size: 20px;
      color: white;
    }

    .footer {
      left: 0;
      bottom: 0;
      width: 100%;
      background-color: #183059;
      color: white;
      text-align: center;
      margin-top: 10%;
    }
 

    
</style>
</head>
<body>


<div class="w3-bar w3-white w3-border " id="menu">
  <a href="Home.php" class="w3-bar-item"><img src="../images/logoc3.png" style="width:150px"></a>
  <a href="Login.php" class="w3-bar-item" style="float: right; margin-top:2%; text-decoration: none;">Login</a>
  <a href="Membership.php" class="w3-bar-item" style="float: right; margin-top:2%; text-decoration: none;">Membership</a>
  <a href="News.php" class="w3-bar-item" style="float: right; margin-top:2%; text-decoration: none;">Berita</a>
  <a href="Product.php" class="w3-bar-item" style="float: right; margin-top:2%; text-decoration: none;">Produk</a>
  <a href="Promo.php" class="w3-bar-item" style="float: right; margin-top:2%; text-decoration: none;">Promo</a>
  <a href="Services.php" class="w3-bar-item" style="float: right; margin-top:2%; text-decoration: none;">Servis</a>
  <a href="Login.php" class="w3-bar-item" style="float: right; margin-top:2%; text-decoration: none;">Book</a>
</div>

<div id="demo" class="carousel slide" data-bs-ride="carousel" style="width:80%; margin-left:10%; margin-top:1.5%;">

  <div class="carousel-indicators">
    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
  </div>
  
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="../images/promo2.jpg" alt="promo1" class="d-block" style="width:100%">
    </div>
    <div class="carousel-item">
      <img src="../images/promo5.webp" alt="promo2" class="d-block" style="width:100%">
    </div>
    <div class="carousel-item">
      <img src="../images/promo3.jpg" alt="promo3" class="d-block" style="width:100%">
    </div>
  </div>
  
  <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>

<div class="footer">
  <img src="../images/logoc3.png" alt="promo1" class="d-block" style="width:10%; margin-left: 45%; padding-top: 1.5%">
  <p>C3 adalah penyedia jasa cuci maupun servis mobil terkemuka dari Indonesia. Pesan jasa, cek produk, baca </p>
  <p>berita otomotif terbaru dengan nyaman, cepat & aman tanpa repot.</p>
  <br>
  <a href="Contact.php" class="w3-bar-item" style="float: center; text-decoration: none;">- HUBUNGI KAMI -  </a>
</div>

  
</body>
</html>