<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "p3_games";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "SELECT title FROM games";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    $games = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Games</title>
</head>
<body>
    <h1>Games</h1>
    <?php if (!empty($games)): ?>
        <ul>
            <?php foreach ($games as $game): ?>
                <li><?= htmlspecialchars($game['title']) ?></li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>Er zijn nog geen games gevonden.</p>
    <?php endif; ?>
</body>
</html>
