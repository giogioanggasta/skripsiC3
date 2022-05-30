<?php
session_start();
//inisialisasi variabel
$kodeSupplier = "";
$namaSupplier = "";
$noTelepon = "";
$alamatSupplier = "";
$emailSupplier = "";
$kotaSupplier = "";

$db = mysqli_connect('localhost' , 'root', '', 'c3') or die("can't connect to database");
//insert barang
if(isset($_POST['btnInsert'])){

    $kodeSupplier = mysqli_real_escape_string($db ,$_POST['tambahKode']);
    $namaSupplier = mysqli_real_escape_string($db , $_POST['tambahNama']);
    $noTelepon = mysqli_real_escape_string($db , $_POST['tambahNomor']);
    $emailSupplier = mysqli_real_escape_string($db , $_POST['tambahEmail']);
    $alamatSupplier = mysqli_real_escape_string($db , $_POST['tambahAlamat']);
    $kotaSupplier = mysqli_real_escape_string($db , $_POST['tambahKota']);


    //Insert into db
                    
    $queryInsertSupplier = "INSERT INTO supplier (kodeSupplier,namaSupplier,noTelepon,alamat,email,kota) VALUES ('$kodeSupplier' , '$namaSupplier', '$noTelepon' , '$alamatSupplier' , '$emailSupplier', '$kotaSupplier')";
    mysqli_query($db, $queryInsertSupplier);

    header("Location: DataSupplier.php?uploadBerhasil");
}

//hapus supplier
if(isset($_POST['btnHapus'])){

    $kodeSupplier = mysqli_real_escape_string($db ,$_POST['kodeSupplier']);
    $queryHapus = "DELETE FROM supplier WHERE kodeSupplier = '$kodeSupplier'";

    mysqli_query($db, $queryHapus);

    header("Location: DataSupplier.php?deleteBerhasil");

}

//edit supplier
if(isset($_POST['btnEdit'])){

    $kodeSupplier = mysqli_real_escape_string($db ,$_POST['editKode']);
    $namaSupplier = mysqli_real_escape_string($db , $_POST['editNama']);
    $emailSupplier = mysqli_real_escape_string($db , $_POST['editEmail']);
    $nomorTeleponSupplier = mysqli_real_escape_string($db , $_POST['editNomorTelepon']);
    $alamatSupplier = mysqli_real_escape_string($db , $_POST['editAlamat']);
    $kotaSupplier = mysqli_real_escape_string($db , $_POST['editKota']);
    $idSupplier = mysqli_real_escape_string($db , $_POST['idSupplier']);

    
                

                //Edit db
                                
                $queryEditSupplier = "UPDATE supplier SET kodeSupplier = '$kodeSupplier', namaSupplier = '$namaSupplier' , noTelepon = '$nomorTeleponSupplier' , alamat = '$alamatSupplier' ,
                email = '$emailSupplier', kota = '$kotaSupplier' WHERE idSupplier = '$idSupplier'";
                mysqli_query($db, $queryEditSupplier);

                header("Location: DataSupplier.php?editBerhasil");
            
}




        




?>