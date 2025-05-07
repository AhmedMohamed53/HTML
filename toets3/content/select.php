<?php

include_once("dbconnection.php");

echo "<h3>Selecteer Artists</h3>";


$sql = "SELECT id, name, country FROM artist";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
    echo "<table>";
    echo "<tr><th>Name</th><th>Country</th> </tr>"; 
    while($row = $result->fetch_assoc()) {
        $id = $row["id"];
        echo "<tr>";
        echo "<td>" . $row["name"] . "</td>";
        echo "<td>" . $row["country"] . "</td>";
        
        echo "<td>";
   
      

    }}
    echo "</table>";
        
        ?>