<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<title>Servis</title>
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

<a class="w3-display-middle" style="color:black;float: center; margin-top: -10%; text-decoration: none;">Servis</a>

<div class="signup w3-display-middle">
            <table style="width:50%; color: black; margin-top:20%; margin-left:-3.5%;">
                <tr>
                    <td><img src="../images/gantioli2.jpg" style="width:350px; margin-top: 130%"></td>
                    <td><img src="../images/tuneup.jpg" style="width:350px; margin-top: 130%; margin-left: 15%;"></td>
                    <td><img src="../images/coating.jpg" style="width:350px; margin-top: 130%; margin-left: 30%;"></td>
                </tr>
                <tr>
                    <td><a href="" style="margin-left:0%; text-decoration: none;">Ganti Oli Mobil</a></td>
                    <td><a href="" style="margin-left:15%; text-decoration: none;">Tune Up HHO</a></td>
                    <td><a href="" style="margin-left:30%; text-decoration: none;">Coating Mobil</a></td>
                </tr>
                <tr>
                    <td><a href="" style="margin-left:0%; text-decoration: none; font-family: texts; font-size: 17px;">Ganti Oli Mobil bagi seluruh pemilik kendaraan, baik kendaraan beroda dua maupun roda empat merupakan ritual rutin yang wajib ...</a></td>
                    <td><a href="" style="margin-left:15%; text-decoration: none; font-family: texts; font-size: 17px;">HHo( Fuel Injector Carbon cleaner) adalah metode membersihkan ruang bakar dengan cara memasukkan ...</a></td>
                    <td><a href="" style="margin-left:30%; text-decoration: none; font-family: texts; font-size: 17px;">Coating Mobil merupakan sistem aplikasi pelapis cat yang berfungsi melindungi clear coat mobil dengan ...</a></td>
                </tr>
                <tr>
                    <td><a href="" style="margin-left:0%; text-decoration: none; font-family: texts; font-size: 15px; text-align: left;">Read more</a></td>
                    <td><a href="" style="margin-left:15%; text-decoration: none; font-family: texts; font-size: 15px; text-align: left;">Read more</a></td>
                    <td><a href="" style="margin-left:30%; text-decoration: none; font-family: texts; font-size: 15px; text-align: left;">Read more</a></td>
                </tr>
                <tr>
                    <td><img src="../images/acmobil.jpg" style="width:350px; margin-top: 15%"></td>
                    <td><img src="../images/mekanik.jpg" style="width:350px; margin-left: 15%; margin-top: 15%"></td>
                    <td><img src="../images/salon.jpg" style="width:350px; margin-left: 30%; margin-top: 15%"></td>
                </tr>
                <tr>
                    <td><a href="" style="margin-left:0%; text-decoration: none;">AC Mobil</a></td>
                    <td><a href="" style="margin-left:15%; text-decoration: none;">Mekanik Mobil</a></td>
                    <td><a href="" style="margin-left:30%; text-decoration: none;">Salon Mobil</a></td>
                </tr>
                <tr>
                    <td><a href="" style="margin-left:0%; text-decoration: none; font-family: texts; font-size: 17px;">Ganti Oli Mobil bagi seluruh pemilik kendaraan, baik kendaraan beroda dua maupun roda empat merupakan ritual rutin yang wajib ..</a></td>
                    <td><a href="" style="margin-left:15%; text-decoration: none; font-family: texts; font-size: 17px;">HHo( Fuel Injector Carbon cleaner) adalah metode membersihkan ruang bakar dengan cara memasukkan media cairan atau foam (busa) pembersih….</a></td>
                    <td><a href="" style="margin-left:30%; text-decoration: none; font-family: texts; font-size: 17px;">Coating Mobil merupakan sistem aplikasi pelapis cat yang berfungsi melindungi clear coat mobil dengan teknologi nano sehingga mampu menutupi …</a></td>
                </tr>
                <tr>
                    <td><a href="" style="margin-left:0%; text-decoration: none; font-family: texts; font-size: 15px; text-align: left;">Read more</a></td>
                    <td><a href="" style="margin-left:15%; text-decoration: none; font-family: texts; font-size: 15px; text-align: left;">Read more</a></td>
                    <td><a href="" style="margin-left:30%; text-decoration: none; font-family: texts; font-size: 15px; text-align: left;">Read more</a></td>
            </table>
        </div>

</body>
</html>