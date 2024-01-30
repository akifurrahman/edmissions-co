<!doctype html>
<html lang="en">

<head>
    <title>institution-students</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.3.2 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />

    <!-- Data Table CSS -->
    <link rel='stylesheet' href='https://cdn.datatables.net/1.13.5/css/dataTables.bootstrap5.min.css'>

    <!-- Font Awesome CSS -->
    <!-- <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css'> -->
    <script src="https://kit.fontawesome.com/aafd8179b0.js" crossorigin="anonymous"></script>


    <link rel="stylesheet" href="../styles/style.css">
    <link rel="stylesheet" href="../styles/custom-data-table.css">

</head>

<body>
    <main>
        <div class="container my-4">
            <!-- <header class="d-flex justify-content-between my-4">
                <h1>Students List</h1>
                <div>
                    <a href="create.php" class="btn btn-warning">Add New Record</a>
                </div>
            </header> -->
            <?php
        //session_start();
        if (isset($_SESSION["create"])) {
        ?>
            <div class="alert alert-success">
                <?php 
            echo $_SESSION["create"];
            ?>
            </div>
            <?php
        unset($_SESSION["create"]);
        }
        ?>
            <?php
        if (isset($_SESSION["update"])) {
        ?>
            <div class="alert alert-success">
                <?php 
            echo $_SESSION["update"];
            ?>
            </div>
            <?php
        unset($_SESSION["update"]);
        }
        ?>
            <?php
        if (isset($_SESSION["delete"])) {
        ?>
            <div class="alert alert-success">
                <?php 
            echo $_SESSION["delete"];
            ?>
            </div>
            <?php
        unset($_SESSION["delete"]);
        }
        ?>

            <!-- <table id="bstable"
                class="table align-middle display nowrap table-dark table-striped table-hover table-bordered text-center"
                width="100%"> -->

            <table id="bstable" class="table table-dark align-middle table-hover table-bordered text-center">
                <thead class="align-middle">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Age</th>
                        <th>Contact</th>
                        <th>Current Education Course</th>
                        <th>Address</th>
                        <th>Interested Course</th>
                        <th>Languages</th>
                        <th>Local/Non-Local</th>
                        <th>Father's Name</th>
                        <th>Family Income</th>
                        <th>Operations</th>
                    </tr>
                </thead>
                <tbody class="table-striped">

                    <?php
        include('connect.php');
        //$sqlSelect = "SELECT * FROM books";
        $sqlSelect = "SELECT * FROM StudentRecords";
        $result = mysqli_query($conn,$sqlSelect);
        while($data = mysqli_fetch_array($result)){
            ?>
                    <tr>


                        <td>
                            <div class="box box1">
                                <?php echo $data['ID']; ?>
                            </div>
                        </td>
                        <td>
                            <div class="box">
                                <!-- <p class="text-secondary fw-bold">Name</p> -->
                                <p class=" fw-bold"><?php echo $data['Name']; ?></p>
                            </div>
                        </td>
                        <td>
                            <div class="box">
                                <!-- <p class="text-secondary fw-bold">E-Mail</p> -->
                                <?php echo $data['Age']; ?>
                            </div>
                        </td>
                        <td>
                            <div class="box">
                                <!-- <p class="text-secondary fw-bold">Contact</p> -->
                                <p class=""><?php echo $data['Contact']; ?></p>

                            </div>
                        </td>

                        <td>
                            <div class="box">
                                <!-- <p class="text-secondary fw-bold">Name</p> -->
                                <p class=""><?php echo $data['Current_Education_Course']; ?></p>
                            </div>
                        </td>
                        <td>
                            <div class="box">
                                <!-- <p class="text-secondary fw-bold">E-Mail</p> -->
                                <?php echo $data['Address']; ?>
                            </div>
                        </td>
                        <td>
                            <div class="box">
                                <!-- <p class="text-secondary fw-bold">Contact</p> -->
                                <p class=""><?php echo $data['Interested_Course']; ?></p>

                            </div>
                        </td>

                        <td>
                            <div class="box">
                                <!-- <p class="text-secondary fw-bold">Contact</p> -->
                                <p class=""><?php echo $data['Languages']; ?></p>

                            </div>
                        </td>

                        <td>
                            <div class="box">
                                <!-- <p class="text-secondary fw-bold">Name</p> -->
                                <p class=""><?php echo $data['Local_Non_Local']; ?></p>
                            </div>
                        </td>
                        <td>
                            <div class="box">
                                <!-- <p class="text-secondary fw-bold">E-Mail</p> -->
                                <?php echo $data['Father_Name']; ?>
                            </div>
                        </td>
                        <td>
                            <div class="box">
                                <!-- <p class="text-secondary fw-bold">Contact</p> -->
                                <p class=""><?php echo $data['Family_Income']; ?></p>

                            </div>
                        </td>


                        <td>
                            <div class="box boxlast">
                                <!-- <a href="view.php?id=<?//php echo $data['ID']; ?>" class="btn m-1 cta1 btn-light">
                                    <i class="fa-solid fa-arrow-up-right-from-square"></i>
                                </a> -->
                                <a href="view.php?id=<?php echo $data['ID']; ?>"
                                    class="btn btn-outline-warning rounded-pill"
                                    style="text-decoration:none;font-size:0.9rem;width:max-content;">
                                    <!-- <i class="fa-solid fa-arrow-up-right-from-square"></i> -->
                                    Show more
                                </a>
                            </div>
                        </td>

                    </tr>
                    <?php
        }
        ?>
                </tbody>
            </table>

        </div>

    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>

    <!-- jQuery -->
    <script src='https://code.jquery.com/jquery-3.7.0.js'></script>
    <!-- Data Table JS -->
    <script src='https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js'></script>
    <script src='https://cdn.datatables.net/responsive/2.1.0/js/dataTables.responsive.min.js'></script>
    <script src='https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap5.min.js'></script>

</body>

<script>
$(document).ready(function() {
    $('#bstable').DataTable({
        //disable sorting on last column
        "columnDefs": [{
            "orderable": false,
            "targets": 5
        }],
        scrollX: true,
        language: {
            searchPlaceholder: "Search here",
            //customize pagination prev and next buttons: use arrows instead of words
            'paginate': {
                'previous': '<span class="fa fa-chevron-left"></span>',
                'next': '<span class="fa fa-chevron-right"></span>'
            },
            //customize number of elements to be displayed
            "lengthMenu": 'Displaying <select data-bs-theme="dark" class="form-control input-sm">' +
                '<option value="10">10</option>' +
                '<option value="20">20</option>' +
                '<option value="30">30</option>' +
                '<option value="40">40</option>' +
                '<option value="50">50</option>' +
                '<option value="-1">All</option>' +
                '</select> Results:'
        }
    })
});
</script>

</html>