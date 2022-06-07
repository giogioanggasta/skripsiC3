<?php
  session_start();
  $db = mysqli_connect('localhost', 'root', '', 'c3') or die("can't connect to database");
?>

<!DOCTYPE html>
<head>
  <title>Produk</title>
  <?php include_once './_partials/Header.php'; ?>
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
      color: black;
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
  <?php include_once './_partials/Navbar.php'; ?>
  <a class="w3-display-middle" style="color:black;float: center; margin-top: -10%; text-decoration: none;">Produk</a>
  <?php
    $sql = "SELECT * FROM barang where kategori = 'non jasa'";
    $results = mysqli_query($db, $sql) or die(mysqli_error($db));
  ?>

  <div class="container">
   <? while ($row = mysqli_fetch_array($results)) {?>
      <div class="col">
        <div class="col-4 col-md-6 col-lg-4">
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
      <?php } ?>
    </div>

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