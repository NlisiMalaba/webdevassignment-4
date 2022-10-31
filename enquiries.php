<?php
    $name = $_POST['name'];
    $number = $_POST['number'];
    $email = $_POST['email'];
    $enquiry = $_POST['enquiry'];

    // Database connection

    $conn = new mysqli("localhost","root","","enquiries");
    if($conn->connect_error){
        die("Connection Failed : ".$conn->connect_error);
    } else {
        $stmt = $conn->prepare("INSERT INTO enquiries(name, number, email, enquiry) VALUES (?,?,?,?)");
        $stmt->bind_param("siss", $name, $number, $email, $enquiry);
        $stmt->execute();
        echo "Sent Successfully";
        $stmt->close();
        $conn->close();
    }

?>