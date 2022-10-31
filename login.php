<?php
    $username = $_POST['username'];
    $password = $_POST['password'];
    

    //Database Connection

    $con = new mysqli("localhost","root","","login");
    if($con->connect_error){
       die("Failed to connect : ".$con->connect_error);
    } else {
        $stmt = $con->prepare("SELECT * FROM login WHERE Username = ?");
        $stmt -> bind_param("s", $username);
        $stmt->execute();
        $stmt_result = $stmt->get_result();
        
        if($stmt_result->num_rows > 0){
            $data = $stmt_result->fetch_assoc();
            if($data['password'] === $password){
                header("Location: admin.php ");
            } else {
                echo "<h2>Invalid Email or Password</h2>";
            }
        } else {
            echo "<h2>Invalid Email or Password</h2>";
        }
    }
?>