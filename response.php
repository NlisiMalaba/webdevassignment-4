<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formal Wear Hub</title>
    <link rel="stylesheet" href="style.css">
    <!--<script defer src="js/script.js"></script>-->
</head>


<body>
    <!--NAVIGATION BAR START-->
    <header>
        <nav>
            <h1 id="logo">Formal Wear Hub</h1>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="products.html">Gallery</a></li>
                <li><a href="about.html">About Us</a></li>
                <li><a href="#">Enquiries</a></li>
                <li><a href="login.html">Admin Login</a></li>
            </ul>
            <div class="clear"></div>
        </nav>
    </header>
    <!--NAVIGATION BAR END-->

    <!--ENQUIRY SECTION START-->
    <section class="contact">
        <header>
            <h5>Response Page</h5>
        </header>

        <div class="about container" id="about">
            <div class="container">
                <div id="error"></div>
                <form action="enquiries.php" method="post" id="contact" name="form">
                   <div>
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" required>
                    </div>
                    <div>
                        <label for="number">Number</label>
                        <input type="text" name="number" id="number" type="tel" required>
                    </div>
                    <div>
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" required>
                    </div>
                    <div>
                        <label for="enquiry">Enquiry</label>
                        <textarea name="enquiry" id="enquiry" cols="30" rows="10" required></textarea>
                    </div> 

                    <div>
                        <label for="response">Response</label>
                        <textarea name="response" id="response" cols="30" rows="10" required></textarea>
                    </div>
                
                    <button name="submit" type="submit">Submit</button>  
                </form>
            </div>
        </div>

        <?php
    
            /*include("connection.php");
            error_reporting(0);

            $rn =$_GET['rn'];
            $fn =$_GET['fn'];
            $nm =$_GET['nm'];
            $em =$_GET['em'];
            $enq =$_GET['enq'];

            $response = $_POST['response'];

            // Database connection

            $conn = new mysqli("localhost","root","","enquiries");
            if($conn->connect_error){
                die("Connection Failed : ".$conn->connect_error);
            } else {
                $stmt = $conn->prepare("UPDATE enquiries SET response = VALUES (?)");
                $stmt->bind_param("s", $response);
                $stmt->execute();
                echo "Sent Successfully";
                $stmt->close();
                $conn->close();
            }*/


            $connection = mysqli_connect("localhost", "root","");
            $db = mysqli_select_db($connection, 'enquiries');

            if(isset($_POST['submit']))
            {
                $id = $_POST['id'];

                $query = "UPDATE 'enquiries' SET response='$_POST[response]' ";
                $query_run = mysqli_query($connection, $query);

                if($query_run)
                {
                    echo '<script type="text/javascript"> alert("UPDATED")<script>';
                } else {
                    '<script type="text/javascript"> alert("NOT UPDATED")<script>';
                }
            
            }
        ?>

    </section>
    <!--ENQUIRY SECTION END-->
</body>