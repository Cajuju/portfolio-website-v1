<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "CodingSkills";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error)
    {
        die("Connection failed: " . $conn->connect_error);
    } 

    $sql = "SELECT * FROM `Applications` LIMIT 0, 30 ";
    $result = $conn->query($sql);

    if ($result->num_rows > 0)
    {
        echo "<table>";
        // output data of each row
        while($row = $result->fetch_assoc())
        {
            echo "<tr><td>". "-" .$row["Application"]."</td><td>";
        }
        echo "</table>";
    }
    else
    {
        echo "0 results";
    }
    $conn->close();
?>