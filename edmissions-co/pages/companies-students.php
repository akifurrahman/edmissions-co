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
    <title>EDMISSIONS.APP - Find Students</title>

    <!-- fa6 icons -->
    <script src="https://kit.fontawesome.com/aafd8179b0.js" crossorigin="anonymous"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />

    <!-- <link rel="stylesheet" href="lightstyle.css"> -->
    <!-- <link rel="stylesheet" href="darkstyle.css"> -->
    <link rel="stylesheet" href="../styles/students.css">
</head>

<body>
    <!-- navbar -->
    <!-- <nav class="navbar navbar-expand-lg p-3 navbar-dark">
        <div class="container-fluid p-0">
            <a class="navbar-brand navtitle font-weight-bold" href="index.html"><i class="fa fa-book"
                    aria-hidden="true"></i> EDMISSIONS.APP</a>

            <div class="collapse topnav navbar-collapse" id="navbarID">
                <a class="p-3 ml-1 mr-1 ml-auto font-weight-bold" href="about-us.html">About Us</a>
                <a class="p-3 ml-1 mr-1 font-weight-bold" href="sign-in.html">Login</a>
                <a class="p-3 ml-1 mr-1 font-weight-bold" href="#howto">Contact Us</a>
            </div>
            <button class="hamburger navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarID"
                aria-controls="navbarID" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-1x fa-navicon" aria-hidden="true"></i>
            </button>
        </div>
    </nav> -->

    <nav class="navbar navbar-expand-lg p-3 navbar-dark">
        <div class="container-fluid p-0">

            <!-- <a class="navbar-brand navtitle font-weight-bold" href="loggedinIndex.php"><i class="fa fa-book"
                    aria-hidden="true"></i> EDMISSIONS.APP</a> -->
            <a class="navbar-brand navtitle font-weight-bold" href="#"><i class="fa fa-book" aria-hidden="true"></i>
                EDMISSIONS.APP</a>

            <div class="collapse topnav navbar-collapse" id="navbarID">
                <a class="p-3 ml-auto font-weight-bold" href="about-us.php">About Us</a>
                <a class="m-2 font-weight-bold"></a>
                <!-- <a class="p-3 ml-1 mr-1 font-weight-bold" href="../login-signup-php/login-user.php" >Login</a> -->
                <!-- <a class="p-3 ml-1 mr-1 font-weight-bold" href="./databasePHPs/index.php">Contact Us</a> -->
                <!-- <a class="p-3 ml-1 mr-1 font-weight-normal" href="#"><?//php echo $fetch_info['name'] ?>
                </a> -->
                <a class="p-3 logout-button font-weight-bold" href="../login-signup-php/logout-user.php">Logout
                    <?php echo $fetch_info['name'] ?>?</a>


            </div>
            <button class="hamburger navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarID"
                aria-controls="navbarID" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-1x fa-navicon" aria-hidden="true"></i>
            </button>
        </div>
    </nav>

    <div class="mt-4 mb-4 preferences">
        <!-- <h1 class="w-75 m-auto font-weight-bold">Explore Options Based On Your Preferences</h1> -->
        <h1 class="w-75 m-auto font-weight-bold">Find Students as an Company</h1>
    </div>

    <!-- <div class="wrapper"> -->

    <!-- <iframe class="airtable-embed"
            src="
            https://airtable.com/embed/appIr1bXmgAEn8Lb2/shr0KIiVC7YaKn3w8?backgroundColor=cyan&layout=card&viewControls=on" frameborder="0"
            onmousewheel="" width="100%" height="533" style="background: transparent; border: 1px solid #ccc;"></iframe> -->

    <iframe class="airtable-embed" src="../pages/DDBs/companies-students/index.php" frameborder="0" onmousewheel=""
        width="100%" height="100%"></iframe>

    <!-- <div class="hidelogo"> -->
    <!-- </div> -->
    <!-- </div> -->



    <!-- <iframe class="airtable-embed"
        src=https://airtable.com/appFzpBV8UlGr8mv0/shrZkFLbeSN5g5JnJ/tblbMI0m0Fxxo9fxD?backgroundColor=purple&viewControls=on"
        frameborder="0" onmousewheel="" width="100%" height="533"
        style="background: transparent; border: 1px solid #ccc;"></iframe> -->





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