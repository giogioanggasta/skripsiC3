<?php include('../model/Model-EditProfile.php') ?>

<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<title>My Profile</title>
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-dark-grey.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="http://cdn.jsdelivr.net/timepicker.js/latest/timepicker.min.js"></script>
<link href="http://cdn.jsdelivr.net/timepicker.js/latest/timepicker.min.css" rel="stylesheet" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
            margin-top: 3.5%;
        }

        table,
        tr,
        td {
            padding: 10px;
        }
    </style>
</head>

<body>

    <?php
    $email = 
    $sql = "SELECT * FROM user";
    $results = mysqli_query($db, $sql) or die(mysqli_error($db));

    while ($row = mysqli_fetch_array($results)) {



    ?>

<div class="w3-bar w3-white w3-border" id="menu">
    <a href="Home-logged.php" class="w3-bar-item"><img src="../images/logoc3.png" style="width:150px"></a>
    <a href="Home.php" class="w3-bar-item" style="float: right; margin-top:2%; text-decoration: none;"><img src="../images/logout.png" style="width:25px"></a>
    <a href="MyBooking.php" class="w3-bar-item" style="float: right; margin-top:2%; text-decoration: none;"><img src="../images/order.png" style="width:30px"></a>
  </div>

        <form action="Profile.php" method="post">
            <img src="../images/user.png" style="margin-left:42.5%; margin-top: 5%">
            <div class="signup">
                <table style="width:50%; color: black;">
                    <tr>
                        <td>Nama</td>
                        <td><input type="text" name="nama" value="<?php echo $row['namaUser'] ?>" required style="width: 25vh; height: 2.5vw; border: 1px solid #ccc;"></td>
                        <td>Alamat E-mail</td>
                        <td><input type="text" name="e-mail" value="<?php echo $row['email'] ?>"  required style="width: 25vh; height: 2.5vw; border: 1px solid #ccc;"></td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td><select id="jenisKelamin" name="jenisKelamin" value="<?php echo $row['jenisKelamin'] ?>" required style="width: 25vh; height: 2.5vw; border: 1px solid #ccc;">
                                <option value="Pria">Pria</option>
                                <option value="Wanita">Wanita</option>
                            </select>
                        </td>
                        <td>Password</td>
                        <td><input type="password" name="password" value="<?php echo $row['password'] ?>" required style="width: 25vh; height: 2.5vw; border: 1px solid #ccc;"></td>
                    </tr>
                    <tr>
                        <td>Tanggal Lahir</td>
                        <td>
                            <form action="/action_page.php">
                                <input type="date" id="tanggalLahir" name="tanggalLahir" value="<?php echo $row['tanggalLahir'] ?>" required style="width: 25vh; height: 2.5vw; border: 1px solid #ccc;">
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <td>Nomor Telepon</td>
                        <td><input type="text" name="nomorTelepon" value="<?php echo $row['noTelepon'] ?>"  style="width: 25vh; height: 2.5vw; border: 1px solid #ccc;"></td>
                </table>
            </div>
            <button type="submit" class="enterbutton" name="enterBtn">Enter</button>
        </form>


    <?php
    }

    ?>

</body>

</html>