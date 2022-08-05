<?php

if(isset($_POST['sbmt'])){
    echo $title = $_POST['title'];
    echo $desc = $_POST['desc'];
    echo $date = $_POST['date'];
    echo $emp_id = $_POST['emp_id'];
    


    // Checking data empty or not
    if ($title != "" && $desc != "" && $date != "" && $emp_id != "") {

        // Start performing query using db [INSERT]

        // 1. Connecting Project to Database
        $conn = mysqli_connect("127.0.0.1:3307", "root", "", "ems");

        // 2. Checking Connectiong working or not
        if (!$conn) {
            die("Error in Connecting DB" . mysqli_connect_error());
        }else{

            // 3. prepare query
            $updateUser = "UPDATE `task` SET `Description`='$desc',`Ddate`='$date',`emp_id`='$emp_id' WHERE `Title`='$title'";

            if(mysqli_query($conn,$updateUser)){

                ?>
                    <script>
                        alert("Data Updated successfully");
                        window.location.href="view-task.php";
                    </script>
                <?php

            }else{
                echo "Error in update data : ".mysqli_error($conn);
            }

        }
        
    }


}

?>