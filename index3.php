<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styl.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pierwsze kroki</title>
</head>
<body>
<form method="post" action="skrypt.php">
    <input type="text" name="imie">
    <input type="text" name="nazwisko">
    <input type="number" name="ocena">
    <input type="number" name="wiek">
    <input type="number" name="id">
    <button type="submit">wyslij</button>
</form>
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