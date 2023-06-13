<?php
if (isset($_POST['btn_indr'])){
    require 'connect.php';

    $conn = mysqli_connect("localhost", "root", "root", "j-movers");

    // Receive data from form //
    $e_name = mysqli_real_escape_string($conn, $_POST['fname']);
    $e_id = mysqli_real_escape_string($conn, $_POST['fid']);
    $e_email = mysqli_real_escape_string($conn, $_POST['email']);
    $e_residence = mysqli_real_escape_string($conn, $_POST['ar']);
    $e_phone = mysqli_real_escape_string($conn, $_POST['phn']);
    $e_product = mysqli_real_escape_string($conn, $_POST['ps']);
    $e_date = mysqli_real_escape_string($conn, $_POST['dor']);

    // Prepare the insert query //
    $save_query = "INSERT INTO `individual_members`(`id`, `full_name`, `id_no`, `email`, `residence`, `phone_no`, `product_specialty`, `date_of_reg`)
 VALUES (null,'$e_name','$e_id','$e_email','$e_residence','$e_phone','$e_product','$e_date')";

    // Save //
    $save = mysqli_query($conn, $save_query);

    // Check if saving was successful //
    if ($save){
        echo "SUCCESSFUL!";
    }else{
        echo "FAILED!";
    }
}
