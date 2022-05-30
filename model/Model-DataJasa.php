<?php
session_start();
//inisialisasi variabel
$kodeJasa = "";
$namaJasa = "";
$keteranganJasa = "";
$hargaJasa = "";


$db = mysqli_connect('localhost' , 'root', '', 'c3') or die("can't connect to database");

//insert jasa
if(isset($_POST['btnInsert'])){

    $kodeJasa = mysqli_real_escape_string($db ,$_POST['tambahKode']);
    $namaJasa = mysqli_real_escape_string($db , $_POST['tambahNama']);
    $hargaJasa = mysqli_real_escape_string($db , $_POST['tambahHarga']);
    $keteranganJasa = mysqli_real_escape_string($db , $_POST['tambahKeterangan']);
    
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
                                
                $queryInsertJasa = "INSERT INTO jasa (kodeJasa,namaJasa,fotoJasa,keteranganJasa,hargaJasa) VALUES ('$kodeJasa' , '$namaJasa', '$fileNameNew' , '$keteranganJasa' , '$hargaJasa')";
                mysqli_query($db, $queryInsertJasa);

                header("Location: DataJasa.php?uploadBerhasil");
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

//hapus jasa
if(isset($_POST['btnHapus'])){

    $kodeJasa = mysqli_real_escape_string($db ,$_POST['kodeJasa']);
    $queryHapus = "DELETE FROM jasa WHERE kodeJasa = '$kodeJasa'";

    mysqli_query($db, $queryHapus);

    header("Location: DataJasa.php?deleteBerhasil");

}

//edit jasa
if(isset($_POST['btnEdit'])){

    $kodeJasa = mysqli_real_escape_string($db ,$_POST['editKode']);
    $namaJasa = mysqli_real_escape_string($db , $_POST['editNama']);
    $keteranganJasa = mysqli_real_escape_string($db , $_POST['editKeterangan']);
    $hargaJasa = mysqli_real_escape_string($db , $_POST['editHarga']);
    $idJasa = mysqli_real_escape_string($db , $_POST['idJasa']);

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
                                
                $queryEditJasa = "UPDATE jasa SET kodeJasa = '$kodeJasa', namaJasa = '$namaJasa' , fotoJasa = '$fileNameNew' , keteranganJasa = '$keteranganJasa' , hargaJasa = '$hargaJasa' 
                WHERE idJasa = '$idJasa'";
                mysqli_query($db, $queryEditJasa);

                header("Location: DataJasa.php?editBerhasil");
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