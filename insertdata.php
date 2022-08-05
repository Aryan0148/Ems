<?php

// Check Submit Button click or not
if (isset($_POST['sbmt'])) {


    // Get all Post data in to variables
    $name = $_POST['username'];
    $email = $_POST['useremail'];
    $password = $_POST['userpassword'];
    $mobile = $_POST['usermobile'];
    $salary = $_POST['usersalary'];

    // Checking data empty or not
    if ($name != "" && $email != "" && $password != "" && $mobile != "" && $salary != "") {

        // Start performing query using db [INSERT]

        // 1. Connecting Project to Database
        $conn = mysqli_connect("127.0.0.1:3307", "root", "", "ems");

        // Checking Connectiong working or not
        if (!$conn) {
            die("Error in Connecting DB" . mysqli_connect_error());
        }

        // Prepare INSERT Query
        $insertQuery = "INSERT INTO `employee`(`name`, `email`, `password`, `mobile`,`salary`) VALUES ('$name','$email','$password','$mobile','$salary')";

        // Execute INSERT Query
        $result = mysqli_query($conn, $insertQuery);

        if ($result) {

?>

            <script>
                alert("Data Inserted");
                window.location.href = "add-employee.php";
            </script>
<?php
        } else {
            echo "Error" . mysqli_error($conn);
        }
    } else {
        echo "All field are empty....!!";
        // header("Location: adduser.php");
    }
} else {

    header("Location: add-employee.php");
}



?>