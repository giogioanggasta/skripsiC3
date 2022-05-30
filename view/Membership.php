<?php include('../model/Model-Membership.php') ?>

<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<title>Membership</title>
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

  <a class="w3-display-middle" style="color:black;float: center; margin-top: -10%; text-decoration: none;">Membership</a>

  <form action="Membership.php" method="post">
    <div class="signup">
      <table style="width:50%; color: black;">
        <tr>
          <td>Alamat E-mail</td>
          <td><input type="text" name="email" placeholder="" required style="width: 25vh; height: 2.5vw; border: 1px solid #ccc;"></td>
        </tr>
        <tr>
          <td>Password</td>
          <td><input type="text" name="password" placeholder="" required style="width: 25vh; height: 2.5vw; border: 1px solid #ccc;"></td>
          </td>
          <td>Tipe Membership</td>
          <td><select id="tipeMember" name="tipeMember" required style="width: 25vh; height: 2.5vw; border: 1px solid #ccc;">
              <option value="Magic Sealant">Magic Sealant</option>
              <option value="Magic Carnauba">Magic Carnauba</option>
              <option value="Magic Banana">Magic Banana</option>
            </select>
        </tr>
      </table>
    </div>
    <input type="file" name="file" style="margin-right: 15%">

    <button type="submit" class="enterbutton" name="enterBtn">Enter</button>
  </form>

</body>

</html>