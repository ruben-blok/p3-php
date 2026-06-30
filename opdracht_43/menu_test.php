<?php
session_start();
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Menu Test</title>
</head>
<body>

<nav>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="games.php">Games</a></li>
        <?php if (isset($_SESSION['user'])): ?>
            <li><a href="profile.php">Profiel</a></li>
            <li><a href="logout.php">Uitloggen</a></li>
        <?php else: ?>
            <li><a href="login.php">Inloggen</a></li>
            <li><a href="register.php">Registreren</a></li>
        <?php endif; ?>
    </ul>
</nav>

<main>
    <?php
    if (isset($_SESSION['user'])) {
        echo "Ingelogd";
    } else {
        echo "Niet ingelogd";
    }
    ?>
</main>

</body>
</html>