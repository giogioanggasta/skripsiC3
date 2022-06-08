<?php
session_start();
//inisialisasi variabel
$tanggalTransaksi = "";
$waktuTransaksi = "";
$barang1 = "";
$barang2 = "";
$barang3 = "";
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
    $harga = $_POST['totalHarga'];
    $queryTransaksiBarang = "INSERT INTO transaksi_barang (tanggalTransaksi,waktuTransaksi,barang1,barang2,barang3,totalHarga) VALUES ('$tanggalTransaksi' , '$waktuTransaksi' , '$barang1' , '$barang2' , '$barang3' , '$harga')";
    mysqli_query($db, $queryTransaksiBarang);

    header('location: ../view/TransaksiBerhasil.php');
}







?>