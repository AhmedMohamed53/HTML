<!DOCTYPE html>
<html>
<head>

    <title>CRUD dinges</title>
    <link rel="stylesheet" href="DB.css">
</head>
<body>

<?php


session_start();

if(!isset($_SESSION['is_ingelogd'])){
    header('Location: inlog1.html');

}



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login_test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, username, password FROM user";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
    echo "<table>";
    echo "<tr><th>ID</th><th>Email</th><th>Password</th><th>Actions</th>  <th> <a class = 'button' href='register.html'>Add</a> </th> <th><a href  = 'loguit.php' class='button'>Uitloggen</a></th> </tr>"; 
    while($row = $result->fetch_assoc()) {
        $id = $row["id"];
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["username"] . "</td>";
        echo "<td>" . $row["password"] . "</td>";
        
        echo "<td>";
   
      

 
        
        ?>
        <div class="form">
        <form action="update.php" method="POST">
       <?= "<input type='hidden' value='$id' name ='id'><br>" ?>
        <input class="button" type="submit" name="Edit" value="Edit">
         
    </form>
    <form action="delete.php" method="POST">
       <?= "<input type='hidden' value='$id' name ='id'><br>" ?>
        <input class="button" type="submit" name="delete" value="Delete">
         
    </form>
    </div>

    <?php

        echo "<td>"; echo "<td>";
   echo "</form>";
        echo "</td>";
        echo "</tr>";
       
    }
    echo "</table>"; 
} 
$conn->close();
?>
<footer></footer>
</body>
</html>