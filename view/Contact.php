<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<title>Contact</title>
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




  <style>

    body {
      background-color:#123;
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

    body {
      font-family: texts;
      color: white;
    }

    .login {
      margin-top: 10.5%;
      margin-left: 27.5%;
      float: left;
      text-align: center;
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




    a {
      font-family: navBarFont;
      font-size: 25px;
      color: #868B8E;
      font-style: bold;
    }
  </style>
</head>

<body>

<div class="w3-bar w3-white w3-border" id="menu">
    <a href="Home-logged.php" class="w3-bar-item"><img src="../images/logoc3.png" style="width:150px"></a>
    <div class="dropdown">
      <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" style="float: right; margin-top:2.25%; text-decoration: none; border: none; background-color: white;"><img src="../images/user.png" style="width:30px; margin-left:-5%">
        <span class="caret"></span></button>
      <ul class="dropdown-menu">
        <li><a href="MyBooking.php" class="w3-bar-item" style="float: right; margin-top:2%; text-decoration: none;">Pemesanan</a></li>
        <li><a href="EditProfile.php" class="w3-bar-item" style="float: right; margin-top:2%; text-decoration: none;">Edit Profile</a></li>
        <li><a href="#" class="w3-bar-item" style="float: right; margin-top:2%; text-decoration: none;">Logout</a></li>
      </ul>
    </div>
    <a href="Login.php" class="w3-bar-item" style="float: right; margin-top:2%; text-decoration: none;"></a>
    <a href="Membership.php" class="w3-bar-item" style="float: right; margin-top:2%; text-decoration: none;">Membership</a>
    <a href="News.php" class="w3-bar-item" style="float: right; margin-top:2%; text-decoration: none;">Berita</a>
    <a href="Product.php" class="w3-bar-item" style="float: right; margin-top:2%; text-decoration: none;">Produk</a>
    <a href="Promo.php" class="w3-bar-item" style="float: right; margin-top:2%; text-decoration: none;">Promo</a>
    <a href="Services.php" class="w3-bar-item" style="float: right; margin-top:2%; text-decoration: none;">Servis</a>
    <a href="Book.php" class="w3-bar-item" style="float: right; margin-top:2%; text-decoration: none;">Book</a>
  </div>

  <form>
    <div class="login">
      <fieldset style="width:120%">
      <h1>Pesan Anda</h1>
        <div class="isi">
          <br>
          <input type="text" name="nama" placeholder="Nama" required style="width: 70vh; height: 2.5vw; border: 1px solid #ccc; padding: 12px; color:black">
          <br><br>
          <input type="text" name="email" placeholder="E-mail" required style="width: 70vh; height: 2.5vw; border: 1px solid #ccc; padding: 6px; color:black">
          <br><br>
          <input type="text" name="pesan" placeholder="Pesan anda" required style="width: 70vh; height: 2.5vw; border: 1px solid #ccc; padding: 6px; color:black">
          <br><br>

          <button onclick="location.href = 'Home-logged.php'" class="button" style="color:black;">KIRIM</button>
        </div>
      </fieldset>
    </div>
  </form>


</body>

</html>