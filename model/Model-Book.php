<?php
session_start();
//inisialisasi variabel
$tanggalTransaksi = "";
$waktuTransaksi = "";
$jenisMobil = "";
$platKendaraan = "";
$jasa1 = "";
$jasa2 = "";
$jasa3 = "";
$hargaJasa1 = "";
$hargaJasa2 = "";
$hargaJasa3 = "";
$catatanPelanggan = "";
$harga = "";
$msg = "";
$idUser = $_SESSION['idUser'];

$db = mysqli_connect('localhost' , 'root', '', 'c3') or die("can't connect to database");

if(isset($_POST['enterBtn'])){
    $tanggalTransaksi = mysqli_real_escape_string($db , $_POST['tanggalTransaksi']);
    $final_tanggal = date('Y-m-d' , strtotime($tanggalTransaksi));
    $waktuTransaksi = $_POST['waktuTransaksi'];
    $final_waktu = date('H:i', strtotime($_POST['waktuTransaksi']));
    $jenisMobil = mysqli_real_escape_string($db , $_POST['jenisMobil']);
    $platKendaraan = mysqli_real_escape_string($db , $_POST['platKendaraan']);
    $jasa1 = mysqli_real_escape_string($db , $_POST['jasa1']);
    $jasa2 = mysqli_real_escape_string($db , $_POST['jasa2']);
    $jasa3 =  mysqli_real_escape_string($db , $_POST['jasa3']);
    $catatanPelanggan = mysqli_real_escape_string($db , $_POST['catatanPelanggan']);
    $harga = $_POST['hargaFinal'];
    $queryBook = "INSERT INTO transaksi (idUser,tanggalTransaksi,waktuTransaksi,jenisMobil,platKendaraan,jasa1,jasa2,jasa3,catatanPelanggan,totalHarga,status,alasanPembatalan) VALUES ('$idUser', '$tanggalTransaksi', '$waktuTransaksi', '$jenisMobil', '$platKendaraan','$jasa1','$jasa2','$jasa3','$catatanPelanggan','$harga','Menunggu Konfirmasi','')";

    mysqli_query($db, $queryBook);

    echo '<script type="text/javascript">' .
        'console.log(' .$jasa1. ');</script>';

    header('location: ../view/MyBooking.php');
}


//Konfirmasi Pembayaran dengan upload bukti transfer
if(isset($_POST['btnUpload'])){
    $file = $_FILES['file'];
    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];

    $idPemesanan = $_POST['idTransaksi'];

    //File yang boleh di upload extensionnya apa aja
    $fileExt = explode('.' , $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpg', 'jpeg' , 'png', 'pdf');

    if(in_array($fileActualExt, $allowed)){
        if($fileError === 0){
            if($fileSize < 500000){
                $fileNameNew = uniqid(',' , true).".".$fileActualExt;
                $fileDestination = __DIR__."/uploadImage/".$fileNameNew;
                move_uploaded_file($fileTmpName, $fileDestination);


                //Insert into db
                $sql = "UPDATE transaksi SET buktiPembayaran = '$fileNameNew' , status = 'Menunggu Konfirmasi'
                WHERE idTransaksi = '$idPemesanan'";
                mysqli_query($db , $sql);

                header("Location: MyBooking.php?uploadBerhasil");
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

if (isset($_POST['btnBatal'])) {
    $idPemesanan = $_POST['idTransaksi'];

    $sql = "UPDATE transaksi SET status = 'Pemesanan Dibatalkan' WHERE idTransaksi = '$idPemesanan'";
    mysqli_query($db , $sql);
    header("Location: MyBooking.php?pemesananDibatalkan");
}