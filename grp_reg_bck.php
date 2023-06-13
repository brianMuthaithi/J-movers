<?php
if (isset($_POST['btn_grp'])){
    require 'connect.php';

    $conn = mysqli_connect("localhost", "root", "", "j-movers");

    // Receive data from form //
    $g_name = mysqli_real_escape_string($conn, $_POST['gname']);
    $location = mysqli_real_escape_string($conn, $_POST['loc']);
    $g_leader = mysqli_real_escape_string($conn, $_POST['gl']);
    $gl_phone = mysqli_real_escape_string($conn, $_POST['glp']);
    $produce_type = mysqli_real_escape_string($conn, $_POST['top']);
    $date = mysqli_real_escape_string($conn, $_POST['gdor']);

    // Prepare the insert query //
    $save_query = "INSERT INTO `group_reg`(`grp_id`, `grp_name`, `location`, `grp_leader`, `grp_ldr_phn`,
                        `grp_produce_type`, `grp_date_of_reg`) VALUES (null,'$g_name','$location','$g_leader','$gl_phone','$produce_type','$date')";

    // Save //
    $save = mysqli_query($conn, $save_query);

    // Check if saving was successful //
    if ($save){
        echo "SUCCESSFUL!";
    }else{
        echo "FAILED!";
    }
}
