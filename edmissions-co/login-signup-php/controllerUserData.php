<?php
session_start();
require "connection.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../mailsenders/phpmailer/src/Exception.php'; // make sure the folder is right
require '../mailsenders/phpmailer/src/PHPMailer.php';
require '../mailsenders/phpmailer/src/SMTP.php';

$mail = new PHPMailer(true); // Passing `true` enables exceptions
//try {
//Server settings
//$mail->SMTPDebug = 2; // Enable verbose debug output
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

//$mail->setFrom('theedmissionsapp@gmail.com');

//$mail->addAddress('mohdakifurrahman@gmail.com');
//$mail->addAddress($_POST["email"]);

//Content
//$mail->isHTML(true); // Set email format to HTML
//$mail->Subject = 'Here is the subject 2';
//$mail->Body = 'This is the HTML message body <b>in bold!</b>';
//$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

//$mail->send();

//echo " <script>alert('a verification email has been sent to you. please enter the OTP from the mail.');</script> ";

//echo 'Message has been sent';
//} catch (Exception $e) {
//echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;}


//session_start();
//require "connection.php";
//require "./mailsenders/emailtest.php";
$email = "";
$name = "";
$errors = array();

//if user signup button
if(isset($_POST['signup'])){
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);
    $options= mysqli_real_escape_string($con, $_POST['options']);

    //$radio=$_POST['options'];
    //$email=$_POST['email'];
    if($options=="Institution"||$options=="Company"){
        if(str_ends_with($email,"@gmail.com")){
            $errors['email'] = "Please enter your organisation's E-Mail!";
        //echo '<p>Please enter your organisation\'s E-Mail.</p>' ;
        }
    }



    if($password !== $cpassword){
        $errors['password'] = "Confirm password not matched!";
    }
    $email_check = "SELECT * FROM usertable WHERE email = '$email'";
    $res = mysqli_query($con, $email_check);
    if(mysqli_num_rows($res) > 0){
        $errors['email'] = "Email that you have entered already exists!";
    }
    if(count($errors) === 0){
        $encpass = password_hash($password, PASSWORD_BCRYPT);
        $code = rand(999999, 111111);
        //$code = 0;
        $status = "notverified";
        //$status = "verified";
        $insert_data = "INSERT INTO usertable (name, email, password, options, code, status)
                        values('$name', '$email', '$encpass','$options' ,'$code', '$status')";
        $data_check = mysqli_query($con, $insert_data);
        if($data_check){
            //$subject = "Email Verification Code";
            //$message = "Your verification code is $code";
            //$sender = "From: shahiprem7890@gmail.com";
            try{
            $mail->setFrom('theedmissionsapp@gmail.com');
            $mail->addAddress($email);
            
            //Content
            $mail->isHTML(true); // Set email format to HTML
            $mail->Subject = 'Verification Code for EDMISSIONS.APP';
            //$mail->Body = "Hello $name!<br> Your verification code to create an EDMISSIONS.APP account is <b>$code</b>";
            $mail->Body = "Dear $name,<br><br> Thank you for registering at EDMISSIONS.APP!<br><br>To complete your registration and access your account, please use the following one-time password (OTP): <b>$code</b>";
            //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $mail->send();
            
            echo " <script> alert('A verification E-Mail has been sent to you. Please enter the OTP from the E-Mail.');document.location.href='user-otp.php' </script> ";

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
        
            /*if(mail($email, $subject, $message, $sender)){
                $info = "We've sent a verification code to your email - $email";
                $_SESSION['info'] = $info;
                $_SESSION['email'] = $email;
                $_SESSION['password'] = $password;
                header('location: user-otp.php');
                exit();
            }else{
                $errors['otp-error'] = "Failed while sending code!";
            }*/
            
            //header('location: login-user.php'); //newly added line
            //header('location: index.php'); //newly added line
        }else{
            $errors['db-error'] = "Failed while inserting data into database!";
            echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
        }
    }

}
    //if user click verification code submit button
    if(isset($_POST['check'])){
        $_SESSION['info'] = "";
        //$email = mysqli_real_escape_string($con, $_POST['email']);
        $otp_code = mysqli_real_escape_string($con, $_POST['otp']);
        $check_code = "SELECT * FROM usertable WHERE code = $otp_code";
        //$db_OTP = "SELECT code FROM usertable WHERE email = $email";
        $code_res = mysqli_query($con, $check_code);
        //$code_res2 = mysqli_query($con, $db_OTP);
        
        //if($check_code!=$_POST['otp']){
            
        //if($check_code==$_POST['otp']){
        if($_SESSION['code']!=$_POST['otp']){
           $errors['otp-code'] = "Incorrect OTP!";
           //header('location: user-otp.php');
           //exit();
        }
        //if($check_code==$_POST['otp']){ 
        else{ 
            //if($otp_code==$_POST['otp']){
            if(mysqli_num_rows($code_res) >=0){
            $fetch_data = mysqli_fetch_assoc($code_res);
            $fetch_code = $fetch_data['code'];
            $email = $fetch_data['email'];
            $code = 0;
            $status = 'verified';
            $update_otp = "UPDATE usertable SET code = $code, status = '$status' WHERE code = $fetch_code";
            $update_res = mysqli_query($con, $update_otp);
            if($update_res){
                $name = $_SESSION['name'];
                $_SESSION['email'] = $email;
                //header('location: home.php');
                
                echo " <script> alert('Verification successful. Please proceed with logging in.');document.location.href='index.php' </script> ";
                
                header('location: index.php');
                exit();
            }else{
                $errors['otp-error'] = "Failed while updating code!";
            }
        }
            }
    //else{
            //$_SESSION['error'] = "Incorrect OTP. Please enter the OTP properly.";
            //$errors['otp-error'] = "You've entered incorrect code!";
            //$errors['otp-code'] = "Incorrect OTP!";
            //header('location: user-otp.php');
            //exit();
        //}
    
}

    //if user click login button
    if(isset($_POST['login'])){
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $password = mysqli_real_escape_string($con, $_POST['password']);
        $check_email = "SELECT * FROM usertable WHERE email = '$email'";
        $res = mysqli_query($con, $check_email);
        if(mysqli_num_rows($res) > 0){
            $fetch = mysqli_fetch_assoc($res);
            $fetch_pass = $fetch['password'];
            if(password_verify($password, $fetch_pass)){
                $_SESSION['email'] = $email;
                $status = $fetch['status'];
                $options = $fetch['options'];
                if($status == 'verified'){
                  $_SESSION['email'] = $email;
                  $_SESSION['password'] = $password;
                  if($options== 'Student'){
                    header('location: ../pages/studentloggedinIndex.php');
                  }
                  else if($options== 'Institution'){
                    header('location: ../pages/institutionloggedinIndex.php');
                  }
                  else if($options== 'Company'){
                    header('location: ../pages/companyloggedinIndex.php');
                  }
                    //header('location: home.php');
                    //header('location: ../pages/loggedinIndex.php');
                    // header('location: ./index.html');
                }else{
                    $info = "It's look like you haven't still verified your email - $email";
                    $_SESSION['info'] = $info;
                    header('location: user-otp.php');
                }
            }else{
                $errors['email'] = "Incorrect email or password!";
            }
        }else{
            $errors['email'] = "It's look like you're not yet a member! Click on the bottom link to signup.";
        }
    }

    //if user click continue button in forgot password form
    if(isset($_POST['check-email'])){
        
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $check_email = "SELECT * FROM usertable WHERE email='$email'";
        //$check_name = "SELECT name FROM usertable WHERE email='$email'";
        $run_sql = mysqli_query($con, $check_email);
        //$run_sql2 = mysqli_query($con, $check_name);
        if(mysqli_num_rows($run_sql) > 0){
            $code = rand(999999, 111111);
            //$code = 0;
            $insert_code = "UPDATE usertable SET code = $code WHERE email = '$email'";
            $run_query =  mysqli_query($con, $insert_code);
            if($run_query){
                //$subject = "Password Reset Code";
                //$message = "Your password reset code is $code";
                //$sender = "From: shahiprem7890@gmail.com";

                try{
            $mail->setFrom('theedmissionsapp@gmail.com');
            $mail->addAddress($email);
            
            //Content
            $mail->isHTML(true); // Set email format to HTML
            $mail->Subject = 'Reset your password at EDMISSIONS.APP';
            //$mail->Body = "Hello $name!<br> Your verification code to create an EDMISSIONS.APP account is <b>$code</b>";
            //$mail->Body = "Dear $name,<br><br> We've received a request to reset your password at EDMISSIONS.APP!<br><br>To set a new password for your account, please use the following one-time password (OTP): <b>$code</b>";
            $mail->Body = "Hello,<br><br> We've received a request to reset your password at EDMISSIONS.APP!<br><br>To set a new password for your account, please use the following one-time password (OTP): <b>$code</b>";
            //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $mail->send();
            //$info = "We've sent a password reset OTP to your email - $email";
            $info = "";
                $_SESSION['info'] = $info;
                $_SESSION['email'] = $email;
                $_SESSION['code'] = $code;
                header('location: reset-code.php');
                exit();
                
            //echo " <script> alert('A verification E-Mail has been sent to you. Please enter the OTP from the E-Mail.');document.location.href='user-otp.php' </script> ";
                //if(mail($email, $subject, $message, $sender)){
                 //   $info = "We've sent a passwrod reset otp to your email - $email";
                 //   $_SESSION['info'] = $info;
                 //   $_SESSION['email'] = $email;
                 //   header('location: reset-code.php');
                //    exit();
               // }else{
               //     $errors['otp-error'] = "Failed while sending code!";
               // }

                
            }catch(Exception $e){
                $errors['db-error'] = "Something went wrong!";
            }
        }else{
            $errors['email'] = "This email address does not exist!";
        }
    }
}

    //if user click check reset otp button
    if(isset($_POST['check-reset-otp'])){
        $_SESSION['info'] = "";
        $otp_code = mysqli_real_escape_string($con, $_POST['otp']);
        $check_code = "SELECT * FROM usertable WHERE code = $otp_code";
        $code_res = mysqli_query($con, $check_code);

        if($_SESSION['code']!=$_POST['otp']){
           $errors['otp-code'] = "Incorrect OTP!";
           //header('location: user-otp.php');
           //exit();
        }
        else{
            if(mysqli_num_rows($code_res) >= 0){
            $fetch_data = mysqli_fetch_assoc($code_res);
            $email = $fetch_data['email'];
            $_SESSION['email'] = $email;
            $info = "Please create a new password that you don't use on any other site.";
            $_SESSION['info'] = $info;
            header('location: new-password.php');
            exit();
        }else{
            $errors['otp-error'] = "You've entered incorrect code!";
        }
        }

        
    }

    //if user click change password button
    if(isset($_POST['change-password'])){
        $_SESSION['info'] = "";
        $password = mysqli_real_escape_string($con, $_POST['password']);
        $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);
        if($password !== $cpassword){
            $errors['password'] = "Confirm password not matched!";
        }else{
            $code = 0;
            $email = $_SESSION['email']; //getting this email using session
            $encpass = password_hash($password, PASSWORD_BCRYPT);

            $status = "verified";
            
            $update_pass = "UPDATE usertable SET code = $code, password = '$encpass', status= '$status' WHERE email = '$email'";
            
            //$update_status = "UPDATE usertable SET status= '$status' WHERE email = '$email'";
            
            $run_query = mysqli_query($con, $update_pass);
            
            //$run_query2 = mysqli_query($con, $update_status);
            
            if($run_query){
                $info = "Your password changed. Now you can login with your new password.";
                
                $_SESSION['info'] = $info;
                //header('Location: password-changed.php');
                header('Location: index.php');
            }else{
                $errors['db-error'] = "Failed to change your password!";
            }
        }
    }
    
   //if login now button click
    if(isset($_POST['login-now'])){
        //header('Location: login-user.php');
        header('Location: index.php');
    }
?>