<?php

require_once "includes/db.php";

$appNaam = "GameVault";
$trackerType = "Game tracker";
$tagline = "Level up your gaming journey.";

$stmt = $pdo->prepare("SELECT * FROM games");
$stmt->execute();
$items = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $appNaam ?></title>
</head>
<body>
    <h1>Hoi, welkom bij <?= $appNaam ?></h1>
    <p><?= $tagline ?></p>
    <p>Wat je trackt: <?= $trackerType ?></p>

    <h2>Mijn Games</h2>

    <?php if (count($items) > 0): ?>
        <ul>
            <?php foreach ($items as $item): ?>
                <li><?= htmlspecialchars($item['title']) ?> - &euro;<?= htmlspecialchars($item['price']) ?> (<?= htmlspecialchars($item['release_year']) ?>)</li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>Er zijn nog geen items toegevoegd.</p>
    <?php endif; ?>
    
    <footer>
        <p>&copy; <?= date("Y") ?> <?= $appNaam ?></p>
    </footer>
</body>
</html>
