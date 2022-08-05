<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->

        <?php

        session_start();
        include("include/menu.php"); ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>



                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">



                        <!-- Nav Item - User Information -->
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="logout.php" role="button">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">logout</span>
                                <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
                            </a>

                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->
                <!-- Form Start  -->

                <section class="container py-5">
                    <div class="row justify-content-center py-5">
                        <div class="col-12 col-md-6">


                            <?php

                            $id = $_GET['id'];

                            // 1. Connecting Project to Database
                            $conn = mysqli_connect("127.0.0.1:3307", "root", "", "ems");

                            // 2. Checking Connectiong working or not
                            if (!$conn) {
                                die("Error in Connecting DB" . mysqli_connect_error());
                            } else {

                                $selectUser = "SELECT * FROM `task` WHERE `id`='$id'";

                                $result = mysqli_query($conn, $selectUser);

                                while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                                    <form class="card p-5" action="updatequerytask.php" method="POST">
                                        <h2 class="text-center py-3">Update Employee Form</h2>
                                        <!-- title Input Start -->
                                        <div class="mb-3">
                                            <label for="Title" class="form-label">Title</label>
                                            <input type="text" name="title" readonly required class="form-control" id="Title" value="<?php echo $row['Title']; ?>">
                                        </div>
                                        <!-- title Input End -->

                                        <!-- desc Input Start -->
                                        <div class="mb-3">
                                            <label for="Description" class="form-label">Description</label>
                                            <input type="text" name="desc" class="form-control" id="Description" readonly required value="<?php echo $row['Description']; ?>">
                                        </div>
                                        <!-- desc Input End -->

                                        <!-- date Input Start -->
                                        <div class="mb-3">
                                            <label for="date" class="form-label">Deadline Date</label>
                                            <input type="date" name="date" readonly required class="form-control" id="Date" value="<?php echo $row['Ddate']; ?>">
                                        </div>
                                        <!-- date Input End -->

                                        <!-- emp_id Input Start -->
                                        <div class="mb-3">
                                            <label for="emp_id" class="form-label">Assign to Employee </label>
                                            <input type="text" readonly required name="emp_id" class="form-control" id="Emp_id" value="<?php echo $row['emp_id']; ?>">
                                        </div>
                                        <!-- emp-id Input End -->

                                         <!-- status Input Start -->
                                         <div class="mb-3">
                                            <label for="status" class="form-label">Status </label>
                                            <input type="text" required name="status" class="form-control" id="Status" value="<?php echo $row['status']; ?>">
                                        </div>
                                        <!-- status Input End -->

                                        <button type="submit" class="btn btn-warning" name="sbmt">Update Details</Details></button>
                                    </form>

                            <?php
                                }
                            }

                            ?>
                        </div>
                    </div>
                </section>

                <!-- Form End -->


                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php include("include/footer.php"); ?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <?php include("include/logout-model.php"); ?>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>