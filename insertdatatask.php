<?php

// Check Submit Button click or not
if (isset($_POST['sbmt'])) {


    // Get all Post data in to variables
    $title = $_POST['title'];
    $desc = $_POST['desc'];
    $date = $_POST['date'];
    $emp_id = $_POST['emp_id'];
   

    // Checking data empty or not
    if ($title != "" && $desc != "" && $date != "" && $emp_id != "") {

        // Start performing query using db [INSERT]

        // 1. Connecting Project to Database
        $conn = mysqli_connect("127.0.0.1:3307", "root", "", "ems");

        // Checking Connectiong working or not
        if (!$conn) {
            die("Error in Connecting DB" . mysqli_connect_error());
        }

        // Prepare INSERT Query
        $insertQuery = "INSERT INTO `task`(`Title`, `Description`, `Ddate`, `emp_id`,`status`) VALUES ('$title','$desc','$date','$emp_id','Not complet')";

        // Execute INSERT Query
        $result = mysqli_query($conn, $insertQuery);

        if ($result) {

?>

            <script>
                alert("Data Inserted");
                window.location.href = "atask.php";
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

    header("Location: atask.php");
}



?>