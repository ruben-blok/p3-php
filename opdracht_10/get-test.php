<?php
if (isset($_GET['titel'])) {
    echo "<h2>Ingevoerde titel: " . htmlspecialchars($_GET['titel']) . "</h2>";
    echo "<h3>Volledige $_GET array:</h3>";
    echo "<pre>";
    print_r($_GET);
    echo "</pre>";
}
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>GET Test</title>
</head>
<body>
    <h1>GET formulier</h1>
    <form method="GET" action="">
        <label for="titel">Titel:</label>
        <input type="text" name="titel" id="titel">
        <button type="submit">Verzend</button>
    </form>
</body>
</html>
