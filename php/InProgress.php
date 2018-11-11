<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "coursework";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error)
    {
        die("Connection failed: " . $conn->connect_error);
    } 

    $sql = "SELECT * FROM `InProgress` LIMIT 0, 30 ";
    $result = $conn->query($sql);

    if ($result->num_rows > 0)
    {
        echo "<table><tr><th>Class ID</th><th>Name</th></tr>";
        // output data of each row
        while($row = $result->fetch_assoc())
        {
            echo "<tr><td>". "-" .$row["Class ID"]."</td><td>" .$row["Name"]."";
        }
        echo "</table>";
    }
    else
    {
        echo "0 results";
    }
    $conn->close();
?>