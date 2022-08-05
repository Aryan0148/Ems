<?php

if(isset($_POST['sbmt'])){
    echo $id = $_POST['id'];
    echo $name = $_POST['username'];
    echo $email = $_POST['useremail'];
    echo $password = $_POST['userpassword'];
    echo $mobile = $_POST['usermobile'];
    echo $salary = $_POST['usersalary'];


    // Checking data empty or not
    if ($name != "" && $email != "" && $password != "" && $mobile != "") {

        // Start performing query using db [INSERT]

        // 1. Connecting Project to Database
        $conn = mysqli_connect("127.0.0.1:3307", "root", "", "ems");

        // 2. Checking Connectiong working or not
        if (!$conn) {
            die("Error in Connecting DB" . mysqli_connect_error());
        }else{

            // 3. prepare query
            $updateUser = "UPDATE `employee` SET `name`='$name',`password`='$password',`mobile`='$mobile' ,`salary`='$salary' WHERE `email`='$email'";

            if(mysqli_query($conn,$updateUser)){

                ?>
                    <script>
                        alert("Data Updated successfully");
                        window.location.href="view-employee.php";
                    </script>
                <?php

            }else{
                echo "Error in update data : ".mysqli_error($conn);
            }

        }
        
    }


}

?>