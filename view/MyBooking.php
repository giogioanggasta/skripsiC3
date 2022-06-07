<?php include('../model/Model-Book.php') ?>

<!DOCTYPE html>

<head>
  <title>Pesanan Anda</title>
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

    a:hover {
      color: #868B8E;
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

    #cancelBtn {
      float: right;
      margin-top: -12%;
      margin-right: 15%;
      margin-left: -5%;
    }

    #confirmBtn {
      float: right;
      margin-top: -18%;
      margin-right: 11%;
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

  <a class="w3-display-middle" style="color:black;float: center; margin-top: -10%; text-decoration: none;">Pesanan Anda</a>

  <img src="../images/car-wash.png" style="width:150px; margin-left:10%; margin-top: 12%; float:left ">
  <?php
  $sql = "SELECT * FROM transaksi WHERE status != 'Pemesanan Dibatalkan' AND status != 'Pemesanan Ditolak' AND idUser = '$_SESSION[idUser]'";
  $results = mysqli_query($db, $sql) or die(mysqli_error($db));
  $check = mysqli_num_rows($results);
  if ($check > 0) {
    while ($row = mysqli_fetch_array($results)) {

  ?>


      <div class="detail-booking" style="width:50%;float:center; margin-left: 27.5%; margin-top:12%;">
        <p style="margin-bottom: 8px;color: #0a2724;">ID Booking: <?php echo $row["idTransaksi"] . "<br>"; ?> </p>
        <p style="margin-bottom: 8px;color: #0a2724;">Tanggal Pemesanan: <?php $final_tanggal = date_create($row["tanggalTransaksi"]);
                                                                          echo date_format($final_tanggal, "Y-m-d") . "<br>"; ?> </p>
        <p style="margin-bottom: 8px;color: #0a2724;">Waktu Pemesanan: <?php $final_waktu = date_create($row["waktuTransaksi"]);
                                                                        echo date_format($final_waktu, "H:i") . "<br>"; ?> </p>
        <p style="margin-bottom: 8px;color: #0a2724;">Pilihan Jasa 1: <?php echo $row["jasa1"] . "<br>"; ?> </p>
        <p style="margin-bottom: 8px;color: #0a2724;">Pilihan Jasa 2: <?php echo $row["jasa2"] . "<br>"; ?></p>
        <p style="margin-bottom: 8px;color: #0a2724;">Pilihan Jasa 3: <?php echo $row["jasa3"] . "<br>"; ?></p>
        <p style="margin-bottom: 8px;color: #0a2724;">Catatan: <?php echo $row["catatanPelanggan"] . "<br>"; ?></p>
        <p style="margin-bottom: 8px;color: #0a2724;">Total Harga: <?php echo $row["totalHarga"] . "<br>"; ?></p>
        <p style="margin-bottom: 8px;color: #0a2724;"><b>Status Pemesanan:</b> <?php echo $row["status"] . "<br>"; ?></p>
        <p>Bukti Pembayaran :<img src="../model/uploadImage/<?php echo $row["buktiPembayaran"] ?>" alt="" style="width:15%"></p>
        <?php
        echo '<script type="text/javascript">' .
          'console.log(' . $jasa1 . ');</script>';
        ?>
      </div>



      <button type="submit" class="w3-button w3-red" data-bs-toggle="modal" data-bs-target="#modalBatalkan-<?= $row['idTransaksi'] ?>" name="cancelBtn" id="cancelBtn">Batalkan</button>

      <form action="MyBooking.php" method="post" enctype="multipart/form-data">
        <div class="modal" id="modalBatalkan-<?= $row["idTransaksi"] ?>">
          <input type="hidden" id="idTransaksi" name="idTransaksi" value='<?php echo $row["idTransaksi"]; ?>'>
          <div class="modal-dialog">
            <div class="modal-content">

              <!-- Modal Header -->
              <div class="modal-header">
                <h4 class="modal-title">Konfirmasi Pembatalan</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
              </div>

              <!-- Modal body -->
              <div class="modal-body">
                <input type="hidden" id="idTransaksi" name="idTransaksi" value='<?php echo $row["idTransaksi"]; ?>'>
                Apakah anda yakin ingin melakukan pembatalan pemesanan ?<br>
                <button type="submit" class="btnUpload" name="btnBatal">Batalkan Pesanan</button> <br><br>
              </div>

            </div>
          </div>
        </div>
      </form>

      <button type="submit" class="w3-button w3-blue btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalConfirmation-<?= $row['idTransaksi'] ?>" name="confirmBtn" id="confirmBtn">Konfirmasi Pembayaran</button>

      <form action="MyBooking.php" method="post" enctype="multipart/form-data">
        <div class="modal" id="modalConfirmation-<?= $row["idTransaksi"] ?>">
          <input type="hidden" id="idTransaksi" name="idTransaksi" value='<?php echo $row["idTransaksi"]; ?>'>
          <div class="modal-dialog">
            <div class="modal-content">

              <!-- Modal Header -->
              <div class="modal-header">
                <h4 class="modal-title">Konfirmasi Pembayaran</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
              </div>

              <!-- Modal body -->
              <div class="modal-body">
                <input type="hidden" id="idTransaksi" name="idTransaksi" value='<?php echo $row["idTransaksi"]; ?>'>
                Bayar ke nomor rekening : Mandiri 106-00-1178850-5 a/n C3 Car Care Center. <br>
                Bukti Pembayaran akan di proses maksimal 1x24 jam setelah upload. Anda akan menerima email jika pembayaran sudah diterima.<br>
                <label class="new-button" for="upload"><br>
                  <input type="file" name="file">
                  <button type="submit" class="btnUpload" name="btnUpload">Submit Bukti Pembayaran</button> <br><br>
              </div>

            </div>
          </div>
        </div>
      </form>



  <?php
    }
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