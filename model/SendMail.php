<?php
use phpmailer\phpmailer\phpmailer;

require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';

$mail = new PHPMailer(true);

$alert = '';

if(isset($_POST['buttonTerima'])){
    $emailTujuan = $_POST['emailTujuan'];
    $nama = $_POST['nama'];
    $tanggalTransaksi = date_create($_POST['tanggalTransaksi']);
    $waktuTransaksi = date_create($_POST['waktuTransaksi']);

        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'carcarecentermedan@gmail.com';
        $mail->Password = 'twvcphdxxjsghxvp';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = '587';

        $mail->setFrom('giogioanggasta@gmail.com');
        $mail->addAddress($emailTujuan);

        $mail->isHTML(true);
        $mail->Subject = "Booking berhasil";
        $mail->Body .= "<h4 style='text-decoration:underline'>Info Pemesanan anda </h4>";
        $mail->Body = "<h4>Pembayaran sudah diterima.</h4>";
        $mail->Body .= "<h4>Nama Pemesan: </h4>".$nama.
        "<h4>Tanggal pemesanan: </h4>".date_format($tanggalTransaksi, "Y-m-d")."<h4>Jam Pemesanan: </h4>".date_format($waktuTransaksi, "H:i:s")."<br>"."<br>";
        $mail->Body .= "Terima kasih telah memesan!";
        $mail->Body .= "<h5> C3 <br> Address : JL. Monginsidi, 51, Anggrung, Medan Polonia, Kota Medan, Sumatera Utara 20222 </h5>";
        $mail->send();
        $alert = '<span>Message dikirim!</span>';
        header("Location: DataTransaksi.php?berhasilmenerima");
    


}

if(isset($_POST['btnBatal'])){
    $emailTujuan = $_POST['emailTujuan'];
    $alasan = $_POST['alasanPembatalan'];
    
    try{
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'carcarecentermedan@gmail.com';
        $mail->Password = 'twvcphdxxjsghxvp';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = '587';

        $mail->setFrom('carcarecentermedan@gmail.com');
        $mail->addAddress($emailTujuan);

        $mail->isHTML(true);
        $mail->Subject = "Pemesanan Dibatalkan";
        $mail->Body = "<h3>Alasan Pembatalan: </h3>".$alasan;
        $mail->Body .= "<h5> C3 <br> Address : JL. Monginsidi, 51, Anggrung, Medan Polonia, Kota Medan, Sumatera Utara 20222 </h5>";
        $mail->send();
        $alert = '<span>Message dikirim!</span>';
        header("Location: DataTransaksi.php?berhasilmembatalkan");
        
    }

    catch(Exception $e){
        $alert = '<span>Terjadi kesalahan, Message gagal dikirim! </span>';
    }
}
?>