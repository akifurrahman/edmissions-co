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
    <title>EDMISSIONS.CO - Home Page</title>

    <!-- fa6 icons -->
    <script src="https://kit.fontawesome.com/aafd8179b0.js" crossorigin="anonymous"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />

    <!-- <link rel="stylesheet" href="lightstyle.css"> -->
    <!-- <link rel="stylesheet" href="darkstyle.css"> -->
    <link rel="stylesheet" href="../styles/about-us.css">
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg p-3 navbar-dark">
        <div class="container-fluid p-0">
            <!-- <a class="navbar-brand navtitle font-weight-bold" href="loggedinIndex.php"><i class="fa fa-book"
                    aria-hidden="true"></i> EDMISSIONS.CO</a> -->

            <a class="navbar-brand navtitle font-weight-bold" href="#"><i class="fa fa-book" aria-hidden="true"></i>
                EDMISSIONS.CO</a>

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
            <div class="row mt-5">
                <div class="mb-5 col-md-6 col-sm-12">
                    <img style="transform: scale(1.1);" class="homebg" src="../assets/aboutus2.png" alt="">
                </div>
                <div class="col-md-6 col-sm-12">
                    <h3>All About Us<br><span id="title">ED<span class="missions-title">MISSIONS</span>.CO</span></h3>
                    <!-- <h2 class="m-3 font-weight-bold">About Us</h2> -->
                    <!-- <p class="m-3 about-para">Knowledge goes a long way — be it the insights you gain in school or the books you read at your college library; education plays a vital role in every walk of life. And as it goes without saying, having access to good educational resources and a well-rounded platform is extremely crucial to attain proper education. Unfortunately, finding the right educational institute can be an insurmountable task, not to mention the time and energy needed for it.
                Now let’s face it, we are all guilty of taking admission into a college or a school that we didn’t want to, just because our relatives suggested it to our parents, or because your uncle’s son/daughter studies in it, or maybe because it’s a stone’s throw away from your house (as was in my case). What if we had a way to explore better colleges or schools and persuade our parents to admit us in them? Surely, going to every school or college in your area to ask for details is tedious, and it’s a huge gap to cover across.
                </p> -->
                    <p class="m-3 about-para">We are an Edtech platform that serves as a bridge between students,
                        educational institutions, companies and businesses. This platform likely aims to facilitate
                        learning, collaboration, and opportunities for students, whether it's by providing access to
                        educational resources, internships, job placements, or other educational and career-related
                        services.
                    </p>

                    <hr class="m-5 ml-auto mr-auto bg-light w-50">

                </div>
            </div>
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