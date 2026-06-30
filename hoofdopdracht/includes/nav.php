<?php $ingelogd = isset($_SESSION['user']); ?>
<nav>
    <a href="home.php">Home</a>
    <?php if ($ingelogd): ?>
        <a href="toevoegen.php">Toevoegen</a>
    <?php endif; ?>
    <?php if ($ingelogd): ?>
        <a href="../logout.php">Uitloggen (<?= htmlspecialchars($_SESSION['user']) ?>)</a>
    <?php else: ?>
        <a href="login.php">Inloggen</a>
        <a href="register.php">Registreren</a>
    <?php endif; ?>
</nav>
