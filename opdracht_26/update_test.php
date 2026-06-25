<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "p3_games";

try {
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $titel = "Nieuwe titel";
    $id = 1;

    $stmt = $pdo->prepare("UPDATE games SET title = ? WHERE id = ?");
    $stmt->execute([$titel, $id]);

    echo "Record succesvol bijgewerkt!";
} catch (PDOException $e) {
    echo "Fout: " . $e->getMessage();
}
?>