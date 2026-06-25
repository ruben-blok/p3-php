<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "p3_games";

try {
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $id = $_GET['id'];

    $stmt = $pdo->prepare("DELETE FROM games WHERE id = ?");
    $stmt->execute([$id]);

    header("Location: index.php");
    exit;
} catch (PDOException $e) {
    echo "Fout: " . $e->getMessage();
}
?>
