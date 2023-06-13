<?php
if (isset($_POST['btn_emp'])){
    require 'connect.php';

    $conn = mysqli_connect("localhost", "root", "", "j-movers");

    // Receive data from form //
    $name = mysqli_real_escape_string($conn, $_POST['ename']);
    $id = mysqli_real_escape_string($conn, $_POST['eid']);
    $email = mysqli_real_escape_string($conn, $_POST['e_email']);
    $residence = mysqli_real_escape_string($conn, $_POST['er']);
    $phone = mysqli_real_escape_string($conn, $_POST['ephn']);
    $dept = mysqli_real_escape_string($conn, $_POST['dept']);
    $date = mysqli_real_escape_string($conn, $_POST['do_ee']);

    // Prepare the insert query //
    $save_query = "INSERT INTO `employees`(`e_id`, `e_full_name`, `e_id_no`, `e_email`, `e_residence`,
                        `e_phone_no`, `dept`, `e_date_of_employment`) 
VALUES (null,'$name','$id','$email','$residence','$phone','$dept','$date')";

    // Save //
    $save = mysqli_query($conn, $save_query);

    // Check if saving was successful //
    if ($save){
        echo "SUCCESSFUL!";
    }else{
        echo "FAILED!";
    }
}
