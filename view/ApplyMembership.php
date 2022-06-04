<?php
  // include('../model/Model-Membership.php');
  include_once '../helper/flash_session.php';
?>

<?php
  //ke login jika tidak login
  if (!isset($_SESSION['idUser'])) {
    header("location: Login.php", true, 301);
    exit();
  }

  //ke home jika bukan customer
  if (isset($_SESSION['role']) && $_SESSION['role'] != 'customer') {
    header("location: Home-logged.php", true, 301);
    exit();
  }
?>

<!DOCTYPE html>

<head>
  <title>Membership</title>
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
      background-color: #183059;
      color: white;
      text-align: center;
    }

    table {
      width: 50%;
      color: black;
      margin-left: 25%;
      margin-top: 12.5%;
    }

    table,
    tr,
    td {
      padding: 10px;
    }

    .button {
      width: 82.5%;
      background-color: white;
      border: 1px solid #ccc;
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

    .enterbutton {
      width: 20%;
      background-color: grey;
      border: none;
      color: white;
      padding: 14px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 8px 0;
      margin-left: 55%;
      margin-top: 2.5%;
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
  </style>
</head>

<body>
  <?php include_once './_partials/Navbar.php'; ?>

  <?php
    flash('success_message');
    flash('error_message');
  ?>

  <a class="w3-display-middle" style="color:black;float: center; margin-top: -10%; text-decoration: none;">Membership</a>

  <form action="../controller/UserController.php" method="post">
    <input type="hidden" name="type" value="request_membership">
    <div class="signup">
      <table style="width:50%; color: black;">
        <tr>
          <td>Tipe Membership</td>
          <td><select id="tipeMember" name="tipeMembership" required style="width: 25vh; height: 2.5vw; border: 1px solid #ccc;">
              <option value="Magic Sealant">Magic Sealant</option>
              <option value="Magic Carnauba">Magic Carnauba</option>
              <option value="Magic Banana">Magic Banana</option>
            </select>
        </tr>
      </table>
    </div>

    <button type="submit" class="enterbutton">Enter</button>
  </form>

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