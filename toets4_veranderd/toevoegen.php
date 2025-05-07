<?php
require_once "dbconnection.php";


if (!isset($_POST['submit'])){
    $input_voor = $_POST['voornaam'];
    $input_achter = $_POST['achternaam'];
    $input_datum = $_POST['birth'];
    $input_url = $_POST['url'];
}
$sql = 'INSERT INTO `voetballers`( `voornaam`, `achternaam`, `geboortedatum`, `foto_url`) VALUES ("'.$input_voor.'", "'.$input_achter.'", "'.$input_datum.'" , "'.$input_url.'")';
$result = $conn->query($sql);


if ($result === TRUE) {
  header('Location: index.php');
}
else{
  echo"error";
}

?>
