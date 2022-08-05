<?php
session_start();

if (isset($_POST['sbmt'])) {


    $adminemail = $_POST['adminemail'];
    $adminpwd = $_POST['adminpwd'];

    if ($adminemail != "" and $adminpwd != "") {

        // 1. Connecting Project to Database
        $conn = mysqli_connect("127.0.0.1:3307", "root", "", "ems");

        // 2. Checking Connectiong working or not
        if (!$conn) {
            die("Error in Connecting DB" . mysqli_connect_error());
        } else {


            $selectAdmin = "SELECT * FROM `admin` WHERE  `email`='$adminemail' AND `password`='$adminpwd'";

            $rows = mysqli_query($conn, $selectAdmin);

            if (mysqli_num_rows($rows) === 1) {

                $data = mysqli_fetch_assoc($rows);
                if ($data['email'] === $adminemail && $data['password'] === $adminpwd) {

                    $_SESSION['email'] = $data['email'];

?>

                    <script>
                        alert("Login Successfully");
                        window.location.href = "dashbord.php?email=<?php echo $adminemail ?>";
                    </script>
                <?php

                } else {
                ?>

                    <script>
                        alert("Email id or password incorrect... Try Again...!!");
                        window.location.href = "alogin.html";
                    </script>
                <?php
                }
            } else {

                ?>
                <script>
                    alert("Email id or password incorrect... Try Again...!!");
                    window.location.href = "alogin.html";
                </script>

<?php

            }
        }
    }
} else {
    header("Location: alogin.html");
}
