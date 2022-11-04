<?php
    include 'config.php';

    $sql = "SELECT * FROM enquiries";

    $result = $conn->query($sql);
?>

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

    <div class="container">
        <h5>List of Enquiries</h5>

        <table class="table">
            <head>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Number</th>
                    <th>Email</th>
                    <th>Enquiry</th>
                    <th>Action</th>
                </tr>
            </head>
            <tbody>
                <?php
                    if($result->num_rows>0){
                        while($row = $result->fetch_assoc()){
                ?>

                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['number']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['enquiry']; ?></td>
                    <td><a class="btn btn-info" href="response.php?id=<?php echo $row['id']; ?>">Respond</a>&nbsp;</td>
                </tr>

                <?php }
                    }
                    ?>
            </tbody>
        </table>
    </div>
</body>
</html>
