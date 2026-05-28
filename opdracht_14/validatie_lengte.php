<?php
$titel = "Test";

$titel = trim($titel);

$foutmelding = "";
$succes = false;

if ($titel === "" || strlen($titel) === 0) {
    $foutmelding = "Titel is verplicht.";
} elseif (strlen($titel) < 3) {
    $foutmelding = "Titel moet minimaal 3 tekens bevatten.";
} elseif (strlen($titel) > 50) {
    $foutmelding = "Titel mag maximaal 50 tekens bevatten.";
} else {
    $succes = true;
}
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validatie Lengte</title>
</head>
<body>
    <h1>Titel Validatie</h1>

    <?php if ($foutmelding !== ""): ?>
        <p style="color: red;"><?php echo $foutmelding; ?></p>
    <?php endif; ?>

    <?php if ($succes): ?>
        <p style="color: green;">Titel is geldig.</p>
    <?php endif; ?>
</body>
</html>
