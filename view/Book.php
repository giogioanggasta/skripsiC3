<?php include('../model/Model-Book.php') ?>

<!DOCTYPE html>
<html lang="en">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <title>Book</title>
  <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-dark-grey.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="http://cdn.jsdelivr.net/timepicker.js/latest/timepicker.min.css" rel="stylesheet"/>
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

        a {
          font-family: navBarFont;
          font-size: 25px;
          color: #868B8E;
          font-style: bold;
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
          margin-left: 65%;
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
            width: 50%;
            color: black;
            margin-left: 25%;
            margin-top: 10.5%;
        }

        table, tr, td {
            padding: 10px;
        }

</style>
</head>
<body>


<div class="w3-bar w3-white w3-border" id="menu">
    <a href="Home-logged.php" class="w3-bar-item"><img src="../images/logoc3.png" style="width:150px"></a>
    <a href="Home.php" class="w3-bar-item" style="float: right; margin-top:2%; text-decoration: none;"><img src="../images/logout.png" style="width:25px"></a>
    <a href="Profile.php" class="w3-bar-item" style="float: right; margin-top:2%; text-decoration: none;"><img src="../images/user.png" style="width:30px"></a>
    <a href="Membership.php" class="w3-bar-item" style="float: right; margin-top:2%; text-decoration: none;">Membership</a>
    <a href="News.php" class="w3-bar-item" style="float: right; margin-top:2%; text-decoration: none;">Berita</a>
    <a href="Product.php" class="w3-bar-item" style="float: right; margin-top:2%; text-decoration: none;">Produk</a>
    <a href="Promo.php" class="w3-bar-item" style="float: right; margin-top:2%; text-decoration: none;">Promo</a>
    <a href="Services.php" class="w3-bar-item" style="float: right; margin-top:2%; text-decoration: none;">Servis</a>
    <a href="Book.php" class="w3-bar-item" style="float: right; margin-top:2%; text-decoration: none;">Book</a>
  </div>

<?php
    $querySelect = "SELECT namaJasa, hargaJasa FROM jasa";
    $results = mysqli_query($db, $querySelect) or die( mysqli_error($db));
    $table = $results -> fetch_all(MYSQLI_ASSOC);
?>
<div align="center"><iframe src="https://calendar.google.com/calendar/embed?src=carcarecentermedan%40gmail.com&ctz=Asia%2FJakarta" style="border: 0" width="1200" height="800" frameborder="0" display="block" scrolling="no"></iframe></div>
<?php
$db = mysqli_connect('localhost' , 'root', '', 'c3') or die("can't connect to database");
$s = mysqli_query($db, "SELECT * FROM jasa");
$data = $s -> fetch_all(MYSQLI_ASSOC);
?>
<form action="Book.php" method="post">
        <div class="signup">
            <table style="width:50%; color: black;">
                <tr>
                    <td>Tanggal Pemesanan</td>
                    <td><form action="/action_page.php" >
                            <input type="date" id="tanggalTransaksi" name="tanggalTransaksi" min="<?php echo date("Y-m-d") ?>" style="width: 25vh; height: 2.5vw; border: 1px solid #ccc;">
                        </form></td>
                    <td>Pilihan Jasa 1</td>
                    <td><select class='jasa' id="jasa1" name="jasa1" onchange="handler('jasa1',1)" required style="width: 25vh; height: 2.5vw; border: 1px solid #ccc;">
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
                        <input type="time" id="waktuTransaksi" name="waktuTransaksi" step="3600" min="08:00" max="16:00" style="width: 25vh; height: 2.5vw; border: 1px solid #ccc;">
                    </td>
                    <td>Pilihan Jasa 2 (Opsional)</td>
                    <td><select class='jasa' id="jasa2" name="jasa2" onchange="handler('jasa2',2)" style="width: 25vh; height: 2.5vw; border: 1px solid #ccc;">
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
                    <td>Plat Nomor Kendaraan</td>
                    <td><input type="text" name="platKendaraan" style="width: 25vh; height: 2.5vw; border: 1px solid #ccc;"></td>
                    <td>Pilihan Jasa 3 (Opsional)</td>
                    <td><select class='jasa' id="jasa3" name="jasa3" onchange="handler('jasa3',3)" style="width: 25vh; height: 2.5vw; border: 1px solid #ccc;">
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
                    <td>Total Harga <span id="tampilHarga"></span> 
                        <input type="hidden" id="totalHarga" name="totalHarga">
                    </td>
                    <td>
                    </td>
                </tr>
            </table>
        </div>

<button type="submit" class="enterbutton" name="enterBtn">Enter</button>

</form>


</body>
<script>

    var totalHarga = document.getElementById("totalHarga");
    var tampilHarga = document.getElementById("tampilHarga");
    var sum = 0;
    var arrTemp = new Array(3).fill(0);

    function handler(id, idx){
    
        var selectJasa = document.getElementById(id);
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
                    console.log(namaJasa);
                    var hargaJasa = parseInt(js_array[i]['hargaJasa']);
                }
            }
        }

        sum = sum + hargaJasa - arrTemp[idx-1];
        arrTemp[idx-1] = hargaJasa;
        console.log(arrTemp[idx-1]);
        tampilHarga.textContent = "Rp." + sum;
        totalHarga.value = sum;
    }

        

  </script>
</html>