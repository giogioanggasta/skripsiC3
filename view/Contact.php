<?php include('../model/SendMailContact.php') ?>

<!DOCTYPE html>

<head>
  <title>Hubungi Kami</title>
  <?php include_once './_partials/Header.php'; ?>



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
      margin-top: 5%;
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

<?php include_once './_partials/Navbar.php'; ?>

<div class="mapouter"><div class="gmap_canvas"><iframe width="2000" height="300" id="gmap_canvas" src="https://maps.google.com/maps?q=car%20care%20center%20medan&t=&z=13&ie=UTF8&iwloc=&output=embed" 
  frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://fmovies-online.net"></a><br><style>.mapouter{position:relative;text-align:right;height:300px;width:2000px;}</style>
  <style>.gmap_canvas {overflow:hidden;background:none!important;height:300px;width:2000px;}</style></div></div>
  <<form action="Contact.php" method="post">>
    <div class="login" style="padding-bottom: 75px">
      <fieldset style="width:120%">
      <h1>Pesan Anda</h1>
        <div class="isi">
          <br><br>
          <input type="text" name="emailSender" placeholder="E-mail" required style="width: 70vh; height: 2.5vw; border: 1px solid #ccc; padding: 6px; color:black; font-size:150%">
          <br><br>
          <input type="text" name="subjectMail" placeholder="Subject" required style="width: 70vh; height: 2.5vw; border: 1px solid #ccc; padding: 6px; color:black; font-size:150%">
          <br><br>
          <textarea name="message" cols="30" rows="10" required placeholder="Pesan Anda" style="width: 70vh; height: 10.5vw; border: 1px solid #ccc; padding: 6px; color:black; font-size:150%"></textarea>
          <br><br>
          <input type="submit" value="SEND" name="submitMasukan" style="width:620px; height: 40px; color: black; font-size:150%">
        </div>
      </fieldset>
    </div>
  </form>


</body>

</html>