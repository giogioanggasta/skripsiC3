<?php include('../model/Model-Book.php') ?>
<?php include('../helper/flash_session.php') ?>

<?php
    $querySelect = "SELECT namaJasa, hargaJasa FROM jasa";
    $results = mysqli_query($db, $querySelect) or die(mysqli_error($db));
    $table = $results->fetch_all(MYSQLI_ASSOC);

    $db = mysqli_connect('localhost', 'root', '', 'c3') or die("can't connect to database");
    $s = mysqli_query($db, "SELECT * FROM jasa");
    $data = $s->fetch_all(MYSQLI_ASSOC);

    //cari data membership user, jika tipeMembership ada dan statusMembership Accepted maka cari discountnya
    if ($_SESSION['tipeMembership'] && $_SESSION['statusMembership'] == 'Accepted') {
        $querySelect = "SELECT diskon FROM membership WHERE namaMembership = '".$_SESSION['tipeMembership']."'";
        $results = mysqli_query($db, $querySelect) or die(mysqli_error($db));
        $rows = $results->fetch_all(MYSQLI_ASSOC);
        $discount = $rows[0]['diskon'];
    } else {
        $discount = 0;
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Book</title>
    <?php include './_partials/Header.php' ?>

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

        table,
        tr,
        td {
            padding: 10px;
        }
    </style>
</head>

<body>
    <?php include './_partials/Navbar.php' ?>

    <div align="center"><iframe src="https://calendar.google.com/calendar/embed?src=carcarecentermedan%40gmail.com&ctz=Asia%2FJakarta" style="border: 0" width="1200" height="800" frameborder="0" display="block" scrolling="no"></iframe></div>

    <form action="Book.php" method="post">
        <input type="hidden" name="type" value="booking">
        <div class="signup">
            <table style="width:50%; color: black;">
                <tr>
                    <td>Tanggal Pemesanan</td>
                    <td>
                        <form action="/action_page.php">
                            <input type="date" id="tanggalTransaksi" name="tanggalTransaksi" min="<?php echo date("Y-m-d") ?>" style="width: 25vh; height: 2.5vw; border: 1px solid #ccc;">
                        </form>
                    </td>
                    <td>Pilihan Jasa 1</td>
                    <td><select class='jasa' id="jasa1" name="jasa1" onchange="handler('jasa1',1)" required style="width: 25vh; height: 2.5vw; border: 1px solid #ccc;">
                            <option value="">-</option>
                            <?php foreach ($data as $r): ?>
                                <option value="<?php echo $r['namaJasa']; ?>"><?php echo $r['namaJasa']; ?></option>
                            <?php endforeach; ?>
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
                            <?php foreach ($data as $r): ?>
                                <option value="<?php echo $r['namaJasa']; ?>"><?php echo $r['namaJasa']; ?></option>
                            <? endforeach; ?>
                        </select>
                    </td>


                </tr>
                <tr>
                    <td>Plat Nomor Kendaraan</td>
                    <td><input type="text" name="platKendaraan" style="width: 25vh; height: 2.5vw; border: 1px solid #ccc;"></td>
                    <td>Pilihan Jasa 3 (Opsional)</td>
                    <td><select class='jasa' id="jasa3" name="jasa3" onchange="handler('jasa3',3)" style="width: 25vh; height: 2.5vw; border: 1px solid #ccc;">
                            <option value="">-</option>
                            <?php foreach ($data as $r): ?>
                                <option value="<?php echo $r['namaJasa']; ?>"><?php echo $r['namaJasa']; ?></option>
                            <?php endforeach; ?>
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
                        Diskon anda <?= (int) $discount . "%" ?>
                        <span id="tampilHargaDiskon"></span>
                        <input type="hidden" id="hargaDiskon" name="hargaDiskon">
                    </td>

                    <td>
                        Harga Final : <span id="tampilHargaFinal"></span>
                        <input type="hidden" id="hargaFinal" name="hargaFinal">
                    </td>

                </tr>
            </table>
        </div>

        <button type="submit" class="enterbutton" name="enterBtn">Enter</button>

    </form>


</body>
<script>
    var totalHarga = document.getElementById("totalHarga");
    var hargaDiskon = document.getElementById("hargaDiskon");
    var hargaFinal = document.getElementById("hargaFinal");
    var tampilHarga = document.getElementById("tampilHarga");
    var tampilHargaDiskon = document.getElementById("tampilHargaDiskon");
    var tampilHargaFinal = document.getElementById("tampilHargaFinal");
    var diskon = document.getElementById("diskon");
    var sum = 0;
    var arrTemp = new Array(3).fill(0);

    function handler(id, idx) {

        var selectJasa = document.getElementById(id);
        var js_array =
            <?php
            echo json_encode($table);
            ?>;

        console.log(js_array);

        if (selectJasa.value == '') {
            var hargaJasa = 0;
        } else {
            for (var i in js_array) {
                var namaJasa = js_array[i]['namaJasa'];
                if (namaJasa == selectJasa.value.trim()) {
                    console.log(namaJasa);
                    var hargaJasa = parseInt(js_array[i]['hargaJasa']);
                }
            }
        }

        sum = sum + hargaJasa - arrTemp[idx - 1];
        arrTemp[idx - 1] = hargaJasa;
        console.log(arrTemp[idx - 1]);
        tampilHarga.textContent = "Rp." + sum;
        tampilHargaDiskon.textContent = "Rp." + (sum * <?= $discount ?> / 100);
        totalHarga.value = sum;
        hargaDiskon.value = sum * <?= $discount ?> / 100;
        tampilHargaFinal.textContent = "Rp." + (sum - sum * <?= $discount ?> / 100);
        hargaFinal.value = sum - sum * <?= $discount ?> / 100;
    }
</script>
</html>