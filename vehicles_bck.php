<?php
if (isset($_POST['btn_vreg'])){
    require 'connect.php';

    $conn = mysqli_connect("localhost", "root", "", "j-movers");

    // Receive data from form //
    $vehicle_reg = mysqli_real_escape_string($conn, $_POST['vreg']);
    $type = mysqli_real_escape_string($conn, $_POST['tovv']);
    $load = mysqli_real_escape_string($conn, $_POST['rl']);
    $cost = mysqli_real_escape_string($conn, $_POST['ckm']);
    $trips = mysqli_real_escape_string($conn, $_POST['trps']);
    $date = mysqli_real_escape_string($conn, $_POST['dt']);

    // Prepare the insert query //
    $save_query = "INSERT INTO `vehicles`(`v_id`, `vehicle_reg`, `vehicle_type`, `rec_load(tonnes)`, `price_per_km`, `trips_made`, `date`)
 VALUES (null,'$vehicle_reg','$type','$load','$cost','$trips','$date')";

    // Save //
    $save = mysqli_query($conn, $save_query);

    // Check if saving was successful //
    if ($save){
        echo "SUCCESSFUL!";
    }else{
        echo "FAILED!";
    }
}
