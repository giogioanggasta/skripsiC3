<?php
session_start();

$db = mysqli_connect('localhost', 'root', '', 'c3') or die("can't connect to database");

?>
<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<title>Produk</title>
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-dark-grey.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link href="http://cdn.jsdelivr.net/timepicker.js/latest/timepicker.min.css" rel="stylesheet" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>


<head>
  <style>
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

    .button {
      width: 82.5%;
      background-color: white;
      border: none;
      color: white;
      padding: 14px 20px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 8px 0;
      cursor: pointer;
      border-radius: 4px;
      transition: 0.5s;
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

    .container {
      margin-top: 10%;
    }
  </style>
</head>

<body>


<div class="w3-bar w3-white w3-border" id="menu">
    <a href="Home-logged.php" class="w3-bar-item"><img src="../images/logoc3.png" style="width:150px"></a>
    <a href="Home.php" class="w3-bar-item" style="float: right; margin-top:2%; text-decoration: none;"><img src="../images/logout.png" style="width:25px"></a>
    <a href="Profile.php" class="w3-bar-item" style="float: right; margin-top:2%; text-decoration: none;"><img src="../images/user.png" style="width:30px"></a>
    <a href="Membership.php" class="w3-bar-item" style="float: right; margin-top:2%; text-decoration: none;">Membership</a>
    <a href="News.php" class="w3-bar-item" style="float: right; margin-top:2%; text-decoration: none;">Berita</a>
    <a href="Product.php" class="w3-bar-item" style="float: right; margin-top:2%; text-decoration: none;">Produk</a>
    <a href="Promo.php" class="w3-bar-item" style="float: right; margin-top:2%; text-decoration: none;">Promo</a>
    <a href="Services.php" class="w3-bar-item" style="float: right; margin-top:2%; text-decoration: none;">Servis</a>
    <a href="Book.php" class="w3-bar-item" style="float: right; margin-top:2%; text-decoration: none;">Book</a>
  </div>

  <a class="w3-display-middle" style="color:black;float: center; margin-top: -10%; text-decoration: none;">Produk</a>
  <?php
  $sql = "SELECT * FROM barang";
  $results = mysqli_query($db, $sql) or die(mysqli_error($db));

  while ($row = mysqli_fetch_array($results)) {

  ?>
    <div class="container">
      <div class="col">
        <div class="col-12 col-md-6 col-lg-4">
          <div class="card">
          <img src="../model/uploadImage/<?php echo $row['fotoBarang'] ?>" style="width:70%"><br>
            <div class="card-body">
              <h5 class="card-title"><?php echo $row["namaBarang"] ?> </h5>
              <p class="card-text"><?php echo $row["keteranganBarang"] ?> </p>
              <p class="card-text">Rp. <?php echo $row["hargaBarang"] ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  <?php

  }
  ?>

<div class="footer">
    <img src="../images/logoc3.png" alt="promo1" class="d-block" style="width:10%; margin-left: 45%; padding-top: 1.5%">
    <p style="font-size:100%">C3 adalah penyedia jasa cuci maupun servis mobil terkemuka dari Indonesia. Pesan jasa, cek produk, baca </p>
    <p style="font-size:100%">berita otomotif terbaru dengan nyaman, cepat dan aman tanpa repot.</p>
    <br>
    <a href="Contact.php" class="w3-bar-item" style="float: center; text-decoration: none; font-family:texts ; font-size: 100%">- HUBUNGI KAMI - </a>
    <a href="About.php" class="w3-bar-item" style="float: center; text-decoration: none; font-family:texts ; font-size: 100%"> ABOUT US - </a>
  </div>



</body>

</html>