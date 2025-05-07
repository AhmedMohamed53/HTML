<?php
include_once("dbconnection.php");

if (!empty($_POST['Register'])){
    
    $input_username = $_POST['username'];
    $input_password = $_POST['password'];
}
$sql = 'INSERT INTO `artist`(`name`, `country`) VALUES ( "'.$input_username.'", "'.$input_password.'")';
$result = $conn->query($sql);


if ($result === TRUE) {
  header('Location:/opdrachten/toets3/alles.php?p=select');
}
else{
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>
