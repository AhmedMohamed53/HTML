<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "login_test";

$input_username;
$input_password;

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (!empty($_POST['Edit'])) { // Fetch data
    $input_id = $_POST['id'];
    $sql = "SELECT username, password FROM `user` WHERE id='$input_id'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
       while($row = $result->fetch_assoc()){
        $input_username = $row['username'];
        $input_password = $row['password'];
       }
    } 
}

if (!empty($_POST['Update'])) { // Update function
    $input_id = $_POST['id'];
    $input_username1 = $_POST['username'];
    $input_password1 = $_POST['password'];

   
    $sql1 = "UPDATE `user` SET `username` = '$input_username1', `password` = '$input_password1'  WHERE id = '$input_id'";
    $result1 = $conn->query($sql1);

    if ($result1 === TRUE) {
        header('Location: goed.php');
  
    } else {
        echo "Error: " . $sql1 . "<br>" . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ik word boos</title>
    <link rel="stylesheet" href="inlog.css">
</head>
<body>
    <div class="border">
<form action="" method="POST">
    <input type="hidden" name="id" value="<?= $input_id ?>"> <br>
    <label for="username">Email</label><br>
    <input class="rechts" type='email' name='username' value='<?= $input_username ?>'><br>
    <label for="password">Password<label><br>
    <input class="rechts" type="text" name="password" value="<?= $input_password ?>"><br>
    <input class="benden" type="submit" name="Update" value="Update">
</form>
</div>
</body>
</html>