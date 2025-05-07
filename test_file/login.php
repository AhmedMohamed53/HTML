<?php

session_start();

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
//echo "Connected successfully";

if (isset($_POST['submit'])){
    
    $input_username = $_POST['username'];
    $input_password = $_POST['password'];
}
$sql = 'SELECT username, password FROM user WHERE username = "'.$input_username.'" AND password = "'.$input_password.'"';
$result = $conn->query($sql);


if ($result->num_rows > 0) {
  $_SESSION['is_ingelogd'] = true;
  header('Location: goed.php');
}

else{
    header('Location: inlog1.html');
}
?>

