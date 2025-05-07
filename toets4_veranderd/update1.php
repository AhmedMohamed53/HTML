<?php

require_once "dbconnection.php";

if (!empty($_POST['Update'])) { 
    $input_id = $_POST['id'];
    $input_voor1 = $_POST['voornaam'];
    $input_achter1 = $_POST['achternaam'];
    $input_datum1 = $_POST['geboortedatum'];
    $input_url1 = $_POST['foto_url'];

   
    $sql1 = 'UPDATE `voetballers` SET `voornaam` = "'.$input_voor1.'",`achternaam` = "'.$input_achter1.'",`geboortedatum` = "'.$input_datum1.'",`foto_url` = "'.$input_url1.'"  WHERE id = "'.$input_id.'"';
    $result1 = $conn->query($sql1);

    if ($result1 === TRUE) {
        header('Location: index.php');
  
    } else {
        echo "Error: " . $sql1 . "<br>" . $conn->error;
    }
}


?>