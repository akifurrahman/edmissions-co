<?php require_once "controllerUserData.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link href="../styles/sign-up.css" rel="stylesheet">

    <script src="https://kit.fontawesome.com/aafd8179b0.js" crossorigin="anonymous"></script>

    <!-- Custom styles for this template -->
    <link href="../styles/sign-in.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</head>

<body class="text-center">
    <nav class="navbar navbar-expand-lg p-3 navbar-dark">
        <div class="container-fluid p-0">
            <a class="navbar-brand navtitle font-weight-bold" href="#"><i class="fa fa-book" aria-hidden="true"></i>
                EDMISSIONS.CO</a>

            <div class="collapse topnav navbar-collapse" id="navbarID">
                <!-- <a class="p-3 ml-1 mr-1 ml-auto font-weight-bold" href="../pages/about-us.php">About Us</a> -->
                <a class="p-3 ml-1 mr-1 ml-auto font-weight-bold" href="index.php">Login</a>
                <!-- <a class="p-3 ml-1 mr-1 font-weight-bold" href="#howto">Contact Us</a> -->
            </div>
            <button class="hamburger navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarID"
                aria-controls="navbarID" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-1x fa-navicon" aria-hidden="true"></i>
            </button>
        </div>
    </nav>

    <!-- <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form login-form">
                <form action="login-user.php" method="POST" autocomplete="">
                    <h2 class="text-center">Login Form</h2>
                    <p class="text-center">Login with your email and password.</p>
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
                        <input class="form-control" type="email" name="email" placeholder="Email Address" required
                            value="<?php echo $email ?>">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="password" placeholder="Password" required>
                    </div>
                    <div class="link forget-pass text-left"><a href="forgot-password.php">Forgot password?</a></div>
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="login" value="Login">
                    </div>
                    <div class="link login-link text-center">Not yet a member? <a href="signup-user.php">Signup now</a>
                    </div>
                </form>
            </div>
        </div>
    </div> -->

    <main class="form-signin">
        <div class="container-fluid">
            <div class="d-flex flex-row justify-content-center align-center">
                <div class="row">
                    <div class="col">
                        <img class="login-image" src="../assets/login-image.png" alt="">
                    </div>
                    <div class="col login">
                        <div class="">
                            <form action="index.php" method="POST" autocomplete="">
                                <!-- <img class="mb-4 logo" src="../assets/homebg.png" alt="" width="72" height="57"> -->
                                <h1 class="mb-4 text-warning font-weight-bold">
                                    <span class="title">ED<span class="missions-title">MISSIONS</span>.CO</span>
                                </h1>
                                <h4 class="mb-4 subheading font-weight-bold">Welcome back! <br> Please login into your
                                    account.</h4>
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
                                <div class="form-floating">
                                    <!-- <label for="floatingInput">Email address</label> -->
                                    <input name="email" type="email" class="form-control" id="floatingInput"
                                        placeholder="name@example.com" required value="<?php echo $email ?>">
                                </div>
                                <div class="form-floating">
                                    <!-- <label for="floatingPassword">Password</label> -->
                                    <input name="password" type="password" class="form-control" id="floatingPassword"
                                        placeholder="Password">
                                </div>

                                <!-- <div class="checkbox mb-3">
                                    <label>
                                        <input type="checkbox" value="remember-me"> Remember me
                                    </label>
                                </div> -->
                                <button class="w-100 mt-3 btn btn-lg button" name="login" value="login"
                                    type=" submit">Sign
                                    in</button>
                                <p class="m-3">New user? <a class="sign-up" href="signup-user.php">Sign Up</a></p>
                                <!-- <p class="mt-5 mb-3 text-muted">&copy; Hyderabad Traffic Police</p> -->
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>


</body>

</html>