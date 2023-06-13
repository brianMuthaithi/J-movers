<?php
if (isset($_POST['btn_expense'])){
    require 'connect.php';

    $conn =$conn = mysqli_connect("localhost", "root", "", "j-movers");

    // Receive data from form //
    $vehicle_reg = mysqli_real_escape_string($conn, $_POST['v_reg']);
    $vehicle_type = mysqli_real_escape_string($conn, $_POST['tove']);
    $fuel = mysqli_real_escape_string($conn, $_POST['fl']);
    $service = mysqli_real_escape_string($conn, $_POST['sc']);
    $date_of_sc = mysqli_real_escape_string($conn, $_POST['dat']);

    // Prepare the insert query //
    $save_query = "INSERT INTO `vehicle_expenses`(`ve_id`, `veh_reg_no`, `veh_type`, `fuel`, `service_charge`, `date`)
    VALUES (null,'$vehicle_reg','$vehicle_type','$fuel','$service','$date_of_sc')";

    // Save //
    $save = mysqli_query($conn, $save_query);

    // Check if saving was successful //
    if ($save){
        echo "SUCCESSFUL!";
    }else{
        echo "FAILED!";
    }
}

