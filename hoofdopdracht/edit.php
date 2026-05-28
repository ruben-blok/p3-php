<?php
session_start();
include "includes/header.php";
include "includes/nav.php";
include "includes/db.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $stmt = $pdo->prepare("SELECT * FROM games WHERE id = ?");
    $stmt->execute([$id]);
    $item = $stmt->fetch(PDO::FETCH_ASSOC);
} else {
    $item = null;
}
?>

<h1>Game Bewerken</h1>

<?php if ($item): ?>
    <form method="POST" action="">
        <div>
            <label for="title">Titel:</label>
            <input type="text" id="title" name="title" value="<?= htmlspecialchars($item['title']) ?>">
        </div>
        <div>
            <label for="price">Prijs (&euro;):</label>
            <input type="number" id="price" name="price" value="<?= htmlspecialchars($item['price']) ?>">
        </div>
        <div>
            <label for="release_year">Release jaar:</label>
            <input type="number" id="release_year" name="release_year" value="<?= htmlspecialchars($item['release_year']) ?>">
        </div>
        <div>
            <button type="submit">Opslaan</button>
        </div>
    </form>
<?php else: ?>
    <p>Item niet gevonden.</p>
<?php endif; ?>

<?php include "includes/footer.php"; ?>
