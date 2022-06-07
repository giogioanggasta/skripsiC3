<?php
use phpmailer\phpmailer\phpmailer;

require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';

$mail = new PHPMailer(true);

$alert = '';

if(isset($_POST['buttonTerima'])){
    $emailTujuan = $_POST['emailTujuan'];

        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'giogioanggasta@gmail.com';
        $mail->Password = 'Jerapah!2';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = '587';

        $mail->setFrom('giogioanggasta@gmail.com');
        $mail->addAddress('giogioanggastaa@gmail.com');

        $mail->isHTML(true);
        $mail->Subject = "Booking Diterima";
        $mail->Body = "<h3>Pemesanan anda diterima, silahkan datang 15 menit sebelum waktu pesanan. </h3>";
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
        $mail->Username = 'giogioanggasta@gmail.com';
        $mail->Password = 'Jerapah!2';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = '587';

        $mail->setFrom("giogioanggasta@gmail.com");
        $mail->addAddress("giogioanggastaa@gmail.com");

        $mail->isHTML(true);
        $mail->Subject = "Pemesanan Dibatalkan";
        $mail->Body = "<h3>Kami meminta maaf karena pesanan anda terpaksa harus kami batalkan. Pembatalan dilakukan karena jadwal yang Anda pilih telah penuh, silahkan pilih jadwal lain yang tersedia, Terima kasih.</h3>";
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