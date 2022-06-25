<?php
use phpmailer\phpmailer\phpmailer;

require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';

$mail = new PHPMailer(true);

$alert = '';

if(isset($_POST['btnUpload'])){
    $idTransaksi = $_POST['idTransaksi'];
    $tanggalTransaksi = date_create($_POST['tanggalTransaksi']);
    $waktuTransaksi = date_create($_POST['waktuTransaksi']);

        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'carcarecentermedan@gmail.com';
        $mail->Password = 'twvcphdxxjsghxvp';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = '587';

        $mail->setFrom('carcarecentermedan@gmail.com');
        $mail->addAddress('carcarecentermedan@gmail.com');

        $mail->isHTML(true);
        $mail->Subject = "Pesanan Baru";
        $mail->Body .= "<h4 style='text-decoration:underline'>Info Pemesanan anda </h4>";
        $mail->Body = "<h4>Pembayaran sudah diterima.</h4>";
        $mail->Body .= "<h4>ID Transaksi: </h4>".$idTransaksi."<h4>Tanggal pemesanan: </h4>".date_format($tanggalTransaksi, "Y-m-d")."<h4>Jam Pemesanan: </h4>".date_format($waktuTransaksi, "H:i:s")."<br>"."<br>";
        $mail->Body .= "<h5> C3 <br> Address : JL. Monginsidi, 51, Anggrung, Medan Polonia, Kota Medan, Sumatera Utara 20222 </h5>";
        $mail->send();
        $alert = '<span>Message dikirim!</span>';
        header("Location: MyBooking.php?berhasilUpload");
    


}

if(isset($_POST['btnBatal'])){
    $idTransaksi = $_POST['idTransaksi'];
    $tanggalTransaksi = date_create($_POST['tanggalTransaksi']);
    $waktuTransaksi = date_create($_POST['waktuTransaksi']);

        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'carcarecentermedan@gmail.com';
        $mail->Password = 'twvcphdxxjsghxvp';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = '587';

        $mail->setFrom('carcarecentermedan@gmail.com');
        $mail->addAddress('carcarecentermedan@gmail.com');

        $mail->isHTML(true);
        $mail->Subject = "Pesanan Dibatalkan";
        $mail->Body = "<h4>Pemesanan dibatalkan.</h4>";
        $mail->Body .= "<h4>ID Transaksi: </h4>".$idTransaksi."<h4>Tanggal pemesanan: </h4>".date_format($tanggalTransaksi, "Y-m-d")."<h4>Jam Pemesanan: </h4>".date_format($waktuTransaksi, "H:i:s")."<br>"."<br>";
        $mail->Body .= "<h5> C3 <br> Address : JL. Monginsidi, 51, Anggrung, Medan Polonia, Kota Medan, Sumatera Utara 20222 </h5>";
        $mail->send();
        $alert = '<span>Message dikirim!</span>';
        header("Location: MyBooking.php?berhasilBatal");
}

if(isset($_POST['btnReschedule'])){
    $idTransaksi = $_POST['idTransaksi'];
    $tanggalTransaksi = date_create($_POST['tanggalTransaksi']);
    $waktuTransaksi = date_create($_POST['waktuTransaksi']);

        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'carcarecentermedan@gmail.com';
        $mail->Password = 'twvcphdxxjsghxvp';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = '587';

        $mail->setFrom('carcarecentermedan@gmail.com');
        $mail->addAddress('carcarecentermedan@gmail.com');

        $mail->isHTML(true);
        $mail->Subject = "Pesanan Reschedule";
        $mail->Body = "<h4>Pemesanan reschedule.</h4>";
        $mail->Body .= "<h4>ID Transaksi: </h4>".$idTransaksi."<h4>Tanggal pemesanan: </h4>".date_format($tanggalTransaksi, "Y-m-d")."<h4>Jam Pemesanan: </h4>".date_format($waktuTransaksi, "H:i:s")."<br>"."<br>";
        $mail->Body .= "<h5> C3 <br> Address : JL. Monginsidi, 51, Anggrung, Medan Polonia, Kota Medan, Sumatera Utara 20222 </h5>";
        $mail->send();
        $alert = '<span>Message dikirim!</span>';
        header("Location: MyBooking.php?berhasilBatal");
}

?>