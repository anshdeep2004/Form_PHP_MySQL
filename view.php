<?php
    $server = "localhost";
    $username = "root";
    $password = "";


    // Create a database connection
    $con = mysqli_connect($server, $username, $password);
    $sql = "SELECT * FROM `information1`.`students`";
    $result = mysqli_query($con, $sql);

    //Now to find number of rows in the database
    $num = mysqli_num_rows($result);
    if($num>0){
        echo "<center>";
        echo "<br></br>";
        echo "<h1>Information Of Registered Students</h1>";
        echo "<table class='table' border=1>";
        echo "<tr>";
        echo "<th>ROLL NO.</th>";
        echo "<th>NAME</th>";
        echo "<th>EMAIL</th>";
        echo "<th>GENDER</th>";
        echo "<th>CITY</th>";
        echo "</tr>";
        while($rows = mysqli_fetch_assoc($result)){
            echo "<tr>";
            echo "<td>".$rows['Sr. no.']."</td>";
            echo "<td>".$rows['Name']."</td>";
            echo "<td>".$rows['Email']."</td>";
            echo "<td>".$rows['Gender']."</td>";
            echo "<td>".$rows['City']."</td>";
            echo "</tr>";
        }
        echo "</table>";
        echo "</center>";
    }
?>
<style>
        .table{
            padding: 2px;
            width: 75%;
            color: white;
            border: solid white;
        }
        body{
            background-image: url(bg.jpg);
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            backdrop-filter: brightness(30%)
        }
        h1{
            color: white;
        }
    </style>