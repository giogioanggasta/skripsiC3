<?php
session_start();

$db = mysqli_connect('localhost' , 'root', '', 'c3') or die("can't connect to database");

if(isset($_POST['buttonTerima'])){
    $idTransaksi = $_POST['idTransaksi'];
    $queryTerima = "UPDATE transaksi SET status='Pemesanan Diterima' WHERE idTransaksi = '$idTransaksi'";
    mysqli_query($db, $queryTerima);
    header('location: ../view/DataTransaksi.php');
    }

if(isset($_POST['btnBatal'])){
    $alasanPembatalan = $_POST['alasanPembatalan'];
    $idTransaksi = $_POST['idTransaksi'];
    $queryPembatalan = "UPDATE transaksi SET status='Pemesanan Ditolak', alasanPembatalan='$alasanPembatalan' WHERE idTransaksi = '$idTransaksi'";
    mysqli_query($db, $queryPembatalan);
    header('location: ../view/DataTransaksi.php');
    }
    
?>