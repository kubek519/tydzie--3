<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styl.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>zadanie 4</title>
</head>
<body>

</body>
</html>

<?php
$user = "root";
$host = "localhost";
$pass = "";
$db = "uczniowie 2c";

$imie = $_POST['imie'];
$nazwisko = $_POST['nazwisko'];
$ocena = $_POST['ocena'];
$wiek = $_POST['wiek'];
$id = $_POST['id'];


$con = mysqli_connect($host, $user, $pass, $db);

if(!$con){
    die("nie działa połączenie" . mysqli_connect_error());
}

$sql = "DELETE FROM uczniowie WHERE imie = $imie AND nazwisko = $nazwisko AND wiek = $wiek AND ocena = $ocena AND id = $id";






mysqli_close($con);



?>
