<?php

session_start();
$name=$_SESSION['name'];
$email=$_SESSION['email'];
$code = $_SESSION['code'];
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//require "controllerUserData.php";

//function sendemail($info,$name,$email,$password,$code){
function sendemail($name,$email,$code){

require 'phpmailer/src/Exception.php'; // make sure the folder is right
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

//Load Composer's autoloader
//require 'vendor/autoload.php'; // if using composer

$mail = new PHPMailer(true); // Passing `true` enables exceptions
try {
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


//$mail->setFrom('theedmissionsapp@gmail.com');

//$mail->addAddress('mohdakifurrahman@gmail.com');
//$mail->addAddress($_POST["email"]);
$mail->setFrom('theedmissionsapp@gmail.com');
$mail->addAddress($email);
//Content
$mail->isHTML(true); // Set email format to HTML
/*$mail->Subject = 'Here is the subject 2';
$mail->Body = 'This is the HTML message body <b>in bold!</b>';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

$mail->send();

echo " <script>alert('a verification email has been sent to you. please enter the OTP from the mail.');</script> ";
*/

$mail->Subject = 'Verification Code for EDMISSIONS.APP';
//$mail->Body = "Hello $name!<br> Your verification code to create an EDMISSIONS.APP account is <b>$code</b>";
$mail->Body = "Dear $name,<br><br> Thank you for registering at EDMISSIONS.APP!<br><br>To complete your registration and access your account, please use the following one-time password (OTP): <b>$code</b><br><br>This E-Mail has been sent based on the request of the user.";
//$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

$mail->send();

echo " <script> alert('An OTP E-Mail has been sent to you again. Please check your inbox as well as the spam section.');document.location.href='../login-signup-php/user-otp.php' </script> ";

echo 'Message has been sent';

}
catch (Exception $e) {
echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}
}

function sendemail2($name,$email,$code){

require 'phpmailer/src/Exception.php'; // make sure the folder is right
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

//Load Composer's autoloader
//require 'vendor/autoload.php'; // if using composer

$mail = new PHPMailer(true); // Passing `true` enables exceptions
try {
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


//$mail->setFrom('theedmissionsapp@gmail.com');

//$mail->addAddress('mohdakifurrahman@gmail.com');
//$mail->addAddress($_POST["email"]);
$mail->setFrom('theedmissionsapp@gmail.com');
$mail->addAddress($email);
//Content
$mail->isHTML(true); // Set email format to HTML
/*$mail->Subject = 'Here is the subject 2';
$mail->Body = 'This is the HTML message body <b>in bold!</b>';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

$mail->send();

echo " <script>alert('a verification email has been sent to you. please enter the OTP from the mail.');</script> ";
*/

$mail->Subject = 'Reset your password at EDMISSIONS.APP';
//$mail->Body = "Hello $name!<br> Your verification code to create an EDMISSIONS.APP account is <b>$code</b>";
$mail->Body = "Hello,<br><br> We've received a request to reset your password at EDMISSIONS.APP!<br><br>To set a new password for your account, please use the following one-time password (OTP): <b>$code</b><br><br>This E-Mail has been sent based on the request of the user.";
//$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

$mail->send();

echo " <script> alert('An OTP E-Mail has been sent to you again. Please check your inbox as well as the spam section.');document.location.href='../login-signup-php/reset-code.php' </script> ";

echo 'Message has been sent';

}
catch (Exception $e) {
echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}
}

?>

<?php 
if(isset($_POST['create-account-otp-reset-button'])){
    //sendemail();
    sendemail($name,$email,$code);
}
?>

<?php 
if(isset($_POST['reset-password-otp-reset-button'])){
    //sendemail();
    sendemail2($name,$email,$code);
}
?>