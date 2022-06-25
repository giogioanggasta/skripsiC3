<?php
//inisialisasi variabel
$tanggalTransaksi = "";
$waktuTransaksi = "";
$jenisMobil = "";
$platKendaraan = "";
$jasa1 = "";
$jasa2 = "";
$jasa3 = "";
$catatanPelanggan = "";
$harga = "";

$db = mysqli_connect('localhost' , 'root', '', 'c3') or die("can't connect to database");

if(isset($_POST['enterBtn'])){
    $tanggalTransaksi = mysqli_real_escape_string($db , $_POST['tanggalTransaksi']);
    $final_tanggal = date('Y-m-d' , strtotime($tanggalTransaksi));
    $waktuTransaksi = $_POST['waktuTransaksi'];
    $final_waktu = date('H:i', strtotime($_POST['waktuTransaksi']));
    $jenisMobil = mysqli_real_escape_string($db , $_POST['jenisMobil']);
    $platKendaraan = mysqli_real_escape_string($db , $_POST['platKendaraan']);
    $jasa1 = mysqli_real_escape_string($db , $_POST['jasa1']);
    $jasa2 = mysqli_real_escape_string($db , $_POST['jasa2']);
    $jasa3 =  mysqli_real_escape_string($db , $_POST['jasa3']);
    $catatanPelanggan = mysqli_real_escape_string($db , $_POST['catatanPelanggan']);
    $harga = $_POST['hargaFinal'];
    $queryTransaksi = "INSERT INTO transaksi (idUser, tanggalTransaksi,waktuTransaksi,jenisMobil,platKendaraan,jasa1,jasa2,jasa3,catatanPelanggan,totalHarga,status,alasanPembatalan) 
    VALUES ('101', '$tanggalTransaksi' , '$waktuTransaksi' , '$jenisMobil', '$platKendaraan' , '$jasa1' , '$jasa2' , '$jasa3' , '$catatanPelanggan' , '$harga', 'Bayar di tempat' , '')";
    mysqli_query($db, $queryTransaksi);
    header('location: ../view/TransaksiBerhasil.php');
}







?>