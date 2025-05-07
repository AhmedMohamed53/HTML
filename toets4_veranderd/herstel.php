<?php
require_once "dbconnection.php";

if (!isset($_POST['submit'])) {
    $input_voor = $_POST['voornaam'];
    $input_achter = $_POST['achternaam'];
    $input_datum = $_POST['geboortedatum'];
    $input_url = $_POST['foto_url'];
}

$sql1 = 'DELETE FROM voetbal';
$result1 = $conn->query($sql1);

$sql = "INSERT INTO voetbal (voornaam, achternaam, geboortedatum, foto_url) VALUES
    ('Jan', 'Jongbloed', '1940-11-25',  'Jan_Jongbloed.jpg' ),
    ('Wim', 'Suurbier', '1945-01-16', 'Wim_Suurbier.jpg'),
    ('Ruud', 'Krol', '1949-03-24', 'Ruud_Krol.jpg'),
    ('Wim', 'Rijsbergen', '1952-01-18', 'Wim_Rijsbergen.jpg'),
    ('Arie', 'Haan', '1948-11-16', 'Arie_Haan.jpg'),
    ('Theo', 'de Jong', '1947-08-11', 'Theo_de_Jong.jpg'),
    ('Johan', 'Neeskens', '1951-09-15', 'Johan_Neeskens.jpg'),
    ('Wim', 'van Hanegem', '1944-02-20', 'Wim_van_Hanegem.jpg'),
    ('Johan', 'Cruijff', '1947-04-25', 'Johan_Cruijff.jpg'),
    ('Johnny', 'Rep', '1951-11-25', 'Johnny_Rep.jpg'),
    ('Rob', 'Rensenbrink', '1947-07-03', 'Rob_Rensenbrink.jpg')";
$result = $conn->query($sql);


if ($result === TRUE) {
    header('index: index.php');
        } else {
            echo "error";
        }

            ?>