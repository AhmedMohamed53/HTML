<?php

require_once "dbconnection.php";

if (!empty($_POST['delete'])) { // Fetch data
    $input_id = $_POST['id'];
    $sql = "DELETE FROM `voetballers` WHERE id='$input_id'";
    $result = $conn->query($sql);

    if ($result === TRUE) {
        header('Location: index.php');
  
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}


?>