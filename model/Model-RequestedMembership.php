<?php
session_start();

$db = mysqli_connect('localhost' , 'root', '', 'c3') or die("can't connect to database");

if(isset($_POST['buttonTerima'])){
    $email = $_POST['email'];
    $queryTerima = "UPDATE user SET statusMembership='Accepted' WHERE email = '$email'";
    mysqli_query($db, $queryTerima);
    header('location: ../view/RequestedMembership.php');
    }

if(isset($_POST['buttonTolak'])){
    $email = $_POST['email'];
    $queryTolak = "UPDATE user SET statusMembership='Refused' WHERE email = '$email'";
    mysqli_query($db, $queryTolak);
    header('location: ../view/RequestedMembership.php');
    }

?>