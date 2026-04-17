<?php session_start(); ?>
<?php include "../includes/header.php"; ?>
<?php include "../includes/nav.php"; ?>
<?php include "../includes/db.php"; ?>

<?php
$stmt = $pdo->prepare("SELECT * FROM games");
$stmt->execute();
$games = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<h1>Mijn Games</h1>

<?php if (isset($_SESSION['success'])): ?>
    <div style="color: green; margin-bottom: 15px; padding: 10px; border: 1px solid green;">
        <?= htmlspecialchars($_SESSION['success']) ?>
    </div>
    <?php unset($_SESSION['success']); ?>
<?php endif; ?>

<?php if (isset($_SESSION['error'])): ?>
    <div style="color: red; margin-bottom: 15px; padding: 10px; border: 1px solid red;">
        <?= htmlspecialchars($_SESSION['error']) ?>
    </div>
    <?php unset($_SESSION['error']); ?>
<?php endif; ?>

<?php if (count($games) > 0): ?>
<ul>
<?php foreach ($games as $game): ?>
    <li>
        <strong><?= $game["title"] ?></strong> - &euro;<?= $game["price"] ?> (<?= $game["release_year"] ?>)
    </li>
<?php endforeach; ?>
</ul>
<?php else: ?>
    <p>Er zijn nog geen games toegevoegd.</p>
<?php endif; ?>

<?php include "../includes/footer.php"; ?>
