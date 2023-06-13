<?php
$con = mysqli_connect('localhost', 'root', '');

mysqli_select_db($con, 'userregistration');

$name = $_POST['uname'];
$pass = $_POST['psw'];

$s = "SELECT * FROM `usertable` WHERE name = '$name' && password = '$pass' ";

$res = mysqli_query($con, $s);

$num = mysqli_num_rows($res);
if ($num == 1) {
    $_SESSION['username'] = $name;
    header('location:home.php');
} else {
    header('location:login.php');
}