<?php
session_start();
//inisialisasi variabel
$kodeMembership = "";
$namaMembership = "";
$tarifMembership = "";
$keteranganMembership = "";


$db = mysqli_connect('localhost' , 'root', '', 'c3') or die("can't connect to database");
//insert barang
if(isset($_POST['btnInsert'])){

    $kodeMembership = mysqli_real_escape_string($db ,$_POST['tambahKode']);
    $namaMembership = mysqli_real_escape_string($db , $_POST['tambahNama']);
    $tarifMembership = mysqli_real_escape_string($db , $_POST['tambahTarif']);
    $keteranganMembership = mysqli_real_escape_string($db , $_POST['tambahKeterangan']);

    //Insert into db
                
    $queryInsertMembership = "INSERT INTO membership (kodeMembership,namaMembership,tarifMembership,keteranganMembership) VALUES ('$kodeMembership' , '$namaMembership', '$tarifMembership' , '$keteranganMembership')";
    mysqli_query($db, $queryInsertMembership);

    header("Location: DataMembership.php?uploadBerhasil");
}


//hapus barang
if(isset($_POST['btnHapus'])){

    $kodeMembership = mysqli_real_escape_string($db ,$_POST['kodeMembership']);
    $queryHapus = "DELETE FROM membership WHERE kodeMembership = '$kodeMembership'";

    mysqli_query($db, $queryHapus);

    header("Location: DataMembership.php?deleteBerhasil");

}


//edit membership
if(isset($_POST['btnEdit'])){

    $kodeMembership = mysqli_real_escape_string($db ,$_POST['editKode']);
    $namaMembership = mysqli_real_escape_string($db , $_POST['editNama']);
    $keteranganMembership = mysqli_real_escape_string($db , $_POST['editKeterangan']);
    $tarifMembership = mysqli_real_escape_string($db , $_POST['editTarif']);
    $idMembership = mysqli_real_escape_string($db , $_POST['idMembership']);

    //Edit db
                    
    $queryEditMembership = "UPDATE membership SET kodeMembership = '$kodeMembership', namaMembership = '$namaMembership' , tarifMembership = '$tarifMembership' , keteranganMembership = '$keteranganMembership'
    WHERE idMembership = '$idMembership'";
    mysqli_query($db, $queryEditMembership);

    header("Location: DataMembership.php?editBerhasil");
      
}





        




?>