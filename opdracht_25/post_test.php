<!DOCTYPE html>
<html>
<head>
    <title>POST Test</title>
</head>
<body>
    <form method="POST">
        <label for="titel">Titel:</label>
        <input type="text" name="titel" id="titel">
        <button type="submit">Verstuur</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        echo '<h2>Alle POST data:</h2>';
        print_r($_POST);
        echo '<h2>Titel waarde:</h2>';
        echo htmlspecialchars($_POST['titel'] ?? '');
    }
    ?>
</body>
</html>
