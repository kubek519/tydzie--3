<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 2</title>
</head>
<body>
    <a href="index2.php">
        <button>Zadanie 3</button>
    </a>

    <a href="index3.php">
        <button>Zadanie 5</button>
    </a>
</body>
</html>

<?php
    
   
$user = "root";
$host = "localhost";
$pass = "";
$db = "uczniowie 2c";

$conn = new mysqli($host, $user, $pass, $db);


$sql = "SELECT id, imie, nazwisko, ocena, wiek FROM uczniowie";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
   
    while($row = $result->fetch_assoc()) {
        echo '<div style="border: 2px dotted black; margin: 10px; padding: 10px;">';
        echo '<p>Imię: ' . $row["imie"] . '</p>';
        echo '<p>Nazwisko: ' . $row["nazwisko"] . '</p>';
        echo '<p>Ocena: ' . $row["ocena"] . '</p>';
        echo '<p>Wiek: ' . $row["wiek"] . '</p>';
        echo '<p>ID: ' . $row["id"] . '</p>';
        echo '</div>';
    }
} else {
    echo "Brak danych do wyświetlenia";
}

$conn->close();


?>



