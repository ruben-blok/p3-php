<?php
if (isset($_POST['titel'])) {
    echo "<h2>Ingevoerde titel: " . htmlspecialchars($_POST['titel']) . "</h2>";
    echo "<h3>Volledige $_POST array:</h3>";
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
}
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>POST Test</title>
</head>
<body>
    <h1>POST formulier</h1>
    <form method="POST" action="">
        <label for="titel">Titel:</label>
        <input type="text" name="titel" id="titel">
        <button type="submit">Verzend</button>
    </form>
</body>
</html>
