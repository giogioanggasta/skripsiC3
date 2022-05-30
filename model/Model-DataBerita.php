<?php
session_start();
//inisialisasi variabel
$kodeBerita = "";
$namaBerita = "";
$keteranganBerita = "";


$db = mysqli_connect('localhost' , 'root', '', 'c3') or die("can't connect to database");
//insert berita
if(isset($_POST['btnInsert'])){

    $kodeBerita = mysqli_real_escape_string($db ,$_POST['tambahKode']);
    $namaBerita = mysqli_real_escape_string($db , $_POST['tambahNama']);
    $keteranganBerita = mysqli_real_escape_string($db , $_POST['tambahKeterangan']);

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
                                
                $queryInsertBerita = "INSERT INTO berita (kodeBerita,namaBerita,fotoBerita,keteranganBerita) VALUES ('$kodeBerita' , '$namaBerita', '$fileNameNew' , '$keteranganBerita')";
                mysqli_query($db, $queryInsertBerita);

                header("Location: DataBerita.php?uploadBerhasil");
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


//hapus berita
if(isset($_POST['btnHapus'])){

    $kodeBerita = mysqli_real_escape_string($db ,$_POST['kodeBerita']);
    $queryHapus = "DELETE FROM berita WHERE kodeBerita = '$kodeBerita'";

    mysqli_query($db, $queryHapus);

    header("Location: DataBerita.php?deleteBerhasil");

}


//edit berita
if(isset($_POST['btnEdit'])){

    $kodeBerita = mysqli_real_escape_string($db ,$_POST['editKode']);
    $namaBerita = mysqli_real_escape_string($db , $_POST['editNama']);
    $keteranganBerita = mysqli_real_escape_string($db , $_POST['editKeterangan']);
    $idBerita = mysqli_real_escape_string($db , $_POST['idBerita']);

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
                                
                $queryEditBerita = "UPDATE berita SET kodeBerita = '$kodeBerita', namaBerita = '$namaBerita' , fotoBerita = '$fileNameNew' , keteranganBerita = '$keteranganBerita'
                WHERE idBerita = '$idBerita'";
                mysqli_query($db, $queryEditBerita);

                header("Location: DataBerita.php?editBerhasil");
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