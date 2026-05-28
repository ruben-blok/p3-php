<?php
$pdo = new PDO('mysql:host=localhost;dbname=p3_games', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $titel = $_POST['titel'];
    $stmt = $pdo->prepare('INSERT INTO games (title, price, release_year) VALUES (:title, 0, 0)');
    $stmt->execute(['title' => $titel]);
    header('Location: refresh_test.php');
    exit;
}

$stmt = $pdo->query('SELECT title FROM games');
$games = $stmt->fetchAll(PDO::FETCH_COLUMN);
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Refresh Test</title>
</head>
<body>
    <h1>Refresh Test</h1>
    <form method="post">
        <label for="titel">Titel:</label>
        <input type="text" name="titel" id="titel" required>
        <button type="submit">Verstuur</button>
    </form>
    <h2>Games in database:</h2>
    <ul>
        <?php foreach ($games as $game): ?>
            <li><?= htmlspecialchars($game) ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
