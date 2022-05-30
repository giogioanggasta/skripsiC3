<?php
session_start();
//inisialisasi variabel
$nama = "";
$jenis_kelamin = "";
$tanggal_lahir = "";
$nomor_telepon = "";
$email = "";
$password = "";
$errors = array();


$db = mysqli_connect('localhost' , 'root', '', 'c3') or die("can't connect to database");

if(isset($_POST['enterBtn'])){
$nama = mysqli_real_escape_string($db ,$_POST['nama']);
$jenis_kelamin = mysqli_real_escape_string($db , $_POST['jenisKelamin']);
$tanggal_lahir = mysqli_real_escape_string($db , $_POST['tanggalLahir']);
$final_tanggal = date('Y-m-d' , strtotime($tanggal_lahir));
$nomor_telepon = mysqli_real_escape_string($db , $_POST['nomorTelepon']);
$email = mysqli_real_escape_string($db , $_POST['e-mail']);
$password = mysqli_real_escape_string($db , $_POST['password']);

//Check database jika ada user dengan email yang sama
$user_check_query = "SELECT * FROM user WHERE email = '$email' LIMIT 1";
$results = mysqli_query($db, $user_check_query);
$user = mysqli_fetch_assoc($results);

if($user){
    if($user['email'] === $email){
        array_push($errors, "This email is already registered");
    }
}
if(count($errors) == 0){

$querySignup = "INSERT INTO user (namaUser,jenisKelamin,tanggalLahir,noTelepon,email,password,tipeMembership,statusMembership) VALUES ('$nama' , '$jenis_kelamin', '$final_tanggal' , '$nomor_telepon' , '$email' , '$password' , 'Regular' , '')";
mysqli_query($db, $querySignup);
header('location: ../view/Login.php');
}

}



?>