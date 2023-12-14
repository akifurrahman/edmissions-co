<?php require_once "controllerUserData.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../styles/style.css">
</head>


<body>
    <div class="container">
        <div class="row d-flex align-center justify-content-center">
            <div class="col-sm-12">
                <span id="title">ED<span class="missions-title">MISSIONS</span>.APP</span>
            </div>
            <div class="col-sm-12 mt-5 mb-5 ml-2 mr-2 col-md-4 offset-md-4 form">
                <form action="forgot-password.php" method="POST" autocomplete="">
                    <h2 class="text-light text-center">Forgot your Password?</h2>
                    <p class="text-light text-center">Please enter the email address tied to your EDMISSIONS.APP
                        account.</p>
                    <?php
                        if(count($errors) > 0){
                            ?>
                    <div class="alert alert-danger text-center">
                        <?php 
                                    foreach($errors as $error){
                                        echo $error;
                                    }
                                ?>
                    </div>
                    <?php
                        }
                    ?>
                    <div class="form-group">
                        <input class="form-control" type="email" name="email" placeholder="Enter email address" required
                            value="<?php echo $email ?>">
                    </div>
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="check-email" value="Continue">
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>