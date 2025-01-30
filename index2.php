<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styl.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 3</title>
</head>
<body>
    <a href="index3.php">
        <button>zadanie 5</button>
    </a>
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

$sql = "INSERT INTO uczniowie (imie, nazwisko, ocena, wiek, id) VALUES ('$imie', '$nazwisko', '$ocena', '$wiek', '$id')";


if (mysqli_query($con, $sql)){
    echo "dodany rekord";
}
else{
    echo"błąd";
}




mysqli_close($con);



?>
