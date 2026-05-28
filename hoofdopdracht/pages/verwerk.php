<?php include "../includes/header.php"; ?>
<?php include "../includes/nav.php"; ?>

<?php if (isset($_POST["title"]) && isset($_POST["price"]) && isset($_POST["release_year"])): ?>

    <h1>Item succesvol ontvangen</h1>

    <p>Titel: <?= htmlspecialchars($_POST["title"]) ?></p>
    <p>Prijs: &euro;<?= htmlspecialchars($_POST["price"]) ?></p>
    <p>Release jaar: <?= htmlspecialchars($_POST["release_year"]) ?></p>

<?php else: ?>

    <h1>Fout</h1>
    <p>Er is geen geldige data ontvangen.</p>

<?php endif; ?>

<p>
    <a href="home.php">Terug naar Home</a> |
    <a href="toevoegen.php">Nieuw item toevoegen</a>
</p>

<?php include "../includes/footer.php"; ?>
