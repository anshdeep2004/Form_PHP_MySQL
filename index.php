<?php
$insert = false;
if(isset($_POST['name'])){
    // Set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";

    // Create a database connection
    $con = mysqli_connect($server, $username, $password);


    // Collect post variables
    $name = $_POST['name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $city = $_POST['city'];
    $sql = "INSERT INTO `information1`.`students` (`name`, `email`, `gender`, `city`) VALUES ('$name', '$email', '$gender', '$city');";
    // echo $sql;

    // Execute the query
    if($con->query($sql) == true){
        // echo "Successfully inserted";

        // Flag for successful insertion
        $insert = true;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }

    // Close the database connection
    $con->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Assignment</title>
    <style>
        fieldset{
            width: 40%;
        }
        form{
            color: white;
            width:100%;
        }
        body{
            background-image: url(bg.jpg);
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            backdrop-filter: brightness(30%)
        }
    </style>
</head>
<body>
    <br><br><br><br><br><br><br><br>
    <center><fieldset><form action="index.php" method="post">
        <h1>Student Registration Form</h1>
        <input type="text" name="name" placeholder="Enter your name"/><br><br>
        <input type="email" name="email" placeholder="Enter your email"><br><br>
        Gender: <input type="radio" name="gender" value="male">Male
                <input type="radio" name="gender" Value="female">Female<br><br>
        City: <select name="city">
                    <option value="Nagpur" selected>Nagpur</option>
                    <option value="Pune">Pune</option>
                    <option value="Benglore">Benglore</option>
                    <option value="Mumbai">Mumbai</option>
                    <option value="Chandigarh">Chandigarh</option>
                </select><br><br>
                <button name="submit">submit</button>
    </form></fieldset></center><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</body>
</html>