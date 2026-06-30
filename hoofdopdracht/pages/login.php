<?php session_start(); ?>
<?php include "../includes/header.php"; ?>
<?php include "../includes/nav.php"; ?>
<?php include "../includes/db.php"; ?>

<?php
$bericht = "";
$berichtKleur = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = trim($_POST["username"] ?? "");
    $password = $_POST["password"] ?? "";

    $stmt = $pdo->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->execute([$username]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user'] = $user['username'];
        header("Location: home.php");
        exit;
    } else {
        $bericht = "Foutief gebruikersnaam of wachtwoord.";
        $berichtKleur = "red";
    }
}
?>

<h1>Inloggen</h1>

<?php if ($bericht !== ""): ?>
    <p style="color: <?= $berichtKleur ?>;"><?= htmlspecialchars($bericht) ?></p>
<?php endif; ?>

<form method="POST">
    <label for="username">Gebruikersnaam:</label><br>
    <input type="text" id="username" name="username"><br><br>
    <label for="password">Wachtwoord:</label><br>
    <input type="password" id="password" name="password"><br><br>
    <button type="submit">Inloggen</button>
</form>

<?php include "../includes/footer.php"; ?>
