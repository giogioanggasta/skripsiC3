<!DOCTYPE html>
<html lang="en">

<head>
  <title>Home-logged</title>
  <?php include_once './_partials/Header.php' ?>

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
      background-color: #123;
      color: white;
      text-align: center;
      margin-top: 10%;
    }

    .teks {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-85%, -100%);
    }

    .galeri {
      margin-left: 20%;
      margin-top: 10%;
    }

    .teks button {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      -ms-transform: translate(-50%, -50%);
      background-color: #555;
      color: white;
      font-size: 16px;
      padding: 12px 24px;
      border: none;
      cursor: pointer;
      border-radius: 5px;
      text-align: center;
    }
  </style>
</head>

<body>
<?php include_once './_partials/Navbar.php' ?>

  <div class="header">
    <img src="../images/shop1.jpg" style="width:100%; float:center;">
    <div class="teks" style="color:white; font-size: 750%">Professional detailing is our specialty</div>
  </div>


  <div class="galeri" style="color:black; font-size:350%">Galeri C3</div>
  <div id="demo" class="carousel slide" data-bs-ride="carousel" style="width:65%; margin-left:18%; margin-top:5.5%;">

    <div class="carousel-indicators">
      <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
    </div>


    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="../images/foto1.jpg" alt="foto1" class="d-block" style="width:100%">
      </div>
      <div class="carousel-item">
        <img src="../images/foto2.jpg" alt="foto2" class="d-block" style="width:100%">
      </div>
      <div class="carousel-item">
        <img src="../images/foto3.jpg" alt="foto3" class="d-block" style="width:100%">
      </div>
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
      <span class="carousel-control-next-icon"></span>
    </button>
  </div> <br> <br>




  <div class="teksmaps" style="color:black; font-size: 250%; margin-left:10%; margin-top: 5%; padding-bottom:5%">Alamat Car Care Center (C3) di Maps</div>
  <div align="center">
    <div class="mapouter">
      <div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=C3%20car%20care%20center%20medan&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://123movies-to.org"></a><br>
        <style>
          .mapouter {
            position: relative;
            text-align: right;
            height: 500px;
            width: 600px;
          }
        </style><a href="https://www.embedgooglemap.net">google maps html widget</a>
        <style>
          .gmap_canvas {
            overflow: hidden;
            background: none !important;
            height: 500px;
            width: 600px;
          }
        </style>
      </div>
    </div>
    <style>
      .gmap_canvas {
        overflow: hidden;
        background: none !important;
        height: 500px;
        width: 600px;
      }
    </style>
  </div>
  </div>
  </div>



  <div class="footer">
    <img src="../images/logoc3.png" alt="promo1" class="d-block" style="width:10%; margin-left: 45%; padding-top: 1.5%">
    <p style="font-size:150%">C3 adalah penyedia jasa cuci maupun servis mobil terkemuka dari Indonesia. Pesan jasa, cek produk, baca </p>
    <p style="font-size:150%">berita otomotif terbaru dengan nyaman, cepat dan aman tanpa repot.</p>
    <br>
    <a href="Contact.php" class="w3-bar-item" style="float: center; text-decoration: none; font-family:texts ; font-size: 20px">- HUBUNGI KAMI - </a>
    <a href="About.php" class="w3-bar-item" style="float: center; text-decoration: none; font-family:texts ; font-size: 20px"> ABOUT US - </a>
  </div>


</body>

</html>