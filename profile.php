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
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="logout.php" role="button">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">logout</span>
                                <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
                            </a>

                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <section class="vh-100" style="background-color: #f4f5f7;">
                    <div class="container py-5 h-100">
                        <div class="row d-flex justify-content-center align-items-center h-100">
                            <div class="col col-lg-6 mb-4 mb-lg-0">
                                <div class="card mb-3" style="border-radius: .5rem;">
                                    <div class="row g-0">
                                        <?php
                                        // 1. Connecting Project to Database
                                        $conn = mysqli_connect("127.0.0.1:3307", "root", "", "ems");

                                        // 2. Checking Connectiong working or not
                                        if (!$conn) {
                                            die("Error in Connecting DB" . mysqli_connect_error());
                                        } else {


                                            // 3. SELECT query for user  
                                            $userSelect = "SELECT * FROM `employee` where `id`='$id' ";

                                            // 4. Execute query ( select query ) and store result in result    
                                            $result = mysqli_query($conn, $userSelect);

                                            if (mysqli_num_rows($result) > 0) {

                                                while ($row = mysqli_fetch_assoc($result)) {
                                        ?>
                                                    <!--  execute loop with html -->
                                                    <div class="col-md-4 gradient-custom text-center text-white" style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
                                                        <img src="img/undraw_profile.svg" alt="Avatar" class="img-fluid my-5" style="width: 80px;" />
                                                        <h5>Marie Horwitz</h5>
                                                        <p>Web Designer</p>
                                                        <i class="far fa-edit mb-5"></i>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="card-body p-4">
                                                            <h6>Profile</h6>
                                                            <hr class="mt-0 mb-4">
                                                            <div class="row pt-1">
                                                                <div class="col-6 mb-3">
                                                                    <h6>Name</h6>
                                                                    <p class="text-muted"><?php echo $row['name']; ?></p>
                                                                </div>
                                                                <div class="col-6 mb-3">
                                                                    <h6>Email</h6>
                                                                    <p class="text-muted"><?php echo $row['email']; ?></p>
                                                                </div>
                                                            </div>
                                                            <h6></h6>
                                                            <hr class="mt-0 mb-4">
                                                            <div class="row pt-1">
                                                                <div class="col-6 mb-3">
                                                                    <h6>Phone</h6>
                                                                    <p class="text-muted"><?php echo $row['mobile']; ?></p>
                                                                </div>
                                                                <div class="col-6 mb-3">
                                                                    <h6>Salary</h6>
                                                                    <p class="text-muted"><?php echo $row['salary']; ?></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                        <?php
                                                }
                                            } else {

                                                echo "No Data Found";
                                            }
                                        }


                                        ?>
                                       
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