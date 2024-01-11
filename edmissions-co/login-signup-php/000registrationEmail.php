<?php 
use PHPMailer\PHPMailer\PHPMailer; 
use PHPMailer\PHPMailer\Exception;

require '../mailsenders/phpmailer/src/Exception.php' ; // make sure the folder is right
require '../mailsenders/phpmailer/src/PHPMailer.php' ; require '../mailsenders/phpmailer/src/SMTP.php' ; 

$mail=new PHPMailer(true); // Passing `true` enables exceptions //try { //Server settings //$mail->SMTPDebug = 2; // Enable verbose debug output
$mail->SMTPDebug = 0; // Enable verbose debug output
$mail->isSMTP(); // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com'; // Specify main and backup SMTP servers
$mail->SMTPAuth = true; // Enable SMTP authentication
$mail->Username = 'theedmissionsapp@gmail.com'; // SMTP username
$mail->Password = 'lbsqcfkbkjzsdxes';
$mail->SMTPSecure = 'tls'; // Enable TLS encryption, `ssl` also accepted
//$mail->SMTPSecure = 'ssl'; // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587; // TCP port to connect to
//$mail->Port = 465; // SSL port to connect to

$mail->SMTPOptions = array(
'ssl' => array(
'verify_peer' => false,
'verify_peer_name' => false,
'allow_self_signed' => true
)
);

function sendEmail($info,$name,$email,$password,$code){
try{

require 'phpmailer/src/Exception.php'; // make sure the folder is right
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

//Load Composer's autoloader
//require 'vendor/autoload.php'; // if using composer

$mail = new PHPMailer(true); // Passing `true` enables exceptions

/* 
//Server settings
$mail->SMTPDebug = 0; // Enable verbose debug output
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
*/

$mail->setFrom('theedmissionsapp@gmail.com');
$mail->addAddress($email);

//Content
$mail->isHTML(true); // Set email format to HTML
$mail->Subject = 'Verification Code for EDMISSIONS.APP';
//$mail->Body = "Hello $name!<br> Your verification code to create an EDMISSIONS.APP account is <b>$code</b>";
$mail->Body = "Dear $name,<br><br> Thank you for registering at EDMISSIONS.APP!<br><br>To complete your registration
and
access your account, please use the following one-time password (OTP): <b>$code</b>";
//$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

$mail->send();

echo " <script>
alert('A verification E-Mailzzzzz has been sent to you. Please enter the OTP from the E-Mail.');
document.location.href = 'user-otp.php'</script> ";

$_SESSION['info'] = $info;
$_SESSION['email'] = $email;
$_SESSION['name'] = $name;
$_SESSION['password'] = $password;
$_SESSION['code']=$code;
header('location: user-otp.php');
exit();
}
catch (Exception $e) {
echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
$errors['otp-error'] = "Failed while sending code!";
}
}
?>