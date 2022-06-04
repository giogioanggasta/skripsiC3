<?php
session_start();
//inisialisasi variabel
$nama = "";
$jenis_kelamin = "";
$tanggal_lahir = "";
$nomor_telepon = "";
$email = "";
$password = "";

$db = mysqli_connect('localhost' , 'root', '', 'c3') or die("can't connect to database");

if(isset($_POST['enterBtn'])){
$nama = mysqli_real_escape_string($db ,$_POST['nama']);
$jenis_kelamin = mysqli_real_escape_string($db , $_POST['jenisKelamin']);
$tanggal_lahir = mysqli_real_escape_string($db , $_POST['tanggalLahir']);
$final_tanggal = date('Y-m-d' , strtotime($tanggal_lahir));
$nomor_telepon = mysqli_real_escape_string($db , $_POST['nomorTelepon']);
$email = mysqli_real_escape_string($db , $_POST['e-mail']);
$password = mysqli_real_escape_string($db , $_POST['password']);

$queryEditJasa = "UPDATE jasa SET kodeJasa = '$kodeJasa', namaJasa = '$namaJasa' , fotoJasa = '$fileNameNew' , keteranganJasa = '$keteranganJasa' , hargaJasa = '$hargaJasa' 
WHERE idJasa = '$idJasa'";


$queryEditProfile = "UPDATE user SET namaUser = '$nama' , jenisKelamin = '$jenis_kelamin' , tanggalLahir = '$final_tanggal' , noTelepon = '$nomor_telepon' , email = '$email'
, password = '$password' WHERE email = '$email'";

mysqli_query($db, $queryEditProfile);
header('location: ../view/Profile.php');
}





?>