<?php
session_start();
//inisialisasi variabel
$namaPromo = "";
$fotoPromo = "";
$keteranganPromo = "";
$waktuMulai = "";
$waktuSelesai = "";


$db = mysqli_connect('localhost' , 'root', '', 'c3') or die("can't connect to database");

//insert promo
if(isset($_POST['btnInsert'])){

    $kodePromo = mysqli_real_escape_string($db ,$_POST['tambahKode']);
    $namaPromo = mysqli_real_escape_string($db , $_POST['tambahNama']);
    $waktuMulai = mysqli_real_escape_string($db , $_POST['tambahWaktuMulai']);
    $waktuSelesai = mysqli_real_escape_string($db , $_POST['tambahWaktuSelesai']);
    $keteranganPromo = mysqli_real_escape_string($db , $_POST['tambahKeterangan']);
    
    $file = $_FILES['tambahFoto'];
    $fileName = $_FILES['tambahFoto']['name'];
    $fileTmpName = $_FILES['tambahFoto']['tmp_name'];
    $fileSize = $_FILES['tambahFoto']['size'];
    $fileError = $_FILES['tambahFoto']['error'];
    $fileType = $_FILES['tambahFoto']['type'];


    //File yang boleh di upload extensionnya apa aja
    $fileExt = explode('.' , $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpg', 'jpeg' , 'png', 'pdf');

    if(in_array($fileActualExt, $allowed)){
        if($fileError === 0){
            if($fileSize < 500000){
                $fileNameNew = uniqid(',' , true).".".$fileActualExt;
                $fileDestination = __DIR__."/uploadImage/".$fileNameNew;
                if(move_uploaded_file($fileTmpName, $fileDestination)) {
                echo 'File uploaded successfully';
            }
         else {
            echo 'You should select a file to upload !!';
        }
                

                //Insert into db
                                
                $queryInsertPromo = "INSERT INTO promo (kodePromo,namaPromo,fotoPromo,keteranganPromo,waktuMulai,waktuSelesai) VALUES ('$kodePromo' , '$namaPromo', '$fileNameNew' , '$keteranganPromo'
                , '$waktuMulai', '$waktuSelesai')";
                mysqli_query($db, $queryInsertPromo);

                header("Location: DataPromo.php?uploadBerhasil");
            }
            else{
                echo "File is too big!";
            }
        }
        else{
            echo "There was an error uploading your file";
        }
    }
    else{
        echo "Extension file tidak diperbolehkan (input file JPG, JPEG, PNG, atau PDF only)";
    }
}

//hapus promo
if(isset($_POST['btnHapus'])){

    $kodePromo = mysqli_real_escape_string($db ,$_POST['kodePromo']);
    $queryHapus = "DELETE FROM promo WHERE kodePromo = '$kodePromo'";

    mysqli_query($db, $queryHapus);

    header("Location: DataPromo.php?deleteBerhasil");

}

//edit promo
if(isset($_POST['btnEdit'])){

    $kodePromo = mysqli_real_escape_string($db ,$_POST['editKode']);
    $namaPromo = mysqli_real_escape_string($db , $_POST['editNama']);
    $keteranganPromo = mysqli_real_escape_string($db , $_POST['editKeterangan']);
    $waktuMulai = mysqli_real_escape_string($db , $_POST['editWaktuMulai']);
    $waktuSelesai = mysqli_real_escape_string($db , $_POST['editWaktuSelesai']);
    $idPromo = mysqli_real_escape_string($db , $_POST['idPromo']);

    $file = $_FILES['editFoto'];
    $fileName = $_FILES['editFoto']['name'];
    $fileTmpName = $_FILES['editFoto']['tmp_name'];
    $fileSize = $_FILES['editFoto']['size'];
    $fileError = $_FILES['editFoto']['error'];
    $fileType = $_FILES['editFoto']['type'];


    //File yang boleh di upload extensionnya apa aja
    $fileExt = explode('.' , $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpg', 'jpeg' , 'png', 'pdf');

    if(in_array($fileActualExt, $allowed)){
        if($fileError === 0){
            if($fileSize < 500000){
                $fileNameNew = uniqid(',' , true).".".$fileActualExt;
                $fileDestination = __DIR__."/uploadImage/".$fileNameNew;
                if(move_uploaded_file($fileTmpName, $fileDestination)) {
                echo 'File uploaded successfully';
            }
         else {
            echo 'You should select a file to upload !!';
        }
                

                //Edit db
                                
                $queryEditPromo = "UPDATE promo SET kodePromo = '$kodePromo', namaPromo = '$namaPromo' , fotoPromo = '$fileNameNew' , keteranganPromo = '$keteranganPromo' , waktuMulai = '$waktuMulai' , waktuSelesai = '$waktuSelesai' 
                WHERE idPromo = '$idPromo'";
                mysqli_query($db, $queryEditPromo);

                header("Location: DataPromo.php?editBerhasil");
            }
            else{
                echo "File is too big!";
            }
        }
        else{
            echo "There was an error uploading your file";
        }
    }
    else{
        echo "Extension file tidak diperbolehkan (input file JPG, JPEG, PNG, atau PDF only)";
    }
}

?>
