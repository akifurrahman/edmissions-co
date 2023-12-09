<?php require_once "controllerUserData.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link href="../styles/sign-up.css" rel="stylesheet">

    <script src="https://kit.fontawesome.com/aafd8179b0.js" crossorigin="anonymous"></script>

    <!-- Custom styles for this template -->
    <link href="../styles/sign-up.css" rel="stylesheet">

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
                EDMISSIONS.APP</a>

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

    <main class="form-signin">
        <div class="container-fluid">
            <div class="d-flex flex-row justify-content-center align-center">
                <div class="row">
                    <div class="col">
                        <img class="login-image" src="../assets/login-image.png" alt="">
                    </div>
                    <div class="col login">
                        <div class="">
                            <form name="form_login" action="signup-user.php" method="POST" autocomplete="">
                                <!-- <h2 class="text-center">Signup Form</h2>
                    <p class="text-center">It's quick and easy.</p> -->
                                <h1 class="mb-4 text-warning font-weight-bold">
                                    <span class="title">ED<span class="missions-title">MISSIONS</span>.CO</span>
                                </h1>
                                <h4 class="mb-4 subheading font-weight-bold">Hello! Please proceed with creating your
                                    account.</h4>
                                <?php
                    if(count($errors) == 1){
                        ?>
                                <div class="alert alert-danger text-center">
                                    <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                                </div>
                                <?php
                    }elseif(count($errors) > 1){
                        ?>
                                <div class="alert alert-danger">
                                    <?php
                            foreach($errors as $showerror){
                                ?>
                                    <li><?php echo $showerror; ?></li>
                                    <?php
                            }
                            ?>
                                </div>
                                <?php
                    }
                    ?>
                                <div class="form-floating">
                                    <input class="form-control" id="floatingInput" type="text" name="name"
                                        placeholder="Full Name" required value="<?php echo $name ?>">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" id="floatingInput" type="email" name="email"
                                        placeholder="Email Address" required value="<?php echo $email ?>">
                                </div>
                                <div class="form-floating">
                                    <input class="form-control password1" id="floatingPassword" type="password"
                                        name="password" placeholder="Password" required>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" id="floatingPassword" type="password" name="cpassword"
                                        placeholder="Confirm password" required>
                                </div>

                                <h4 class="mt-1">I am a:</h4>
                                <div class="mb-4 btn-group btn-group-toggle" data-toggle="buttons">
                                    <label class="btn btn-outline-secondary active">
                                        <input type="radio" name="options" value="Student" id=" option1"
                                            autocomplete="off" checked>
                                        Student
                                    </label>
                                    <label class="btn btn-outline-secondary">
                                        <input type="radio" name="options" value="Institution" id="option2"
                                            autocomplete="off"> Institution
                                    </label>
                                    <label class="btn btn-outline-secondary">
                                        <input type="radio" name="options" value="Company" id="option3"
                                            autocomplete="off"> Company
                                    </label>
                                </div>

                                <button class="w-100 btn btn-lg button" name="signup" value="Signup" type="submit">Sign
                                    Up</button>
                                <p class="m-3">Already a user? <a class="sign-up" href="index.php">Sign
                                        In</a></p>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>

</body>

</html>
