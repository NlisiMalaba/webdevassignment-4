<?php
    include 'config.php';

    if(isset($_POST['update'])){
        $name = $_POST['name'];
        $number = $_POST['number'];
        $email = $_POST['email'];
        $enquiry = $_POST['enquiry'];
        $user_id = $_POST['id'];
        $response = $_POST['response'];

        $sql = "UPDATE enquiries 
                SET 'name'= '$name','number'='$number', 'email'='$email', 'enquiry'='$enquiry', 'response' = '$response' 
                WHERE 'id'= '$user_id' ";
        
        $result = $conn->query($sql);

        if($result == TRUE){
            echo '<script type="text/javascript"> alert("Responded Successfully") </script>' ;
        } else {
            echo '<script type="text/javascript"> alert("Error!") </script>' ;
        }
    }

    if(isset($_GET['id'])){
        $user_id = $_GET['id'];

        $sql = "SELECT * FROM 'enquiries' WHERE 'id'='$user_id'";

        $result = $conn->query($sql);

        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                $name = $row['name'];
                $number = $row['number'];
                $email = $row['email'];
                $enquiry = $row['enquiry'];
                $id = $row['id'];
            }
            ?>
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
                            <form action="response.php" method="post" id="contact" name="form">
                                <div>
                                    <!--<label for="name">ID</label>-->
                                    <input type="text" name="user_id" id="id" value= "<?=(isset($id))?$id:""?>" required>
                                </div>   

                                <div>
                                    <label for="name">Name</label>
                                    <input type="text" name="name" id="name" value= "<?php echo $name; ?>" required>
                                </div>
                                <div>
                                    <label for="number">Number</label>
                                    <input type="text" name="number" id="number" type="tel" value= "<?=(isset($number))?$number:""?>" required>
                                </div>
                                <div>
                                    <label for="email">Email</label>
                                    <input type="email" name="email" id="email" value= "<?=(isset($email))?$email:""?>" required>
                                </div>
                                <div>
                                    <label for="enquiry">Enquiry</label>
                                    <input type="text" name="enquiry" id="enquiry" cols="30" rows="10" value= "<?=(isset($enquiry))?$enquiry:""?>"required>
                                </div> 

                                <div>
                                    <label for="response">Response</label>
                                    <textarea name="response" id="response" cols="30" rows="10" required></textarea>
                                </div>
                            
                                <button name="submit" type="submit">Submit</button>  
                            </form>
                        </div>
                    </div>
                </section>
                <!--ENQUIRY SECTION END-->
            </body>
            </html>

    <?php
        } else{
            header('Location: admin.php');
        }
    }
    ?>

