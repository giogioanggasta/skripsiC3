<?php include('../model/Model-Register.php') ?>

<!DOCTYPE html>



<head>
<title>Signup</title>
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
          background-color: white;
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
          background-color: #183059;
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
          margin-top: 6.5%;
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
        
        table {
            width: 50%;
            color: black;
            margin-left: 25%;
            margin-top: 2.5%;
        }

        table, tr, td {
            padding: 10px;
        }



        
    </style>
</head>
<body>

<div class="w3-bar " id="menu">
  <a href="Home.php" class="w3-bar-item"><img src="../images/logoc3.png" style="width:150px"></a>
</div>

<button onclick="location.href = 'Login.php'" class="loginbutton" style="color:black">Login</button>
<button onclick="location.href = 'Signup.php'" class="signupbutton" style="color:white">Signup</button>
<?php include('../model/Model-Errors.php') ?>
<form action="Signup.php" method="post">

        <div class="signup">
            <table style="width:50%; color: black;">
                <tr>
                    <td>Nama</td>
                    <td><input type="text" name="nama" placeholder="" required style="width: 25vh; height: 2.5vw; border: 1px solid #ccc;"></td>
                    <td>Alamat E-mail</td>
                    <td><input type="text" name="e-mail" placeholder="" required style="width: 25vh; height: 2.5vw; border: 1px solid #ccc;"></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td><select id="jenisKelamin" name="jenisKelamin" required style="width: 25vh; height: 2.5vw; border: 1px solid #ccc;">
                            <option value="Pria">Pria</option>
                            <option value="Wanita">Wanita</option>
                        </select>
                    </td>
                   <td>Password</td>
                    <td><input type="password" name="password" placeholder="" required style="width: 25vh; height: 2.5vw; border: 1px solid #ccc;"></td>
                </tr>
                <tr>
                    <td>Tanggal Lahir</td>
                    <td><form action="/action_page.php" >
                            <input type="date" id="tanggalLahir" name="tanggalLahir" required style="width: 25vh; height: 2.5vw; border: 1px solid #ccc;">
                        </form></td>
                </tr>
                <tr>
                    <td>Nomor Telepon</td>
                    <td><input type="text" name="nomorTelepon" placeholder="" style="width: 25vh; height: 2.5vw; border: 1px solid #ccc;"></td>
            </table>
        </div>

<a class="w3-display-middle" style="color:black;float: center; margin-top: 14%; text-decoration: none;">Dengan menekan tombol Enter, anda setuju dengan <b>persyaratan penggunaan dan kebijakan privasi</b> dan menyetujui untuk menerima terkait informasi</a>
<button type="submit" class="enterbutton" name="enterBtn">Enter</button>
</form>

</body>
</html>