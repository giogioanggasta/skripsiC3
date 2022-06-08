<?php include('../model/Model-DataPelanggan.php');



?>

<!DOCTYPE html>

  <head>
  <title>Data Pelanggan</title>
  <?php include_once './_partials/Header2.php'; ?>
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
        margin-left: 75%;
        margin-top: 5%;
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
        width: 70%;
        color: black;
        margin-left: 10%;
        margin-top: 2.5%;
    }

    table, tr, td {
        padding: 10px;
    }

    input[type=submit] {
        width: 20%;
        background-color: grey;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        margin-top: 5%;
        margin-left: 55%;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    .tablecust {
      font-family: texts2;
      font-size: 15px;
      color: #373737;
    }
    


    
</style>
</head>
<body>


<div class="w3-bar w3-white w3-border" id="menu">
    <a href="Transaction.php" class="w3-bar-item"><img src="../images/logoc3.png" style="width:150px"></a>
    <a href="DataTransaksi.php" class="w3-bar-item" style="float: left; margin-top:1.5%; text-decoration: none;">Transaksi</a>
    <a href="DataPelanggan.php" class="w3-bar-item" style="float: left; margin-top:1.5%; text-decoration: none; color:steelblue;">Pelanggan</a>
    <a href="DataJasa.php" class="w3-bar-item" style="float: left; margin-top:1.5%; text-decoration: none;">Jasa</a>
    <a href="DataBarang.php" class="w3-bar-item" style="float: left; margin-top:1.5%; text-decoration: none; ">Produk</a>
    <a href="DataSupplier.php" class="w3-bar-item" style="float: left; margin-top:1.5%; text-decoration: none;">Supplier</a>
    <a href="DataMembership.php" class="w3-bar-item" style="float: left; margin-top:1.5%; text-decoration: none;">Membership</a>
    <a href="RequestedMembership.php" class="w3-bar-item" style="float: left; margin-top:1.5%; text-decoration: none;">Requested Membership</a>
  </div>

<a class="w3-display-middle" style="color:black;float: center; margin-top: -13%; text-decoration: none; font-size: 120%">Tabel Pelanggan</a>

<a target="_blank" href="DownloadExcelPelanggan.php" style="margin-left: -48px;"> <button style="border: none;
                outline: 0;
                padding: 6px;
                color: white;
                background-color: steelblue;
                text-align: center;
                cursor: pointer;
                font-size: 16px;
                width: 15%;
                margin-top: 45px;
                margin-right: 35px;
                float: right;" >Download as Excel</button> </a>

<div class="w3-container" style="margin-left: -10%;">
    <table class="w3-table-all w3-center w3-hoverable" id="tabelcust" style="font-family: texts; font-size: 15px; width: 90%">
      <thead>
        <tr class="w3-light-grey">
          <th>ID Pelanggan</th>
          <th>Nama Pelanggan</th>
          <th>E-mail</th>
          <th>Jenis Kelamin</th>
          <th>Tanggal Lahir</th>]
          <th>Nomor Telepon</th>
          <th>Jenis Member</th>
        </tr>
      </thead>
      
      <?php
        $sql = "SELECT * FROM user";
        $results = mysqli_query($db, $sql) or die( mysqli_error($db));
        $check = mysqli_num_rows($results);
            if($check > 0){
                while($row = mysqli_fetch_array($results)) {
                echo "<tr>
                    <td>".$row["idUser"]."</td>
                    <td>".$row["namaUser"]."</td>
                    <td>".$row["email"]."</td>
                    <td>".$row["jenisKelamin"]."</td>
                    <td>".$row["tanggalLahir"]."</td>
                    <td>".$row["noTelepon"]."</td>
                    
                    <td>".$row["tipeMembership"]."</td>                    
                    </tr>";
                }
            
      ?>


    </table>
  </div>

  <?php 
    }

?> 

</body>
</html>

