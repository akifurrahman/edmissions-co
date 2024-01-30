<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Details</title>
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="stylesheet" href="../styles/gallery.css">
</head>

<body>
    <div class="container my-4">
        <header class="d-flex justify-content-between my-4">
            <h1>Details</h1>
            <div>
                <a href="index.php" class="btn btn-outline-warning">Back</a>
            </div>
        </header>
        <div class="container">
            <div class="row book-details p-5 my-4">
                <?php
            include("connect.php");
            $id = $_GET['id'];
            if ($id) {
                $sql = "SELECT * FROM students_companies WHERE ID = $id";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_array($result)) {
                 ?>

                <!-- <h3>ID:</h3>
            <p><?//php echo $row["ID"]; ?></p> -->


                <!-- <div class="col-sm-6">
                    <div class="m-2">
                        <h3>ID:</h3>
                        <p><?//php echo $row['ID']; ?></p>
                    </div>
                </div> -->
                <!-- <div class="col-sm-6">
                    <div class="m-2">
                        <h3>ID:</h3>
                        <p><?//php echo $row['id']; ?></p>
                    </div>
                </div> -->
                <div class="col-sm-6">
                    <div class="m-2">
                        <h3>Name:</h3>
                        <p><?php echo $row['name']; ?></p>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="m-2">
                        <h3>Email:</h3>
                        <p><?php echo $row['email']; ?></p>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="m-2">
                        <h3>Contact:</h3>
                        <p><?php echo $row['contact']; ?></p>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="m-2">
                        <h3>Address:</h3>
                        <p><?php echo $row['address']; ?></p>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="m-2">
                        <h3>Company Description:</h3>
                        <p><?php echo $row['company_description']; ?></p>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="m-2">
                        <h3>Company Achievements:</h3>
                        <p><?php echo $row['company_achievements']; ?></p>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="m-2">
                        <h3>Internships:</h3>
                        <p><?php echo $row['internships']; ?></p>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="m-2">
                        <h3>Job Openings:</h3>
                        <p><?php echo $row['job_openings']; ?></p>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="m-2">
                        <h3>Employee Reviews:</h3>
                        <p><?php echo $row['employee_reviews']; ?></p>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="m-2">
                        <h3>Application Process:</h3>
                        <p><?php echo $row['application_process']; ?></p>
                    </div>
                </div>

                <?php
                }
            }
            else{
                echo "<h3>No records found</h3>";
            }
            ?>

            </div>
        </div>
    </div>
</body>
<script src="../scripts/gallery.js"></script>

</html>