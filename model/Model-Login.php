<?php
session_start();
//inisialisasi variabel
$email = "";
$password = "";
$errors = array();

$db = mysqli_connect('localhost' , 'root', '', 'c3') or die("can't connect to database");

if(isset($_POST['enterBtn'])){
    $email = mysqli_real_escape_string($db , $_POST['email']);
    $password = mysqli_real_escape_string($db , $_POST['password']);  
    $queryLogin = "SELECT email,password FROM user WHERE email = '$email' && password = '$password'";
    $res = mysqli_query($db, $queryLogin);
    $row = mysqli_fetch_array($res);
    if($row['password'] != $password){
        array_push($errors, "Password salah");
    }
    else {
        header('location: ../view/Home-Logged.php');
    }
}
    
?>
    
