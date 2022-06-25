<?php include('../model/Model-DownloadExcel.php');

header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Data Transaksi.xls");

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <table>
        <tr>
            <th>ID Transaksi</th>
            <th>Tanggal Transaksi</th>
            <th>Waktu Transaksi</th>
            <th>Pilihan Produk 1</th>
            <th>Kuantitas Produk 1</th>
            <th>Pilihan Produk 2</th>
            <th>Kuantitas Produk 2</th>
            <th>Pilihan Produk 3</th>
            <th>Kuantitas Produk 3</th>
            <th>Total Harga</th>
        </tr>

        <?php
        $sqlHasilTabel = "SELECT * FROM transaksi_barang";
        $restabel = mysqli_query($db, $sqlHasilTabel) or die(mysqli_error($db));
        $check = mysqli_num_rows($restabel);
        while ($row = mysqli_fetch_array($restabel)) {
        ?>
            <tr>
                <td><?php echo $row["idTransaksi"] ?></td>
                <td><?php echo $row["tanggalTransaksi"] ?></td>
                <td><?php echo $row["waktuTransaksi"] ?></td>
                <td><?php echo $row["produk1"] ?></td>
                <td><?php echo $row["kuantitas1"] ?></td>
                <td><?php echo $row["produk2"] ?></td>
                <td><?php echo $row["kuantitas2"] ?></td>
                <td><?php echo $row["produk3"] ?></td>
                <td><?php echo $row["kuantitas3"] ?></td>
                <td><?php echo $row["totalHarga"] ?></td>
            </tr>

        <?php
        }
        ?>
    </table>
</body>

</html>