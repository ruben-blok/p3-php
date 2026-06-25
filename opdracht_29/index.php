<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "p3_games";

try {
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $pdo->prepare("SELECT * FROM games");
    $stmt->execute();
    $games = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Fout: " . $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Games Lijst</title>
</head>
<body>
    <h1>Games</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Titel</th>
            <th>Prijs</th>
            <th>Release jaar</th>
            <th>Actie</th>
        </tr>
        <?php foreach ($games as $game): ?>
        <tr>
            <td><?= $game['id'] ?></td>
            <td><?= $game['title'] ?></td>
            <td><?= $game['price'] ?></td>
            <td><?= $game['release_year'] ?></td>
            <td><a href="delete.php?id=<?= $game['id'] ?>">Verwijderen</a></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
