<?php include "../includes/header.php"; ?>
<?php include "../includes/nav.php"; ?>

<h1>Mijn Games</h1>

<?php

$games = [
    [
        "titel" => "The Witcher 3",
        "platform" => "PC",
        "status" => "Bezig"
    ],
    [
        "titel" => "Zelda: Tears of the Kingdom",
        "platform" => "Switch",
        "status" => "Gelezen"
    ],
    [
        "titel" => "Elden Ring",
        "platform" => "PS5",
        "status" => "Nog te spelen"
    ]
];

?>

<ul>
<?php foreach ($games as $game): ?>
    <li>
        <strong><?= $game["titel"] ?></strong> - <?= $game["platform"] ?> (<?= $game["status"] ?>)
    </li>
<?php endforeach; ?>
</ul>

<?php include "../includes/footer.php"; ?>
