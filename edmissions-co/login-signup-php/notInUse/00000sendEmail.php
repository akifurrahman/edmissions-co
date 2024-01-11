<?

//if(isset($_POST['reset-otp'])){

try{
$mail->setFrom('theedmissionsapp@gmail.com');
$mail->addAddress($email);

//Content
$mail->isHTML(true); // Set email format to HTML
$mail->Subject = 'Verification Code for EDMISSIONS.APP';
//$mail->Body = "Hello $name!<br> Your verification code to create an EDMISSIONS.APP account is <b>$code</b>";
$mail->Body = "Dear $name,<br><br> Thank you for registering at EDMISSIONS.APP!<br><br>To complete your registration and
access your account, please use the following one-time password (OTP): <b>$code</b>";
//$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

$mail->send();

echo " <script>
alert('A verification E-Mail has been sent to you. Please enter the OTP from the E-Mail.');
document.location.href = 'user-otp.php'
</script> ";

$_SESSION['info'] = $info;
$_SESSION['email'] = $email;
$_SESSION['name'] = $name;
$_SESSION['password'] = $password;
$_SESSION['code']=$code;
header('location: reset-code.php');
exit();
}
catch (Exception $e) {
echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
$errors['otp-error'] = "Failed while sending code!";
}
//}
?>