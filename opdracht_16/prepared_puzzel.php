<?php
require_once '../hoofdopdracht/includes/db.php';

$titel = "Test item";
$omschrijving = "Dit is een test.";

$sql = "INSERT INTO items (titel, omschrijving) VALUES (:titel, :omschrijving)";
$stmt = $pdo->prepare($sql);

$stmt->execute([
    ":titel" => $titel,
    ":omschrijving" => $omschrijving
]);

echo "Insert gelukt (als je geen error ziet).";
