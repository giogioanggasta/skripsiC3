<?php
use phpmailer\phpmailer\phpmailer;

require_once 'phpmailer/includes/Exception.php';
require_once 'phpmailer/includes/PHPMailer.php';
require_once 'phpmailer/includes/SMTP.php';

$mail = new PHPMailer(true);

$alert = '';

if(isset($_POST['submitMasukan'])){
    $sender = $_POST['emailSender'];
    $subject = $_POST['subjectMail'];
    $message = $_POST['message'];

    try{
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
        $mail->Subject = "Masukkan & Saran ($subject)";
        $mail->Body = "<h3>Sender: $sender <br> Message: $message </h3>";

        $mail->send();
        $alert = '<span>Message dikirim! terima kasih atas masukannya. </span';
        header("Location: Home-logged.php?berhasilkirim");

    }

    catch(Exception $e){
        $alert = '<span>Terjadi kesalahan, Message gagal dikirim! </span';
    }
}

?>