<?php
$id = isset($_GET['id']) ? htmlspecialchars($_GET['id']) : '';
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Get ID</title>
</head>
<body>
    <h1>Geselecteerd item: <?= $id !== '' ? $id : 'Geen ID opgegeven' ?></h1>
</body>
</html>
