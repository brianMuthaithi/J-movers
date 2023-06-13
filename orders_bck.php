<?php
if (isset($_POST['btn_orders'])){
    require 'connect.php';

    $conn = mysqli_connect("localhost", "root", "", "j-movers");

    // Receive data from form //
    $farmer_name = mysqli_real_escape_string($conn, $_POST['fgname']);
    $type_of_goods = mysqli_real_escape_string($conn, $_POST['togo']);
    $weight = mysqli_real_escape_string($conn, $_POST['wgt']);
    $distance = mysqli_real_escape_string($conn, $_POST['dst']);
    $veh_ass = mysqli_real_escape_string($conn, $_POST['asv']);
    $type_of_vehicle = mysqli_real_escape_string($conn, $_POST['tov']);
    $date = mysqli_real_escape_string($conn, $_POST['doo']);
    $loaders = mysqli_real_escape_string($conn, $_POST['al']);

    // Prepare the insert query //
    $save_query = "INSERT INTO `orders`(`or_id`, `ind_grp_name`, `produce_type`, `weight(tonnes)`, `distance(km)`, `ass_vehicle`, `type_of_vehicle`,
                     `date_of_order`, `ass_loaders`) 
                     VALUES (null,'$farmer_name','$type_of_goods','$weight','$distance','$veh_ass','$type_of_vehicle','$date','$loaders')";

    // Save //
    $save = mysqli_query($conn, $save_query);

    // Check if saving was successful //
    if ($save){
        echo "SUCCESSFUL!";
    }else{
        echo "FAILED!";
    }
}

