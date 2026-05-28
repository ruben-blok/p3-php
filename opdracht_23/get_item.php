<?php
require_once "../hoofdopdracht/includes/db.php";

$id = filter_input(INPUT_GET, "id", FILTER_VALIDATE_INT);
$item = null;
$error = "";

if ($id === null || $id === false) {
    $error = "Geen geldig ID opgegeven.";
} else {
    try {
        $stmt = $pdo->prepare("SELECT * FROM items WHERE id = ?");
        $stmt->execute([$id]);
        $item = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$item) {
            $error = "Item niet gevonden.";
        }
    } catch (PDOException $e) {
        $error = "Kon het item niet ophalen.";
    }
}
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Item ophalen</title>
</head>
<body>
    <h1>Item</h1>

    <?php if ($error !== ""): ?>
        <p><?= htmlspecialchars($error) ?></p>
    <?php else: ?>
        <h2><?= htmlspecialchars($item["titel"] ?? "") ?></h2>
        <p><?= htmlspecialchars($item["omschrijving"] ?? "") ?></p>
    <?php endif; ?>
</body>
</html>
