<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "p3_games";

try {
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $id = 1;

    $stmt = $pdo->prepare("DELETE FROM games WHERE id = ?");
    $stmt->execute([$id]);

    echo "Record succesvol verwijderd!";
} catch (PDOException $e) {
    echo "Fout: " . $e->getMessage();
}
?>
