<?php
    $conn = mysqli_connect("localhost", "root", "root", "j-movers");
    if (!$conn){
        die("connection failed!");
    }