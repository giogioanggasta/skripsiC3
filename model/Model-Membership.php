<?php
session_start();
//inisialisasi variabel

$tipeMember = "";
$errors = array();

$db = mysqli_connect('localhost' , 'root', '', 'c3') or die("can't connect to database");

if(isset($_POST['enterBtn'])){
    $tipeMember = mysqli_real_escape_string($db , $_POST['tipeMember']);
    $alamatEmail = mysqli_real_escape_string($db , $_POST['email']);
    $queryMember = "UPDATE user SET tipeMembership = '$tipeMember', statusMembership = 'Requested' WHERE email='$alamatEmail'";
    mysqli_query($db, $queryMember);
    header('location: ../view/Home-Logged.php');
}

?>