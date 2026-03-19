<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Formulier verwerken</title>
</head>
<body>

<form method="POST" action="">
    <label for="naam">Naam:</label><br>
    <input type="text" id="naam" name="naam" required><br><br>

    <label for="aantal">Aantal:</label><br>
    <input type="number" id="aantal" name="aantal"><br><br>

    <button type="submit" name="verzend">Verstuur</button>
</form>

<?php
if (isset($_POST['verzend'])) {
    $naam = htmlspecialchars($_POST['naam']);
    $aantal = isset($_POST['aantal']) ? htmlspecialchars($_POST['aantal']) : 'Niet ingevuld';

    echo '<p>Naam: ' . $naam . '</p>';
    echo '<p>Aantal: ' . $aantal . '</p>';
}
?>

</body>
</html>
