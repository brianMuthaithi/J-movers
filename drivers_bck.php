<?php
if (isset($_POST['btn_dreg'])){
    require 'connect.php';

    $conn =$conn = mysqli_connect("localhost", "root", "", "j-movers");

    // Receive data from form //
    $name = mysqli_real_escape_string($conn, $_POST['dname']);
    $id = mysqli_real_escape_string($conn, $_POST['ddid']);
    $email = mysqli_real_escape_string($conn, $_POST['dem']);
    $residence = mysqli_real_escape_string($conn, $_POST['resd']);
    $phone = mysqli_real_escape_string($conn, $_POST['dphn']);
    $vehicle = mysqli_real_escape_string($conn, $_POST['va']);
    $reg_date = mysqli_real_escape_string($conn, $_POST['ddoe']);

    // Prepare the insert query //
    $save_query = "INSERT INTO `drivers`(`dr_id`, `driver_name`, `driver_id`, `driver_email`, `driver_phone`, `driver_residence`, `dr_vehicle_assgned`, `dr_date_of_employment`) 
VALUES (null,'$name','$id','$email','$phone','$residence','$vehicle','$reg_date')";

    // Save //
    $save = mysqli_query($conn, $save_query);

    // Check if saving was successful //
    if ($save){
        echo "SUCCESSFUL!";
    }else{
        echo "FAILED!";
    }
}
