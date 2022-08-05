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
        $_SESSION['email']="admin@gmail.com";
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
                            <a class="nav-link dropdown-toggle" href="logout.php"  role="button">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">logout</span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                          
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->


                <!-- /.container-fluid -->
                <!-- Form Start  -->

                <section class="container py-5">
                    <div class="row justify-content-center py-5">
                        <div class="col-12 col-md-6">
                            <form class="card p-5" action="insertdata.php" method="POST">
                                <h2 class="text-center py-3">Add Employee</h2>
                                <!-- Name Input Start -->
                                <div class="mb-3">
                                    <label for="userName" class="form-label">Name</label>
                                    <input type="text" name="username" required class="form-control" id="userName">
                                </div>
                                <!-- Name Input End -->

                                <!-- Email Input Start -->
                                <div class="mb-3">
                                    <label for="userEmail" class="form-label">Email address</label>
                                    <input type="email" name="useremail" class="form-control" id="userEmail" required>
                                </div>
                                <!-- Email Input End -->

                                <!-- Password Input Start -->
                                <div class="mb-3">
                                    <label for="userPassword" class="form-label">Password</label>
                                    <input type="password" name="userpassword" required class="form-control" id="userPassword">
                                </div>
                                <!-- Password Input End -->

                                <!-- Mobile Input Start -->
                                <div class="mb-3">
                                    <label for="userMobile" class="form-label">Mobile </label>
                                    <input type="text" required name="usermobile" class="form-control" id="userMobile">
                                </div>
                                <!-- Mobile Input End -->

                                <!-- Salary Input Start -->
                                <div class="mb-3">
                                    <label for="userSalary" class="form-label">Salary </label>
                                    <input type="text" required name="usersalary" class="form-control" id="userSalary">
                                </div>
                                <!-- Salary Input End -->

                                <button type="submit" class="btn btn-primary" name="sbmt">Add Employee</button>
                            </form>
                        </div>
                    </div>
                </section>

                <!-- Form End -->
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