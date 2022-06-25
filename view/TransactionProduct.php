<?php include('../model/Model-TransactionProduct.php') ?>
<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<title>Transaksi Produk</title>
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-dark-grey.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="http://cdn.jsdelivr.net/timepicker.js/latest/timepicker.min.css" rel="stylesheet" />
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
            width: 80%;
            color: black;
            margin-left: 20%;
            margin-top: 10%;
        }

        table,
        tr,
        td {
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
    <a href="DataTransaksi.php" class="w3-bar-item" style="float: left; margin-top:1.5%; text-decoration: none;">Transaksi Jasa</a>
    <a href="DataTransaksiProduk.php" class="w3-bar-item" style="float: left; margin-top:1.5%; text-decoration: none; ">Transaksi Produk</a>
    <a href="DataPelanggan.php" class="w3-bar-item" style="float: left; margin-top:1.5%; text-decoration: none;">Pelanggan</a>
    <a href="DataJasa.php" class="w3-bar-item" style="float: left; margin-top:1.5%; text-decoration: none;">Jasa</a>
    <a href="DataBarang.php" class="w3-bar-item" style="float: left; margin-top:1.5%; text-decoration: none;">Produk</a>
    <a href="DataSupplier.php" class="w3-bar-item" style="float: left; margin-top:1.5%; text-decoration: none;">Supplier</a>
    <a href="DataMembership.php" class="w3-bar-item" style="float: left; margin-top:1.5%; text-decoration: none;">Membership</a>
    <a href="RequestedMembership.php" class="w3-bar-item" style="float: left; margin-top:1.5%; text-decoration: none;">Requested Membership</a>
  </div>

    <a class="w3-display-middle" style="color:black;float: center; margin-top: -13%; text-decoration: none; font-size: 120%">Transaksi Produk</a>

    <?php
    $querySelect = "SELECT namaBarang, hargaBarang FROM barang";
    $results = mysqli_query($db, $querySelect) or die(mysqli_error($db));
    $table = $results->fetch_all(MYSQLI_ASSOC);
    ?>

    <?php
    $db = mysqli_connect('localhost', 'root', '', 'c3') or die("can't connect to database");
    $s = mysqli_query($db, "SELECT * FROM barang WHERE kategori = 'non jasa'");
    $data = $s->fetch_all(MYSQLI_ASSOC);
    ?>
    <form action="TransactionProduct.php" method="post">
        <div class="signup">
            <table style="width:50%; color: black;">
                <tr>
                    <td>Tanggal Pemesanan</td>
                    <td>
                        <form action="/action_page.php">
                            <input type="date" id="tanggalTransaksi" name="tanggalTransaksi" min="<?php echo date("Y-m-d") ?>" style="width: 25vh; height: 2.5vw; border: 1px solid #ccc;">
                        </form>
                    </td>
                    <td>Pilihan Barang 1</td>
                    <td><select class='barang1' id="barang1" name="barang1" required style="width: 25vh; height: 2.5vw; border: 1px solid #ccc;">
                            <option value="">-</option>
                            <?php
                            foreach ($data as $r) {
                            ?>
                                <option value="<?php echo $r['namaBarang']; ?>"><?php echo $r['namaBarang']; ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </td>
                    <td>Kuantitas</td>
                    <td><input type="text" id="kuantitas1" name="kuantitas1" style="width: 25vh; height: 2.5vw; border: 1px solid #ccc;"></td>
                    <td>Total Harga <span id="tampilHarga"></span>
                        <input type="hidden" id="totalHarga" name="totalHarga">
                    </td>
                </tr>
                <tr>
                    <td>Waktu Pemesanan</td>
                    <td>
                        <input type="time" id="waktuTransaksi" name="waktuTransaksi" style="width: 25vh; height: 2.5vw; border: 1px solid #ccc;">
                    </td>
                    <td>Pilihan Barang 2 (Opsional)</td>
                    <td><select class='barang2' id="barang2" name="barang2" style="width: 25vh; height: 2.5vw; border: 1px solid #ccc;">
                            <option value="">-</option>
                            <?php
                            foreach ($data as $r) {
                            ?>
                                <option value="<?php echo $r['namaBarang']; ?>"><?php echo $r['namaBarang']; ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </td>
                    <td>Kuantitas</td>
                    <td><input type="text" id="kuantitas2" name="kuantitas2"  placeholder="" style="width: 25vh; height: 2.5vw; border: 1px solid #ccc;"></td>

                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Pilihan Barang 3 (Opsional)</td>
                    <td><select class='barang3' id="barang3" name="barang3"  style="width: 25vh; height: 2.5vw; border: 1px solid #ccc;">
                            <option value="">-</option>
                            <?php
                            foreach ($data as $r) {
                            ?>
                                <option value="<?php echo $r['namaBarang']; ?>"><?php echo $r['namaBarang']; ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </td>
                    <td>Kuantitas</td>
                    <td><input type="text" id="kuantitas3" name="kuantitas3" placeholder="" style="width: 25vh; height: 2.5vw; border: 1px solid #ccc;"></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>
                    </td>
                    
                    </td>
                    <td></td>
                </tr>
            </table>
        </div>

        <button type="submit" class="enterbutton" name="enterBtn">Enter</button>

    </form>
    <button type ="button" class="btnHitung" id ="btnHitung">Hitung Harga</button>


</body>
<script>
    function hitungHarga(barang) {
        var selectBarang = barang;
        var js_array = 
        <?php
            echo json_encode($table);
        ?>;

        console.log(js_array);

        if (selectBarang.value == ''){
            var hargaBarang = 0;
        }
        else{
            for (var i in js_array){
                var namaBarang = js_array[i]['namaBarang'];
                if (namaBarang == selectBarang.value.trim()){
                    var hargaBarang = parseInt(js_array[i]['hargaBarang']);         
                }
            }
        }
        return hargaBarang;
    }

    document.getElementById("btnHitung").addEventListener("click", function() {
        var barang1 = document.getElementById("barang1");
        var barang2 = document.getElementById("barang2");
        var barang3 = document.getElementById("barang3");
        var kuantitas1 = document.getElementById("kuantitas1").value;
        var kuantitas2 = document.getElementById("kuantitas2").value;
        var kuantitas3 = document.getElementById("kuantitas3").value;
        var value1 = barang1.options[barang1.selectedIndex].value;
        var value2 = barang2.options[barang2.selectedIndex].value;
        var value3 = barang3.options[barang3.selectedIndex].value;
        var harga1 = hitungHarga(barang1);
        var harga2 = hitungHarga(barang2);
        var harga3 = hitungHarga(barang3);
        var totalHarga = document.getElementById("totalHarga");

        
        totalHarga = harga1 * kuantitas1 + harga2 * kuantitas2 + harga3 * kuantitas3;
        console.log(totalHarga);
        tampilHarga.textContent = "Rp." + totalHarga.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
        document.getElementById("totalHarga").value = totalHarga;
    });
    

</script>

</html>