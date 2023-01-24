<?php
   error_reporting(0);
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname ="login_register_system";

    $conn = mysqli_connect($servername,$username,$password,$dbname);

    if($conn)
    {
        // echo "connection established";
    }
    else
    {
        echo "connection failed".mysqli.connect_error();
    }
?>