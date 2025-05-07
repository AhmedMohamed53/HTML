<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <body>
        <div id="wrapper">
            <nav>
                <a class="active" href="index.php">Home</a>
                <a class="not_active" href="toevoegen.html">Toevoegen</a>
                <a class="not_active" href="herstel.php">Herstellen</a>
            </nav>
            <h1>Onze helden van 1974!</h1>
    
 <?php
 require_once "dbconnection.php";

$sql = "SELECT id, voornaam, achternaam, geboortedatum, foto_url FROM voetballers";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
    echo "<table>";
    echo "<tr>  <th>Foto</th><th>Voornaam</th><th>Achternaam</th><th>Geboortedatum</th> <th>Aanpassen</th><th>Verwijderen</th> </tr>"; 
    while($row = $result->fetch_assoc()) {
        $id = $row["id"];
        echo "<tr>";
        echo "<td><img src='images/" . ($row['foto_url']) . "'style='width:50px;'></td>";
        echo "<td>" . $row["voornaam"] ."</td>";
        echo "<td>" . $row["achternaam"] . "</td>";
        echo "<td>" . $row ["geboortedatum"] . "</td>";
       
        
        echo "<td>";
   
      

 
        
        ?>
        <div class="form">
        <form action="update.php" method="POST">
       <?= "<input type='hidden' value='$id' name ='id'><br>" ?>
        <input class="button" type="submit" name="Edit" value="Edit">
    </td>
    </form>
    <td>
    <form action="delete.php" method="POST">
       <?= "<input type='hidden' value='$id' name ='id'><br>" ?>
        <input class="button" type="submit" name="delete" value="Delete">
         
    </form>
    </td>
    </div>

    <?php

       
   echo "</form>";
        echo "</td>";
        echo "</tr>";
       
    }
    echo "</table>"; 
} 
$conn->close();

?>
</body>
</html>