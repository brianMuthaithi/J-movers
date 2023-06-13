<?php
if (isset($_POST['btn_gindr'])){
    require 'connect.php';

    $conn = mysqli_connect("localhost", "root", "", "j-movers");

    // Receive data from form //
    $name = mysqli_real_escape_string($conn, $_POST['f_name']);
    $id = mysqli_real_escape_string($conn, $_POST['i_d']);
    $email = mysqli_real_escape_string($conn, $_POST['e_mail']);
    $resd = mysqli_real_escape_string($conn, $_POST['a_r']);
    $group = mysqli_real_escape_string($conn, $_POST['grp_i']);
    $phone = mysqli_real_escape_string($conn, $_POST['ph_n']);
    $product = mysqli_real_escape_string($conn, $_POST['p_s']);
    $date = mysqli_real_escape_string($conn, $_POST['gmdor']);

    // Prepare the insert query //
    $save_query = "INSERT INTO `group_members_reg`(`g_id`, `gfull_name`, `gid_no`, `g_email`, `g_residence`, `group_in`,
                                `g_phone`, `gproduct_specialty`, `gdate_of_reg`)
                                 VALUES (null,'$name','$id','$email','$resd','$group','$phone','$product','$date')";

    // Save //
    $save = mysqli_query($conn, $save_query);

    // Check if saving was successful //
    if ($save){
        echo "SUCCESSFUL!";
    }else{
        echo "FAILED!";
    }
}
