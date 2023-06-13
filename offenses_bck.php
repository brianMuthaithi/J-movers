<?php
if (isset($_POST['btn_off'])){
    require 'connect.php';

    $conn = mysqli_connect("localhost", "root", "", "j-movers");

    // Receive data from form //
    $name = mysqli_real_escape_string($conn, $_POST['d_name']);
    $id = mysqli_real_escape_string($conn, $_POST['d_id']);
    $offence = mysqli_real_escape_string($conn, $_POST['off']);
    $punishment = mysqli_real_escape_string($conn, $_POST['pun']);
    $date_of_punishment = mysqli_real_escape_string($conn, $_POST['do_p']);
    $resumption = mysqli_real_escape_string($conn, $_POST['do_res']);


    // Prepare the insert query //
    $save_query = "INSERT INTO `offenses`(`off_id`, `dr_name`, `dr_id`,
                       `offence`, `punishment`, `date_of_punishment`, `date_of_resumption`)
                        VALUES (null,'$name','$id','$offence','$punishment','$date_of_punishment','$resumption')";

    // Save //
    $save = mysqli_query($conn, $save_query);

    // Check if saving was successful //
    if ($save){
        echo "SUCCESSFUL!";
    }else{
        echo "FAILED!";
    }
}
