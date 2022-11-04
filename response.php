<?php
    //$id = $_POST['id'];
    $name = $_POST['name'];
    $number = $_POST['number'];
    $email = $_POST['email'];
    $enquiry = $_POST['enquiry'];
    $response = $_POST['response'];

    // Database connection

    $conn = new mysqli("localhost","root","","responses");
    if($conn->connect_error){
        die("Connection Failed : ".$conn->connect_error);
    } else {
        $stmt = $conn->prepare("INSERT INTO responses(id, name, number, email, enquiry, response) VALUES (?,?,?,?,?)");
        $stmt->bind_param("isisss", $id, $name, $number, $email, $enquiry, $response);
        $stmt->execute();
        echo '<script type="text/javascript"> alert("Sent Successfull") </script>';
        $stmt->close();
        $conn->close();
    }
?>