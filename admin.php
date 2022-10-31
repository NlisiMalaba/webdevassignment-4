<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formal Wear Hub</title>
    <link rel="stylesheet" href="style.css">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <!--NAVIGATION BAR START-->
    <header>
        <nav>
            <h1 id="logo">Formal Wear Hub</h1>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="products.html">Gallery</a></li>
                <li><a href="about.html">About Us</a></li>
                <li><a href="enquiries.html">Enquiries</a></li>
                <li><a href="login.html">Admin Login</a></li>
            </ul>
            <div class="clear"></div>
        </nav>
    </header>
    <!--NAVIGATION BAR END-->

    <!--RECORDS START-->
    <h5>List of Enquiries</h5>
    <br>

    <table class="table" style="margin: 50px;">
        <thead>
            <tr>
                <th>Name</th>
                <th>Number</th>
                <th>Email</th>
                <th>Enquiry</th>
                <th>Response</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "enquiries";

            //Database connection

            $connection = new mysqli($servername, $username, $password, $database);

            if ($connection->connect_error){
                die("Connection Failed: ".$connection->connect_error);
            }

            // Read all data from database table
            $sql = "SELECT * FROM enquiries";
            $result = $connection->query($sql);

            if (!$result){
                die("Invalid query: ".$connection->error);
            }

            //Read data of each row
            while($row = $result->fetch_assoc()){
                echo "
                    <tr>
                        <td>" . $row["name"] . "</td>
                        <td>" . $row["number"] . "</td>
                        <td>" . $row["email"] . "</td>
                        <td>" . $row["enquiry"] . "</td>
                        <td>" . $row["response"] . "</td>
                        <td></td>
                        <td>
                            <a class='btn btn-primary btn-sm' href='response.php'>Respond</a>
                            <a class='btn btn-primary btn-sm' href='edit'>Edit</a>
                        </td>
                    </tr>";
            }            
            ?>
        </tbody>
    </table>
 
    
    <!--RECORDS END-->

</body>