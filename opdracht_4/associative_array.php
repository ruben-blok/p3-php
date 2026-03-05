<?php

$games = [
    [
        "titel" => "The Legend of Zelda: Breath of the Wild",
        "genre" => "Adventure",
        "platform" => "Nintendo Switch",
        "rating" => 9.5,
        "status" => "Voltooid"
    ],
    [
        "titel" => "Elden Ring",
        "genre" => "Action RPG",
        "platform" => "PC",
        "rating" => 9.0,
        "status" => "Bezig"
    ]
];

?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game Tracker</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
        }
        .game {
            border: 1px solid #ddd;
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 5px;
            background-color: #f9f9f9;
        }
        .game h2 {
            margin-top: 0;
        }
        .game-info {
            margin: 10px 0;
        }
        .label {
            font-weight: bold;
            color: #333;
        }
    </style>
</head>
<body>
    <h1>Mijn Game Tracker</h1>
    
    <?php foreach ($games as $game): ?>
        <div class="game">
            <h2><?= $game["titel"]; ?></h2>
            <div class="game-info">
                <span class="label">Genre:</span> <?= $game["genre"]; ?>
            </div>
            <div class="game-info">
                <span class="label">Platform:</span> <?= $game["platform"]; ?>
            </div>
            <div class="game-info">
                <span class="label">Rating:</span> <?= $game["rating"]; ?>/10
            </div>
            <div class="game-info">
                <span class="label">Status:</span> <?= $game["status"]; ?>
            </div>
        </div>
    <?php endforeach; ?>
</body>
</html>
