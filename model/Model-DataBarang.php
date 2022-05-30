<?php
session_start();
//inisialisasi variabel
$kodeBarang = "";
$namaBarang = "";
$hargaBarang = "";
$keteranganBarang = "";
$kategori = "";
$stokBarang = "";
$satuan = "";


$db = mysqli_connect('localhost' , 'root', '', 'c3') or die("can't connect to database");
//insert barang
if(isset($_POST['btnInsert'])){

    $kodeBarang = mysqli_real_escape_string($db ,$_POST['tambahKode']);
    $namaBarang = mysqli_real_escape_string($db , $_POST['tambahNama']);
    $hargaBarang = mysqli_real_escape_string($db , $_POST['tambahHarga']);
    $keteranganBarang = mysqli_real_escape_string($db , $_POST['tambahKeterangan']);
    $kategori = mysqli_real_escape_string($db , $_POST['tambahKategori']);
    $stokBarang = mysqli_real_escape_string($db , $_POST['tambahStok']);
    $satuan = mysqli_real_escape_string($db , $_POST['tambahSatuan']);

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
                                
                $queryInsertBarang = "INSERT INTO barang (kodeBarang,namaBarang,fotoBarang,hargaBarang,keteranganBarang,kategori,stokBarang,satuan) VALUES ('$kodeBarang' , '$namaBarang', '$fileNameNew' , '$hargaBarang' , '$keteranganBarang' , '$kategori' , '$stokBarang' , '$satuan')";
                mysqli_query($db, $queryInsertBarang);

                header("Location: DataBarang.php?uploadBerhasil");
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


//hapus barang
if(isset($_POST['btnHapus'])){

    $kodeBarang = mysqli_real_escape_string($db ,$_POST['kodeBarang']);
    $queryHapus = "DELETE FROM barang WHERE kodeBarang = '$kodeBarang'";

    mysqli_query($db, $queryHapus);

    header("Location: DataBarang.php?deleteBerhasil");

}

//edit barang
if(isset($_POST['btnEdit'])){

    $kodeBarang = mysqli_real_escape_string($db ,$_POST['editKode']);
    $namaBarang = mysqli_real_escape_string($db , $_POST['editNama']);
    $hargaBarang = mysqli_real_escape_string($db , $_POST['editHarga']);
    $keteranganBarang = mysqli_real_escape_string($db , $_POST['editKeterangan']);
    $kategori = mysqli_real_escape_string($db , $_POST['editKategori']);
    $stokBarang = mysqli_real_escape_string($db , $_POST['editStok']);
    $satuan = mysqli_real_escape_string($db , $_POST['editSatuan']);
    $idBarang = mysqli_real_escape_string($db , $_POST['idBarang']);

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
                                
                $queryEditBarang = "UPDATE barang SET kodeBarang = '$kodeBarang', namaBarang = '$namaBarang' , fotoBarang = '$fileNameNew' , hargaBarang = '$hargaBarang' , keteranganBarang = '$keteranganBarang', kategori = '$kategori' , stokBarang = '$stokBarang', satuan = '$satuan'
                WHERE idBarang = '$idBarang'";
                mysqli_query($db, $queryEditBarang);

                header("Location: DataBarang.php?editBerhasil");
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