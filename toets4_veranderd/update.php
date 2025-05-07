<?php
require_once "dbconnection.php";

if (!empty($_POST['Edit'])) { // Fetch data
    $input_id = $_POST['id'];
    $sql = "SELECT voornaam, achternaam, geboortedatum, foto_url FROM `voetballers` WHERE id='$input_id'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
       while($row = $result->fetch_assoc()){
        $input_voor = $row['voornaam'];
        $input_achter = $row['achternaam'];
        $input_datum = $row['geboortedatum'];
        $input_url = $row['foto_url'];
       }
    } 
}


$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div id="wrapper">
            <nav>
                <a class="active" href="index.php">Home</a>
                <a class="not_active" href="toevoegen.html">Toevoegen</a>
                <a class="not_active" href="herstel.php">Herstellen</a>
            </nav>
            <h1>Onze helden van 1974!</h1>
    <div class="border">
<form action="update1.php" method="POST">
    <input type="hidden" name="id" value="<?= $input_id ?>"> <br>
    <label >Voornaam</label><br>
    <input class="rechts" type='text' name='voornaam' value='<?= $input_voor ?>'><br>
    <label >Achternaam<label><br>
    <input class="rechts" type="text" name="achternaam" value='<?= $input_achter ?>'><br>
    <label >Geboortedatum<label><br>
    <input class="rechts" type="date" name="geboortedatum" value='<?= $input_datum?>' ><br>
    <label > Foto_id</lable><br>
    <input class="rechts" type="text" name="foto_url" value='<?= $input_url?>'><br>
    <input class="benden" type="submit" name="Update" value="Update">
</form>
</div>
</body>
</html>