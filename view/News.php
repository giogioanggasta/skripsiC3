<?php
session_start();

$db = mysqli_connect('localhost', 'root', '', 'c3') or die("can't connect to database");

?>

<!DOCTYPE html>


<head>
  <title>Berita</title>
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
      color: black;
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
      margin-left: 10%;
      float: left;
    }
  </style>
</head>

<body>


<?php include_once './_partials/Navbar.php'; ?>

  <a class="w3-display-middle" style="color:black;float: center; margin-top: -10%; text-decoration: none;">Berita</a>

  <?php
  $sql = "SELECT * FROM berita";
  $results = mysqli_query($db, $sql) or die(mysqli_error($db));

  while ($row = mysqli_fetch_array($results)) {

  ?>
    <div class="container">
      <div class="col">
        <div class="col-12 col-md-6 col-lg-4">
          <div class="card">
          <img src="../model/uploadImage/<?php echo $row['fotoBerita'] ?>" style="width:70%"><br>
            <div class="card-body">
              <h5 class="card-title"><?php echo $row["namaBerita"] ?> </h5>
              <p class="card-text"><?php echo $row["keteranganBerita"] ?> </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  <?php

  }
  ?>



</body>

</html>