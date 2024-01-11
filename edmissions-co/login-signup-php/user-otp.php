<?php require_once "controllerUserData.php"; ?>
<?php 
$email = $_SESSION['email'];
if($email == false){
  header('Location: login-user.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Code Verification</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../styles/style.css">

</head>

<body>
    <div class="container">
        <div class="row d-flex align-center justify-content-center">

            <!-- <div class="mt-5 mb-5 col-sm-12"> -->
            <div class="col-sm-12">
                <span id="title">ED<span class="missions-title">MISSIONS</span>.APP</span>
            </div>
            <div class="col-sm-12 mt-5 mb-5 ml-2 mr-2 col-md-4 offset-md-4 form">
                <form action="user-otp.php" method="POST" autocomplete="off">
                    <h2 class="text-center">OTP Verification</h2>
                    <p class="text-center">Please provide the OTP you have received in your E-mail we have
                        sent to you.</p>
                    <?php 
                    if(isset($_SESSION['info'])){
                        ?>
                    <!-- <div class="alert alert-success text-center">
                        <?//php echo $_SESSION['info']; ?>
                    </div> -->
                    <?php
                    }
                    ?>
                    <?php
                    if(count($errors) > 0){
                        ?>
                    <div class="alert alert-danger text-center">
                        <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                    </div>
                    <?php
                    }
                    ?>
                    <div class="form-group">
                        <input class="form-control" type="text" pattern="\d*" name="otp"
                            placeholder="Enter verification code" maxlength="6" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="check" value="Submit">
                    </div>
                </form>
                <!-- <form action="controllerUserData.php" method="POST"> -->
                <form action="../mailsenders/emailtest2.php" method="post">
                    <p class="m-3">Didn't receive a Code?
                        <input type="submit" value="Send OTP"
                            style="color:#ffcc00; background-color:transparent!important;border:1px solid #ffcc00;border-radius:8px;"
                            class="sign-up pt-1 pb-1 ml-1" id="create-account-otp-reset-button"
                            name="create-account-otp-reset-button"></input>
                    </p>
                </form>
                <!-- <form action="controllerUserData.php" method="post"> -->
                <!-- <form action="../mailsenders/emailtest2.php" method="post">
                    <label for="button">click to send email</label>
                    <input type="submit" value="Send OTP" style="color:#ffcc00; background-color:transparent!important;
                            " class="sign-up" id="reset-button" name="reset-button"></input>
                </form> -->
            </div>
        </div>
    </div>

</body>

</html>