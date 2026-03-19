<?php

// Mijn mini-app wordt een: Game tracker

$appNaam = "GameVault";
$trackerType = "Game tracker";
$tagline = "Level up your gaming journey.";
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
    
    <footer>
        <p>&copy; <?= date("Y") ?> <?= $appNaam ?></p>
    </footer>
</body>
</html>
