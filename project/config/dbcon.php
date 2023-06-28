<?php
    $host="localhost";
    $username = "root";
    $password = "";
    $database = "fruistdb";
    // creating database connecting
    $con = mysqli_connect($host,$username,$password ,$database );
    // check connect

    if(!$con){
        die("Connection failed".mysqli_connect_error());
    }
    
    
?>