<?php
session_start();
header('location:login.php');

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'userregistration');

$name = $_POST['usr_name'];
$pass = $_POST['psw_u'];
$email = $_POST['usr_email'];
$fname = $_POST['full_name'];

$s = "SELECT * FROM `usertable` WHERE name = '$name'";

$res = mysqli_query($con, $s);

$num = mysqli_num_rows($res);
if ($num == 1){
    echo "Username already taken";
}else{
    $reg = "INSERT INTO `usertable`(`usrname`, `password`, `email`, `fullname`) VALUES ('$name','$pass','$email','$fname')";
    mysqli_query($con, $reg);
    echo "Registration succesfull";
}