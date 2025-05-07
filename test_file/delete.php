<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "login_test";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (!empty($_POST['delete'])) { // Fetch data
    $input_id = $_POST['id'];
    $sql = "DELETE FROM `user` WHERE id='$input_id'";
    $result = $conn->query($sql);

    if ($result === TRUE) {
        header('Location: goed.php');
  
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}