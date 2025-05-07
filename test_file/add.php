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
//echo "Connected successfully";

if (!empty($_POST['Register'])){
    
    $input_username = $_POST['username'];
    $input_password = $_POST['password'];


$sql = 'INSERT INTO `user`(`username`, `password`) VALUES ( "'.$input_username.'", "'.$input_password.'")';
$result = $conn->query($sql);

if ($result === TRUE) {
  header('Location: goed.php');
}
else{
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
?>

