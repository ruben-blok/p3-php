<?php
session_start();
$_SESSION['kleur'] = 'lila';
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Sessie Test</title>
</head>
<body>
    <h1>Mijn opgeslagen waarde is: <?php echo $_SESSION['kleur']; ?></h1>
</body>
</html>
