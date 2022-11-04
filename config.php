<?php
    $servername = "db4free.net:4000";
    $username = "rootEnquiries";
    $password = "root@num1";
    $dbname = "enquiries";

    $con = new mysqli($servername, $username, $password, $dbname);
    if($con->connect_error){
       die("Failed to connect : ".$con->connect_error);
    }
?>