<?php include "../includes/header.php"; ?>
<?php include "../includes/nav.php"; ?>

<h1>Game Toevoegen</h1>

<form method="POST" action="verwerk.php">
    <div>
        <label for="title">Titel:</label>
        <input type="text" id="title" name="title" required>
    </div>
    <div>
        <label for="price">Prijs (&euro;):</label>
        <input type="number" id="price" name="price" min="0" required>
    </div>
    <div>
        <label for="release_year">Release jaar:</label>
        <input type="number" id="release_year" name="release_year" min="1950" max="2030" required>
    </div>
    <div>
        <button type="submit">Toevoegen</button>
    </div>
</form>

<?php include "../includes/footer.php"; ?>
