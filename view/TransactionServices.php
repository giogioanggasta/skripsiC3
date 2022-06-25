<?php include('../model/Model-TransactionServices.php') ?>
<!DOCTYPE html>
<html lang="en">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <title>Transaksi Servis</title>
  <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-dark-grey.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="http://cdn.jsdelivr.net/timepicker.js/latest/timepicker.min.css" rel="stylesheet"/>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js">
  </script>


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

    .signup {
        float:center;
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
        margin-top: 7.5%;
        margin-bottom: -10%;
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
        width: 80%;
        color: black;
        margin-left: 20%;
        margin-top: 10%;
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
    
    .btnHitung {
            width: 10%;
            background-color: steelblue;
            border: none;
            color: white;
            padding: 14px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 8px 0;
            /* margin-left: 190%; */
            float: left;
            margin-top: -8%;
            margin-left: 38%;
            cursor: pointer;
            border-radius: 4px;
            transition: 0.5s;
        }

    
</style>
</head>
<body>


<div class="w3-bar w3-white w3-border" id="menu">
    <a href="Transaction.php" class="w3-bar-item"><img src="../images/logoc3.png" style="width:150px"></a>
    <a href="DataTransaksi.php" class="w3-bar-item" style="float: left; margin-top:1.5%; text-decoration: none; ">Transaksi Jasa</a>
    <a href="DataTransaksiProduk.php" class="w3-bar-item" style="float: left; margin-top:1.5%; text-decoration: none; ">Transaksi Produk</a>
    <a href="DataPelanggan.php" class="w3-bar-item" style="float: left; margin-top:1.5%; text-decoration: none;">Pelanggan</a>
    <a href="DataJasa.php" class="w3-bar-item" style="float: left; margin-top:1.5%; text-decoration: none;">Jasa</a>
    <a href="DataBarang.php" class="w3-bar-item" style="float: left; margin-top:1.5%; text-decoration: none;">Produk</a>
    <a href="DataSupplier.php" class="w3-bar-item" style="float: left; margin-top:1.5%; text-decoration: none;">Supplier</a>
    <a href="DataMembership.php" class="w3-bar-item" style="float: left; margin-top:1.5%; text-decoration: none;">Membership</a>
    <a href="RequestedMembership.php" class="w3-bar-item" style="float: left; margin-top:1.5%; text-decoration: none;">Requested Membership</a>
  </div>

<a class="w3-display-middle" style="color:black;float: center; margin-top: -13%; text-decoration: none; font-size: 120%">Transaksi Jasa</a>

<?php 
$querySelect = "SELECT namaJasa, hargaJasa FROM jasa";
    $results = mysqli_query($db, $querySelect) or die( mysqli_error($db));
    $table = $results -> fetch_all(MYSQLI_ASSOC);
$querySelect2 = "SELECT namaMembership, diskon FROM membership";
    $resultss = mysqli_query($db, $querySelect2) or die(mysqli_error($db));
    $tablee = $resultss -> fetch_all(MYSQLI_ASSOC);
?>

<?php
$db = mysqli_connect('localhost' , 'root', '', 'c3') or die("can't connect to database");
$s = mysqli_query($db, "SELECT * FROM jasa");
$data = $s -> fetch_all(MYSQLI_ASSOC);
$ss = mysqli_query($db, "SELECT * FROM membership");
$dataa = $ss -> fetch_all(MYSQLI_ASSOC);
?>
<form action="TransactionServices.php" method="post">
        <div class="signup">
            <table style="width:50%; color: black;">
                <tr>
                    <td>Tanggal Pemesanan</td>
                    <td><form action="/action_page.php" >
                            <input type="date" id="tanggalTransaksi" name="tanggalTransaksi" min="<?php echo date("Y-m-d") ?>" style="width: 25vh; height: 2.5vw; border: 1px solid #ccc;">
                        </form></td>
                    <td>Pilihan Jasa 1</td>
                    <td><select class='jasa' id="jasa1" name="jasa1" required style="width: 25vh; height: 2.5vw; border: 1px solid #ccc;">
                    <option value="">-</option>
                            <?php
                                foreach($data as $r) {
                                    ?>
                                    <option value="<?php echo $r['namaJasa']; ?>"><?php echo $r['namaJasa']; ?></option>
                                    <?php
                                }
                            ?> 
                        </select>
                    </td>
                    <td>Catatan Pelanggan</td>
                    <td><input type="text" name="catatanPelanggan" placeholder="" style="width: 25vh; height: 2.5vw; border: 1px solid #ccc;"></td>
                    
                </tr>
                <tr>
                <td>Waktu Pemesanan</td>
                    <td>
                        <input type="time" id="waktuTransaksi" name="waktuTransaksi" step="3600" min="08:00" max="17:00" style="width: 25vh; height: 2.5vw; border: 1px solid #ccc;">
                    </td>
                    <td>Pilihan Jasa 2 (Opsional)</td>
                    <td><select class='jasa' id="jasa2" name="jasa2" style="width: 25vh; height: 2.5vw; border: 1px solid #ccc;">
                            <option value="">-</option>
                            <?php
                                foreach($data as $r) {
                                    ?>
                                    <option value="<?php echo $r['namaJasa']; ?>"><?php echo $r['namaJasa']; ?></option>
                                    <?php
                                }
                            ?> 
                        </select>
                    </td>
                    <td>Tipe Membership</td>
                    <td><select class='membership' id="membership" name="membership" style="width: 25vh; height: 2.5vw; border: 1px solid #ccc;">
                            <option value="">-</option>
                            <?php
                                foreach($dataa as $r) {
                                    ?>
                                    <option value="<?php echo $r['namaMembership']; ?>"><?php echo $r['namaMembership']; ?></option>
                                    <?php
                                }
                            ?> 
                        </select>
                    </td>

                    
                </tr>
                <tr>
                    <td>Plat Nomor Kendaraan</td>
                    <td><input type="text" name="platKendaraan" style="width: 25vh; height: 2.5vw; border: 1px solid #ccc;"></td>
                    <td>Pilihan Jasa 3 (Opsional)</td>
                    <td><select class='jasa' id="jasa3" name="jasa3" style="width: 25vh; height: 2.5vw; border: 1px solid #ccc;">
                            <option value="">-</option>
                            <?php
                                foreach($data as $r) {
                                    ?>
                                    <option value="<?php echo $r['namaJasa']; ?>"><?php echo $r['namaJasa']; ?></option>
                                    <?php
                                }
                            ?> 
                        </select>
                    </td>
                </tr>
                <tr>
                
                    <td>Jenis Mobil</td>
                    <td><input type="text" name="jenisMobil" style="width: 25vh; height: 2.5vw; border: 1px solid #ccc;"></td>
                    <td>
                        Total Harga
                        <span id="tampilHarga"></span>
                        <input type="hidden" id="totalHarga" name="totalHarga">
                    </td>

                    <td>
                        Diskon anda 
                        <span id="tampilDiskon"></span>
                        <input type="hidden" id="hargaDiskon" name="hargaDiskon">
                    </td>

                    <td>
                        Harga Final : <span id="tampilHargaFinal"></span>
                        <input type="text" id="hargaFinal" name="hargaFinal">
                    </td>
                    <td>
                    </td>
                </tr>
            </table>
        </div>

<button type="submit" class="enterbutton" name="enterBtn">Enter</button>

</form>
<button type ="button" class="btnHitung" id ="btnHitung">Hitung Harga</button>

</body>
<script>
    function hitungHarga(jasa) {
        var selectJasa = jasa;
        var js_array = 
        <?php
            echo json_encode($table);
        ?>;

        console.log(js_array);

        if (selectJasa.value == ''){
            var hargaJasa = 0;
        }
        else{
            for (var i in js_array){
                var namaJasa = js_array[i]['namaJasa'];
                if (namaJasa == selectJasa.value.trim()){
                    var hargaJasa = parseInt(js_array[i]['hargaJasa']);         
                }
            }
        }
        return hargaJasa;
    }

    function hitungDiskon(membership) {
        var selectMembership = membership;
        var js_array =
        <?php
            echo json_encode($tablee);
        ?>;

        console.log(js_array);

        if (selectMembership.value == ''){
            var diskon = 0;
        }
        else{
            for (var i in js_array){
                var namaMembership = js_array[i]['namaMembership'];
                if (namaMembership == selectMembership.value.trim()){
                    var diskon = js_array[i]['diskon'];         
                }
            }
        }
        return diskon;
    }

    document.getElementById("btnHitung").addEventListener("click", function() {
        var jasa1 = document.getElementById("jasa1");
        var jasa2 = document.getElementById("jasa2");
        var jasa3 = document.getElementById("jasa3");
        var membership = document.getElementById("membership");
        console.log(membership);
        console.log(jasa1,jasa2,jasa3);
        var value1 = jasa1.options[jasa1.selectedIndex].value;
        var value2 = jasa2.options[jasa2.selectedIndex].value;
        var value3 = jasa3.options[jasa3.selectedIndex].value;
        var harga1 = hitungHarga(jasa1);
        var harga2 = hitungHarga(jasa2);
        var harga3 = hitungHarga(jasa3);
        var diskon = hitungDiskon(membership);
        
        totalHarga = (harga1 + harga2 + harga3);
        totalHargaFinal = (harga1 + harga2 + harga3) - ((harga1 + harga2 + harga3)* (diskon/100));
        console.log(totalHarga);
        tampilHarga.textContent = "Rp." + totalHarga.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
        tampilHargaFinal.textContent = "Rp." + totalHargaFinal.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
        tampilDiskon.textContent = diskon + "%";
        document.getElementById("hargaFinal").value = totalHargaFinal;
    });

        

  </script>
</html>