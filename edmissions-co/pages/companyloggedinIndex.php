<?php require "../login-signup-php/controllerUserData.php"; ?>
<?php 
$email = $_SESSION['email'];
$password = $_SESSION['password'];
if($email != false && $password != false){
    $sql = "SELECT * FROM usertable WHERE email = '$email'";
    $run_Sql = mysqli_query($con, $sql);
    if($run_Sql){
        $fetch_info = mysqli_fetch_assoc($run_Sql);
        $status = $fetch_info['status'];
        $code = $fetch_info['code'];
        if($status == "verified"){
            if($code != 0){
                header('Location: reset-code.php');
            }
        }else{
            header('Location: user-otp.php');
        }
    }
}else{
    header('Location: ../login-signup-php/login-user.php');
}
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDMISSIONS.APP - For Companies</title>

    <!-- fa6 icons -->
    <script src="https://kit.fontawesome.com/aafd8179b0.js" crossorigin="anonymous"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />

    <!-- <link rel="stylesheet" href="lightstyle.css"> -->
    <!-- <link rel="stylesheet" href="darkstyle.css"> -->
    <link rel="stylesheet" href="../styles/style.css">
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg p-3 navbar-dark">
        <div class="container-fluid p-0">

            <!-- <a class="navbar-brand navtitle font-weight-bold" href="loggedinIndex.php"><i class="fa fa-book"
                    aria-hidden="true"></i> EDMISSIONS.APP</a> -->

            <a class="navbar-brand navtitle font-weight-bold" href="#"><i class="fa fa-book" aria-hidden="true"></i>
                EDMISSIONS.APP</a>

            <div class="collapse topnav navbar-collapse" id="navbarID">
                <a class="p-3 ml-1 mr-1 ml-auto font-weight-bold" href="about-us.php">About Us</a>
                <!-- <a class="p-3 ml-1 mr-1 font-weight-bold" href="../login-signup-php/login-user.php" >Login</a> -->
                <!-- <a class="p-3 ml-1 mr-1 font-weight-bold" href="./databasePHPs/index.php">Contact Us</a> -->
                <!-- <a class="p-3 ml-1 mr-1 font-weight-normal" href="#"><?//php echo $fetch_info['name'] ?>
                </a> -->
                <a class="p-3 ml-1 mr-1 logout-button font-weight-bold"
                    href="../login-signup-php/logout-user.php">Logout <?php echo $fetch_info['name'] ?>?</a>


            </div>
            <button class="hamburger navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarID"
                aria-controls="navbarID" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-1x fa-navicon" aria-hidden="true"></i>
            </button>
        </div>
    </nav>

    <div class="section1">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <h1>Welcome to <br><span id="title">ED<span class="missions-title">MISSIONS</span>.APP</span></h1>
                    <h4>Made Finding Easy!</h4>
                    <h4>For Companies!</h4>
                    <!-- <h4>Please choose one of the options below</h4> -->
                </div>
                <div class="col">
                    <img style="width:430px; border-radius:30px" class="homebg" src="../assets/homebg2.png" alt="">
                </div>
            </div>
        </div>
    </div>

    <!-- <div class="container-fluid">
            <h5 class="mt-5 mb-4 mr-auto ml-auto">Please Choose One Of The Options Below <i class="fas fa-arrow-down fa-sm fa-fw"></i></h5>
                <div class="row button-div">
                    <div class="col-lg-3 col-md-4 col-sm-12 op1 cta-buttons m-3">
                        <a class="col-lg-3 col-md-4 col-sm-12 m-4" id="#op1" class= "cta-buttons" href="students.php">
                        
                        <h4 id="op1" class="font-weight-bold">
                            <center><i class="fa fa-child" aria-hidden="true"></i>
                                <i class="fa fa-child" aria-hidden="true"></i>
                                Students →</center>
                            </h4>
                            
                        
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-12 cta-buttons op2 m-3">
                        <a class="col-lg-3 col-md-4 col-sm-12 m-4" id="#op2" class= "cta-buttons" href="institutions.html">
                            <h4 id="op2" class="font-weight-bold">
                                <center>
                                <i class="fas fa-school fa-sm fa-fw"></i> Institutions →
                            </center>
                            </h4>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-12 cta-buttons op3 m-3"> 
                        <a class="col-lg-3 col-md-4 col-sm-12 m-4" id="#op3" class= "cta-buttons" href="companies.html">
                            <h4 id="op3" class="font-weight-bold">
                                <center>
                                    <i class="fas fa-building fa-sm fa-fw"></i>Companies →
                            </center></h4>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-12 cta-buttons op4 m-3">
                        <a class="col-lg-3 col-md-4 col-sm-12 m-4" id="#op4" class= "cta-buttons" href="companies.html">
                            <h4 id="op4" class="font-weight-bold">
                                <center>
                                    <i class="fas fa-address-card fa-sm fa-fw"></i> Businesses →
                            </center>
                        </h4>
                        </a>
                    </div>
                </div>
        </div> -->


    <div class="container-fluid">
        <h5 class="mt-5 mb-4 mr-auto ml-auto">Please Choose One Of The Options Below <i
                class="fas fa-arrow-down fa-sm fa-fw"></i></h5>
        <div class="row button-div">
            <div class="col-lg-3 col-md-4 col-sm-12 m-3">
                <a href="companies-students.php">
                    <!-- <button class="cta-buttons cta1"><span>EDMISSIONS.APP for</span><br><i   style="color:rgb(53, 75, 122)" class="fas fa-children fa-xs fa-fw"></i> Students
                        </button> -->
                    <button style="position:relative;" class="cta-buttons cta1">
                        <center><i style="color:#ffcc00" class="fas fa-children fa-xs fa-fw"></i> Students
                        </center><i style="position:absolute; bottom:25px; right:15px"
                            class="fas fa-arrow-circle-right fa-xs fa-fw"></i>
                    </button>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-12 m-3">
                <a href="companies-institutions.php">
                    <!-- <button class="cta-buttons cta2"><span>EDMISSIONS.APP for</span><br><i style="color:rgb(53, 75, 122)" class="fas fa-building fa-xs fa-fw"></i>Institutions</button> -->
                    <button style="position:relative;" class="cta-buttons cta2">
                        <center> <i style="color:rgb(53, 75, 122)" class="fas fa-building fa-xs fa-fw"></i>Institutions
                        </center><i style="position:absolute; bottom:25px; right:15px"
                            class="fas fa-arrow-circle-right fa-xs fa-fw"></i>
                    </button>
                </a>
            </div>

            <!-- <div class="col-lg-3 col-md-4 col-sm-12 m-3">
                <a href="companies.html">
                    <button style="position:relative;" class="cta-buttons cta3">
                        <center> <i style="color:rgb(53, 75, 122)" class="fas fa-address-card fa-xs fa-fw"></i>
                            Companies</center> <i style="position:absolute; bottom:25px; right:15px"
                            class="fas fa-arrow-circle-right fa-xs fa-fw"></i>
                    </button>
                </a>
            </div> -->

        </div>
    </div>

</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>

</html>
