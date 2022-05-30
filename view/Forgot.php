<!DOCTYPE html>
<html>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <title>Forgot</title>
  <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-dark-grey.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="http://cdn.jsdelivr.net/timepicker.js/latest/timepicker.min.js"></script>
  <link href="http://cdn.jsdelivr.net/timepicker.js/latest/timepicker.min.css" rel="stylesheet"/>


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

        body {
            font-family: texts;
            color: white;
        }

        .login {
            margin-top: 2.5%;
            margin-left: 27.5%;
            float: left;
            text-align: center;
        }
        
        .loginbutton {
          width: 5%;
          background-color: grey;
          border: none;
          color: white;
          padding: 14px;
          text-align: center;
          text-decoration: none;
          display: inline-block;
          font-size: 16px;
          margin: 8px 0;
          margin-left: 27.5%;
          margin-top: 7.5%;
          cursor: pointer;
          border-radius: 4px;
          transition: 0.5s;
        }

        .signupbutton {
          width: 5%;
          background-color: white;
          border: none;
          color: black;
          padding: 14px;
          text-align: center;
          text-decoration: none;
          display: inline-block;
          font-size: 16px;
          margin: 8px 0;
          margin-left: 0%;
          margin-top: 7.5%;
          cursor: pointer;
          border-radius: 4px;
          transition: 0.5s;
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


        .button:hover {
            background-color: grey;
            transition: 0.5s;
        }

        h5 {
            font-family: navBarFont;
            font-size: 20px;
            color: white;
        }
        
    </style>
</head>
<body>

<div class="w3-bar " id="menu">
  <a href="Home.php" class="w3-bar-item"><img src="../images/logoc3.png" style="width:150px"></a>
</div>

<button onclick="location.href = 'Login.php'" class="loginbutton" style="color:black">Login</button>
<button onclick="location.href = 'Signup.php'" class="signupbutton" style="color:black">Signup</button>
<form>
        <div class="login">
            <fieldset style="width:120%">
                <div class="isi">
                    <br>
                    <input type="text" name="email" placeholder="E-mail" required style="width: 70vh; height: 2.5vw; border: 1px solid #ccc; padding: 12px;">
                    <br><br>
                    <button onclick="location.href = 'LoginNewPassword.php'" class="button" style="color:black;">NEXT</button>
                </div>
            </fieldset>
        </div>
</form>

</body>
</html>