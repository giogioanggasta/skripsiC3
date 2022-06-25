<?php
//inisialisasi variabel
$tanggalTransaksi = "";
$waktuTransaksi = "";
$barang1 = "";
$barang2 = "";
$barang3 = "";
$kuantitas1 = "";
$kuantitas2 = "";
$kuantitas3 = "";
$harga = "";

$db = mysqli_connect('localhost' , 'root', '', 'c3') or die("can't connect to database");

if(isset($_POST['enterBtn'])){
    $tanggalTransaksi = mysqli_real_escape_string($db , $_POST['tanggalTransaksi']);
    $final_tanggal = date('Y-m-d' , strtotime($tanggalTransaksi));
    $waktuTransaksi = $_POST['waktuTransaksi'];
    $final_waktu = date('H:i', strtotime($_POST['waktuTransaksi']));
    $barang1 = mysqli_real_escape_string($db , $_POST['barang1']);
    $barang2 = mysqli_real_escape_string($db , $_POST['barang2']);
    $barang3 = mysqli_real_escape_string($db , $_POST['barang3']);
    $kuantitas1 = (int)mysqli_real_escape_string($db , $_POST['kuantitas1']);
    $kuantitas2 = (int)mysqli_real_escape_string($db , $_POST['kuantitas2']);
    $kuantitas3 = (int)mysqli_real_escape_string($db , $_POST['kuantitas3']);
    $harga = $_POST['totalHarga'];
    $queryTransaksiBarang = "INSERT INTO transaksi_barang (tanggalTransaksi,waktuTransaksi,produk1,produk2,produk3,kuantitas1,kuantitas2,kuantitas3,totalHarga) VALUES ('$tanggalTransaksi' , '$waktuTransaksi' , '$barang1' , '$barang2' , '$barang3' , '$kuantitas1' , 
    '$kuantitas2' , '$kuantitas3' , '$harga')";
    mysqli_query($db, $queryTransaksiBarang);
    // $querySelectProduk1 = "SELECT * FROM barang where namaBarang = $barang1";
    // $resultsProduk1 = mysqli_query($db, $querySelectProduk1) or die(mysqli_error($db));
    // $tableProduk1 = $results->fetch_all(MYSQLI_ASSOC);
    // $stokBarang = $rows[0]['stokBarang'];
    // $stokTemp = $stokBarang - $kuantitas1;
    // $queryKurangStokProduk1 = "UPDATE barang SET stokBarang = $stokTemp WHERE namaBarang= $barang1";
    // echo '<h1>tes</h1>';
    // echo '<script>console.log($stokTemp)</script>';
    header('location: ../view/TransaksiBerhasil.php');

    

    // mysqli_query($db, $queryKurangStokProduk1);
}







?>