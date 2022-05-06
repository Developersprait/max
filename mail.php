<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
// use PHPMailer\PHPMailer\Exception;

require_once ('phpmailer/src/SMTP.php');
require_once ('phpmailer/src/PHPMailer.php');

$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

$name = $_POST['user_name'];
$phone = $_POST['user_phone'];

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'prichal-ritual.by';  																							// Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'admin@prichal-ritual.by'; // Ваш логин от почты с которой будут отправляться письма
$mail->Password = '{7=09;!vNVaI'; // Ваш пароль от почты с которой будут отправляться письма
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465; // TCP port to connect to / этот порт может отличаться у других провайдеров

$mail->setFrom('admin@prichal-ritual.by'); // от кого будет уходить письмо?
$mail->addAddress('doctorsprait@gmail.com');     // Кому будет уходить письмо     // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Заявка с сайта';
$mail->Body    = '' .$name .'<br>телефон'.$phone;
$mail->AltBody = '';

if(!$mail->send()) {
    echo 'Error';
} else {
   echo "<script>
   alert('Спасибо! Мы очень быстро с вами сяжемся!'); 
   window.history.go(-1);
   </script>";
}

?>    
