<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php'; // make sure the folder is right
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

//Load Composer's autoloader
//require 'vendor/autoload.php'; // if using composer

$mail = new PHPMailer(true); // Passing `true` enables exceptions
try {
//Server settings
$mail->SMTPDebug = 2; // Enable verbose debug output
$mail->isSMTP(); // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com'; // Specify main and backup SMTP servers
$mail->SMTPAuth = true; // Enable SMTP authentication
$mail->Username = 'theedmissionsapp@gmail.com'; // SMTP username
$mail->Password = 'lbsqcfkbkjzsdxes';
$mail->SMTPSecure = 'tls'; // Enable TLS encryption, `ssl` also accepted
//$mail->Port = 587; // TCP port to connect to
$mail->Port = 587; // TCP port to connect to

$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);


$mail->setFrom('theedmissionsapp@gmail.com');

$mail->addAddress('mohdakifurrahman@gmail.com');
//$mail->addAddress($_POST["email"]);

//Content
$mail->isHTML(true); // Set email format to HTML
$mail->Subject = 'Here is the subject 2';
$mail->Body = 'This is the HTML message body <b>in bold!</b>';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

$mail->send();

echo " <script>alert('a verification email has been sent to you. please enter the OTP from the mail.');</script> ";

echo 'Message has been sent';
} catch (Exception $e) {
echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;

}?>